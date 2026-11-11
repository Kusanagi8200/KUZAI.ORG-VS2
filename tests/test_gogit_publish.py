#!/usr/bin/env python3

import importlib.util
import tempfile
import unittest
from pathlib import Path


ROOT = Path(__file__).resolve().parents[1]
MODULE_PATH = ROOT / "tools" / "gogit_publish.py"

spec = importlib.util.spec_from_file_location("gogit_publish", MODULE_PATH)
gogit = importlib.util.module_from_spec(spec)
assert spec.loader is not None
spec.loader.exec_module(gogit)


class GogitValidationTests(unittest.TestCase):
    def test_accepts_expected_audit_values(self):
        samples = {
            "STEP_STATUS": "PASS",
            "FFMPEG_VERSION_LINE": "ffmpeg version 6.1.1-3ubuntu5",
            "PIPER_PATH": "/opt/piper/piper",
            "OS_PRETTY": "Ubuntu 24.04.4 LTS",
            "WORKTREE": "CLEAN",
        }
        for key, value in samples.items():
            gogit.validate_key(key)
            gogit.validate_value(key, value)

    def test_rejects_sensitive_key(self):
        with self.assertRaises(gogit.GogitError):
            gogit.validate_key("ACCESS_TOKEN")

    def test_rejects_sensitive_value(self):
        with self.assertRaises(gogit.GogitError):
            gogit.validate_value("RESULT", "Bearer abcdef")

    def test_rejects_non_ascii_value(self):
        with self.assertRaises(gogit.GogitError):
            gogit.validate_value("RESULT", "résultat")

    def test_parses_marker_results(self):
        with tempfile.TemporaryDirectory() as tmp:
            path = Path(tmp) / "results.txt"
            path.write_text(
                "ignored before marker\n"
                + gogit.MARKER
                + "\nSTEP_STATUS=PASS\nFFMPEG_PRESENT=1\n",
                encoding="utf-8",
            )
            result = gogit.parse_results(path)
            self.assertEqual(result["STEP_STATUS"], "PASS")
            self.assertEqual(result["FFMPEG_PRESENT"], "1")


if __name__ == "__main__":
    unittest.main()
