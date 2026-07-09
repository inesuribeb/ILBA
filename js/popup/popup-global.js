document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('popup-global');
    if (!popup) return;

    const DELAY_MS = 3500;
    const STORAGE_KEY = 'ilba_popup_visto';

    // No volver a mostrar en la misma sesión de navegación
    if (sessionStorage.getItem(STORAGE_KEY) === '1') return;

    setTimeout(function () {
        popup.hidden = false;
        sessionStorage.setItem(STORAGE_KEY, '1');
    }, DELAY_MS);

    function cerrarPopup() {
        popup.hidden = true;
    }

    popup.querySelector('.popup-global__close').addEventListener('click', cerrarPopup);
    popup.querySelector('.popup-global__overlay').addEventListener('click', cerrarPopup);

    // Cerrar con tecla Escape
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !popup.hidden) {
            cerrarPopup();
        }
    });
});