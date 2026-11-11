#!/usr/bin/env python3
"""Publish sanitized fhc2 command results to GitHub for ChatGPT review."""

from __future__ import annotations

import argparse
import json
import os
import re
import shutil
import subprocess
import tempfile
from datetime import datetime, timezone
from pathlib import Path

ROOT = Path(__file__).resolve().parents[1]
REPORT_DIR = ROOT / "reports" / "assistant-results"
HISTORY_DIR = REPORT_DIR / "history"
BACKUP_DIR = ROOT / ".gogit-backups"

MARKER = "##### SECTION RESULTS FOR ASSISTANT ######"
STEP_RE = re.compile(r"^[A-Z0-9][A-Z0-9_-]{2,95}$")
KEY_RE = re.compile(r"^[A-Z][A-Z0-9_]{0,63}$")
VALUE_RE = re.compile(r"^[\x20-\x7E]{0,240}$")
DENIED_KEY_PARTS = {
    "TOKEN", "SECRET", "PASSWORD", "PASSWD", "AUTH",
    "COOKIE", "CREDENTIAL", "API_KEY", "PRIVATE_KEY",
}
DENIED_VALUE_PATTERNS = (
    "-----BEGIN ", "ghp_", "github_pat_", "Bearer ",
    "refresh_token", "access_token", "client_secret",
)


class GogitError(RuntimeError):
    pass


def run(args: list[str], *, check: bool = True) -> subprocess.CompletedProcess[str]:
    result = subprocess.run(
        args,
        cwd=ROOT,
        text=True,
        capture_output=True,
        check=False,
        timeout=90,
    )
    if check and result.returncode != 0:
        detail = result.stderr.strip() or result.stdout.strip()
        raise GogitError(f"command failed: {args[0]}" + (f": {detail}" if detail else ""))
    return result


def git(*args: str) -> str:
    return run(["git", *args]).stdout.strip()


def ensure_git_ready() -> str:
    if git("branch", "--show-current") != "main":
        raise GogitError("GOGIT requires branch main")
    if git("status", "--porcelain"):
        raise GogitError("GOGIT requires a clean worktree")
    git("fetch", "--no-tags", "origin", "main")
    local = git("rev-parse", "HEAD")
    remote = git("rev-parse", "origin/main")
    if local != remote:
        raise GogitError("local main must equal origin/main before GOGIT")
    return local


def validate_step(step: str) -> str:
    if not STEP_RE.fullmatch(step):
        raise GogitError("invalid STEP_ID")
    return step


def validate_key(key: str) -> None:
    if not KEY_RE.fullmatch(key):
        raise GogitError(f"invalid result key: {key}")
    upper = key.upper()
    if any(part in upper for part in DENIED_KEY_PARTS):
        raise GogitError(f"sensitive result key rejected: {key}")


def validate_value(key: str, value: str) -> None:
    if not VALUE_RE.fullmatch(value):
        raise GogitError(f"unsafe result value for {key}")
    lowered = value.lower()
    for pattern in DENIED_VALUE_PATTERNS:
        if pattern.lower() in lowered:
            raise GogitError(f"sensitive-looking value rejected for {key}")


def parse_results(path: Path) -> dict[str, str]:
    if path.is_symlink() or not path.is_file():
        raise GogitError("input result file is missing or unsafe")
    lines = path.read_text(encoding="utf-8").splitlines()
    try:
        index = lines.index(MARKER)
    except ValueError as exc:
        raise GogitError("assistant results marker not found") from exc

    result: dict[str, str] = {}
    for raw in lines[index + 1 :]:
        line = raw.strip()
        if not line:
            continue
        if "=" not in line:
            raise GogitError("only KEY=VALUE records are allowed after the marker")
        key, value = line.split("=", 1)
        key, value = key.strip(), value.strip()
        validate_key(key)
        validate_value(key, value)
        if key in result:
            raise GogitError(f"duplicate result key: {key}")
        result[key] = value

    if not result:
        raise GogitError("no results found after marker")
    if len(result) > 50:
        raise GogitError("too many result fields")
    return result


def atomic_json(path: Path, data: dict) -> None:
    path.parent.mkdir(parents=True, exist_ok=True)
    fd, temporary = tempfile.mkstemp(prefix=f".{path.name}.", suffix=".tmp", dir=path.parent)
    try:
        with os.fdopen(fd, "w", encoding="utf-8") as handle:
            json.dump(data, handle, indent=2, sort_keys=True)
            handle.write("\n")
            handle.flush()
            os.fsync(handle.fileno())
        os.replace(temporary, path)
    finally:
        if os.path.exists(temporary):
            os.unlink(temporary)


def backup_latest(timestamp: str) -> Path | None:
    latest = REPORT_DIR / "latest.json"
    if not latest.exists():
        return None
    target_dir = BACKUP_DIR / timestamp
    target_dir.mkdir(parents=True, exist_ok=True)
    target = target_dir / "latest.json"
    shutil.copy2(latest, target)
    return target


def restore_latest(backup: Path | None) -> None:
    latest = REPORT_DIR / "latest.json"
    if backup is None:
        if latest.exists():
            latest.unlink()
        return
    latest.parent.mkdir(parents=True, exist_ok=True)
    shutil.copy2(backup, latest)


def publish(step: str, input_path: Path) -> None:
    source_commit = ensure_git_ready()
    step = validate_step(step)
    results = parse_results(input_path)
    history = HISTORY_DIR / f"{step}.json"
    if history.exists():
        raise GogitError("STEP_ID already published")

    timestamp = datetime.now(timezone.utc).strftime("%Y%m%dT%H%M%SZ")
    generated = datetime.now(timezone.utc).isoformat()
    backup = backup_latest(timestamp)
    payload = {
        "schema_version": 1,
        "step_id": step,
        "generated_at_utc": generated,
        "source_commit": source_commit,
        "results": results,
    }
    latest = REPORT_DIR / "latest.json"
    committed = False

    try:
        atomic_json(history, payload)
        atomic_json(latest, payload)
        git("add", "--", str(history.relative_to(ROOT)), str(latest.relative_to(ROOT)))
        staged = git("diff", "--cached", "--name-only").splitlines()
        expected = sorted([str(history.relative_to(ROOT)), str(latest.relative_to(ROOT))])
        if sorted(staged) != expected:
            raise GogitError("unexpected staged paths")
        git("commit", "-m", f"gogit: publish {step}")
        committed = True
        commit = git("rev-parse", "HEAD")
        pushed = run(["git", "push", "origin", "HEAD:main"], check=False)
        if pushed.returncode != 0:
            raise GogitError("push failed; local GOGIT commit preserved for inspection")
        remote = git("ls-remote", "origin", "refs/heads/main").split()
        if len(remote) != 2 or remote[0] != commit:
            raise GogitError("remote HEAD verification failed")
    except Exception:
        if committed:
            raise
        if git("diff", "--cached", "--name-only"):
            run(["git", "reset"], check=False)
        if history.exists():
            history.unlink()
        restore_latest(backup)
        raise

    print(MARKER)
    print("GOGIT=READY")
    print(f"STEP_ID={step}")
    print(f"REPORT={history.relative_to(ROOT).as_posix()}")
    print(f"COMMIT={commit}")
    print(f"RESULT_FIELDS={len(results)}")


def main() -> int:
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("--step", required=True)
    parser.add_argument("--input", required=True)
    args = parser.parse_args()
    try:
        publish(args.step, Path(args.input).resolve())
        return 0
    except (GogitError, OSError, subprocess.TimeoutExpired) as exc:
        print(MARKER)
        print("GOGIT=BLOCKED")
        print(f"ERROR={exc}")
        return 1


if __name__ == "__main__":
    raise SystemExit(main())
