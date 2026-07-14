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
            'presentation' => 'A PUBLIC AND NAVIGABLE DEMONSTRATION OF THE KUZAI AI INTERFACE IS CURRENTLY IN PREPARATION. THE FUTURE VERSION WILL ALLOW VISITORS TO EXPLORE THE APPLICATION INTERFACE, OPEN ITS MENUS, AND DISCOVER ITS MAIN MODULES WITHOUT ACCESSING THE PRIVATE LOCAL MODEL OR INTERNAL INFRASTRUCTURE.',
            'link_label' => 'GO TO APPLICATION DEMO',
            'link_status' => 'COMING SOON',
        ],
    ],
];
