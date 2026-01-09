import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach((item) => {
        const header = item.querySelector('.faq-item__header');
        if (!header) return;
        header.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });

    const pricingFaqItems = document.querySelectorAll('.pricing-faq__item');
    pricingFaqItems.forEach((item) => {
        const trigger = item.querySelector('.pricing-faq__question');
        if (!trigger) return;
        trigger.addEventListener('click', () => {
            item.classList.toggle('is-open');
        });
    });
});

function fixButtonBorder() {
  const buttons = document.querySelectorAll('.btn-svg, .btn');
  buttons.forEach((btn) => {
    const svg = btn.querySelector('.border-svg, .svg');
    const rect = btn.querySelector('.border-path, .path');
    if (!svg || !rect) return;

    const w = btn.offsetWidth;
    const h = btn.offsetHeight;
    const r = h / 2;
    if (!w || !h) return;

    svg.setAttribute('viewBox', `0 0 ${w} ${h}`);

    rect.setAttribute('x', 0.5);
    rect.setAttribute('y', 0.5);
    rect.setAttribute('width', w - 1);
    rect.setAttribute('height', h - 1);
    rect.setAttribute('rx', r);
    rect.setAttribute('ry', r);

    const length = rect.getTotalLength();
    const dash = length * 0.06;
    const gap = length - dash;

    rect.style.strokeDasharray = `${dash} ${gap}`;
    rect.style.strokeDashoffset = 0;

    rect.getAnimations().forEach((animation) => animation.cancel());
    rect.animate(
      [
        { strokeDashoffset: 0 },
        { strokeDashoffset: -length }
      ],
      {
        duration: 2500,
        iterations: Infinity,
        easing: "linear"
      }
    );
  });
}

fixButtonBorder();
window.addEventListener('resize', fixButtonBorder);
