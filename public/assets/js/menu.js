'use strict';

const body = document.body;
const menuModal = document.getElementById('mainMenuModal');
const menuOpen = document.getElementById('menuOpen');
const menuClose = document.getElementById('menuClose');
const heroExplore = document.getElementById('heroExplore');
const linksToggle = document.getElementById('linksToggle');
const linksSubmenu = document.getElementById('linksSubmenu');

let lastFocusedElement = null;

function resetLinks() {
    if (!linksToggle || !linksSubmenu) {
        return;
    }

    linksToggle.setAttribute('aria-expanded', 'false');
    linksToggle.textContent = '+';
    linksSubmenu.hidden = true;
}

function openMenu() {
    if (!menuModal) {
        return;
    }

    lastFocusedElement = document.activeElement;

    resetLinks();

    menuModal.classList.add('is-open');
    menuModal.setAttribute('aria-hidden', 'false');
    body.classList.add('menu-open');

    if (menuClose) {
        menuClose.focus();
    }
}

function closeMenu() {
    if (!menuModal) {
        return;
    }

    resetLinks();

    menuModal.classList.remove('is-open');
    menuModal.setAttribute('aria-hidden', 'true');
    body.classList.remove('menu-open');

    if (lastFocusedElement && typeof lastFocusedElement.focus === 'function') {
        lastFocusedElement.focus();
    }
}

function toggleLinks(event) {
    if (event) {
        event.preventDefault();
        event.stopPropagation();
    }

    if (!linksToggle || !linksSubmenu) {
        return;
    }

    const isExpanded = linksToggle.getAttribute('aria-expanded') === 'true';
    const nextExpanded = !isExpanded;

    linksToggle.setAttribute('aria-expanded', String(nextExpanded));
    linksToggle.textContent = nextExpanded ? '-' : '+';
    linksSubmenu.hidden = !nextExpanded;
}

resetLinks();

if (menuOpen) {
    menuOpen.addEventListener('click', openMenu);
}

if (heroExplore) {
    heroExplore.addEventListener('click', openMenu);
}

if (menuClose) {
    menuClose.addEventListener('click', closeMenu);
}

if (linksToggle) {
    linksToggle.addEventListener('click', toggleLinks);
}

if (menuModal) {
    menuModal.addEventListener('click', (event) => {
        if (event.target === menuModal) {
            closeMenu();
        }
    });

    const modalLinks = menuModal.querySelectorAll('a');

    for (const link of modalLinks) {
        link.addEventListener('click', () => {
            closeMenu();
        });
    }
}

document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape' && menuModal && menuModal.classList.contains('is-open')) {
        closeMenu();
    }
});


/* STEP-67-HOME-EXPANDABLE-ROWS */
(function () {
    const toggles = document.querySelectorAll('[data-home-toggle]');

    toggles.forEach((toggle) => {
        const submenuId = toggle.getAttribute('aria-controls');

        if (!submenuId) {
            return;
        }

        const submenu = document.getElementById(submenuId);

        if (!submenu) {
            return;
        }

        toggle.addEventListener('click', function () {
            const isExpanded = toggle.getAttribute('aria-expanded') === 'true';

            toggle.setAttribute('aria-expanded', String(!isExpanded));
            submenu.hidden = isExpanded;
        });
    });
})();
