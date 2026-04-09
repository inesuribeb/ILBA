// document.addEventListener('DOMContentLoaded', () => {
//     const header = document.querySelector('.header');
//     if ( ! header ) return;

//     window.addEventListener('scroll', () => {
//         if ( window.scrollY > 10 ) {
//             header.classList.add('is-scrolled');
//         } else {
//             header.classList.remove('is-scrolled');
//         }
//     });
// });

document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    if ( ! header ) return;

    let ticking = false;

    window.addEventListener('scroll', () => {
        if ( ! ticking ) {
            requestAnimationFrame(() => {
                if ( window.scrollY > 10 ) {
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.remove('is-scrolled');
                }
                ticking = false;
            });
            ticking = true;
        }
    });
});