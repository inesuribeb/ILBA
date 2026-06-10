document.addEventListener( 'DOMContentLoaded', function() {

    const triggers = document.querySelectorAll( '.producto-details__trigger' );

    triggers.forEach( function( trigger ) {
        trigger.addEventListener( 'click', function() {
            const contenido = trigger.nextElementSibling;
            const isOpen    = contenido.classList.contains( 'is-open' );

            // Cierra todos
            document.querySelectorAll( '.producto-details__contenido' ).forEach( c => c.classList.remove( 'is-open' ) );
            document.querySelectorAll( '.producto-details__trigger' ).forEach( t => t.classList.remove( 'is-open' ) );

            // Abre el clickado si estaba cerrado
            if ( ! isOpen ) {
                contenido.classList.add( 'is-open' );
                trigger.classList.add( 'is-open' );
            }
        } );
    } );

} );