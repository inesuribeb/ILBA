// document.addEventListener('DOMContentLoaded', function () {
//     const popup = document.getElementById('popup-global');
//     if (!popup) return;

//     setTimeout(function () {
//         popup.hidden = false;
//     }, 3000);

//     function cerrarPopup() {
//         popup.hidden = true;
//     }

//     popup.querySelector('.popup-global__close').addEventListener('click', cerrarPopup);
//     popup.querySelector('.popup-global__overlay').addEventListener('click', cerrarPopup);

//     document.addEventListener('keydown', function (e) {
//         if (e.key === 'Escape' && !popup.hidden) {
//             cerrarPopup();
//         }
//     });
// });


document.addEventListener('DOMContentLoaded', function () {
    const popup = document.getElementById('popup-global');
    if (!popup) return; // Si no existe el popup en esta página, no hacemos nada

    const DELAY_MS = 3000; // Tiempo de espera antes de mostrar el popup (3s)
    const STORAGE_KEY = 'ilba_popup_visto'; // Clave para guardar en sessionStorage

    // Si ya se mostró en esta sesión de navegador, no lo volvemos a mostrar
    // (se resetea cuando el usuario cierra pestaña/navegador)
    if (sessionStorage.getItem(STORAGE_KEY) === '1') return;

    setTimeout(function () {
        popup.hidden = false;
        sessionStorage.setItem(STORAGE_KEY, '1'); // Marcamos como visto para esta sesión
    }, DELAY_MS);

    function cerrarPopup() {
        popup.hidden = true;
    }

    // Cerrar al hacer clic en el botón de cerrar (icono SVG)
    popup.querySelector('.popup-global__close').addEventListener('click', cerrarPopup);

    // Cerrar al hacer clic fuera del popup (en el overlay oscuro)
    popup.querySelector('.popup-global__overlay').addEventListener('click', cerrarPopup);

    // Cerrar con la tecla Escape (accesibilidad)
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !popup.hidden) {
            cerrarPopup();
        }
    });
});