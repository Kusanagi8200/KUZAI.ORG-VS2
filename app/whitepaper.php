<?php

declare(strict_types=1);

return [
    'intro' => "KUZAI AI is a self-hosted local artificial intelligence control layer designed to keep models, prompts, files, repositories, voice generation, search workflows, and runtime services under the direct control of the operator.",

    'statement' => "LOCAL AI IS NOT JUST ABOUT RUNNING A MODEL. IT IS ABOUT OWNING THE FULL STACK.",

    'meta' => [
        [
            'label' => 'PROJECT',
            'value' => 'KUZAI AI',
        ],
        [
            'label' => 'ECOSYSTEM',
            'value' => 'KUZ NETWORK',
        ],
        [
            'label' => 'STATUS',
            'value' => 'BETA-0.01.2026',
        ],
        [
            'label' => 'DEPLOYMENT',
            'value' => 'LOCAL / SELF-HOSTED / MODULAR',
        ],
        [
            'label' => 'INFERENCE',
            'value' => 'LOCAL LLAMA.CPP RUNTIME',
        ],
        [
            'label' => 'WEB SEARCH',
            'value' => 'LOCAL SEARXNG SERVICE',
        ],
        [
            'label' => 'VOICE',
            'value' => 'PIPER TTS / ESPEAK FALLBACK',
        ],
        [
            'label' => 'DIRECTION',
            'value' => 'OPEN SOURCE / PRIVATE RUNTIME',
        ],
    ],

    'sections' => [
        [
            'id' => 'executive-summary',
            'title' => '1. EXECUTIVE SUMMARY',
            'paragraphs' => [
                "KUZAI AI is a local AI application and control layer that connects a browser interface to locally operated language models and supporting services.",
                "The project does not define local AI as a model running behind a basic chat interface. It treats local AI as a complete technical chain including inference, prompt control, file processing, web-assisted research, voice synthesis, repository retrieval, storage, runtime supervision, and user controls.",
                "The system is designed around open, auditable, reproducible, and replaceable components. Its current architecture combines Linux, Apache2, PHP, JavaScript, llama.cpp, SearXNG, Piper TTS, eSpeak NG, local storage, Git, and systemd-managed services.",
                "KUZAI AI is intended for developers, technical operators, researchers, small organizations, private infrastructures, and users who require greater control over their AI environment.",
            ],
        ],

        [
            'id' => 'project-position',
            'title' => '2. PROJECT POSITION',
            'paragraphs' => [
                "Most commercial AI services centralize the model, application logic, pricing, data flow, feature set, and infrastructure inside an external platform.",
                "Running inference locally removes part of that dependency, but inference alone does not create a complete usable AI system. A practical local platform also requires an interface, file ingestion, search, speech, retrieval, prompt management, storage, service monitoring, and operational controls.",
                "KUZAI AI provides this application layer while preserving the ability to replace individual components as the local AI ecosystem evolves.",
            ],
            'quote' => "The operator must remain in control of the model, the prompt, the files, the runtime, the services, and the evolution of the system.",
        ],

        [
            'id' => 'objectives',
            'title' => '3. CORE OBJECTIVES',
            'items' => [
                "Run language-model inference on infrastructure controlled by the operator.",
                "Keep prompts, uploaded files, repository content, profiles, and generated data inside the local environment whenever possible.",
                "Use modular components that can be replaced without rebuilding the complete application.",
                "Expose system behavior through conventional source code, APIs, configuration files, services, and logs.",
                "Avoid mandatory dependence on a single cloud provider, model vendor, API, or subscription.",
                "Allow the platform to evolve progressively through optional modules.",
                "Support reproducible deployments and transparent infrastructure management.",
            ],
        ],

        [
            'id' => 'architecture',
            'title' => '4. SYSTEM ARCHITECTURE',
            'paragraphs' => [
                "KUZAI AI uses a browser-based frontend, a PHP application layer, and a local OpenAI-compatible inference endpoint provided by llama.cpp.",
                "Optional services extend the local model with web results, uploaded documents, repository context, and local speech generation.",
            ],
            'code' => <<<'ARCHITECTURE'
[ USER / BROWSER ]
        |
        v
[ KUZAI WEB INTERFACE ]
  HTML / CSS / JAVASCRIPT
        |
        v
[ APACHE2 / PHP API LAYER ]
        |
        +-----------------------------+
        |                             |
        v                             v
[ LLAMA.CPP SERVER ]          [ FILE PROCESSING ]
[ LOCAL OPEN MODEL ]          [ LOCAL STORAGE ]
        |
        +-----------------------------+
        |                             |
        v                             v
[ SEARXNG WEB SEARCH ]         [ GIT-RAG SERVICE ]
        |
        +-----------------------------+
        |
        v
[ GENERATED RESPONSE ]
        |
        +-----------------------------+
                                      |
                                      v
                             [ PIPER LOCAL TTS ]
                             [ ESPEAK FALLBACK ]
ARCHITECTURE,
        ],

        [
            'id' => 'capabilities',
            'title' => '5. CORE CAPABILITIES',
            'features' => [
                [
                    'title' => 'LOCAL AI CHAT',
                    'text' => "Browser-based conversation with locally generated responses, configurable model parameters, conversation context, generation interruption, session clearing, and dynamic response rendering.",
                ],
                [
                    'title' => 'LOCAL MODEL RUNTIME',
                    'text' => "OpenAI-compatible local inference through llama.cpp with support for replaceable GGUF models selected according to hardware, language, context, performance, and licensing requirements.",
                ],
                [
                    'title' => 'FILE ANALYSIS',
                    'text' => "Server-side upload and extraction for source code, text, logs, JSON, CSV, configuration files, scripts, markup, and other technical documents.",
                ],
                [
                    'title' => 'LOCAL WEB SEARCH',
                    'text' => "Locally hosted SearXNG search with controlled result extraction, source URLs, contextual prompt injection, and optional automatic search before generation.",
                ],
                [
                    'title' => 'SOURCE-AWARE ANSWERS',
                    'text' => "Search results can be transformed into structured model context so that web-assisted answers can include the original source URLs.",
                ],
                [
                    'title' => 'LOCAL VOICE SYNTHESIS',
                    'text' => "Piper neural text-to-speech generation with browser playback, manual speech controls, automatic voice mode, WAV output, and eSpeak NG fallback.",
                ],
                [
                    'title' => 'SPEECH TEXT CLEANING',
                    'text' => "Displayed technical answers remain complete while code blocks, URLs, commands, paths, and source lists can be removed from the spoken version.",
                ],
                [
                    'title' => 'CUSTOM LLM PROFILES',
                    'text' => "Profile creation, editing, JSON preview, storage, activation, runtime selection, listing, and deletion for specialized assistant behavior.",
                ],
                [
                    'title' => 'CUSTOM SYSTEM PROMPT',
                    'text' => "Direct control over assistant identity, language, formatting, technical depth, task boundaries, response style, and domain-specific behavior.",
                ],
                [
                    'title' => 'GIT-RAG',
                    'text' => "Optional local repository retrieval with repository selection, file inventory, text and binary classification, readiness status, and contextual source-code queries.",
                ],
                [
                    'title' => 'RUNTIME STATUS',
                    'text' => "Application, model, service, endpoint, and health information exposed through local APIs and standard Linux diagnostic tools.",
                ],
                [
                    'title' => 'LOCAL STORAGE',
                    'text' => "Uploaded files, profiles, generated voice files, repository metadata, and application state remain on operator-controlled storage.",
                ],
            ],
        ],

        [
            'id' => 'local-chat',
            'title' => '6. LOCAL CHAT AND MODEL CONTROL',
            'paragraphs' => [
                "The chat API assembles the system prompt, conversation history, user input, uploaded file context, web results, active profile data, and optional repository context before sending the request to the local model.",
                "The use of an OpenAI-compatible API reduces coupling between the interface and the model runtime. The operator can replace the active model without redesigning the browser application, provided the selected runtime remains compatible.",
                "Model selection can therefore be based on available VRAM, system RAM, CPU performance, target language, coding ability, reasoning quality, context length, quantization level, and licensing.",
            ],
            'items' => [
                "SEND starts a local generation request.",
                "STOP interrupts the active browser request.",
                "CLEAR resets the visible conversation state.",
                "Conversation context can be limited to control prompt size.",
                "Runtime parameters can be adjusted independently of the interface.",
                "The model endpoint can remain bound to loopback or a private network.",
            ],
        ],

        [
            'id' => 'file-analysis',
            'title' => '7. FILE UPLOAD AND ANALYSIS',
            'paragraphs' => [
                "The upload module validates each file, checks its size and extension, extracts supported textual content, normalizes the result, applies configured length limits, and stores local metadata.",
                "The uploaded content is then referenced by the chat request and injected as user-provided context.",
                "This enables technical analysis without transferring the source document to a remote inference provider.",
            ],
            'items' => [
                "Source-code review and debugging.",
                "Linux and application log analysis.",
                "Configuration and service-file inspection.",
                "JSON, YAML, XML, CSV, and structured-text examination.",
                "Shell-script and automation review.",
                "Technical-document summarization.",
                "Incident and troubleshooting context injection.",
            ],
        ],

        [
            'id' => 'web-search',
            'title' => '8. WEB SEARCH AND SOURCE CONTEXT',
            'paragraphs' => [
                "A local language model cannot independently retrieve current information. KUZAI AI uses a locally hosted SearXNG instance to provide controlled web-assisted research.",
                "The search API receives the query, requests results from SearXNG, extracts titles, URLs, summaries, and engine information, then injects the selected results into the local model context.",
                "Final answer generation remains local, even when external search engines are used to retrieve current information.",
                "Web mode is explicit. When disabled, generation uses only local model knowledge and locally available context. When enabled, the application can run search automatically before sending the final prompt.",
            ],
            'code' => <<<'SEARCH'
USER QUERY
    |
    v
KUZAI WEB SEARCH API
    |
    v
LOCAL SEARXNG INSTANCE
    |
    v
RESULT FILTERING AND SOURCE EXTRACTION
    |
    v
CONTEXT INJECTION
    |
    v
LOCAL MODEL GENERATION
SEARCH,
        ],

        [
            'id' => 'voice',
            'title' => '9. LOCAL VOICE SYNTHESIS',
            'paragraphs' => [
                "KUZAI AI includes a local speech pipeline that converts assistant responses into WAV audio without using a remote text-to-speech provider.",
                "Piper is used as the primary neural TTS engine. eSpeak NG remains available as a fallback when Piper cannot generate a valid audio file.",
                "The browser can request speech manually or play assistant answers automatically when voice mode is enabled.",
            ],
            'items' => [
                "Manual SPEAK control for assistant responses.",
                "Automatic VOICE ON and VOICE OFF modes.",
                "STOP AUDIO playback control.",
                "Local WAV generation and delivery.",
                "Unique audio identifiers.",
                "Temporary audio-file cleanup.",
                "Text normalization before synthesis.",
                "Removal of commands, URLs, code blocks, and technical noise from spoken text.",
            ],
        ],

        [
            'id' => 'profiles',
            'title' => '10. CUSTOM PROFILES AND SYSTEM PROMPTS',
            'paragraphs' => [
                "Custom profiles provide task-specific model behavior without modifying or retraining the model weights.",
                "Each profile can define a dedicated system prompt, operational role, expected tone, formatting rules, language, technical depth, and response constraints.",
                "The selected profile is activated as an explicit runtime layer and injected into the request sent to the local model.",
            ],
            'items' => [
                "Profile editor.",
                "JSON profile preview.",
                "Profile save and update workflow.",
                "Server-side profile list.",
                "Profile deletion.",
                "Session-level active profile.",
                "Runtime prompt injection.",
                "Specialized Linux, development, security, writing, support, or research assistants.",
            ],
        ],

        [
            'id' => 'git-rag',
            'title' => '11. GIT-RAG REPOSITORY ANALYSIS',
            'paragraphs' => [
                "Git-RAG is an optional local retrieval module designed to connect the assistant to source repositories cloned on the controlled infrastructure.",
                "The module can expose repository selection, active branch information, repository readiness, file lists, file sizes, and text or binary classification.",
                "Retrieved repository content can be injected into the chat context so that the model answers questions using the selected codebase rather than relying only on its training data.",
                "Git-RAG is designed as an independent local microservice. The main KUZAI AI application remains operational when the retrieval service is unavailable.",
                "Embedding strategy, indexing quality, branch management, repository synchronization, and source attribution remain active development areas.",
            ],
            'items' => [
                "Public and private local repositories.",
                "SSH-based repository access.",
                "Repository file inventory.",
                "Code, Markdown, text, JSON, YAML, configuration, and log indexing.",
                "Single active repository context.",
                "Local query API.",
                "Optional repository status and pull operations.",
                "Future commit and push workflow integration.",
            ],
        ],

        [
            'id' => 'runtime',
            'title' => '12. RUNTIME AND SERVICE CONTROL',
            'paragraphs' => [
                "KUZAI AI exposes local status information for the application, configured model, active model, inference server, PHP runtime, and supporting services.",
                "The infrastructure uses systemd for service supervision, automatic restart, startup management, status inspection, and journal-based diagnostics.",
            ],
            'items' => [
                "llama.cpp health and model checks.",
                "SearXNG service verification.",
                "Piper and TTS validation.",
                "PHP syntax checking.",
                "Apache configuration testing.",
                "HTTP and JSON endpoint testing.",
                "systemd status and journal inspection.",
                "Application version and environment information.",
            ],
        ],

        [
            'id' => 'data-flow',
            'title' => '13. COMPLETE REQUEST DATA FLOW',
            'code' => <<<'DATAFLOW'
BASE SYSTEM PROMPT
        +
ACTIVE CUSTOM PROFILE
        +
CONVERSATION HISTORY
        +
USER PROMPT
        +
UPLOADED FILE CONTEXT
        +
WEB SEARCH CONTEXT
        +
GIT-RAG REPOSITORY CONTEXT
        |
        v
LOCAL LLAMA.CPP INFERENCE
        |
        v
TEXT RESPONSE
        |
        +-------------------------+
        |                         |
        v                         v
BROWSER DISPLAY          LOCAL TTS GENERATION
DATAFLOW,
            'paragraphs' => [
                "Each optional context source is added only when it is selected, available, and relevant to the active request.",
                "This layered structure keeps the request path visible and allows each module to be tested independently.",
            ],
        ],

        [
            'id' => 'privacy',
            'title' => '14. PRIVACY AND SECURITY MODEL',
            'paragraphs' => [
                "Local inference reduces the need to transmit prompts, documents, code, and private context to an external AI API.",
                "Local deployment does not automatically guarantee security. The operator remains responsible for operating-system hardening, authentication, network exposure, firewall rules, storage permissions, repository credentials, backups, logging, software updates, and model licensing.",
                "External network traffic can still occur when web search is enabled, repositories are pulled, packages are installed, or models are downloaded.",
            ],
            'items' => [
                "Bind internal model and search endpoints to loopback or a private network.",
                "Restrict access to application storage and repository credentials.",
                "Protect non-local web access with authentication and TLS.",
                "Review logs and service status regularly.",
                "Separate public presentation services from private AI runtime services.",
                "Apply controlled backup and retention policies.",
                "Validate every optional external integration.",
            ],
        ],

        [
            'id' => 'deployment',
            'title' => '15. DEPLOYMENT STACK',
            'code' => <<<'STACK'
OPERATING SYSTEM     LINUX
WEB SERVER           APACHE2
BACKEND              PHP
FRONTEND             HTML / CSS / JAVASCRIPT
LLM RUNTIME          LLAMA.CPP
MODEL FORMAT         GGUF
WEB SEARCH           SEARXNG
VOICE ENGINE         PIPER TTS
VOICE FALLBACK       ESPEAK NG
SERVICE CONTROL      SYSTEMD
LOCAL STORAGE        FILESYSTEM
REPOSITORY LAYER     GIT + LOCAL GIT-RAG SERVICE
STACK,
            'paragraphs' => [
                "The application can run on a workstation, development computer, dedicated GPU host, private LAN server, or small organizational infrastructure.",
                "Performance depends on the selected model, context size, quantization, CPU, RAM, GPU, VRAM, storage, and runtime parameters.",
            ],
        ],

        [
            'id' => 'use-cases',
            'title' => '16. USE CASES',
            'items' => [
                "Private technical assistance.",
                "Linux, server, and network troubleshooting.",
                "Source-code review and debugging.",
                "Local analysis of internal documents.",
                "Repository exploration and software architecture review.",
                "Web-assisted research with source context.",
                "Task-specific assistants using custom profiles.",
                "Voice access to locally generated answers.",
                "Local AI infrastructure experimentation.",
                "Evaluation of open-weight language models.",
                "Controlled development of retrieval and agentic workflows.",
            ],
        ],

        [
            'id' => 'limitations',
            'title' => '17. CURRENT LIMITATIONS',
            'paragraphs' => [
                "KUZAI AI is an evolving beta project. Owning the stack also means owning its validation, operation, security, maintenance, and technical debt.",
            ],
            'items' => [
                "Performance remains constrained by local hardware.",
                "Response quality depends on the selected model and quantization.",
                "The current file pipeline is primarily designed for text-compatible formats.",
                "Web sources do not eliminate hallucinations or interpretation errors.",
                "Git-RAG quality depends on indexing, embeddings, chunking, and retrieval strategy.",
                "The base installation does not provide universal multi-user isolation.",
                "Authentication and hardening depend on the deployment environment.",
                "The platform requires active system administration and maintenance.",
                "Feature parity with large commercial platforms is not guaranteed.",
            ],
        ],

        [
            'id' => 'roadmap',
            'title' => '18. DEVELOPMENT ROADMAP',
            'items' => [
                "Stabilized local embedding services.",
                "Improved Git-RAG indexing and source attribution.",
                "Repository branch and synchronization workflows.",
                "PDF and office-document extraction.",
                "Persistent server-side conversation history.",
                "Local long-term memory modules.",
                "Profile import and export.",
                "Authentication and access-control layers.",
                "Model selection through the browser interface.",
                "GPU, memory, and runtime monitoring.",
                "Conversation export in Markdown and JSON.",
                "Support for additional local inference runtimes.",
                "Optional tool execution with explicit permissions.",
                "Controlled agentic workflows.",
                "Multi-node local AI orchestration.",
            ],
        ],

        [
            'id' => 'conclusion',
            'title' => '19. CONCLUSION',
            'paragraphs' => [
                "KUZAI AI transforms local model inference into a complete local AI environment.",
                "It combines local chat, replaceable models, file analysis, controlled web search, source context, local voice synthesis, custom system prompts, reusable profiles, repository retrieval, runtime monitoring, local storage, and modular service architecture.",
                "The central objective is not to freeze every component. The objective is to ensure that every component can remain understandable, replaceable, auditable, and controlled by the operator.",
            ],
            'quote' => "KUZAI AI is not only a local chatbot. It is a foundation for independently operated AI infrastructure.",
        ],
    ],
];
