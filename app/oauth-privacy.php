<?php

declare(strict_types=1);

return [
    'intro' => "This Privacy Policy explains how the Mini-Kuzai YouTube Uploader uses Google and YouTube account data for controlled publication of Mini-Kuzai project videos.",

    'meta' => [
        [
            'label' => 'APPLICATION',
            'value' => 'MINI-KUZAI YOUTUBE UPLOADER',
        ],
        [
            'label' => 'OPERATOR',
            'value' => 'THE KUZ NETWORK',
        ],
        [
            'label' => 'WEBSITE',
            'value' => 'KUZAI.ORG',
        ],
        [
            'label' => 'PURPOSE',
            'value' => 'CONTROLLED YOUTUBE VIDEO PUBLICATION',
        ],
    ],

    'sections' => [
        [
            'id' => 'scope',
            'title' => '1. SCOPE',
            'paragraphs' => [
                "Mini-Kuzai YouTube Uploader is an operator-controlled application used to publish generated Mini-Kuzai project videos to the official THE KUZ NETWORK YouTube channel.",
                "The application is not offered as a public multi-user service and is operated only by the project administrator.",
            ],
        ],
        [
            'id' => 'google-data',
            'title' => '2. GOOGLE AND YOUTUBE DATA USED',
            'paragraphs' => [
                "The application uses Google OAuth 2.0 and YouTube Data API v3.",
                "It requests only the YouTube scopes required to verify the authenticated channel and upload videos.",
                "The application may access the authenticated YouTube channel identifier, channel title, upload authorization state, and the metadata required to create and verify video publications.",
            ],
        ],
        [
            'id' => 'purpose',
            'title' => '3. PURPOSE OF DATA USE',
            'paragraphs' => [
                "Google and YouTube account data is used exclusively to authenticate the project operator, verify that the expected YouTube channel is selected, upload project videos, and prevent duplicate publication.",
                "The application does not use Google or YouTube data for advertising, profiling, analytics resale, or unrelated commercial purposes.",
            ],
        ],
        [
            'id' => 'storage',
            'title' => '4. LOCAL STORAGE',
            'paragraphs' => [
                "OAuth credentials and authorization data are stored outside the public source-code repository on infrastructure controlled by the project operator.",
                "Local publication journals may store technical information such as video identifiers, media hashes, publication timestamps, channel identifiers, and privacy status for idempotence and operational auditing.",
                "OAuth client secrets, access credentials, and refresh credentials are not published in the public Git repository.",
            ],
        ],
        [
            'id' => 'sharing',
            'title' => '5. DATA SHARING',
            'paragraphs' => [
                "Google and YouTube account data is not sold, rented, or transferred to third parties for advertising or marketing.",
                "Data is exchanged with Google and YouTube only as required to perform OAuth authentication and YouTube API operations initiated by the project operator.",
            ],
        ],
        [
            'id' => 'retention',
            'title' => '6. RETENTION AND REVOCATION',
            'paragraphs' => [
                "Authorization data is retained only while required for operation of the uploader.",
                "The project operator may revoke the application's Google account access at any time through Google Account security settings.",
                "Local OAuth authorization files can also be deleted by the operator to terminate application access.",
            ],
        ],
        [
            'id' => 'security',
            'title' => '7. SECURITY',
            'paragraphs' => [
                "Sensitive OAuth files are stored outside the web root and public Git repository with restricted filesystem permissions.",
                "The uploader validates the authenticated YouTube channel before publication and uses local idempotence controls to prevent duplicate uploads.",
            ],
        ],
        [
            'id' => 'contact',
            'title' => '8. CONTACT',
            'paragraphs' => [
                "Questions concerning this Privacy Policy or the Mini-Kuzai YouTube Uploader can be sent to admin@kuzai.org.",
            ],
        ],
        [
            'id' => 'changes',
            'title' => '9. POLICY CHANGES',
            'paragraphs' => [
                "This policy may be updated when the uploader, requested Google OAuth scopes, or YouTube integration changes.",
                "The current version will remain available on the official KUZAI.ORG website.",
            ],
        ],
    ],
];
