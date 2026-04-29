const contactoBg = document.querySelector('.sv-contacto__bg img');
if ( contactoBg ) {
    window.addEventListener('scroll', () => {
        const section = document.querySelector('.sv-contacto');
        const rect    = section.getBoundingClientRect();
        const visible = rect.top < window.innerHeight && rect.bottom > 0;

        if ( visible ) {
            const progress = ( window.innerHeight - rect.top ) / ( window.innerHeight + rect.height );
            const offset   = ( progress - 0.5 ) * 160; // 80px de rango, ajusta a gusto
            contactoBg.style.transform = `translateY(${ offset }px)`;
        }
    }, { passive: true });
}