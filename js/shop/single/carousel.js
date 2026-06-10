document.addEventListener( 'DOMContentLoaded', function() {

    const thumbs = document.querySelectorAll( '.producto-carousel__thumb' );
    const main   = document.querySelector( '.producto-carousel__main img' );

    if ( ! thumbs.length || ! main ) return;

    thumbs.forEach( function( thumb ) {
        thumb.addEventListener( 'click', function() {
            const img = thumb.querySelector( 'img' );
            if ( ! img ) return;

            main.src    = img.src;
            main.srcset = img.srcset || '';
            main.alt    = img.alt || '';

            thumbs.forEach( t => t.classList.remove( 'is-active' ) );
            thumb.classList.add( 'is-active' );
        } );
    } );

} );