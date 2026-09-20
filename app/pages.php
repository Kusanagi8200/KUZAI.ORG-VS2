<?php

declare(strict_types=1);

$whitePaper = require __DIR__ . '/whitepaper.php';

return [
    'home' => [
        'title' => 'KUZAI - THE LOCAL AI',
        'meta_description' => 'KUZAI - THE LOCAL AI - BETA-0.03.2026 - A KUZ NETWORK SOLUTION',
    ],

    'kuz-network' => [
        'title' => 'KUZAI AI / WHITE PAPER',
        'kicker' => '',
        'meta_description' => 'KUZAI AI white paper: local inference, file analysis, web search, local voice synthesis, custom profiles, Git-RAG, privacy, and modular infrastructure.',
        'whitepaper' => $whitePaper,
    ],


    'application-demo' => [
        'title' => 'KUZAI AI / APPLICATION DEMO',
        'kicker' => '',
        'meta_description' => 'KUZAI AI application demonstration page.',
        'application_demo' => [
            'presentation' => [
                'A PUBLIC AND NAVIGABLE DEMONSTRATION OF THE KUZAI AI INTERFACE IS AVAILABLE. THIS PUBLIC DEMO DOES NOT CONNECT TO AN AI MODEL AND DOES NOT PERFORM AI INFERENCE.',
                'IT IS A FUNCTIONAL REPRESENTATION OF THE KUZAI LOCAL APPLICATION INTERFACE. VISITORS CAN EXPLORE THE MAIN APPLICATION WORKSPACE, NAVIGATE THROUGH ITS MENUS, DISCOVER THE CHAT INTERFACE, CUSTOM LLM PROFILES, GIT-RAG WORKFLOWS, FILE ANALYSIS CONTROLS, WEB SEARCH, VOICE AND GENERATION SETTINGS.',
                'IN A LOCAL KUZAI DEPLOYMENT, THE APPLICATION IS CONNECTED TO AN AI MODEL RUNNING ON THE LOCAL INFRASTRUCTURE, TOGETHER WITH THE ASSOCIATED LOCAL SERVICES. THIS DEMONSTRATION FOCUSES ON THE APPLICATION, ITS USER EXPERIENCE, ITS INTERFACE LOGIC AND ITS MODULAR ARCHITECTURE.',
            ],
            'link_label' => 'GO TO KUZAI APPLICATION DEMO',
            'link_status' => 'AVAILABLE',
        ],
    ],
];
