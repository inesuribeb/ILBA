document.addEventListener( 'DOMContentLoaded', function() {

    const triggers = document.querySelectorAll( '.shop-filtrado__acordeon-trigger' );

    triggers.forEach( function( trigger ) {
        trigger.addEventListener( 'click', function() {
            const lista = trigger.nextElementSibling;
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

} );