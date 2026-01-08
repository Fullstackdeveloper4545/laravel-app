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
