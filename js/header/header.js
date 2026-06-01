document.addEventListener('DOMContentLoaded', () => {
    const header = document.querySelector('.header');
    if (!header) return;

    // --- Scroll ---
    let ticking = false;

    window.addEventListener('scroll', () => {
        if (!ticking) {
            requestAnimationFrame(() => {
                if (window.scrollY > 10) {
                    header.classList.add('is-scrolled');
                } else {
                    header.classList.remove('is-scrolled');
                }
                ticking = false;
            });
            ticking = true;
        }
    });

    // --- Panel hover ---
    const secciones = document.querySelectorAll('.header__nav-link--seccion');
    const paneles = document.querySelectorAll('.header__panel');

    let closeTimeout = null;

    const openPanel = (key) => {
        clearTimeout(closeTimeout);
        paneles.forEach(p => {
            p.classList.toggle('is-open', p.dataset.panel === key);
        });
        header.classList.add('panel-open');
    };

    const closePanel = () => {
        closeTimeout = setTimeout(() => {
            paneles.forEach(p => p.classList.remove('is-open'));
            header.classList.remove('panel-open');
        }, 150);
    };

    // --- Prevenir clic en secciones sin página ---
    secciones.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
        });
    });

    secciones.forEach(link => {
        link.addEventListener('mouseenter', () => {
            openPanel(link.dataset.seccion);
        });
        link.addEventListener('mouseleave', closePanel);
    });

    paneles.forEach(panel => {
        panel.addEventListener('mouseenter', () => clearTimeout(closeTimeout));
        panel.addEventListener('mouseleave', closePanel);
    });

    // --- Wellness: cambio de imagen en hover ---
    const wellnessLinks = document.querySelectorAll('.header__panel-wellness-link');
    const wellnessImg = document.querySelector('.header__panel-wellness-img');

    if (wellnessImg) {
        const defaultSrc = wellnessImg.src;

        wellnessLinks.forEach(link => {
            link.addEventListener('mouseenter', () => {
                const img = link.dataset.imagen;
                if (img) wellnessImg.src = img;
            });
            link.addEventListener('mouseleave', () => {
                wellnessImg.src = defaultSrc;
            });
        });
    }

    // --- Header light cuando el hero BM es visible (todo blanco) ---
    const hero = document.querySelector('.bm-hero');
    if (hero) {
        const observer = new IntersectionObserver(
            ([entry]) => {
                header.classList.toggle('header--light-bm', entry.isIntersecting);
            },
            { threshold: 0 }
        );
        observer.observe(hero);
    }

    // --- Header light cuando el hero de home es visible (solo nav der) ---
    if (document.body.classList.contains('home')) {
        header.classList.add('header--light-home');

        const homeHero = document.querySelector('.home-hero');
        if (homeHero) {
            const observer = new IntersectionObserver(
                ([entry]) => {
                    header.classList.toggle('header--light-home', entry.isIntersecting);
                },
                { threshold: 0 }
            );
            observer.observe(homeHero);
        }
    }

    // --- Header light cuando el hero de somos es visible (todo blanco) ---
    const somosHero = document.querySelector('.somos-hero');
    if (somosHero) {
        const observer = new IntersectionObserver(
            ([entry]) => {
                header.classList.toggle('header--light-bm', entry.isIntersecting);
            },
            { threshold: 0 }
        );
        observer.observe(somosHero);
    }

    // --- Header light cuando el hero de servicios es visible (solo nav der) ---
    if (document.body.classList.contains('single-servicios')) {
        const svHero = document.querySelector('.sv-hero');
        if (svHero) {
            const observer = new IntersectionObserver(
                ([entry]) => {
                    header.classList.toggle('header--light-sv', entry.isIntersecting);
                },
                { threshold: 0 }
            );
            observer.observe(svHero);
        }
    }

});