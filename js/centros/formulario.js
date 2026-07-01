document.addEventListener( 'DOMContentLoaded', () => {

    const form = document.getElementById( 'ce-formulario-form' );
    if ( ! form ) return;

    const respuesta = form.querySelector( '.ce-formulario__respuesta' );
    const submit    = form.querySelector( '.ce-formulario__submit' );

    form.addEventListener( 'submit', async (e) => {
        e.preventDefault();

        submit.disabled   = true;
        submit.textContent = 'Enviando...';
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