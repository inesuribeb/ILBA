// document.querySelectorAll('.bm-info').forEach(section => {
//     const img = section.querySelector('.bm-info__col-imagen');
//     if ( ! img ) return;

//     section.style.position = 'relative';

//     const placeholder = document.createElement('div');
//     placeholder.style.display = 'none';
//     img.parentNode.insertBefore(placeholder, img);

//     let stickyTop = 0;

//     const observer = new IntersectionObserver(
//         ([entry]) => {
//             const rect    = entry.boundingClientRect;
//             const imgRect = img.getBoundingClientRect();

//             if ( rect.top < 30 && rect.bottom > imgRect.height + 30 ) {
//                 if ( ! img.classList.contains('is-sticky') ) {
//                     stickyTop = imgRect.top;
//                     const width  = img.offsetWidth;
//                     const height = img.offsetHeight;
//                     placeholder.style.display    = 'block';
//                     placeholder.style.width      = width + 'px';
//                     placeholder.style.height     = height + 'px';
//                     placeholder.style.flexShrink = '0';
//                     img.style.width    = width + 'px';
//                     img.style.left     = imgRect.left + 'px';
//                     img.style.top      = stickyTop + 'px';
//                     img.style.position = 'fixed';
//                     img.classList.add('is-sticky');
//                     img.classList.remove('is-end');
//                 }

//             } else if ( rect.bottom <= imgRect.height + 30 && rect.bottom > 0 ) {

//                 if ( ! img.classList.contains('is-end') ) {
//                     const width   = placeholder.style.width;
//                     const height  = placeholder.style.height;
//                     const leftPos = placeholder.getBoundingClientRect().left;

//                     const topRelative = section.offsetHeight - img.offsetHeight;

//                     placeholder.style.display    = 'block';
//                     placeholder.style.width      = width;
//                     placeholder.style.height     = height;
//                     placeholder.style.flexShrink = '0';

//                     img.style.position = 'absolute';
//                     img.style.top      = topRelative + 'px';
//                     img.style.left     = leftPos + 'px';
//                     img.style.width    = width;
//                     img.classList.remove('is-sticky');
//                     img.classList.add('is-end');
//                 }

//             } else {
//                 if ( rect.top >= 0 ) {
//                     img.style.position = '';
//                     img.style.top      = '';
//                     img.style.left     = '';
//                     img.style.width    = '';
//                     placeholder.style.display = 'none';
//                     img.classList.remove('is-sticky', 'is-end');
//                 }
//             }
//         },
//         { threshold: Array.from({ length: 101 }, (_, i) => i / 100) }
//     );

//     observer.observe(section);
// });

document.querySelectorAll('.bm-info').forEach(section => {
    const img = section.querySelector('.bm-info__col-imagen');
    if ( ! img ) return;

    section.style.position = 'relative';

    const placeholder = document.createElement('div');
    placeholder.style.display = 'none';
    img.parentNode.insertBefore(placeholder, img);

    // Guardamos el alto UNA VEZ al inicio
    const imgHeight = img.offsetHeight;
    let stickyTop   = 0;

    const observer = new IntersectionObserver(
        ([entry]) => {
            const rect    = entry.boundingClientRect;
            const imgRect = img.getBoundingClientRect();

            if ( rect.top < 30 && rect.bottom > imgHeight + 30 ) {
                if ( ! img.classList.contains('is-sticky') ) {
                    stickyTop = imgRect.top;
                    const width = img.offsetWidth;
                    placeholder.style.display    = 'block';
                    placeholder.style.width      = width + 'px';
                    placeholder.style.height     = imgHeight + 'px';
                    placeholder.style.flexShrink = '0';
                    img.style.width    = width + 'px';
                    img.style.left     = imgRect.left + 'px';
                    img.style.top      = stickyTop + 'px';
                    img.style.position = 'fixed';
                    img.classList.add('is-sticky');
                    img.classList.remove('is-end');
                }

            } else if ( rect.bottom <= imgHeight + 30 && rect.bottom > 0 ) {
                if ( ! img.classList.contains('is-end') ) {
                    const width   = placeholder.style.width;
                    const leftPos = placeholder.getBoundingClientRect().left;
                    const topRelative = section.offsetHeight - imgHeight;

                    placeholder.style.display    = 'block';
                    placeholder.style.width      = width;
                    placeholder.style.height     = imgHeight + 'px';
                    placeholder.style.flexShrink = '0';

                    img.style.position = 'absolute';
                    img.style.top      = topRelative + 'px';
                    img.style.left     = leftPos + 'px';
                    img.style.width    = width;
                    img.classList.remove('is-sticky');
                    img.classList.add('is-end');
                }

            } else {
                if ( rect.top >= 0 ) {
                    img.style.position = '';
                    img.style.top      = '';
                    img.style.left     = '';
                    img.style.width    = '';
                    placeholder.style.display = 'none';
                    img.classList.remove('is-sticky', 'is-end');
                }
            }
        },
        { threshold: Array.from({ length: 101 }, (_, i) => i / 100) }
    );

    observer.observe(section);
});