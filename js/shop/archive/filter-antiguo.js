document.addEventListener( 'DOMContentLoaded', function() {

    // --- Acordeones del filtrado ---
    const acordeonTriggers = document.querySelectorAll( '.shop-filtrado__acordeon-trigger' );

    acordeonTriggers.forEach( function( trigger ) {
        trigger.addEventListener( 'click', function() {
            const lista  = trigger.nextElementSibling;
            const isOpen = lista.classList.contains( 'is-open' );

            // Cierra todos
            document.querySelectorAll( '.shop-filtrado__acordeon-lista' ).forEach( l => l.classList.remove( 'is-open' ) );
            document.querySelectorAll( '.shop-filtrado__acordeon-trigger' ).forEach( t => t.classList.remove( 'is-active' ) );

            // Abre el clickado si estaba cerrado
            if ( ! isOpen ) {
                lista.classList.add( 'is-open' );
                trigger.classList.add( 'is-active' );
            }
        } );
    } );

    // --- Modal filtrado móvil ---
    const modalTrigger = document.querySelector( '.shop-grid__filtro-trigger' );
    const filtrado     = document.querySelector( '.shop-filtrado' );

    if ( modalTrigger && filtrado ) {
        modalTrigger.addEventListener( 'click', function() {
            const isOpen = filtrado.classList.contains( 'is-open' );

            if ( isOpen ) {
                filtrado.classList.remove( 'is-open' );
                modalTrigger.setAttribute( 'aria-expanded', 'false' );
            } else {
                filtrado.classList.add( 'is-open' );
                modalTrigger.setAttribute( 'aria-expanded', 'true' );
            }
        } );
    }

} );