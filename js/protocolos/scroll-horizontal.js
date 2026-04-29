document.addEventListener('DOMContentLoaded', () => {
    const slides    = document.getElementById('pr-slides');
    const sections  = slides ? Array.from( slides.querySelectorAll('section') ) : [];

    if ( ! slides || ! sections.length ) return;

    let current  = 0;
    let isMoving = false;
    const total  = sections.length;

    const goTo = ( index ) => {
        if ( index < 0 || index >= total || isMoving ) return;
        isMoving = true;
        current  = index;

        slides.style.transition = 'transform 0.7s cubic-bezier(0.77, 0, 0.175, 1)';
        slides.style.transform = `translateX(-${ current * (100 - 15) }vw)`;

        setTimeout(() => { isMoving = false; }, 750);
    };

    // Hijack scroll vertical → movimiento horizontal
    window.addEventListener('wheel', (e) => {
        e.preventDefault();
        if ( isMoving ) return;
        if ( e.deltaY > 0 ) {
            goTo( current + 1 );
        } else {
            goTo( current - 1 );
        }
    }, { passive: false });

    // Touch support
    let touchStartY = 0;
    window.addEventListener('touchstart', (e) => {
        touchStartY = e.touches[0].clientY;
    }, { passive: true });

    window.addEventListener('touchend', (e) => {
        const delta = touchStartY - e.changedTouches[0].clientY;
        if ( Math.abs( delta ) < 50 ) return;
        if ( delta > 0 ) {
            goTo( current + 1 );
        } else {
            goTo( current - 1 );
        }
    }, { passive: true });
});