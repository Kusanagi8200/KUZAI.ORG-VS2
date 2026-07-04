<?php

declare(strict_types=1);

$whitePaper = require __DIR__ . '/whitepaper.php';

return [
    'home' => [
        'title' => 'KUZAI - THE LOCAL AI',
        'meta_description' => 'KUZAI - THE LOCAL AI - BETA-VS-0.01.2026 - A KUZ NETWORK SOLUTION',
    ],

    'kuz-network' => [
        'title' => 'KUZAI AI / WHITE PAPER',
        'kicker' => '',
        'meta_description' => 'KUZAI AI white paper: local inference, file analysis, web search, local voice synthesis, custom profiles, Git-RAG, privacy, and modular infrastructure.',
        'whitepaper' => $whitePaper,
    ],
];
