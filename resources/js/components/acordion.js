
export function faqAccordionInit() {
    const buttons = document.querySelectorAll('.faq-question');
    buttons.forEach(btn => {
        btn.addEventListener('click', function() {
            const card = btn.parentElement;
            const arrow = btn.querySelector('.faq-arrow');
            if (!card.classList.contains('open')) {
                card.classList.add('open');
                arrow.innerHTML = '&#9650;';
            } else {
                card.classList.remove('open');
                arrow.innerHTML = '&#9660;';
            }
        });
    });
}

// Inicializar automáticamente si se importa como módulo
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', faqAccordionInit);
} else {
    faqAccordionInit();
}