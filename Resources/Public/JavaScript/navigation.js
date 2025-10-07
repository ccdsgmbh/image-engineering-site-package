(function () {
  const nav = document.querySelector('[data-mobile-nav]');
  const trigger = document.querySelector('[data-mobile-nav-trigger]');

  if (!nav || !trigger) {
    return;
  }

  const panel = nav.querySelector('[data-mobile-nav-panel]');
  const close = nav.querySelector('[data-mobile-nav-close]');
  const backdrop = nav.querySelector('[data-mobile-nav-backdrop]');
  const subToggles = nav.querySelectorAll('[data-mobile-nav-subtoggle]');
  const links = nav.querySelectorAll('.mobile-nav__link');

  if (!panel) {
    return;
  }

  const openClass = 'mobile-nav--open';
  const bodyOpenClass = 'mobile-nav-open';

  function openNav() {
    nav.classList.add(openClass);
    document.body.classList.add(bodyOpenClass);
    panel.setAttribute('aria-hidden', 'false');
    trigger.setAttribute('aria-expanded', 'true');
    if (typeof panel.focus === 'function') {
      panel.focus({ preventScroll: true });
    }
  }

  function closeNav() {
    nav.classList.remove(openClass);
    document.body.classList.remove(bodyOpenClass);
    panel.setAttribute('aria-hidden', 'true');
    trigger.setAttribute('aria-expanded', 'false');
    if (typeof trigger.focus === 'function') {
      trigger.focus({ preventScroll: true });
    }
  }

  function toggleSubmenu(button) {
    const item = button.closest('.mobile-nav__item');
    if (!item) {
      return;
    }

    const isOpen = item.classList.toggle('mobile-nav__item--open');
    button.setAttribute('aria-expanded', String(isOpen));
  }

  trigger.addEventListener('click', function () {
    const isOpen = nav.classList.contains(openClass);
    if (isOpen) {
      closeNav();
    } else {
      openNav();
    }
  });

  if (close) {
    close.addEventListener('click', closeNav);
  }

  if (backdrop) {
    backdrop.addEventListener('click', closeNav);
  }

  subToggles.forEach(function (button) {
    button.addEventListener('click', function (event) {
      event.preventDefault();
      event.stopPropagation();
      toggleSubmenu(button);
    });
  });

  links.forEach(function (link) {
    link.addEventListener('click', closeNav);
  });

  document.addEventListener('keydown', function (event) {
    if (event.key === 'Escape' && nav.classList.contains(openClass)) {
      closeNav();
    }
  });

  // Ensure panel can receive focus when opened
  if (!panel.hasAttribute('tabindex')) {
    panel.setAttribute('tabindex', '-1');
  }

  // Reset state if viewport becomes desktop sized
  const mq = window.matchMedia('(min-width: 1536px)');
  const handleBreakpointChange = function (event) {
    if (event.matches) {
      nav.classList.remove(openClass);
      document.body.classList.remove(bodyOpenClass);
      panel.setAttribute('aria-hidden', 'true');
      trigger.setAttribute('aria-expanded', 'false');
      subToggles.forEach(function (button) {
        button.setAttribute('aria-expanded', 'false');
      });
      nav.querySelectorAll('.mobile-nav__item--open').forEach(function (item) {
        item.classList.remove('mobile-nav__item--open');
      });
    }
  };

  if (typeof mq.addEventListener === 'function') {
    mq.addEventListener('change', handleBreakpointChange);
  } else if (typeof mq.addListener === 'function') {
    mq.addListener(handleBreakpointChange);
  }

  // Close menu if focus leaves panel via keyboard tabbing
  panel.addEventListener('focusout', function (event) {
    if (!nav.classList.contains(openClass)) {
      return;
    }

    const related = event.relatedTarget;
    if (related && panel.contains(related)) {
      return;
    }

    if (related === trigger) {
      return;
    }

    closeNav();
  });
})();
