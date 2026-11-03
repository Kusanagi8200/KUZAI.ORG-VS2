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
            'value' => 'PHASE 03 / V62 TRAINING PREPARATION',
        ],
        [
            'label' => 'CONTROLLED CORPUS',
            'value' => '179 RECORDS / 65 SEMANTIC GROUPS',
        ],
        [
            'label' => 'TRAINING',
            'value' => 'V62 AUTHORIZED / NOT STARTED',
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
                'Phase 03 moves beyond the tiny pedagogical baseline toward a new conversational model trained from scratch; bounded experimental runs have already been executed in V60 and V61.',
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
                'As of 2026-10-28, the project has progressed through V62. Controlled training experiments V60 and V61 have been executed, and the V62 pairwise boundary-margin objective, protocol, authorization and persistent trainer are frozen and verified.',
                'V60 stopped at a numerical plateau without reliable EOS completions. V61 improved terminal EOS learning but over-predicted EOS at intermediate boundaries, so continuation was rejected. V62 is authorized but has not started; the next operation is TRAIN RUN 001 with a mandatory cycle-2 review. BLIND TEST remains excluded from training.',
            ],
            'items' => [
                'Phase 01 checkpoint: frozen.',
                'Phase 02 KV cache work: preserved.',
                'Phase 03: V62 pairwise boundary-margin pilot - control plane frozen and verified.',
                'TRAIN: 107 records / 29 groups; VALIDATION: 36 / 18, frozen; BLIND TEST: 36 / 18, frozen.',
                'V56 tokenizer: frozen byte-level BPE, vocabulary 1,024 and 765 merges.',
                'V58 architecture: decoder-only Transformer, context 2,048, 4 layers, 4 heads, 1,184,512 parameters.',
                'V59 persona-first training mix: 272 conversations / 345 segments / 295,416 unique tokens.',
                'V60: 509 optimizer steps / 4,435,262 exposure tokens; validation loss 3.429395; EOS completions 0 / 6.',
                'V61: stopped at cycle 2 (69 steps); terminal EOS top-1 24 / 36 but false intermediate EOS remained high.',
                'V62: margin 0.25; terminal weight 8; intermediate weight 17.358491.',
                'V62 objective, protocol, training authorization and persistent trainer: PASS / FROZEN.',
                'V62 training: authorized, not started; 4-cycle window, maximum 145 steps / 1,181,664 exposure tokens.',
                'Next operation: V62 TRAIN RUN 001, mandatory cycle-2 review.',
                'BLIND TEST: inaccessible during training; reserved for post-training evaluation.',
            ],
        ],
        [
            'id' => 'mini-kuzai-experiments',
            'title' => '6. TRAINING EXPERIMENTS / V59-V62',
            'paragraphs' => [
                'V59 finalized a conservative, persona-first training mixture. Public conversation candidates were manually reviewed, and unsuitable, unrepaired or unreviewed examples were excluded from the frozen training identity.',
                'V60 corrected initialization and demonstrated numerical learning, but free generation still did not terminate reliably. V61 introduced a boundary-aware EOS objective; its mandatory cycle-2 review found excessive EOS preference at intermediate conversation boundaries and stopped the run.',
                'V62 replaces asymmetric EOS suppression with pairwise logit-margin constraints for true terminal boundaries and intermediate continuations. The objective, authorization and persistent trainer passed their control gates. The first V62 training run remains pending.',
            ],
            'features' => [
                [
                    'title' => 'FROZEN TRAINING MIX',
                    'text' => '272 conversations / 345 segments / 295,416 unique tokens; 76.58% persona-oriented target exposure.',
                ],
                [
                    'title' => 'V60 RESULT',
                    'text' => '509 optimizer steps; validation loss 3.429395; no successful EOS completion in six fixed probes.',
                ],
                [
                    'title' => 'V61 RESULT',
                    'text' => '69 optimizer steps before mandatory stop; terminal signal improved but false intermediate EOS remained uncontrolled.',
                ],
                [
                    'title' => 'V62 NEXT GATE',
                    'text' => 'Authorized four-cycle pilot; mandatory cycle-2 review before continuation; BLIND TEST isolation enforced.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-method',
            'title' => '7. DEVELOPMENT METHOD',
            'paragraphs' => [
                'Mini-Kuzai follows an experimental workflow: define or implement one mechanism, execute it, inspect the data and outputs, verify the behavior, document the result, then integrate it into the next stage.',
                'The repository preserves both clean model implementations and historical laboratory material so the progression remains reproducible and auditable.',
            ],
            'items' => [
                'Build and understand mechanisms before scaling them.',
                'Keep training, validation and blind evaluation separated.',
                'Use explicit review and freeze points before irreversible steps.',
                'Keep large raw datasets and local training artifacts outside the normal public Git repository.',
                'Start only an explicitly authorized bounded training run; honor frozen configuration, mandatory review gates and BLIND TEST isolation.',
            ],
        ],
        [
            'id' => 'mini-kuzai-repository',
            'title' => '8. PUBLIC REPOSITORY',
            'paragraphs' => [
                'The public Mini-Kuzai repository contains model code, Phase 01 experiments, Phase 03 specifications, controlled public corpus artifacts, review procedures, audit results and technical documentation.',
                'The repository is the technical reference for this page. Status checked against the V62 documentation checkpoint dated 2026-10-28.',
            ],
        ],
    ],
];
