document.addEventListener('DOMContentLoaded', function () {
    const modal     = document.getElementById('ev-modal');
    const toggleBtn = document.getElementById('ev-modal-toggle');

    if (!modal || !toggleBtn) return;

    const closeBtn = modal.querySelector('.ev-modal__close');
    if (!closeBtn) return;

    // Cerrar modal → mostrar botón + Info
    closeBtn.addEventListener('click', function () {
        modal.classList.add('is-hidden');
        toggleBtn.classList.add('is-visible');
    });

    // Click en + Info → abrir modal, ocultar botón
    toggleBtn.addEventListener('click', function () {
        modal.classList.remove('is-hidden');
        toggleBtn.classList.remove('is-visible');
    });
});