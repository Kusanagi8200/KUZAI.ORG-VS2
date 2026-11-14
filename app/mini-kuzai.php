<?php

declare(strict_types=1);

return [
    'intro' => 'MINI-KUZAI IS A LOCAL LANGUAGE-MODEL LABORATORY BUILT FROM SCRATCH TO UNDERSTAND HOW A TRANSFORMER LEARNS, INSPECT ITS INTERNAL BEHAVIOR, AND PROGRESS TOWARD A SMALL CONTROLLED CONVERSATIONAL MODEL.',

    'meta' => [
        [
            'label' => 'PROJECT TYPE',
            'value' => 'LANGUAGE MODEL LABORATORY',
        ],
        [
            'label' => 'CURRENT PHASE',
            'value' => 'PHASE 03 / V81 CLOSED / V82 NOT STARTED',
        ],
        [
            'label' => 'CONTROLLED CORPUS',
            'value' => '179 RECORDS / 65 SEMANTIC GROUPS',
        ],
        [
            'label' => 'TRAINING',
            'value' => 'V62 LINEAGE / V81 CONTINUATION CLOSED / NO FURTHER TRAINING',
        ],
    ],

    'sections' => [
        [
            'id' => 'mini-kuzai-goal',
            'title' => '1. PROJECT GOAL',
            'paragraphs' => [
                'Mini-Kuzai starts from a deliberately small language model built from scratch instead of adapting an existing pretrained model.',
                'The objective is practical and educational: implement the mechanisms directly, run them locally, inspect their outputs, understand their effects, and progressively build toward a more capable conversational model.',
            ],
            'quote' => 'BUILD A LANGUAGE MODEL FROM SCRATCH, TRAIN IT LOCALLY AND INSPECT WHAT HAPPENS INSIDE A TRANSFORMER.',
        ],
        [
            'id' => 'mini-kuzai-phase-01',
            'title' => '2. PHASE 01 / TRANSFORMER LAB',
            'paragraphs' => [
                'Phase 01 established the first complete Mini-Kuzai language-model laboratory. The frozen model is intentionally tiny so matrices, gradients, attention heads, residual updates and token probabilities can be inspected directly.',
                'The repository preserves the complete learning sequence from tokenization and embeddings through attention, training, ablations and interpretability.',
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
                    'text' => 'Batch size 4 / AdamW / deterministic experiments.',
                ],
                [
                    'title' => 'INTERPRETABILITY',
                    'text' => 'Attention, ablations, residual stream, logits, LayerNorm and vocabulary bias were inspected directly.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-phase-03',
            'title' => '3. PHASE 03 / CONVERSATIONAL MODEL',
            'paragraphs' => [
                'Phase 03 moves beyond the pedagogical baseline toward a new conversational model trained from scratch. Bounded V60, V61 and V62 training runs were executed, then V62 was frozen at its mandatory cycle-2 review.',
                'V63-V80 were read-only diagnostics over that checkpoint. V81 then resumed the same frozen V62 run lineage under an explicit bounded authorization and closed the remaining initial-window budget without changing tokenizer, architecture, corpus or objective.',
            ],
            'features' => [
                [
                    'title' => 'IDENTITY',
                    'text' => 'A controlled developing identity linked to THE KUZ NETWORK research environment.',
                ],
                [
                    'title' => 'COGNITION',
                    'text' => 'Curiosity, critical thinking, uncertainty, correction after feedback and reasoned disagreement are explicit behavioral targets.',
                ],
                [
                    'title' => 'CREATIVITY',
                    'text' => 'Imagination, contextual expression, humor, initiative and creative dialogue are treated as first-class goals.',
                ],
                [
                    'title' => 'CONTINUITY',
                    'text' => 'Multi-turn consistency and context preservation are part of the evaluation design.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-corpus',
            'title' => '4. CONTROLLED CORPUS',
            'paragraphs' => [
                'The controlled Phase 03 corpus contains 179 records distributed across 65 semantic groups. TRAIN, VALIDATION and BLIND TEST material is kept separate to evaluate generalization instead of simple reproduction.',
            ],
            'features' => [
                [
                    'title' => 'TRAIN',
                    'text' => '107 audited records across 29 TRAIN semantic groups.',
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
                'BLIND TEST remains closed.',
            ],
        ],
        [
            'id' => 'mini-kuzai-status',
            'title' => '5. CURRENT STATUS / 2026-11-14',
            'paragraphs' => [
                'The latest verified scientific milestone is V81. It resumed the frozen V62 cycle-2 checkpoint under an explicit bounded continuation authorization and stopped at the maximum exposure boundary.',
                'The training window is now closed. The result improves validation loss under the frozen objective but does not establish semantic competence, reasoning ability or useful free-form conversation.',
            ],
            'items' => [
                'Phase 03 model: decoder-only Transformer / 1,184,512 trainable parameters.',
                'Tokenizer: frozen byte-level BPE / 1,024 vocabulary entries.',
                'V81 start: 69 optimizer steps / 597,982 exposure tokens.',
                'V81 final: 136 optimizer steps / 1,181,302 exposure tokens.',
                'Maximum authorized exposure: 1,181,664 / unused budget: 362 tokens.',
                'Best validation loss: 4.030447 / baseline 4.732514 / improvement 14.83%.',
                'Stop reason: MAX_EXPOSURE_TOKENS.',
                'Further training authorization: false.',
                'BLIND access: false.',
                'Semantic validation complete: false.',
            ],
        ],
        [
            'id' => 'mini-kuzai-training',
            'title' => '6. CONTROLLED TRAINING / V59-V81',
            'paragraphs' => [
                'V59 finalized the reviewed training mixture. V60 established numerical learning but failed fixed EOS completion probes. V61 strengthened terminal EOS behavior but produced excessive intermediate EOS predictions.',
                'V62 introduced pairwise boundary-margin constraints. TRAIN RUN 001 stopped at the mandatory cycle-2 milestone. V81 later resumed that exact frozen run with the unchanged trainer and objective and closed the remaining authorized initial-window exposure budget.',
            ],
            'features' => [
                [
                    'title' => 'TRAINING MIX',
                    'text' => '272 conversations / 345 segments / 295,416 unique tokens.',
                ],
                [
                    'title' => 'V60',
                    'text' => '509 optimizer steps / validation loss 3.429395 / failed fixed EOS completion probes.',
                ],
                [
                    'title' => 'V61',
                    'text' => 'Stopped at cycle 2 / terminal EOS improved but intermediate false positives remained high.',
                ],
                [
                    'title' => 'V62 -> V81',
                    'text' => 'Resumed from 69 steps / 597,982 tokens and closed at 136 steps / 1,181,302 tokens / best validation loss 4.030447.',
                ],
            ],
        ],
        [
            'id' => 'mini-kuzai-diagnostics',
            'title' => '7. READ-ONLY RESEARCH / V63-V80',
            'paragraphs' => [
                'V63-V74 investigated generation failures, EOS calibration, token-frequency effects, output-head concentration, precision, hidden-state anisotropy and frequency-prior confounds.',
                'V75-V80 progressively tested whether the dominant residual signal transfers across splits, survives frequency residualization, responds to context order, can be separated from rebatching noise, and is merely a near-zero boundary effect.',
            ],
            'features' => [
                [
                    'title' => 'V75 / GEOMETRY TRANSFER',
                    'text' => 'TRAIN-derived PC1 aligns with VALIDATION PC1 at 99.95% absolute cosine.',
                ],
                [
                    'title' => 'V76 / FREQUENCY RESIDUAL',
                    'text' => 'TRAIN lexical frequency explains 7.75% of centered PC1 output-profile energy; the residual retains 92.25%.',
                ],
                [
                    'title' => 'V77-V79 / CONTEXT ORDER',
                    'text' => 'Reverse-history changes only 5 / 9,170 top-1 predictions; V79 reproduces the same five changes through the same batch-32 path.',
                ],
                [
                    'title' => 'V80 / BOUNDARY PROXIMITY',
                    'text' => 'None of the five changed positions lies inside the frozen 1e-3 near-zero boundary band.',
                ],
            ],
            'items' => [
                'V80 mean boundary distance on changed positions: 0.030173315.',
                'V80 maximum boundary distance on changed positions: 0.059604287.',
                'V80 mean crossing distance: 0.150983569.',
                'V80 maximum crossing distance: 0.249839202.',
                'These are teacher-forced diagnostics and do not establish semantic competence or reasoning ability.',
            ],
        ],
        [
            'id' => 'mini-kuzai-dev-flow',
            'title' => '8. DEV-FLOW / VERIFIED PUBLICATION SYSTEM',
            'paragraphs' => [
                'Mini-Kuzai separates scientific validation from public communication. A scientific result must first pass its committed protocol, tests and immutable GOGIT evidence before FINAL-DEV-FLOW can publish the closing record.',
                'V81 validated the first genuine V81+ automatic FINAL publication across GitHub, YouTube, LinkedIn native video and the committed cross-channel media receipt. Communication failures remain downstream failures and never invalidate a completed scientific result.',
            ],
            'features' => [
                [
                    'title' => 'GITHUB',
                    'text' => 'V81 FINAL published in Discussion #13 with a committed PUBLISHED receipt.',
                ],
                [
                    'title' => 'LINKEDIN',
                    'text' => 'V81 FINAL published through KUZ-DIN; the generated MP4 was also published as a native LinkedIn video.',
                ],
                [
                    'title' => 'YOUTUBE',
                    'text' => 'V81 public FINAL Short: EAMRSevA2zk, produced through the independent Mini-Kuzai_YOUTUBE worker.',
                ],
                [
                    'title' => 'SAFETY',
                    'text' => 'Publication authorization never authorizes training, BLIND access or checkpoint mutation.',
                ],
            ],
            'items' => [
                'V81 GitHub FINAL: Discussion #13 / comment #19611736.',
                'V81 YouTube public Short: EAMRSevA2zk.',
                'V81 LinkedIn native media post: urn:li:ugcPost:7527349657677594624.',
                'V81 GitHub media fallback: Discussion #13 / comment #19612381.',
            ],
        ],
        [
            'id' => 'mini-kuzai-media-flow',
            'title' => '9. CROSS-CHANNEL MEDIA FLOW / V81 VERIFIED',
            'paragraphs' => [
                'FLOW-PRESENTATION-001 first validated the communication primitives. V81 then exercised the genuine production path from a committed scientific FINAL receipt through automatic brief generation, audited media, YouTube, LinkedIn native video and GitHub media fallback.',
                'The canonical media contract remains a 60-second vertical Short with Piper narration from 5 seconds after the start to 5 seconds before the end.',
            ],
            'features' => [
                [
                    'title' => 'VIDEO',
                    'text' => '60 seconds / 1080 x 1920 / narration window 5-55 seconds.',
                ],
                [
                    'title' => 'YOUTUBE',
                    'text' => 'V81 FINAL published publicly as EAMRSevA2zk.',
                ],
                [
                    'title' => 'LINKEDIN',
                    'text' => 'The V81 MP4 was published natively as urn:li:ugcPost:7527349657677594624.',
                ],
                [
                    'title' => 'GITHUB',
                    'text' => 'Discussion #13 comment #19612381 contains the verified public media fallback.',
                ],
            ],
            'items' => [
                'Cross-channel publication receipt is committed in Mini-Kuzai_YOUTUBE.',
                'Media publication remains communication infrastructure and is not scientific evidence.',
            ],
        ],
        [
            'id' => 'mini-kuzai-next',
            'title' => '10. NEXT STEP / V82',
            'paragraphs' => [
                'V81 is scientifically and operationally closed. V82 has not started and no additional training is authorized.',
                'The next work is protocol preparation and review. Before V82 reaches public scientific execution, START-DEV-FLOW must be explicitly launched; publication authorization will remain separate from any training authorization.',
            ],
            'items' => [
                'No V82 training is authorized.',
                'No V82 BLIND access is authorized.',
                'No V82 scientific result exists yet.',
                'Historical V81 evidence and receipts remain immutable.',
            ],
        ],
        [
            'id' => 'mini-kuzai-method',
            'title' => '11. DEVELOPMENT METHOD',
            'paragraphs' => [
                'Mini-Kuzai follows an experimental workflow: define a bounded mechanism or hypothesis, execute it, inspect the data and outputs, verify the behavior, document the result, then integrate it into the next stage.',
                'Historical reports, receipts, datasets and frozen protocols are preserved so the progression remains reproducible and auditable.',
            ],
            'items' => [
                'Build and understand mechanisms before scaling them.',
                'Keep TRAIN, VALIDATION and BLIND evaluation separated.',
                'Use explicit authorization gates before irreversible steps.',
                'Treat communication publication as separate from scientific authority.',
                'Keep large raw datasets and local runtime artifacts outside the normal public repository.',
            ],
        ],
        [
            'id' => 'mini-kuzai-repository',
            'title' => '12. PUBLIC REPOSITORIES',
            'paragraphs' => [
                'The Mini-Kuzai repository remains the scientific and technical reference. The companion Mini-Kuzai_YOUTUBE repository contains the Short renderer and YouTube publication pipeline. KUZ-DIN provides the guarded LinkedIn publication layer.',
                'KUZAI.ORG presents the verified project state to a public audience without exposing local model endpoints, credentials or private infrastructure.',
            ],
            'items' => [
                'github.com/Kusanagi8200/Mini-Kuzai',
                'github.com/Kusanagi8200/Mini-Kuzai_YOUTUBE',
                'github.com/Kusanagi8200/KUZ-DIN',
                'github.com/Kusanagi8200/KUZAI.ORG-VS2',
            ],
        ],
    ],
];
