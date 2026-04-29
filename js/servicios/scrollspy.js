document.addEventListener('DOMContentLoaded', () => {
    const links    = document.querySelectorAll('.sv-sidebar__nav-link');
    const sections = document.querySelectorAll('.sv-layout__content > section');

    if ( ! links.length || ! sections.length ) return;

    const observer = new IntersectionObserver(
        (entries) => {
            entries.forEach(entry => {
                if ( entry.isIntersecting ) {
                    const id = entry.target.getAttribute('id');
                    links.forEach(link => {
                        link.classList.toggle(
                            'is-active',
                            link.getAttribute('data-target') === id
                        );
                    });
                }
            });
        },
        {
            rootMargin: '-40% 0px -40% 0px',
            threshold: 0,
        }
    );

    sections.forEach(section => observer.observe(section));

    // Scroll suave al hacer click
    links.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            const target = document.getElementById( link.getAttribute('data-target') );
            if ( target ) {
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});