# **`KUZAI.ORG`**

### **`KUZAI.ORG IS THE PRESENTATION, DEMONSTRATION AND CONTACT WEBSITE FOR THE KUZAI PROJECT`**

<picture>
 <source media="(prefers-color-scheme: dark)" srcset="https://github.com/Kusanagi8200/Kusanagi8200/blob/main/KUZAI-LLM3.png">
 <source media="(prefers-color-scheme: light)" srcset="https://github.com/Kusanagi8200/Kusanagi8200/blob/main/KUZAI-LLM3.png">
 <img alt="KUZAI" src="">
</picture>

## **`LIVE LINKS`**

- **Website:** https://kuzai.org/
- **Public application demo:** https://kuzai.org/demo/
- **Application demo presentation page:** https://kuzai.org/index.php?page=application-demo
- **KUZAI AI application repository:** https://github.com/Kusanagi8200/KUZAI-CHAT

## **`KUZAI PROJECT`**

#### **`KUZAI IS A LOCAL AI PROJECT DESIGNED TO RUN INDEPENDENTLY ON A LINUX INFRASTRUCTURE`**

The goal is to build an independent, open and locally controlled AI environment where the language model, web search, file processing, repository context, voice synthesis and application services run on infrastructure under operator control.

KUZAI is designed to reduce dependence on proprietary cloud platforms, keep data and processing local whenever possible, preserve privacy, and maintain full technical control over the AI stack from the Linux system to the user interface.

## **`KUZAI AI`**

#### **`KUZAI AI IS THE LOCAL APPLICATION DEVELOPED FOR THE PROJECT`**

The application provides a web interface for interacting with a locally hosted large language model and the services connected to the KUZAI infrastructure.

Current application integrations include:

- local LLM inference through **llama.cpp**;
- local web search through **SearXNG**;
- file upload and file-content analysis;
- local voice synthesis through **Piper TTS**;
- Custom LLM profiles and system-prompt control;
- **GIT-RAG** repository browsing, retrieval and controlled Git workflows;
- local runtime and service-status information.

## **`PUBLIC APPLICATION DEMO`**

A public frontend demonstration of the KUZAI interface is available at:

### **https://kuzai.org/demo/**

The demo is deliberately separated from the private local AI runtime.

Its purpose is to let visitors navigate the KUZAI interface and inspect representative modules without exposing the private model endpoint, local repositories, internal services, credentials or server-side application state.

The public demo currently includes:

- the main KUZAI application interface;
- a **GIT-RAG** demonstration workspace;
- a dedicated browser-memory-only repository sandbox;
- a **Custom LLM** profile interface;
- a Custom LLM profile editor demonstration;
- the same KUZAI visual system used by the local application.

Demo-specific code lives under:

```text
public/demo/
├── index.html
├── assets/
│   ├── css/
│   ├── img/
│   └── js/
└── modules/
    ├── git-rag/
    └── custom-llm/
```

The public demo must remain frontend-only. Backend inference, file upload, local search, TTS, private Git repositories and internal APIs are not exposed through the demo.

See [DEMO.md](DEMO.md) for the demo architecture, safety model and development rules.

## **`KUZAI AI FEATURES`**

- **LOCAL AI CHAT WITH LOCAL LLM INFERENCE**
- **LLAMA.CPP MODEL SERVER INTEGRATION**
- **LOCAL WEB SEARCH THROUGH SEARXNG**
- **WEB RESULT INJECTION INTO AI CONTEXT**
- **FILE UPLOAD AND FILE CONTENT ANALYSIS**
- **LOCAL TEXT-TO-SPEECH VOICE SYNTHESIS**
- **MANUAL AND AUTOMATIC VOICE PLAYBACK**
- **CUSTOM SYSTEM PROMPTS AND CUSTOM LLM PROFILES**
- **GIT-RAG REPOSITORY CONTEXT AND REPOSITORY MANAGEMENT**
- **LOCAL SERVICE STATUS AND HEALTH CHECKS**
- **MODULAR INTEGRATION OF LOCAL AI SERVICES**
- **PRIVATE LOCAL PROCESSING OF USER DATA AND FILES**
- **PUBLIC FRONTEND-ONLY APPLICATION DEMO**

#### **THE PRIVATE APPLICATION AND THE PUBLIC DEMONSTRATION ARE SEPARATE DEPLOYMENT SURFACES.**

## **`THIS REPOSITORY`**

#### **`THIS REPOSITORY CONTAINS THE SOURCE CODE OF THE KUZAI.ORG WEBSITE AND PUBLIC KUZAI APPLICATION DEMO`**

The repository is used to:

- present the KUZAI project;
- provide the KUZAI.ORG public website;
- expose the frontend-only public application demo;
- document the public demo architecture and deployment;
- provide project and contact information.

The private/local KUZAI AI application is maintained separately in:

**https://github.com/Kusanagi8200/KUZAI-CHAT**

## **`DEPLOYMENT`**

Production deployment documentation is available in [DEPLOY.md](DEPLOY.md).

The production server treats GitHub as the source of truth. Normal deployment is performed by synchronizing the server with the validated `main` branch using a fast-forward-only pull.

---

#### **`THE KUZ NETWORK - KUSANAGI8200 - @2026`**
