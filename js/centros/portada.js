document.addEventListener( 'DOMContentLoaded', () => {
    const btn = document.querySelector( '.ce-hero__movil-btn' );
    const nav = document.querySelector( '.ce-hero__movil-nav' );
    if ( ! btn || ! nav ) return;

    btn.addEventListener( 'click', () => {
        const isOpen = nav.classList.toggle( 'is-open' );
        btn.setAttribute( 'aria-expanded', isOpen );
    });
});