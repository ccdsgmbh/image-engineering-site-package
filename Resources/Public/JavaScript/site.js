(function ($) {
  'use strict';

  $(function () {
    var $header = $('[data-site-header]');
    var $toggle = $('[data-site-mobile-toggle]');
    var $mobileMenu = $('#site-mobile-menu');

    if (!$header.length || !$toggle.length || !$mobileMenu.length) {
      return;
    }

    var closeMenu = function () {
      $header.removeClass('is-open');
      $toggle.attr('aria-expanded', 'false');
      $mobileMenu.attr('hidden', 'hidden');
      $('body').removeClass('site-lock-scroll');
    };

    var openMenu = function () {
      $header.addClass('is-open');
      $toggle.attr('aria-expanded', 'true');
      $mobileMenu.removeAttr('hidden');
      $('body').addClass('site-lock-scroll');
    };

    $toggle.on('click', function () {
      if ($header.hasClass('is-open')) {
        closeMenu();
      } else {
        openMenu();
      }
    });

    $(window).on('resize', function () {
      if (window.innerWidth >= 960) {
        closeMenu();
      }
    });

    $(document).on('keyup', function (event) {
      if (event.key === 'Escape') {
        closeMenu();
      }
    });
  });
})(jQuery);
