document.addEventListener( 'DOMContentLoaded', () => {

    const btn   = document.querySelector( '.header-mobile__menu-btn' );
    const menu  = document.querySelector( '.header-mobile__menu' );
    const label = document.querySelector( '.header-mobile__menu-label' );
    if ( ! btn || ! menu ) return;

    const panel1 = document.querySelector( '.header-mobile__panel-1' );

    // --- Toggle menú ---
    btn.addEventListener( 'click', () => {
        const isOpen = menu.classList.toggle( 'is-open' );
        btn.setAttribute( 'aria-expanded', isOpen );
        label.textContent = isOpen ? 'Cerrar' : 'Menú';

        // Al abrir siempre muestra panel 1
        if ( isOpen ) {
            document.querySelectorAll( '.header-mobile__panel-2' ).forEach( p => p.classList.remove( 'is-active' ) );
            panel1.classList.add( 'is-active' );
        }
    });

    // --- Abrir panel 2 ---
    document.querySelectorAll( '.header-mobile__nav-btn[data-seccion]' ).forEach( navBtn => {
        navBtn.addEventListener( 'click', () => {
            const key    = navBtn.dataset.seccion;
            const panel2 = document.querySelector( `.header-mobile__panel-2[data-panel-2="${key}"]` );
            if ( panel2 ) {
                panel1.classList.remove( 'is-active' );
                panel2.classList.add( 'is-active' );
            }
        });
    });

    // --- Volver al panel 1 ---
    document.querySelectorAll( '.header-mobile__back-btn' ).forEach( backBtn => {
        backBtn.addEventListener( 'click', () => {
            document.querySelectorAll( '.header-mobile__panel-2' ).forEach( p => p.classList.remove( 'is-active' ) );
            panel1.classList.add( 'is-active' );
        });
    });

    // --- Rotación de imágenes ---
    const imagenes = Array.from( document.querySelectorAll( '.header-mobile__imagen-item' ) );
    if ( imagenes.length ) {
        let current = 0;
        imagenes[0].classList.add( 'is-active' );

        setInterval( () => {
            imagenes[current].classList.remove( 'is-active' );
            current = ( current + 1 ) % imagenes.length;
            imagenes[current].classList.add( 'is-active' );
        }, 2000 );
    }

});