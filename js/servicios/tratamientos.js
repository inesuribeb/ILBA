const tratamientos = document.querySelectorAll('.sv-tr');
if ( tratamientos.length ) {
    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach( entry => {
                if ( entry.isIntersecting ) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve( entry.target );
                }
            });
        },
        { threshold: 0.15 }
    );

    tratamientos.forEach( tr => observer.observe(tr) );
}