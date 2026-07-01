document.addEventListener( 'DOMContentLoaded', () => {

    // --- Select custom ---
    const wrapper = document.getElementById( 'pr-select-wrapper' );

    if ( wrapper ) {
        const trigger = document.getElementById( 'pr-select-trigger' );
        const options = document.getElementById( 'pr-select-options' );
        const label   = document.getElementById( 'pr-select-label' );
        const input   = document.getElementById( 'pr-select-value' );

        trigger.addEventListener( 'click', () => {
            wrapper.classList.toggle( 'is-open' );
        });

        options.querySelectorAll( '.pr-select-option' ).forEach( option => {
            option.addEventListener( 'click', () => {
                const value = option.dataset.value;
                input.value   = value;
                label.textContent = value;
                wrapper.classList.add( 'has-value' );
                wrapper.classList.remove( 'is-open' );
                options.querySelectorAll( '.pr-select-option' ).forEach( o => o.classList.remove( 'is-selected' ) );
                option.classList.add( 'is-selected' );
            });
        });

        // Cerrar al hacer click fuera
        document.addEventListener( 'click', (e) => {
            if ( ! wrapper.contains( e.target ) ) {
                wrapper.classList.remove( 'is-open' );
            }
        });
    }

    // --- Envío del formulario ---
    const form = document.getElementById( 'pr-formulario-form' );
    if ( ! form ) return;

    const respuesta = form.querySelector( '.pr-form__respuesta' );
    const submit    = form.querySelector( '.pr-form__submit' );

    form.addEventListener( 'submit', async (e) => {
        e.preventDefault();

        submit.disabled      = true;
        submit.textContent   = 'Enviando...';
        respuesta.textContent = '';

        const data = new FormData( form );

        try {
            const res  = await fetch( ilba_ajax.url, {
                method: 'POST',
                body: data,
            });

            const json = await res.json();

            if ( json.success ) {
                respuesta.textContent = json.data.mensaje;
                form.reset();
                if ( wrapper ) {
                    wrapper.classList.remove( 'has-value', 'is-open' );
                    label.textContent = '¿En qué momento estás?';
                    document.getElementById( 'pr-select-value' ).value = '';
                }
            } else {
                respuesta.textContent = json.data.mensaje || 'Ha ocurrido un error. Inténtalo de nuevo.';
            }

        } catch ( err ) {
            respuesta.textContent = 'Error de conexión. Inténtalo de nuevo.';
        } finally {
            submit.disabled    = false;
            submit.textContent = 'Enviar';
        }
    });
});