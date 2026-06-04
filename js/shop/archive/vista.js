document.addEventListener( 'DOMContentLoaded', function() {

    const track  = document.querySelector( '.shop-grid__vista-track' );
    const grid   = document.querySelector( '.shop-grid' );

    if ( ! track || ! grid ) return;

    const estados = [ 'izquierda', 'centro', 'derecha' ];
    const clases  = {
        izquierda: 'shop-grid--8',
        centro:    'shop-grid--4',
        derecha:   'shop-grid--2',
    };

    track.addEventListener( 'click', function() {
        const actual   = track.dataset.vista;
        const indice   = estados.indexOf( actual );
        const siguiente = estados[ ( indice + 1 ) % estados.length ];

        track.dataset.vista = siguiente;

        Object.values( clases ).forEach( c => grid.classList.remove( c ) );
        grid.classList.add( clases[ siguiente ] );
    } );

} );