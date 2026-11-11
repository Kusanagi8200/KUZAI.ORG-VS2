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
            'value' => 'PHASE 03 / V80 CLOSED / PRE-V81 MEDIA FLOW VALIDATED',
        ],
        [
            'label' => 'CONTROLLED CORPUS',
            'value' => '179 RECORDS / 65 SEMANTIC GROUPS',
        ],
        [
            'label' => 'TRAINING',
            'value' => 'V62 FROZEN / NO NEW TRAINING',
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
                'V63-V80 are read-only diagnostics over that frozen checkpoint. No optimizer step, parameter update or checkpoint mutation has been authorized since V62.',
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
            'title' => '5. CURRENT STATUS / 2026-11-11',
            'paragraphs' => [
                'The latest verified scientific milestone is V80. The frozen V62 cycle-2 checkpoint remains the latest trained model after 69 optimizer steps and 597,982 exposure tokens.',
                'V80 replayed the five V79 context-order prediction changes and tested whether they were only fragile near-zero boundary flips. None of the five changed positions fell within the widest frozen 1e-3 proximity threshold.',
            ],
            'items' => [
                'Phase 03 model: decoder-only Transformer / 1,184,512 trainable parameters.',
                'Tokenizer: frozen byte-level BPE / 1,024 vocabulary entries.',
                'V62: 69 optimizer steps / 597,982 exposure tokens / best validation loss 4.732514.',
                'V80: 9,170 frozen VALIDATION lexical positions.',
                'V80: 5 prediction changes and 5 alpha-sign changes reproduced exactly from V79.',
                'V80: ORIGINAL and REVERSE both remain 2,594 / 9,170 correct.',
                'V80: 0 changed positions inside the frozen 1e-3 boundary threshold.',
                'Training authorization: false.',
                'BLIND access: false.',
            ],
        ],
        [
            'id' => 'mini-kuzai-training',
            'title' => '6. CONTROLLED TRAINING / V59-V62',
            'paragraphs' => [
                'V59 finalized the reviewed training mixture. V60 established numerical learning but failed fixed EOS completion probes. V61 strengthened terminal EOS behavior but produced excessive intermediate EOS predictions.',
                'V62 introduced pairwise boundary-margin constraints. TRAIN RUN 001 stopped at the mandatory cycle-2 milestone and the resulting checkpoint was frozen for all subsequent diagnostics.',
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
                    'title' => 'V62',
                    'text' => '69 steps / 597,982 exposure tokens / best validation loss 4.732514 / checkpoint frozen.',
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
                'V80 validated the first complete FINAL publication across GitHub, LinkedIn and YouTube. Communication failures are downstream failures and never invalidate a completed scientific result.',
            ],
            'features' => [
                [
                    'title' => 'GITHUB',
                    'text' => 'V80 FINAL published in Discussion #11 with a committed PUBLISHED receipt.',
                ],
                [
                    'title' => 'LINKEDIN',
                    'text' => 'V80 FINAL published through KUZ-DIN with receipt-gated duplicate protection.',
                ],
                [
                    'title' => 'YOUTUBE',
                    'text' => 'V80 produced the first verified public FINAL Short through the independent Mini-Kuzai_YOUTUBE worker.',
                ],
                [
                    'title' => 'SAFETY',
                    'text' => 'Publication authorization never authorizes training, BLIND access or checkpoint mutation.',
                ],
            ],
            'items' => [
                'V80 GitHub FINAL: Discussion #11 / comment #19546266.',
                'V80 LinkedIn FINAL: urn:li:share:7526323656042455041.',
                'V80 YouTube public Short: y-YnlPLbT9Q.',
            ],
        ],
        [
            'id' => 'mini-kuzai-media-flow',
            'title' => '9. CROSS-CHANNEL MEDIA FLOW / PRE-V81 VALIDATED',
            'paragraphs' => [
                'FLOW-PRESENTATION-001 was created as a non-scientific integration test before V81. It validated the same audited MP4 across YouTube, LinkedIn native video and a GitHub media publication.',
                'The new canonical media contract keeps the 60-second vertical format while expanding Piper narration from 5 seconds after the start to 5 seconds before the end.',
            ],
            'features' => [
                [
                    'title' => 'VIDEO',
                    'text' => '60 seconds / 1080 x 1920 / narration window 5-55 seconds.',
                ],
                [
                    'title' => 'YOUTUBE',
                    'text' => 'FLOW-PRESENTATION-001 published publicly as video vhQmddUuMcg.',
                ],
                [
                    'title' => 'LINKEDIN',
                    'text' => 'The same MP4 was published natively as urn:li:ugcPost:7526340708715327488.',
                ],
                [
                    'title' => 'GITHUB',
                    'text' => 'Discussion #12 documents the media flow and references the verified public YouTube video.',
                ],
            ],
            'items' => [
                'Media SHA256: c34b3dc19788e6770e4edb9dffc2331df2438b23c6663858b7d5299ad5731034.',
                'The test is communication infrastructure only and is not V81 scientific evidence.',
            ],
        ],
        [
            'id' => 'mini-kuzai-next',
            'title' => '10. NEXT STEP / V81',
            'paragraphs' => [
                'V81 scientific work has not started. The publication primitives required for the next step are now validated, but the remaining engineering task is automatic orchestration after a future genuine V81 FINAL receipt.',
                'The target flow is: scientific GOGIT PASS, GitHub FINAL, committed receipt, automatic media brief, audited MP4, YouTube public publication, LinkedIn native video, GitHub media publication, publication receipts and documentation update.',
            ],
            'items' => [
                'No V81 training is authorized.',
                'No V81 BLIND access is authorized.',
                'No V81 scientific result exists yet.',
                'Publication automation must remain downstream from a genuine scientific FINAL.',
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
