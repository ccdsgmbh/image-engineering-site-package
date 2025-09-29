(function ($) {
  $(function () {
    const header = $('[data-site-header]');
    const toggleButton = $('[data-toggle-navigation]');
    const mobileNav = $('[data-mobile-navigation]');

    $(window).on('scroll', function () {
      const isScrolled = $(window).scrollTop() > 40;
      header.toggleClass('bg-slate-900/90 shadow-lg backdrop-blur', isScrolled);
    });

    toggleButton.on('click', function () {
      mobileNav.stop(true, true).slideToggle(180);
    });

    $('a[data-scroll]').on('click', function (event) {
      const targetId = $(this).attr('href');
      if (targetId && targetId.startsWith('#')) {
        event.preventDefault();
        const target = $(targetId);
        if (target.length) {
          const offset = target.offset().top - 80;
          $('html, body').animate({ scrollTop: offset }, 600);
        }
        if ($(window).width() < 768) {
          mobileNav.slideUp(180);
        }
      }
    });
  });
})(jQuery);
