(function ($) {
  'use strict';

  $(function () {
    var $toggle = $('[data-toggle="mobile-nav"]');
    var $menu = $('[data-mobile-nav]');

    $toggle.on('click', function (event) {
      event.preventDefault();
      $menu.toggleClass('open');
      $menu.stop(true, true).slideToggle(200);
    });

    $(document).on('click', function (event) {
      if (!$(event.target).closest('[data-mobile-nav], [data-toggle="mobile-nav"]').length) {
        if ($menu.hasClass('open')) {
          $menu.removeClass('open').slideUp(200);
        }
      }
    });

    $('a[href^="#"]').on('click', function (event) {
      var target = $(this.getAttribute('href'));
      if (target.length) {
        event.preventDefault();
        $('html, body').animate({ scrollTop: target.offset().top - 80 }, 500);
      }
    });
  });
})(jQuery);
