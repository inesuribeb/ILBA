document.addEventListener( 'DOMContentLoaded', () => {
    const btn = document.querySelector( '.pr-hero__movil-btn' );
    const nav = document.querySelector( '.pr-hero__movil-nav' );
    if ( ! btn || ! nav ) return;

    btn.addEventListener( 'click', () => {
        const isOpen = nav.classList.toggle( 'is-open' );
        btn.setAttribute( 'aria-expanded', isOpen );
    });
});