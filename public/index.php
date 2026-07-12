<?php

declare(strict_types=1);

$config = require __DIR__ . '/../app/config.php';
$pages = require __DIR__ . '/../app/pages.php';

require_once __DIR__ . '/../app/visit-counter.php';

function h(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function pageUrl(string $page): string
{
    if ($page === 'home') {
        return 'index.php';
    }

    return 'index.php?page=' . rawurlencode($page);
}

$currentPage = isset($_GET['page']) ? (string) $_GET['page'] : 'home';

if (!array_key_exists($currentPage, $pages)) {
    http_response_code(404);
    $currentPage = 'home';
}

$page = $pages[$currentPage];

$siteName = (string) $config['site']['name'];
$shortName = (string) $config['site']['short_name'];
$siteBrand = (string) $config['site']['brand'];
$siteTagline = (string) $config['site']['tagline'];
$siteDomain = (string) $config['site']['domain'];
$publicIp = (string) $config['site']['public_ip'];
$environment = (string) $config['site']['environment'];

$pageTitle = $currentPage === 'home'
    ? 'KUZAI - THE LOCAL AI'
    : (string) $page['title'] . ' - ' . $siteName;

$metaDescription = $page['meta_description']
    ?? 'KUZAI - THE LOCAL AI - BETA-VS-0.01.2026 - A KUZ NETWORK SOLUTION';

$githubUrl = (string) $config['repository']['url'];
$githubLabel = (string) $config['repository']['label'];
$socialLinks = is_array($config['social_links']) ? $config['social_links'] : [];

$visitCount = incrementVisitCounter(
    __DIR__ . '/../var/visits.sqlite'
);

$visitCountDisplay = $visitCount !== null
    ? str_pad((string) $visitCount, 4, '0', STR_PAD_LEFT)
    : '------';

?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= h($pageTitle) ?></title>
    <meta name="description" content="<?= h((string) $metaDescription) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="<?= h($siteName) ?>">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="assets/css/style.css?v=103">
</head>
<body class="page-<?= h($currentPage) ?>">
    <div class="site-shell">
        <header class="site-header" aria-label="Main header">
            <a class="brand-mark" href="<?= h(pageUrl('home')) ?>" aria-label="Back to home">
                <img
                    class="brand-mark__logo"
                    src="assets/img/kuz_network_logo_transparent.png"
                    alt="KUZ Network logo"
                    width="112"
                    height="112"
                >
            </a>

            <div class="header-title-block" aria-label="Project title">
                <h1 class="header-title-block__title">KUZAI - THE LOCAL AI</h1>
                <p class="header-title-block__meta">A KUZ NETWORK SOLUTION - BETA-0.01.2026</p>
            </div>

            <div class="site-header__right-spacer" aria-hidden="true"></div>
        </header>

        <main class="site-main">
            <?php if ($currentPage === 'home'): ?>
                <section class="hero" aria-labelledby="heroTitle">
                    <div class="hero__inner">
<div class="hero__statement hero__statement--single">
                            <p class="hero__statement-single hero__statement-dynamic">LOCAL AI IS NOT JUST ABOUT RUNNING A MODEL. IT IS ABOUT OWNING THE FULL STACK</p>
                        </div>

                        <section class="hero__evolution-panel" aria-label="KUZAI AI project overview">
                            <p class="hero__evolution-line">
                                KUZAI AI IS A PRIVATE, SELF-HOSTED CONTROL LAYER FOR LOCAL ARTIFICIAL INTELLIGENCE
                            </p>

                            <p class="hero__evolution-line">
                                LOCAL CHAT / FILE ANALYSIS / WEB SEARCH / LOCAL TTS / CUSTOM SYSTEM PROMPT / CUSTOM LLM PROFILES / GIT-RAG
                            </p>

                            <p class="hero__evolution-line">
                                OPENAI-COMPATIBLE LOCAL INFERENCE THROUGH LLAMA.CPP WITH OPERATOR-CONTROLLED MODEL SELECTION
                            </p>

                            <p class="hero__evolution-line">
                                PROMPTS, FILES, REPOSITORIES, SEARCH CONTEXT, VOICE OUTPUT, AND RUNTIME SERVICES REMAIN UNDER LOCAL CONTROL
                            </p>

                            <p class="hero__evolution-line">
                                THE STACK IS OPEN, AUDITABLE, REPRODUCIBLE, AND BUILT FROM REPLACEABLE COMPONENTS
                            </p>

                            <p class="hero__evolution-line">
                                A MODULAR FOUNDATION FOR PRIVATE, INDEPENDENT, AND LOCALLY OPERATED AI INFRASTRUCTURE
                            </p>
                        </section>

                        <nav class="home-nav" aria-label="Primary navigation">
                            <a
                                class="home-nav__item home-nav__item--direct"
                                href="<?= h(pageUrl('kuz-network')) ?>"
                            >
                                <span>KUZAI AI / WHITE PAPER</span>
                            </a>

                            <a
                                class="home-nav__item home-nav__item--direct"
                                href="https://kuzai.org"
                            >
                                <span>APPLICATION DEMO</span>
                            </a>

                            <a
                                class="home-nav__item home-nav__item--direct"
                                href="<?= h($githubUrl) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >
                                <span><?= h($githubLabel) ?></span>
                            </a>

                            <div class="home-nav__group home-nav__group--capabilities">
                                <div class="home-nav__links-row">
                                    <span class="home-nav__links-label">FUNCTIONALITIES</span>

                                    <button
                                        class="home-nav__plus"
                                        type="button"
                                        data-home-toggle
                                        aria-expanded="false"
                                        aria-controls="homeCapabilitiesSubmenu"
                                    >
                                        +
                                    </button>
                                </div>

                                <div
                                    class="home-nav__submenu home-nav__submenu--capabilities"
                                    id="homeCapabilitiesSubmenu"
                                    hidden
                                >
                                    <span class="home-nav__subitem home-nav__subitem--static">LOCAL CHAT / PRIVATE CONVERSATIONS WITH LOCAL MODELS</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">LOCAL INFERENCE / RUN AI MODELS WITHOUT CLOUD DEPENDENCY</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">FILE ANALYSIS / ANALYZE CODE, LOGS, DATA, AND DOCUMENTS LOCALLY</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">WEB SEARCH / ADD LIVE WEB CONTEXT THROUGH LOCAL SEARXNG</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">LOCAL TTS / TURN AI RESPONSES INTO A PRIVATE SYNTHETIC VOICE</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">CUSTOM SYSTEM PROMPT / DEFINE THE MODEL ROLE, RULES, AND TONE</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">CUSTOM LLM PROFILES / SAVE AND ACTIVATE PURPOSE-BUILT AI BEHAVIORS</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">GIT-RAG / EXPLORE REPOSITORIES WITH PROJECT-AWARE CONTEXT</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">LOCAL STORAGE / KEEP FILES, SETTINGS, AND DATA ON YOUR MACHINE</span>
                                    <span class="home-nav__subitem home-nav__subitem--static">RUNTIME CONTROL / MANAGE MODELS AND SERVICES FROM ONE INTERFACE</span>
                                </div>
                            </div>

                            <div class="home-nav__group">
                                <div class="home-nav__links-row">
                                    <span class="home-nav__links-label">LINKS</span>

                                    <button
                                        class="home-nav__plus"
                                        type="button"
                                        id="homeLinksToggle"
                                        data-home-toggle
                                        aria-expanded="false"
                                        aria-controls="homeLinksSubmenu"
                                    >
                                        +
                                    </button>
                                </div>

                                <div class="home-nav__submenu" id="homeLinksSubmenu" hidden>
                                    <?php foreach ($socialLinks as $link): ?>
                                        <?php
                                            $label = isset($link['label']) ? (string) $link['label'] : '';
                                            $url = isset($link['url']) ? (string) $link['url'] : '#';

                                            if ($label === '') {
                                                continue;
                                            }
                                        ?>

                                        <a
                                            class="home-nav__subitem"
                                            href="<?= h($url) ?>"
                                            <?= $url !== '#' ? 'target="_blank" rel="noopener noreferrer"' : '' ?>
                                        >
                                            <?= h($label) ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="home-nav__group">
                                <div class="home-nav__links-row">
                                    <span class="home-nav__links-label">KONTAKT</span>

                                    <button
                                        class="home-nav__plus"
                                        type="button"
                                        data-home-toggle
                                        aria-expanded="false"
                                        aria-controls="homeContactSubmenu"
                                    >
                                        +
                                    </button>
                                </div>

                                <div class="home-nav__submenu" id="homeContactSubmenu" hidden>
                                    <a class="home-nav__subitem" href="mailto:admin@kuzai.org">
                                        ADMIN@KUZAI.ORG
                                    </a>
                                </div>
                            </div>
                        </nav>
                    </div>
                </section>
            <?php else: ?>
                <section class="content-page" aria-labelledby="pageTitle">
                    <?php $pageKicker = trim((string) ($page['kicker'] ?? $siteBrand)); ?>
                    <?php if ($pageKicker !== ''): ?>
                    <p class="content-page__kicker">
                        <?= h($pageKicker) ?>
                    </p>
                    <?php endif; ?>

                    <h1 class="content-page__title" id="pageTitle">
                        <?= h((string) $page['title']) ?>
                    </h1>

                    <?php if (!empty($page['whitepaper']) && is_array($page['whitepaper'])): ?>
                        <?php
                            $whitepaper = $page['whitepaper'];

                            $whitepaperSections = is_array($whitepaper['sections'] ?? null)
                                ? $whitepaper['sections']
                                : [];
                        ?>

                        <article class="white-paper">
                            <?php if (!empty($whitepaper['intro'])): ?>
                                <p class="white-paper__lead">
                                    <?= h((string) $whitepaper['intro']) ?>
                                </p>
                            <?php endif; ?>

                            <?php if (!empty($whitepaper['statement'])): ?>
                                <blockquote class="white-paper__statement">
                                    <?= h((string) $whitepaper['statement']) ?>
                                </blockquote>
                            <?php endif; ?>

                            <?php if (!empty($whitepaper['meta']) && is_array($whitepaper['meta'])): ?>
                                <dl class="white-paper__meta-grid">
                                    <?php foreach ($whitepaper['meta'] as $meta): ?>
                                        <?php if (!is_array($meta)): ?>
                                            <?php continue; ?>
                                        <?php endif; ?>

                                        <div class="white-paper__meta-item">
                                            <dt>
                                                <?= h((string) ($meta['label'] ?? '')) ?>
                                            </dt>

                                            <dd>
                                                <?= h((string) ($meta['value'] ?? '')) ?>
                                            </dd>
                                        </div>
                                    <?php endforeach; ?>
                                </dl>
                            <?php endif; ?>

                            <?php if ($whitepaperSections): ?>
                                <nav class="white-paper__toc" aria-label="White paper contents">
                                    <p class="white-paper__toc-title">CONTENTS</p>

                                    <div class="white-paper__toc-grid">
                                        <?php foreach ($whitepaperSections as $section): ?>
                                            <?php
                                                if (!is_array($section)) {
                                                    continue;
                                                }

                                                $sectionId = (string) ($section['id'] ?? '');
                                                $sectionTitle = (string) ($section['title'] ?? '');

                                                if ($sectionId === '' || $sectionTitle === '') {
                                                    continue;
                                                }
                                            ?>

                                            <a href="#<?= h($sectionId) ?>">
                                                <?= h($sectionTitle) ?>
                                            </a>
                                        <?php endforeach; ?>
                                    </div>
                                </nav>
                            <?php endif; ?>

                            <div class="white-paper__sections">
                                <?php foreach ($whitepaperSections as $section): ?>
                                    <?php
                                        if (!is_array($section)) {
                                            continue;
                                        }

                                        $sectionId = (string) ($section['id'] ?? '');
                                        $sectionTitle = (string) ($section['title'] ?? '');
                                    ?>

                                    <section
                                        class="white-paper__section"
                                        <?php if ($sectionId !== ''): ?>
                                            id="<?= h($sectionId) ?>"
                                        <?php endif; ?>
                                    >
                                        <?php if ($sectionTitle !== ''): ?>
                                            <h2><?= h($sectionTitle) ?></h2>
                                        <?php endif; ?>

                                        <?php if (!empty($section['paragraphs']) && is_array($section['paragraphs'])): ?>
                                            <?php foreach ($section['paragraphs'] as $paragraph): ?>
                                                <p><?= h((string) $paragraph) ?></p>
                                            <?php endforeach; ?>
                                        <?php endif; ?>

                                        <?php if (!empty($section['quote'])): ?>
                                            <blockquote class="white-paper__quote">
                                                <?= h((string) $section['quote']) ?>
                                            </blockquote>
                                        <?php endif; ?>

                                        <?php if (!empty($section['features']) && is_array($section['features'])): ?>
                                            <div class="white-paper__feature-grid">
                                                <?php foreach ($section['features'] as $feature): ?>
                                                    <?php if (!is_array($feature)): ?>
                                                        <?php continue; ?>
                                                    <?php endif; ?>

                                                    <article class="white-paper__feature">
                                                        <h3>
                                                            <?= h((string) ($feature['title'] ?? '')) ?>
                                                        </h3>

                                                        <p>
                                                            <?= h((string) ($feature['text'] ?? '')) ?>
                                                        </p>
                                                    </article>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>

                                        <?php if (!empty($section['items']) && is_array($section['items'])): ?>
                                            <ul class="white-paper__list">
                                                <?php foreach ($section['items'] as $item): ?>
                                                    <li><?= h((string) $item) ?></li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>

                                        <?php if (!empty($section['code'])): ?>
                                            <pre class="white-paper__diagram"><code><?= h((string) $section['code']) ?></code></pre>
                                        <?php endif; ?>
                                    </section>
                                <?php endforeach; ?>
                            </div>
                        </article>
                    <?php else: ?>
                        <p class="content-page__body">
                            <?= h((string) ($page['body'] ?? 'Content will be added later.')) ?>
                        </p>
                    <?php endif; ?>

                    <?php if (!empty($page['link'])): ?>
                        <a
                            class="button button-secondary"
                            href="<?= h((string) $page['link']) ?>"
                        >
                            <?= h((string) ($page['link_label'] ?? $page['link'])) ?>
                        </a>
                    <?php endif; ?>

                    <a class="button button-secondary" href="<?= h(pageUrl('home')) ?>">
                        BACK HOME
                    </a>
                </section>
            <?php endif; ?>
        </main>

        <footer class="site-footer site-footer--dynamic" aria-label="KUZ Network footer">
        <div class="site-footer__inner">
            <p class="site-footer__text">THE KUZ NETWORK - @2026 / BUILD LOCAL / KEEP CONTROL / OWN THE STACK / VIEWS <?= h($visitCountDisplay) ?></p>
        </div>
    </footer>
    </div>

    <div class="menu-modal" id="mainMenuModal" role="dialog" aria-modal="true" aria-label="Main menu" aria-hidden="true">
        <div class="menu-modal__panel">
            <div class="menu-modal__top">
                <a class="menu-brand" href="<?= h(pageUrl('home')) ?>" aria-label="Back to home">
                    <img
                        class="menu-brand__logo"
                        src="assets/img/kuz_network_logo_transparent.png"
                        alt="KUZ Network logo"
                        width="112"
                        height="112"
                    >

                    <span class="menu-brand__copy">
                        <span class="menu-brand__title">KUZAI</span>
                        <span class="menu-brand__main">A KUZ NETWORK SOLUTION - BETA-0.01.2026</span>
                        <span class="menu-brand__sub">/ OFFICIAL PROJECT WEBSITE /</span>
                    </span>
                </a>

                <button class="menu-close" type="button" id="menuClose">
                    CLOSE
                </button>
            </div>

            <nav class="modal-nav" aria-label="Modal navigation">
                <a class="modal-nav__item" href="<?= h(pageUrl('kuz-network')) ?>">
                    KUZAI AI / WHITE PAPER
                </a>

                <a class="modal-nav__item" href="<?= h($githubUrl) ?>" target="_blank" rel="noopener noreferrer">
                    <?= h($githubLabel) ?>
                </a>
<div class="modal-nav__group">
                    <div class="modal-nav__links-row">
                        <span class="modal-nav__links-label">LINKS</span>

                        <button class="modal-nav__plus" type="button" id="linksToggle" aria-expanded="false" aria-controls="linksSubmenu">
                            +
                        </button>
                    </div>

                    <div class="modal-nav__submenu" id="linksSubmenu" hidden>
                        <?php foreach ($socialLinks as $link): ?>
                            <?php
                                $label = isset($link['label']) ? (string) $link['label'] : '';
                                $url = isset($link['url']) ? (string) $link['url'] : '#';

                                if ($label === '') {
                                    continue;
                                }
                            ?>
                            <a class="modal-nav__subitem" href="<?= h($url) ?>" <?= $url !== '#' ? 'target="_blank" rel="noopener noreferrer"' : '' ?>>
                                <?= h($label) ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>

    <script src="assets/js/menu.js?v=76"></script>
</body>
</html>
