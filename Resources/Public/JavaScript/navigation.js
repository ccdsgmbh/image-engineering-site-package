(function () {
  var mobileNav = document.querySelector('[data-mobile-nav]');
  var mobileTrigger = document.querySelector('[data-mobile-nav-trigger]');
  var desktopNav = document.querySelector('[data-main-nav]');
  var desktopItems = desktopNav ? Array.prototype.slice.call(desktopNav.querySelectorAll('[data-nav-item]')) : [];
  var desktopMatch = window.matchMedia('(min-width: 1536px)');

  var mobileOpenClass = 'mobile-nav--open';
  var bodyOpenClass = 'mobile-nav-open';
  var desktopItemOpenClass = 'main-nav__item--open';

  var closeMobileNav = function () {};
  var isMobileNavOpen = function () {
    return false;
  };
  var closeAllDesktop = function () {};

  if (mobileNav && mobileTrigger) {
    var panel = mobileNav.querySelector('[data-mobile-nav-panel]');

    if (panel) {
      if (!panel.hasAttribute('tabindex')) {
        panel.setAttribute('tabindex', '-1');
      }

      var closeButton = mobileNav.querySelector('[data-mobile-nav-close]');
      var backdrop = mobileNav.querySelector('[data-mobile-nav-backdrop]');
      var subToggles = mobileNav.querySelectorAll('[data-mobile-nav-subtoggle]');
      var links = mobileNav.querySelectorAll('.mobile-nav__link');
      var openClass = mobileOpenClass;

      var openNav = function () {
        mobileNav.classList.add(openClass);
        document.body.classList.add(bodyOpenClass);
        panel.setAttribute('aria-hidden', 'false');
        mobileTrigger.setAttribute('aria-expanded', 'true');
        if (typeof panel.focus === 'function') {
          panel.focus({ preventScroll: true });
        }
      };

      closeMobileNav = function (returnFocus) {
        mobileNav.classList.remove(openClass);
        document.body.classList.remove(bodyOpenClass);
        panel.setAttribute('aria-hidden', 'true');
        mobileTrigger.setAttribute('aria-expanded', 'false');
        if (returnFocus !== false && typeof mobileTrigger.focus === 'function') {
          mobileTrigger.focus({ preventScroll: true });
        }
      };

      isMobileNavOpen = function () {
        return mobileNav.classList.contains(openClass);
      };

      var toggleSubmenu = function (button) {
        var item = button.closest('.mobile-nav__item');
        if (!item) {
          return;
        }
        var isOpen = item.classList.toggle('mobile-nav__item--open');
        button.setAttribute('aria-expanded', String(isOpen));
      };

      mobileTrigger.addEventListener('click', function () {
        if (mobileNav.classList.contains(openClass)) {
          closeMobileNav();
        } else {
          openNav();
        }
      });

      if (closeButton) {
        closeButton.addEventListener('click', function () {
          closeMobileNav();
        });
      }

      if (backdrop) {
        backdrop.addEventListener('click', function () {
          closeMobileNav(false);
        });
      }

      subToggles.forEach(function (button) {
        button.addEventListener('click', function (event) {
          event.preventDefault();
          event.stopPropagation();
          toggleSubmenu(button);
        });
      });

      links.forEach(function (link) {
        link.addEventListener('click', function () {
          closeMobileNav(false);
        });
      });

      panel.addEventListener('focusout', function (event) {
        if (!mobileNav.classList.contains(openClass)) {
          return;
        }
        var related = event.relatedTarget;
        if (related && (panel.contains(related) || related === mobileTrigger)) {
          return;
        }
        closeMobileNav(false);
      });

      var handleBreakpointChange = function () {
        closeMobileNav(false);
        closeAllDesktop();
        mobileNav.querySelectorAll('.mobile-nav__item--open').forEach(function (item) {
          item.classList.remove('mobile-nav__item--open');
        });
        subToggles.forEach(function (button) {
          button.setAttribute('aria-expanded', 'false');
        });
      };

      if (typeof desktopMatch.addEventListener === 'function') {
        desktopMatch.addEventListener('change', handleBreakpointChange);
      } else if (typeof desktopMatch.addListener === 'function') {
        desktopMatch.addListener(handleBreakpointChange);
      }
    }
  }

  if (desktopNav && desktopItems.length) {
    var currentDesktopItem = null;

    var openDesktopItem = function (item) {
      if (!item || !desktopMatch.matches) {
        return;
      }
      if (currentDesktopItem && currentDesktopItem !== item) {
        closeDesktopItem(currentDesktopItem);
      }
      var trigger = item.querySelector('[data-nav-trigger]');
      var flyout = item.querySelector('[data-nav-flyout]');
      if (!trigger || !flyout) {
        return;
      }
      item.classList.add(desktopItemOpenClass);
      flyout.setAttribute('aria-hidden', 'false');
      trigger.setAttribute('aria-expanded', 'true');
      currentDesktopItem = item;
    };

    var closeDesktopItem = function (item) {
      if (!item) {
        return;
      }
      var trigger = item.querySelector('[data-nav-trigger]');
      var flyout = item.querySelector('[data-nav-flyout]');
      if (trigger) {
        trigger.setAttribute('aria-expanded', 'false');
      }
      if (flyout) {
        flyout.setAttribute('aria-hidden', 'true');
      }
      item.classList.remove(desktopItemOpenClass);
      if (currentDesktopItem === item) {
        currentDesktopItem = null;
      }
    };

    closeAllDesktop = function () {
      desktopItems.forEach(function (item) {
        closeDesktopItem(item);
      });
    };

    desktopItems.forEach(function (item) {
      var trigger = item.querySelector('[data-nav-trigger]');
      var flyout = item.querySelector('[data-nav-flyout]');

      if (!trigger || !flyout) {
        return;
      }

      item.addEventListener('mouseenter', function () {
        if (!desktopMatch.matches) {
          return;
        }
        openDesktopItem(item);
      });

      item.addEventListener('mouseleave', function () {
        if (!desktopMatch.matches) {
          return;
        }
        closeDesktopItem(item);
      });

      item.addEventListener('focusin', function () {
        if (!desktopMatch.matches) {
          return;
        }
        openDesktopItem(item);
      });

      item.addEventListener('focusout', function (event) {
        if (!desktopMatch.matches) {
          return;
        }
        if (!item.contains(event.relatedTarget)) {
          closeDesktopItem(item);
        }
      });

      trigger.addEventListener('keydown', function (event) {
        if (event.key === 'Escape') {
          closeDesktopItem(item);
          trigger.blur();
        }
      });
    });

    desktopNav.addEventListener('mouseleave', function () {
      closeAllDesktop();
    });

    document.addEventListener('click', function (event) {
      if (desktopNav && !desktopNav.contains(event.target)) {
        closeAllDesktop();
      }
    });

    if (typeof desktopMatch.addEventListener === 'function') {
      desktopMatch.addEventListener('change', function () {
        if (!desktopMatch.matches) {
          closeAllDesktop();
        }
      });
    } else if (typeof desktopMatch.addListener === 'function') {
      desktopMatch.addListener(function (event) {
        if (!event.matches) {
          closeAllDesktop();
        }
      });
    }
  }

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape') {
      if (isMobileNavOpen()) {
        closeMobileNav();
      }
      closeAllDesktop();
    }
  });
})();
