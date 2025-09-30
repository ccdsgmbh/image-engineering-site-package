(function ($) {
    'use strict';

    $(function () {
        var $toggleButtons = $('[data-navigation-toggle]');
        var $mobileMenu = $('[data-navigation-mobile]');
        var $accordions = $('[data-navigation-accordion]');

        function closeMobileMenu() {
            $mobileMenu.removeClass('is-active');
            $('body').removeClass('is-nav-open');
            $accordions.removeClass('is-open');
            $('[data-navigation-accordion-panel]').removeClass('is-open');
        }

        $toggleButtons.on('click', function () {
            var isActive = $mobileMenu.toggleClass('is-active').hasClass('is-active');
            $('body').toggleClass('is-nav-open', isActive);
        });

        $accordions.on('click', function () {
            var $button = $(this);
            var $panel = $button.next('[data-navigation-accordion-panel]');
            var isOpen = $button.hasClass('is-open');

            if (isOpen) {
                $button.removeClass('is-open');
                $panel.removeClass('is-open');
            } else {
                $accordions.not($button).removeClass('is-open');
                $('[data-navigation-accordion-panel]').not($panel).removeClass('is-open');
                $button.addClass('is-open');
                $panel.addClass('is-open');
            }
        });

        $(window).on('resize orientationchange', function () {
            if (window.matchMedia('(min-width: 1536px)').matches) {
                closeMobileMenu();
            }
        });

        $(window).on('keydown', function (event) {
            if (event.key === 'Escape') {
                closeMobileMenu();
            }
        });
    });
})(jQuery);
