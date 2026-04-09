document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.home-servicios__cards');
    if ( ! container ) return;

    const cards     = Array.from( container.querySelectorAll('.home-servicios__card') );
    const cardCount = cards.length;
    const cardWidth = 320; // mismo valor que el CSS

    cards.forEach( card => {
        const clone = card.cloneNode(true);
        container.appendChild(clone);
    });

    let current  = 0;
    let isMoving = false;

    const moveNext = () => {
        if ( isMoving ) return;
        isMoving = true;

        current++;
        container.style.transition = 'transform 0.4s cubic-bezier(0.25, 0.1, 0.25, 1)';
        container.style.transform  = `translateX(-${ current * cardWidth }px)`;

        setTimeout(() => {
            if ( current >= cardCount ) {
                current = 0;
                container.style.transition = 'none';
                container.style.transform  = 'translateX(0)';
            }
            isMoving = false;
        }, 420);
    };

    setInterval( moveNext, 2500 );
});