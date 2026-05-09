<?php

declare(strict_types=1);

$config = require __DIR__ . '/../app/config.php';
$pages = require __DIR__ . '/../app/pages.php';

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

?><!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?= h($pageTitle) ?></title>
    <meta name="description" content="<?= h((string) $metaDescription) ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="application-name" content="<?= h($siteName) ?>">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="assets/css/style.css?v=10">
</head>
<body class="page-<?= h($currentPage) ?>">
    <div class="site-shell">
        <header class="site-header" aria-label="Main header">
            <a class="brand-mark" href="<?= h(pageUrl('home')) ?>" aria-label="Back to home">
                <img
                    class="brand-mark__logo"
                    src="assets/img/kuz_network_logo_transparent.png"
                    alt="KUZ Network logo"
                    width="130"
                    height="88"
                >
                <span class="brand-mark__main"><?= h($shortName) ?></span>
                <span class="brand-mark__sub">OPEN SOURCE PROJECT</span>
            </a>

            <button class="menu-trigger" type="button" id="menuOpen" aria-haspopup="dialog" aria-controls="mainMenuModal">
                MENU
            </button>
        </header>

        <main class="site-main">
            <?php if ($currentPage === 'home'): ?>
                <section class="hero" aria-labelledby="heroTitle">
                    <div class="hero__inner">
                        <p class="hero__kicker"><?= h($siteTagline) ?></p>

                        <h1 class="hero__title" id="heroTitle">
                            KUZAI - THE LOCAL AI
                        </h1>

                        <p class="hero__statement">
                            <span class="hero__statement-line">LOCAL AI IS NOT JUST ABOUT RUNNING A MODEL.</span>
                            <span class="hero__statement-line">IT IS ABOUT OWNING THE FULL STACK.</span>
                        </p>

                        <p class="hero__text">
                            A local AI interface built to keep inference, files, search, and voice synthesis under user control.
                        </p>

                        <div class="hero__actions">
                            <button class="button button-primary" type="button" id="heroExplore">
                                EXPLORE
                            </button>
                        </div>
                    </div>

                    <div class="hero__meta" aria-label="Project keywords">
                        <span>LOCAL INFERENCE</span>
                        <span>LOCAL SEARCH</span>
                        <span>LOCAL VOICE</span>
                        <span>OPEN STACK</span>
                    </div>
                </section>
            <?php else: ?>
                <section class="content-page" aria-labelledby="pageTitle">
                    <p class="content-page__kicker">
                        <?= h((string) ($page['kicker'] ?? $siteBrand)) ?>
                    </p>

                    <h1 class="content-page__title" id="pageTitle">
                        <?= h((string) $page['title']) ?>
                    </h1>

                    <p class="content-page__body">
                        <?= h((string) ($page['body'] ?? 'Content will be added later.')) ?>
                    </p>

                    <a class="button button-secondary" href="<?= h(pageUrl('home')) ?>">
                        BACK HOME
                    </a>
                </section>
            <?php endif; ?>
        </main>

        <footer class="site-footer">
            <span><?= h($siteDomain) ?></span>
            <span><?= h($publicIp) ?></span>
            <span><?= h(strtoupper($environment)) ?></span>
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
                        width="130"
                        height="88"
                    >
                    <span class="menu-brand__main"><?= h($shortName) ?></span>
                    <span class="menu-brand__sub">OPEN SOURCE PROJECT</span>
                </a>

                <button class="menu-close" type="button" id="menuClose">
                    CLOSE
                </button>
            </div>

            <nav class="modal-nav" aria-label="Modal navigation">
                <a class="modal-nav__item" href="<?= h(pageUrl('kuz-network')) ?>">
                    THE KUZ NETWORK / WHITE PAPER
                </a>

                <a class="modal-nav__item" href="<?= h(pageUrl('kuzai')) ?>">
                    KUZAI / DOCUMENTATION
                </a>

                <a class="modal-nav__item" href="<?= h($githubUrl) ?>" target="_blank" rel="noopener noreferrer">
                    <?= h($githubLabel) ?>
                </a>

                <a class="modal-nav__item" href="<?= h(pageUrl('kontakt')) ?>">
                    KONTAKT
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

    <script src="assets/js/menu.js?v=10"></script>
</body>
</html>
