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
            'value' => 'PHASE 03 / V74 CLOSED - V75 PROPOSED',
        ],
        [
            'label' => 'CONTROLLED CORPUS',
            'value' => '179 RECORDS / 65 SEMANTIC GROUPS',
        ],
        [
            'label' => 'TRAINING',
            'value' => 'V62 STOPPED / NO NEW TRAINING',
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
                'Phase 03 moves beyond the pedagogical baseline toward a new conversational model trained from scratch. Bounded V60, V61 and V62 training runs were executed; V62 was stopped at its mandatory cycle-2 review. V63-V74 then investigated generation and internal model behavior without additional training.',
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
            'title' => '5. CURRENT STATUS / 2026-11-01',
            'paragraphs' => [
                'The latest verified scientific milestone is V74, closed on 2026-11-01. The frozen V62 cycle-2 checkpoint was trained for 69 optimizer steps and 597,982 exposure tokens. Subsequent V63-V74 investigations used the stopped model for bounded diagnostics, not new training.',
                'The next step, V75 TRAIN-fitted geometry transfer, is a proposal only. It has not been authorized or executed. The BLIND TEST split remains closed, and current teacher-forced token metrics must not be presented as demonstrated conversational competence.',
            ],
            'items' => [
                'Phase 01: frozen Transformer laboratory; Phase 02: preserved autoregressive and KV-cache experiments.',
                'Phase 03 model: decoder-only Transformer, 4 layers, 4 heads, 2,048-token context and 1,184,512 trainable parameters.',
                'Tokenizer: frozen byte-level BPE with 1,024 vocabulary entries and 765 merges.',
                'Corpus: 107 TRAIN, 36 VALIDATION and 36 BLIND TEST records in 65 protected semantic groups.',
                'V59 training mix: 272 conversations, 345 training segments and 295,416 unique tokens.',
                'V62: stopped after cycle 2, 69 optimizer steps and 597,982 exposure tokens; best validation loss 4.732514.',
                'V70-V74: published numerical, read-only diagnostics; checkpoint and weights unchanged.',
                'V74 CORE and STRATA: PASS; no new training and no BLIND access.',
                'V75: proposed and paused; no START request, GPU study, GOGIT report or training authorization.',
            ],
        ],
        [
            'id' => 'mini-kuzai-experiments',
            'title' => '6. CONTROLLED TRAINING / V59-V62',
            'paragraphs' => [
                'V59 finalized a reviewed persona-first mixture and a controlled training inventory. The V60 experiment established numerical learning but failed fixed EOS completion probes. V61 strengthened terminal EOS predictions, yet excessive intermediate EOS predictions caused a mandatory stop.',
                'V62 introduced pairwise boundary-margin constraints. Its authorized TRAIN RUN 001 was actually executed and stopped at the cycle-2 milestone after 69 optimizer steps. The resulting checkpoint was frozen for subsequent diagnostics. Historical training authorization does not permit a new run or continuation.',
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
                    'text' => 'Stopped at cycle 2 after 69 optimizer steps; terminal EOS improved but intermediate false positives remained high.',
                ],
                [
                    'title' => 'V62 RESULT',
                    'text' => 'TRAIN RUN 001 completed its mandatory cycle-2 stop: 69 steps / 597,982 exposure tokens / best validation loss 4.732514. No continuation authorized.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-diagnostics',
            'title' => '7. READ-ONLY RESEARCH / V63-V74',
            'paragraphs' => [
                'V63-V70 investigated generation failures, EOS calibration, token-frequency effects, output-head concentration and numerical precision. V71-V74 then quantified how token-frequency priors and dominant hidden-state directions affect predictions from the frozen V62 checkpoint.',
                'The V74 frequency-prior control used 9,170 lexical VALIDATION positions. Its findings support a strong frequency-prior explanation for apparent PC1 predictive utility, but they do not demonstrate causality, improved generation, independent generalization or semantic competence.',
            ],
            'features' => [
                [
                    'title' => 'V71 / OUTPUT DOMINANCE',
                    'text' => 'Output-head norm equalization changed 275 of 9,170 lexical argmax predictions (3.00%).',
                ],
                [
                    'title' => 'V72 / HIDDEN-STATE GEOMETRY',
                    'text' => 'Centered PC1 represented 82.88% of hidden-state variance; measured effective rank was 1.44 out of 128 dimensions.',
                ],
                [
                    'title' => 'V73 / PRINCIPAL AXIS',
                    'text' => 'PC1_ONLY correctly predicted 2,455 / 9,170 positions using just 2 predicted token IDs. Removing PC1 yielded 1,124 correct using 522 IDs.',
                ],
                [
                    'title' => 'V74 / FREQUENCY PRIOR',
                    'text' => 'TRAIN_UNIGRAM correctly predicted 2,535 / 9,170 versus 2,455 for PC1_ONLY; 2,449 of the PC1_ONLY correct predictions overlapped with the unigram control.',
                ],
            ],
            'items' => [
                'V74 CORE and STRATA: two immutable, verified GOGIT reports, 30 numeric fields each.',
                '36 frozen VALIDATION conversations evaluated; BLIND TEST remained inaccessible.',
                'TRAIN token-frequency inventory: 294,726 lexical tokens and 891 observed token types.',
                'No optimizer step, parameter update, checkpoint modification or new training in V63-V74.',
                'V72 and V73 fitted geometric axes on VALIDATION; their teacher-forced results are in-sample diagnostics.',
            ],
        ],
        [
            'id' => 'mini-kuzai-dev-flow',
            'title' => '8. DEV-FLOW / VERIFIED PUBLICATIONS',
            'paragraphs' => [
                'V74 research closure was supported by immutable CORE and STRATA reports. Its START and FINAL events were posted to GitHub Discussion #5 and relayed once each to the LinkedIn personal profile through the KUZ-DIN publication pipeline.',
                'The publication workflow uses explicit approvals, signed webhook delivery, durable receipts and duplicate protection. A completed V74 publication must not be replayed, and publishing documentation does not itself authorize model research or training.',
            ],
            'items' => [
                'V74: GitHub Discussion #5 contains the verified START and FINAL research publication.',
                'LinkedIn: one START and one FINAL delivery confirmed, without duplicate replay.',
                'V75: a START draft exists, but no START or FINAL publication is authorized.',
            ],
        ],
        [
            'id' => 'mini-kuzai-next',
            'title' => '9. NEXT RESEARCH STEP / V75 PROPOSED',
            'paragraphs' => [
                'V75 proposes fitting the hidden-state mean and principal axis exclusively on frozen TRAIN data, then applying that fixed geometry to VALIDATION. This would test whether the dominant axis measured on VALIDATION in earlier studies transfers across independent splits.',
                'The protocol is planning material only. Before any read-only GPU execution, the metrics schema, deterministic selection rules, resource budget, regression tests and explicit operator authorization must be reviewed and frozen. BLIND TEST and new training remain prohibited.',
            ],
            'items' => [
                'V75 scientific protocol: proposed, not yet approved.',
                'GPU experiment: not started; no new GOGIT result.',
                'Next gate: review and freeze the V75 study design before requesting START-DEV-FLOW.',
            ],
        ],
        [
            'id' => 'mini-kuzai-method',
            'title' => '10. DEVELOPMENT METHOD',
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
            'title' => '11. PUBLIC REPOSITORY',
            'paragraphs' => [
                'The public Mini-Kuzai repository contains model code, Phase 01 experiments, Phase 03 specifications, controlled public corpus artifacts, review procedures, audit results and technical documentation.',
                'The repository is the technical reference for this page. Status checked against the verified V74 closure and proposed V75 protocol as of 2026-11-01 (Mini-Kuzai main commit 901e734).',
            ],
        ],
    ],
];
