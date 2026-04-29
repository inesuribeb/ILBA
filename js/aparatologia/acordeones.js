document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('.ap-acordeon__btn').forEach(btn => {
        btn.addEventListener('click', () => {
            const content = btn.nextElementSibling;
            const isOpen  = content.classList.contains('is-open');

            // Cierra todos
            document.querySelectorAll('.ap-acordeon__content').forEach(c => c.classList.remove('is-open'));

            // Abre el actual si estaba cerrado
            if ( ! isOpen ) content.classList.add('is-open');
        });
    });
});