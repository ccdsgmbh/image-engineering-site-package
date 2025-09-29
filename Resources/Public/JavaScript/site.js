(function () {
  const sliderComponents = document.querySelectorAll('[data-component="site-slider"]');

  sliderComponents.forEach((slider) => {
    const slides = slider.querySelectorAll('[data-slide-index]');
    if (!slides.length) {
      return;
    }

    const dots = slider.querySelectorAll('[data-slider-target]');
    const prevButton = slider.querySelector('[data-slider-action="prev"]');
    const nextButton = slider.querySelector('[data-slider-action="next"]');
    let current = 0;
    let intervalId;

    const setActiveSlide = (index) => {
      current = (index + slides.length) % slides.length;
      slides.forEach((slide, idx) => {
        slide.setAttribute('data-slide-active', idx === current ? '1' : '0');
      });
      dots.forEach((dot, idx) => {
        dot.classList.toggle('is-active', idx === current);
      });
    };

    const next = () => setActiveSlide(current + 1);
    const prev = () => setActiveSlide(current - 1);

    dots.forEach((dot) => {
      dot.addEventListener('click', () => {
        const target = Number(dot.getAttribute('data-slider-target'));
        if (!Number.isNaN(target)) {
          setActiveSlide(target);
          restart();
        }
      });
    });

    if (prevButton) {
      prevButton.addEventListener('click', () => {
        prev();
        restart();
      });
    }

    if (nextButton) {
      nextButton.addEventListener('click', () => {
        next();
        restart();
      });
    }

    const restart = () => {
      if (intervalId) {
        window.clearInterval(intervalId);
      }
      intervalId = window.setInterval(next, 6000);
    };

    slider.addEventListener('mouseenter', () => window.clearInterval(intervalId));
    slider.addEventListener('mouseleave', restart);

    setActiveSlide(0);
    restart();
  });
})();
