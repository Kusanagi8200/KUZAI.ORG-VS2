<?php

declare(strict_types=1);

return [
    'intro' => 'MINI-KUZAI IS A LOCAL LANGUAGE-MODEL LABORATORY BUILT TO UNDERSTAND HOW A TRANSFORMER WORKS FROM THE INSIDE, THEN USE THAT KNOWLEDGE TO PREPARE A SMALL CONVERSATIONAL MODEL WITH A CONTROLLED IDENTITY AND BEHAVIOR.',

    'meta' => [
        [
            'label' => 'PROJECT TYPE',
            'value' => 'LANGUAGE MODEL LABORATORY',
        ],
        [
            'label' => 'CURRENT PHASE',
            'value' => 'PHASE 03 / DATA PREPARATION',
        ],
        [
            'label' => 'CONTROLLED CORPUS',
            'value' => '179 RECORDS / 65 SEMANTIC GROUPS',
        ],
        [
            'label' => 'TRAINING',
            'value' => 'NOT STARTED / NOT AUTHORIZED',
        ],
    ],

    'sections' => [
        [
            'id' => 'mini-kuzai-goal',
            'title' => '1. PROJECT GOAL',
            'paragraphs' => [
                'Mini-Kuzai starts from a deliberately small language model built from scratch instead of adapting an existing pretrained model.',
                'The objective is both practical and educational: implement the mechanisms directly, run them locally, inspect their outputs, understand their effects, and progressively build toward a more capable conversational model.',
            ],
            'quote' => 'BUILD A LANGUAGE MODEL FROM SCRATCH, TRAIN IT LOCALLY AND INSPECT WHAT HAPPENS INSIDE A TRANSFORMER.',
        ],
        [
            'id' => 'mini-kuzai-phase-01',
            'title' => '2. PHASE 01 / TRANSFORMER LAB',
            'paragraphs' => [
                'Phase 01 established the first complete Mini-Kuzai language-model laboratory. The repository preserves 67 numbered experiments covering the complete learning sequence from tokenization to interpretability.',
                'The frozen Phase 01 model is intentionally tiny so matrices, gradients, attention heads, residual updates and token probabilities can be inspected directly.',
            ],
            'features' => [
                [
                    'title' => 'ARCHITECTURE',
                    'text' => '2 Transformer blocks / 2 attention heads / embedding dimension 8 / MLP hidden dimension 32.',
                ],
                [
                    'title' => 'MODEL SIZE',
                    'text' => '26-token vocabulary and 2,368 trainable parameters in the frozen Phase 01 model.',
                ],
                [
                    'title' => 'TRAINING',
                    'text' => 'Batch size 4 / AdamW / learning rate 0.04 / deterministic seed 42.',
                ],
                [
                    'title' => 'INTERPRETABILITY',
                    'text' => 'Attention, ablations, residual stream, logits, LayerNorm, gamma, beta and vocabulary bias were inspected directly.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-phase-03',
            'title' => '3. PHASE 03 / CONVERSATIONAL MODEL',
            'paragraphs' => [
                'Phase 03 moves beyond the tiny pedagogical baseline toward a new conversational model that will also be trained from scratch.',
                'The target behavior is not limited to question answering. Mini-Kuzai is being designed around a coherent developing personality with curiosity, independent thinking, intellectual honesty, creativity, initiative, reasoned disagreement, uncertainty, opinion formation and revision, and multi-turn continuity.',
            ],
            'features' => [
                [
                    'title' => 'IDENTITY',
                    'text' => 'A stable developing identity linked to THE KUZ NETWORK research environment without relying on a generic assistant persona.',
                ],
                [
                    'title' => 'COGNITION',
                    'text' => 'Curiosity, critical thinking, uncertainty, correction after feedback and reasoned disagreement are explicit behavioral targets.',
                ],
                [
                    'title' => 'CREATIVITY',
                    'text' => 'Imagination, contextual expression, humor, initiative and creative dialogue are treated as first-class training goals.',
                ],
                [
                    'title' => 'CONTINUITY',
                    'text' => 'Multi-turn consistency and the ability to preserve context across a conversation are part of the evaluation design.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-corpus',
            'title' => '4. CONTROLLED CORPUS',
            'paragraphs' => [
                'The current controlled Phase 03 corpus contains 179 records distributed across 65 semantic groups. TRAIN, VALIDATION and BLIND TEST material is kept separate to evaluate generalization instead of simple reproduction.',
            ],
            'features' => [
                [
                    'title' => 'TRAIN',
                    'text' => '107 audited records across all 29 TRAIN semantic groups.',
                ],
                [
                    'title' => 'VALIDATION',
                    'text' => '36 frozen records across 18 reserved validation groups.',
                ],
                [
                    'title' => 'BLIND TEST',
                    'text' => '36 frozen records across 18 reserved blind groups.',
                ],
                [
                    'title' => 'TOTAL',
                    'text' => '179 controlled records across 65 semantic situations with split protection.',
                ],
            ],
            'items' => [
                'Cross-split exact IDs: 0.',
                'Cross-split semantic-group overlap: 0.',
                'Exact normalized user-prompt collisions across splits: 0.',
                'Semantic split guard: active.',
            ],
        ],
        [
            'id' => 'mini-kuzai-status',
            'title' => '5. CURRENT STATUS',
            'paragraphs' => [
                'The data-preparation work has reached the V55 BLIND freeze checkpoint. The corpus is prepared, but the project has not entered model training.',
                'Global BLIND closure is still pending. The final tokenizer vocabulary, Phase 03 architecture and training mixture are not frozen, and training remains explicitly unauthorized.',
            ],
            'items' => [
                'Phase 01 checkpoint: frozen.',
                'Phase 02 KV cache work: preserved.',
                'Phase 03: data preparation - V55 BLIND frozen / review pause.',
                'TRAIN: 107 audited records / 29 of 29 groups.',
                'VALIDATION: 36 frozen records / 18 of 18 groups.',
                'BLIND TEST: 36 frozen records / 18 of 18 groups.',
                'Global BLIND closure: pending.',
                'Tokenizer final vocabulary: not frozen.',
                'Phase 03 architecture: not selected.',
                'Phase 03 training: not started.',
                'Training authorized: no.',
            ],
        ],
        [
            'id' => 'mini-kuzai-method',
            'title' => '6. DEVELOPMENT METHOD',
            'paragraphs' => [
                'Mini-Kuzai follows an experimental workflow: define or implement one mechanism, execute it, inspect the data and outputs, verify the behavior, document the result, then integrate it into the next stage.',
                'The repository preserves both clean model implementations and historical laboratory material so the progression remains reproducible and auditable.',
            ],
            'items' => [
                'Build and understand mechanisms before scaling them.',
                'Keep training, validation and blind evaluation separated.',
                'Use explicit review and freeze points before irreversible steps.',
                'Keep large raw datasets and local training artifacts outside the normal public Git repository.',
                'Do not start training until the tokenizer, architecture, mixture and evaluation gates are explicitly approved.',
            ],
        ],
        [
            'id' => 'mini-kuzai-repository',
            'title' => '7. PUBLIC REPOSITORY',
            'paragraphs' => [
                'The public Mini-Kuzai repository contains model code, Phase 01 experiments, Phase 03 specifications, controlled public corpus artifacts, review procedures, audit results and technical documentation.',
                'The repository is the technical reference for this page and records the project state as it evolves.',
            ],
        ],
    ],
];
