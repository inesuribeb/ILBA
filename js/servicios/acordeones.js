document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.sv-tr__acordeon-btn:not(.sv-tr__acordeon-btn--link)').forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const isOpen  = content.classList.contains('is-open');

            // Cierra todos los de la misma card
            const card = btn.closest('.sv-tr__acordeones');
            card.querySelectorAll('.sv-tr__acordeon-content').forEach(c => c.classList.remove('is-open'));

            // Abre el actual si estaba cerrado
            if ( ! isOpen ) content.classList.add('is-open');
        });
    });
});