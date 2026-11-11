# `GOGIT - KUZAI.ORG VPS command result publication`

## `Purpose`

GOGIT lets the KUZAI.ORG VPS publish sanitized command results to this GitHub repository so ChatGPT can read them directly without successful terminal output being copied manually.

```text
reviewed command on fhc2
  -> command writes sanitized KEY=VALUE results after the exact marker
  -> tools/gogit_publish.py validates the result file
  -> latest.json + immutable history report
  -> commit + push
  -> operator writes GOGIT in ChatGPT
  -> ChatGPT reads GitHub
```

## `Result format`

The input file must contain:

```text
##### SECTION RESULTS FOR ASSISTANT ######
STEP_STATUS=PASS
FFMPEG_PRESENT=1
FFMPEG_VERSION=7.1.1
PIPER_PRESENT=1
WORKTREE=CLEAN
```

Only `KEY=VALUE` records after the marker are published.

## `Security rules`

The repository is public.

GOGIT rejects keys containing sensitive terms including TOKEN, SECRET, PASSWORD, PASSWD, AUTH, COOKIE, CREDENTIAL, API_KEY and PRIVATE_KEY.

Values are restricted to a conservative printable character set and length.

This is a guardrail, not a substitute for operator discipline. Commands must never write secrets into the GOGIT input file.

## `Publication`

After the repository is cloned:

```bash
python3 tools/gogit_publish.py --step STEP-01-FHC2-AUDIT-001 --input work/step-01-results.txt
```

The script requires clean synchronized `main`, validates the report, backs up mutable latest data outside Git, writes latest + immutable history, commits only those reports, pushes without force and verifies remote HEAD.

After success, request `GOGIT` in ChatGPT.

## `Failure rule`

If GOGIT fails before publishing evidence, return the real local error for diagnosis. Do not invent a successful report and do not reuse an already published STEP_ID.

---

**`THE KUZ NETWORK - KUSANAGI8200 - @2026`**
