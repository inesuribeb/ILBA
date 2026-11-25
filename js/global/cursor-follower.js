(() => {
	const el = document.querySelector('.cursor-follower');
	if (!el || !window.matchMedia('(hover: hover) and (pointer: fine)').matches) return;

	const OFFSET_X = 14; // px a la derecha del puntero
	const OFFSET_Y = 20; // px por debajo (la flecha ocupa unos 20px de alto)

	let x = 0, y = 0, raf = null;

	// const render = () => {
	// 	el.style.transform = `translate3d(${x + OFFSET_X}px, ${y + OFFSET_Y}px, 0)`;
	// 	raf = null;
	// };
    const render = () => {
        el.style.translate = `${x + OFFSET_X}px ${y + OFFSET_Y}px`;
        raf = null;
    };

	window.addEventListener('pointermove', (e) => {
		if (e.pointerType !== 'mouse') return;
		x = e.clientX;
		y = e.clientY;
		el.classList.add('is-visible');
		if (!raf) raf = requestAnimationFrame(render);
	}, { passive: true });

	// Ocultarlo cuando el ratón sale de la ventana
	document.documentElement.addEventListener('mouseleave', () => {
		el.classList.remove('is-visible');
	});
})();