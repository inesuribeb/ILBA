document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('popup-global');
    if (!popup) return;

    setTimeout(function () {
        popup.hidden = false;
    }, 3000);

    function cerrarPopup() {
        popup.hidden = true;
    }

    popup.querySelector('.popup-global__close').addEventListener('click', cerrarPopup);
    popup.querySelector('.popup-global__overlay').addEventListener('click', cerrarPopup);

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !popup.hidden) {
            cerrarPopup();
        }
    });
});