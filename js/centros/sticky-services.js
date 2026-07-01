// document.querySelectorAll('.ce-servicios').forEach(section => {
//     const tag = section.querySelector('.ce-servicios__col-nav');
//     if ( ! tag ) return;

//     section.style.position = 'relative';

//     const placeholder = document.createElement('div');
//     placeholder.style.display = 'none';
//     tag.parentNode.insertBefore(placeholder, tag);

//     let stickyTop = 0;

//     const observer = new IntersectionObserver(
//         ([entry]) => {

//             if ( window.innerWidth <= 1024 ) {
//                 tag.style.position = '';
//                 tag.style.top      = '';
//                 tag.style.left     = '';
//                 tag.style.width    = '';
//                 placeholder.style.display = 'none';
//                 tag.classList.remove('is-sticky', 'is-end');
//                 return;
//             }

//             const rect    = entry.boundingClientRect;
//             const tagRect = tag.getBoundingClientRect();

//             if ( rect.top < 30 && rect.bottom > stickyTop + 150 ) {
//                 if ( ! tag.classList.contains('is-sticky') ) {
//                     stickyTop = tagRect.top;
//                     const width  = tag.offsetWidth;
//                     const height = tag.offsetHeight;
//                     placeholder.style.display    = 'block';
//                     placeholder.style.width      = width + 'px';
//                     placeholder.style.height     = height + 'px';
//                     placeholder.style.flexShrink = '0';
//                     tag.style.width    = width + 'px';
//                     tag.style.left     = tagRect.left + 'px';
//                     tag.style.top      = stickyTop + 'px';
//                     tag.style.position = 'fixed';
//                     tag.classList.add('is-sticky');
//                     tag.classList.remove('is-end');
//                 }

//             } else if ( rect.bottom <= stickyTop + 100 && rect.bottom > 0 ) {
//                 if ( ! tag.classList.contains('is-end') ) {
//                     const sectionRect = section.getBoundingClientRect();
//                     const width       = placeholder.style.width;
//                     const height      = placeholder.style.height;

//                     const maxTop      = section.offsetHeight - tag.offsetHeight;
//                     const topRelative = Math.min( stickyTop - sectionRect.top, maxTop );

//                     placeholder.style.display    = 'block';
//                     placeholder.style.width      = width;
//                     placeholder.style.height     = height;
//                     placeholder.style.flexShrink = '0';

//                     tag.style.position = 'absolute';
//                     tag.style.top      = topRelative + 'px';
//                     tag.style.left     = placeholder.getBoundingClientRect().left + 'px';
//                     tag.style.width    = width;
//                     tag.classList.remove('is-sticky');
//                     tag.classList.add('is-end');
//                 }

//             } else {
//                 if ( rect.top >= 0 ) {
//                     tag.style.position = '';
//                     tag.style.top      = '';
//                     tag.style.left     = '';
//                     tag.style.width    = '';
//                     placeholder.style.display = 'none';
//                     tag.classList.remove('is-sticky', 'is-end');
//                 }
//             }
//         },
//         { threshold: Array.from({ length: 101 }, (_, i) => i / 100) }
//     );

//     observer.observe(section);
// });


document.querySelectorAll('.ce-servicios').forEach(section => {
    const tag = section.querySelector('.ce-servicios__col-nav');
    if ( ! tag ) return;

    section.style.position = 'relative';

    const placeholder = document.createElement('div');
    placeholder.style.display = 'none';
    tag.parentNode.insertBefore(placeholder, tag);

    let stickyTop = 0;

    const observer = new IntersectionObserver(
        ([entry]) => {

            // En móvil/tablet: nada
            if ( window.innerWidth <= 1024 ) {
                tag.style.position = '';
                tag.style.top      = '';
                tag.style.left     = '';
                tag.style.width    = '';
                placeholder.style.display = 'none';
                tag.classList.remove('is-sticky', 'is-end');
                return;
            }

            const rect    = entry.boundingClientRect;
            const tagRect = tag.getBoundingClientRect();

            if ( rect.top < 30 && rect.bottom > stickyTop + 150 ) {
                if ( ! tag.classList.contains('is-sticky') ) {
                    stickyTop = tagRect.top;
                    const width  = tag.offsetWidth;
                    const height = tag.offsetHeight;
                    placeholder.style.display    = 'block';
                    placeholder.style.width      = width + 'px';
                    placeholder.style.height     = height + 'px';
                    placeholder.style.flexShrink = '0';
                    tag.style.width    = width + 'px';
                    tag.style.left     = tagRect.left + 'px';
                    tag.style.top      = stickyTop + 'px';
                    tag.style.position = 'fixed';
                    tag.classList.add('is-sticky');
                    tag.classList.remove('is-end');
                }

            } else if ( rect.bottom <= stickyTop + 100 && rect.bottom > 0 ) {
                if ( ! tag.classList.contains('is-end') ) {
                    const sectionRect = section.getBoundingClientRect();
                    const width       = placeholder.style.width;
                    const height      = placeholder.style.height;
                    const maxTop      = section.offsetHeight - tag.offsetHeight;
                    const topRelative = Math.min( stickyTop - sectionRect.top, maxTop );

                    placeholder.style.display    = 'block';
                    placeholder.style.width      = width;
                    placeholder.style.height     = height;
                    placeholder.style.flexShrink = '0';

                    tag.style.position = 'absolute';
                    tag.style.top      = topRelative + 'px';
                    tag.style.left     = placeholder.getBoundingClientRect().left + 'px';
                    tag.style.width    = width;
                    tag.classList.remove('is-sticky');
                    tag.classList.add('is-end');
                }

            } else {
                if ( rect.top >= 0 ) {
                    tag.style.position = '';
                    tag.style.top      = '';
                    tag.style.left     = '';
                    tag.style.width    = '';
                    placeholder.style.display = 'none';
                    tag.classList.remove('is-sticky', 'is-end');
                }
            }
        },
        { threshold: Array.from({ length: 101 }, (_, i) => i / 100) }
    );

    observer.observe(section);

    // --- Scrollspy ---
    const navLinks = tag.querySelectorAll('.ce-servicios__nav-link');
    const grupos   = section.querySelectorAll('.ce-servicios__grupo[id]');

    if ( navLinks.length && grupos.length ) {

        // Click: marcar activo inmediatamente
        navLinks.forEach( link => {
            link.addEventListener( 'click', () => {
                navLinks.forEach( l => l.classList.remove('is-active') );
                link.classList.add('is-active');
            });
        });

        // Scroll: marcar el grupo más visible en el viewport
        const spyObserver = new IntersectionObserver(
            ( entries ) => {
                entries.forEach( entry => {
                    if ( entry.isIntersecting ) {
                        const id   = entry.target.id;
                        const link = tag.querySelector( `.ce-servicios__nav-link[href="#${id}"]` );
                        if ( link ) {
                            navLinks.forEach( l => l.classList.remove('is-active') );
                            link.classList.add('is-active');
                        }
                    }
                });
            },
            {
                threshold: 0.3,
                rootMargin: '0px 0px -40% 0px',
            }
        );

        grupos.forEach( grupo => spyObserver.observe(grupo) );
    }
});