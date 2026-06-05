document.addEventListener( 'DOMContentLoaded', function() {

    const track = document.querySelector( '.shop-grid__vista-track' );
    const grid  = document.querySelector( '.shop-grid' );

    if ( ! track || ! grid ) return;

    const clases = {
        izquierda: 'shop-grid--8',
        centro:    'shop-grid--4',
        derecha:   'shop-grid--2',
    };

    track.addEventListener( 'click', function( e ) {
        const rect   = track.getBoundingClientRect();
        const clickX = e.clientX - rect.left;
        const tercio = rect.width / 3;

        let vista;
        if ( clickX < tercio ) {
            vista = 'izquierda';
        } else if ( clickX < tercio * 2 ) {
            vista = 'centro';
        } else {
            vista = 'derecha';
        }

        track.dataset.vista = vista;

        Object.values( clases ).forEach( c => grid.classList.remove( c ) );
        grid.classList.add( clases[ vista ] );
    } );

} );