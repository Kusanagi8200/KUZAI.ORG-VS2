# KUZAI PUBLIC APPLICATION DEMO

## PURPOSE

The KUZAI public application demo provides a navigable representation of the private/local KUZAI AI interface without exposing the private AI runtime.

Public URL:

```text
https://kuzai.org/demo/
```

The demo is part of the KUZAI.ORG website repository and is not the private KUZAI AI application itself.

The private application is maintained in:

```text
https://github.com/Kusanagi8200/KUZAI-CHAT
```

## DESIGN PRINCIPLE

The demo must reproduce the structure and visual language of the real KUZAI interface while keeping execution boundaries explicit.

The browser may navigate screens and perform demo-only client-side interactions, but the public demo must not connect to the private AI runtime.

## DIRECTORY LAYOUT

```text
public/demo/
├── index.html
├── assets/
│   ├── css/
│   │   └── kuzai-app.css
│   ├── img/
│   └── js/
│       └── demo-git-rag.js
└── modules/
    ├── git-rag/
    │   └── index.html
    └── custom-llm/
        ├── index.html
        └── editor.html
```

## DEMO ROUTES

Main interface:

```text
/demo/
```

GIT-RAG:

```text
/demo/modules/git-rag/
```

Custom LLM profile manager:

```text
/demo/modules/custom-llm/
```

Custom LLM profile editor:

```text
/demo/modules/custom-llm/editor.html
```

## MAIN KUZAI DEMO

The main demo reproduces the KUZAI application shell and exposes navigation to the public demonstration modules.

Backend actions remain disabled.

The page must not submit prompts to llama.cpp, perform web search, upload files, generate TTS audio or expose internal runtime information.

## GIT-RAG DEMO

The GIT-RAG public demo uses a dedicated synthetic repository:

```text
KUZAI-DEMO-SANDBOX
```

The sandbox exists only for presentation.

Representative browser-side operations may include:

- repository selection;
- file listing;
- file viewing;
- demo-only text editing;
- SAVE and CANCEL behavior in browser memory;
- repository and file metadata presentation.

Real Git operations remain disabled in the public demo:

- STATUS;
- DIFF;
- PULL;
- COMMIT;
- PUSH;
- REINDEX against private infrastructure.

The demo must never receive private repository paths, SSH credentials, tokens or Git-RAG service endpoints.

## CUSTOM LLM DEMO

The Custom LLM demonstration reproduces the profile-management and profile-editor interfaces used by the local application.

The public demo may expose representative profile fields, checkboxes, select menus and JSON previews as browser-only UI behavior.

The demo must not:

- write profile JSON files to the server;
- activate a real profile in a private KUZAI session;
- call the private personality API;
- persist private state;
- expose server-side profile storage paths.

The real Custom LLM implementation remains in the private/local KUZAI application repository.

## SECURITY BOUNDARY

The demo must remain isolated from:

```text
llama.cpp
SearXNG
Piper TTS
private upload APIs
private profile APIs
private Git repositories
Git-RAG backend services
server-side credentials
internal runtime endpoints
```

No public demo page should require access to the private LAN or loopback-bound application services.

## NETWORK AND STORAGE REVIEW

Before deployment, review the demo source for accidental network access:

```bash
grep -RniE 'fetch[[:space:]]*\(|XMLHttpRequest|WebSocket|EventSource|127\.0\.0\.1|localhost' public/demo
```

Review persistent browser storage:

```bash
grep -RniE 'localStorage|sessionStorage|indexedDB' public/demo
```

A reload should reset browser-memory-only demo state unless a persistent behavior has been deliberately reviewed and documented.

## DEVELOPMENT RULES

1. Keep the public demo separate from private application APIs.
2. Reuse the KUZAI visual language without copying private runtime configuration.
3. Use synthetic data for public repository demonstrations.
4. Never add secrets, private hostnames, SSH configuration or credentials.
5. Keep backend actions disabled unless a dedicated public-safe backend is explicitly designed and reviewed.
6. Review network calls before every deployment.
7. Review browser persistence before every deployment.
8. Keep public demo navigation explicit and reversible with BACK HOME controls.
9. Validate every page over HTTPS after deployment.
10. Keep the public demo code independently removable without affecting the private KUZAI runtime.

## VALIDATION

Expected HTTP status for all public demo pages:

```text
200 OK
```

Example:

```bash
curl -I https://kuzai.org/demo/
curl -I https://kuzai.org/demo/modules/git-rag/
curl -I https://kuzai.org/demo/modules/custom-llm/
curl -I https://kuzai.org/demo/modules/custom-llm/editor.html
```

## RELATION TO THE PRIVATE APPLICATION

The demo is a presentation layer.

The real KUZAI application continues to use the private/local architecture documented in the KUZAI-CHAT repository, including llama.cpp, SearXNG, file processing, Piper TTS, Custom LLM profiles, Git-RAG and local runtime services.

The demo must not weaken that separation.
