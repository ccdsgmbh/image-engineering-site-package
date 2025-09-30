(function () {
  const $doc = document;
  const toggle = $doc.querySelector('.nav-toggle');
  const nav = $doc.getElementById('primary-navigation');
  const body = $doc.body;

  if (!toggle || !nav) {
    return;
  }

  const openNav = () => {
    nav.classList.add('is-open');
    toggle.setAttribute('aria-expanded', 'true');
    body.classList.add('nav-open');
  };

  const closeNav = () => {
    nav.classList.remove('is-open');
    toggle.setAttribute('aria-expanded', 'false');
    body.classList.remove('nav-open');
  };

  toggle.addEventListener('click', () => {
    if (nav.classList.contains('is-open')) {
      closeNav();
    } else {
      openNav();
    }
  });

  $doc.addEventListener('keyup', (event) => {
    if (event.key === 'Escape') {
      closeNav();
    }
  });

  window.addEventListener('resize', () => {
    if (window.innerWidth > 860) {
      closeNav();
    }
  });

  const dropdownParents = nav.querySelectorAll('.nav__item');
  dropdownParents.forEach((item) => {
    const link = item.querySelector('a');
    if (!link) {
      return;
    }

    link.addEventListener('focus', () => {
      item.classList.add('is-focused');
    });

    link.addEventListener('blur', () => {
      item.classList.remove('is-focused');
    });
  });
})();
