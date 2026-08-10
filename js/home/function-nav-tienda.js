/**
 * Function: Nav Tienda
 * Archivo: js/home/function-nav-tienda.js
 *
 * Carrusel de la sección Home — Tienda.
 * Autoplay infinito hasta que el usuario interactúa con las flechas;
 * a partir de ahí, navegación manual 1 a 1 sin loop.
 */

document.addEventListener( 'DOMContentLoaded', () => {

    const container = document.querySelector( '.home-tienda__cards' );
    const prevBtn    = document.querySelector( '.home-tienda__nav-arrow--prev' );
    const nextBtn    = document.querySelector( '.home-tienda__nav-arrow--next' );

    if ( ! container ) return;

    const cards     = Array.from( container.querySelectorAll( '.home-tienda__card' ) );
    const cardCount = cards.length;

    if ( ! cardCount ) return;

    const cardWidth = cards[0].getBoundingClientRect().width;

    // Clones para el loop infinito del autoplay.
    cards.forEach( card => {
        const clone = card.cloneNode( true );
        container.appendChild( clone );
    } );

    let current      = 0;
    let isMoving      = false;
    let autoplayTimer = null;
    let manualMode    = false;

    const setTransform = ( withTransition ) => {
        container.style.transition = withTransition
            ? 'transform 0.4s cubic-bezier(0.25, 0.1, 0.25, 1)'
            : 'none';
        container.style.transform = `translateX(-${ current * cardWidth }px)`;
    };

    const updateButtonsState = () => {
        if ( ! prevBtn || ! nextBtn ) return;
        prevBtn.disabled = current <= 0;
        nextBtn.disabled = current >= cardCount - 1;
    };

    // --- Autoplay (loop infinito con clones) ---

    const moveNext = () => {
        if ( isMoving ) return;
        isMoving = true;

        current++;
        setTransform( true );

        setTimeout( () => {
            if ( current >= cardCount ) {
                current = 0;
                setTransform( false );
            }
            isMoving = false;
        }, 420 );
    };

    const startAutoplay = () => {
        autoplayTimer = setInterval( moveNext, 2500 );
    };

    const stopAutoplay = () => {
        clearInterval( autoplayTimer );
        autoplayTimer = null;
    };

    startAutoplay();

    // --- Modo manual (1 a 1, sin loop) ---

    const enterManualMode = () => {
        if ( manualMode ) return;
        manualMode = true;

        stopAutoplay();

        // Normaliza la posición por si el autoplay estaba a mitad de loop.
        current = current % cardCount;
        setTransform( false );
        // Forzar reflow para que el siguiente cambio sí transicione.
        void container.offsetWidth;

        updateButtonsState();
    };

    const manualMove = ( direction ) => {
        enterManualMode();

        if ( isMoving ) return;

        const next = current + direction;
        if ( next < 0 || next > cardCount - 1 ) return;

        isMoving = true;
        current  = next;
        setTransform( true );

        setTimeout( () => {
            isMoving = false;
        }, 420 );

        updateButtonsState();
    };

    if ( prevBtn ) {
        prevBtn.addEventListener( 'click', () => manualMove( -1 ) );
    }

    if ( nextBtn ) {
        nextBtn.addEventListener( 'click', () => manualMove( 1 ) );
    }

} );