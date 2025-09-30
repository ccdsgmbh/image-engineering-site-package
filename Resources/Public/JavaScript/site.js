(function () {
    const root = document.documentElement;
    const header = document.querySelector('.site-header');
    const toggle = document.querySelector('.site-header__toggle');
    const nav = document.getElementById('primary-navigation');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            const expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', String(!expanded));
            nav.classList.toggle('site-header__nav--open', !expanded);
        });

        document.addEventListener('click', function (event) {
            if (!nav.contains(event.target) && !toggle.contains(event.target)) {
                toggle.setAttribute('aria-expanded', 'false');
                nav.classList.remove('site-header__nav--open');
            }
        });
    }

    const handleScroll = function () {
        if (!header) {
            return;
        }
        const scrolled = window.scrollY > 24;
        header.classList.toggle('site-header--compact', scrolled);
    };

    document.addEventListener('scroll', handleScroll, { passive: true });
    handleScroll();
})();
