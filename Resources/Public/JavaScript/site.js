(function () {
    const ready = function (callback) {
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', callback);
        } else {
            callback();
        }
    };

    ready(function () {
        const body = document.body;
        const navTrigger = document.querySelector('[data-mobile-nav-trigger]');
        const navPanel = document.querySelector('[data-mobile-nav-panel]');

        if (navTrigger && navPanel) {
            navTrigger.addEventListener('click', function () {
                const isHidden = navPanel.classList.contains('hidden');
                if (isHidden) {
                    navPanel.classList.remove('hidden');
                    navPanel.classList.add('open');
                    body.classList.add('overflow-hidden');
                } else {
                    navPanel.classList.add('hidden');
                    navPanel.classList.remove('open');
                    body.classList.remove('overflow-hidden');
                }
            });
        }

        const standardsToggle = document.querySelector('[data-standards-toggle]');
        const standardsPanel = document.querySelector('[data-standards-panel]');

        if (standardsToggle && standardsPanel) {
            const label = standardsToggle.querySelector('[data-standards-label]');
            const icon = standardsToggle.querySelector('[data-standards-icon]');

            standardsToggle.addEventListener('click', function () {
                const isOpen = standardsPanel.classList.contains('open');
                if (isOpen) {
                    standardsPanel.classList.remove('open');
                    standardsPanel.classList.add('hidden');
                    standardsToggle.setAttribute('aria-expanded', 'false');
                    if (label) {
                        label.textContent = 'See all Standards';
                    }
                    if (icon) {
                        icon.style.transform = 'rotate(0deg)';
                    }
                } else {
                    standardsPanel.classList.add('open');
                    standardsPanel.classList.remove('hidden');
                    standardsToggle.setAttribute('aria-expanded', 'true');
                    if (label) {
                        label.textContent = 'Hide Standards';
                    }
                    if (icon) {
                        icon.style.transform = 'rotate(180deg)';
                    }
                }
            });
        }
    });
})();
