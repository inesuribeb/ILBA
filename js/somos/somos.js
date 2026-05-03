document.addEventListener( 'DOMContentLoaded', () => {
    const btn     = document.querySelector( '.somos-equipo__ver-mas' );
    const wrapper = document.querySelector( '.somos-equipo__grid-wrapper' );
    const label   = document.querySelector( '.somos-equipo__ver-mas-label' );
    const fade    = document.querySelector( '.somos-equipo__fade' );
    if ( ! btn || ! wrapper ) return;

    btn.addEventListener( 'click', () => {
        const expanded = wrapper.classList.toggle( 'is-expanded' );

        label.textContent = expanded ? 'Ver menos' : 'Ver más';
        btn.setAttribute( 'aria-expanded', expanded );

        // Rotar el icono
        btn.classList.toggle( 'is-expanded', expanded );

        // Al contraer, scroll de vuelta a la sección
        if ( ! expanded ) {
            wrapper.closest( '.somos-equipo' ).scrollIntoView( { behavior: 'smooth', block: 'start' } );
        }
    } );
} );