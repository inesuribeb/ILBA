document.addEventListener( 'DOMContentLoaded', function() {

    const getModal = () => document.getElementById( 'modal-carrito' );

    const abrirModal = () => {
        const modal = getModal();
        if ( ! modal ) return;
        modal.classList.add( 'is-open' );
        modal.setAttribute( 'aria-hidden', 'false' );
        document.body.style.overflow = 'hidden';
    };

    const cerrarModal = () => {
        const modal = getModal();
        if ( ! modal ) return;
        modal.classList.remove( 'is-open' );
        modal.setAttribute( 'aria-hidden', 'true' );
        document.body.style.overflow = '';
    };

    document.addEventListener( 'click', function( e ) {
        if ( e.target.closest( '#abrir-modal-carrito' ) ) {
            e.preventDefault();
            abrirModal();
        }
        if ( e.target.closest( '#abrir-modal-carrito-mobile' ) ) {
            e.preventDefault();
            abrirModal();
        }
        if ( e.target.closest( '.modal-carrito__cerrar' ) ) {
            cerrarModal();
        }
        if ( e.target.closest( '.modal-carrito__overlay' ) ) {
            cerrarModal();
        }
    } );

    document.addEventListener( 'keydown', function( e ) {
        if ( e.key === 'Escape' ) cerrarModal();
    } );

    // En la página de cart, recargar al eliminar
    if ( document.body.classList.contains( 'woocommerce-cart' ) ) {
        document.addEventListener( 'click', function( e ) {
            if ( e.target.closest( '.remove' ) ) {
                setTimeout( function() {
                    window.location.reload();
                }, 500 );
            }
        } );
    }

} );

// --- Abrir modal al añadir al carrito desde single ---
document.addEventListener( 'submit', function( e ) {
    const form = e.target.closest( 'form.cart' );
    if ( ! form ) return;

    e.preventDefault();

    const data = new FormData( form );

    fetch( form.action, {
        method: 'POST',
        body: data,
    } )
    .then( () => {
        return fetch( '/?wc-ajax=get_refreshed_fragments', { method: 'POST' } );
    } )
    .then( r => r.json() )
    .then( data => {
        if ( data && data.fragments ) {
            Object.keys( data.fragments ).forEach( key => {
                const el = document.querySelector( key );
                if ( el ) el.outerHTML = data.fragments[ key ];
            } );
        }

        // Abrir modal
        const modal = document.getElementById( 'modal-carrito' );
        if ( modal ) {
            modal.classList.add( 'is-open' );
            modal.setAttribute( 'aria-hidden', 'false' );
            document.body.style.overflow = 'hidden';
        }

        // Deshabilitar botón
        const btn = document.querySelector( '.single_add_to_cart_button' );
        if ( btn ) {
            btn.disabled = true;
            btn.textContent = 'Ya en el carrito';
        }
    } );
} );