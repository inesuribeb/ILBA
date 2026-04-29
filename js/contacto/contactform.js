document.addEventListener( 'DOMContentLoaded', () => {

    // --- File input custom ---
    const fileInput = document.querySelector( '.wpcf7-file' );
    if ( fileInput ) {
        const wrapper = document.createElement( 'div' );
        wrapper.classList.add( 'ct-file-wrapper' );

        const label = document.createElement( 'span' );
        label.classList.add( 'ct-file-label' );
        label.textContent = 'Adjuntar archivos';

        const icon = document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' );
        icon.setAttribute( 'viewBox', '0 0 24 24' );
        icon.setAttribute( 'fill', 'none' );
        icon.setAttribute( 'stroke', 'currentColor' );
        icon.setAttribute( 'stroke-width', '1.5' );
        icon.classList.add( 'ct-file-icon' );
        const path = document.createElementNS( 'http://www.w3.org/2000/svg', 'path' );
        path.setAttribute( 'stroke-linecap', 'round' );
        path.setAttribute( 'stroke-linejoin', 'round' );
        path.setAttribute( 'd', 'M4.5 10.5 12 3m0 0 7.5 7.5M12 3v18' );
        icon.appendChild( path );

        fileInput.parentNode.insertBefore( wrapper, fileInput );
        wrapper.appendChild( label );
        wrapper.appendChild( icon );
        wrapper.appendChild( fileInput );

        fileInput.addEventListener( 'change', () => {
            label.textContent = fileInput.files.length
                ? fileInput.files[0].name
                : 'Adjuntar archivos';
        });
    }

    // --- Select custom ---
    document.querySelectorAll( '.wpcf7-select' ).forEach( select => {

        const wrapper = document.createElement( 'div' );
        wrapper.classList.add( 'ct-select-wrapper' );
        select.parentNode.insertBefore( wrapper, select );
        wrapper.appendChild( select );

        const trigger = document.createElement( 'div' );
        trigger.classList.add( 'ct-select-trigger' );

        const triggerLabel = document.createElement( 'span' );
        triggerLabel.textContent = select.options[0]?.text || 'Seleccionar';

        const triggerIcon = document.createElementNS( 'http://www.w3.org/2000/svg', 'svg' );
        triggerIcon.setAttribute( 'viewBox', '0 0 24 24' );
        triggerIcon.setAttribute( 'fill', 'none' );
        triggerIcon.setAttribute( 'stroke', 'currentColor' );
        triggerIcon.setAttribute( 'stroke-width', '1.5' );
        const iconPath = document.createElementNS( 'http://www.w3.org/2000/svg', 'path' );
        iconPath.setAttribute( 'stroke-linecap', 'round' );
        iconPath.setAttribute( 'stroke-linejoin', 'round' );
        iconPath.setAttribute( 'd', 'M19.5 8.25l-7.5 7.5-7.5-7.5' );
        triggerIcon.appendChild( iconPath );

        trigger.appendChild( triggerLabel );
        trigger.appendChild( triggerIcon );
        wrapper.insertBefore( trigger, select );

        const optionsList = document.createElement( 'div' );
        optionsList.classList.add( 'ct-select-options' );

        Array.from( select.options ).forEach( ( opt, i ) => {
            if ( i === 0 ) return;             const item = document.createElement( 'div' );
            item.classList.add( 'ct-select-option' );
            item.textContent = opt.text;
            item.dataset.value = opt.value;

            item.addEventListener( 'click', () => {
                select.value = opt.value;
                triggerLabel.textContent = opt.text;
                optionsList.querySelectorAll( '.ct-select-option' ).forEach( o => o.classList.remove( 'is-selected' ) );
                item.classList.add( 'is-selected' );
                wrapper.classList.remove( 'is-open' );
            });

            optionsList.appendChild( item );
        });

        wrapper.appendChild( optionsList );

        trigger.addEventListener( 'click', () => {
            wrapper.classList.toggle( 'is-open' );
        });

        document.addEventListener( 'click', ( e ) => {
            if ( ! wrapper.contains( e.target ) ) {
                wrapper.classList.remove( 'is-open' );
            }
        });
    });

});