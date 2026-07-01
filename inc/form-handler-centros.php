<?php
/**
 * Handler AJAX: Formulario de centros
 */

add_action( 'wp_ajax_ce_enviar_formulario',        'ilba_ce_enviar_formulario' );
add_action( 'wp_ajax_nopriv_ce_enviar_formulario', 'ilba_ce_enviar_formulario' );

function ilba_ce_enviar_formulario() {

    // --- Verificar nonce ---
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'ce_formulario_nonce' ) ) {
        wp_send_json_error( array( 'mensaje' => 'Petición no válida.' ) );
    }

    // --- Sanitizar campos ---
    $nombre     = sanitize_text_field( $_POST['nombre']     ?? '' );
    $apellido   = sanitize_text_field( $_POST['apellido']   ?? '' );
    $email      = sanitize_email(      $_POST['email']      ?? '' );
    $mensaje    = sanitize_textarea_field( $_POST['mensaje'] ?? '' );
    $email_dest = sanitize_email(      $_POST['email_dest'] ?? '' );

    // --- Validar campos obligatorios ---
    if ( ! $nombre || ! $apellido || ! $email || ! is_email( $email ) ) {
        wp_send_json_error( array( 'mensaje' => 'Por favor, rellena todos los campos obligatorios.' ) );
    }

    if ( ! $email_dest || ! is_email( $email_dest ) ) {
        wp_send_json_error( array( 'mensaje' => 'Error de configuración del formulario.' ) );
    }

    // --- Construir email ---
    $asunto  = 'Nuevo mensaje desde el formulario del centro';
    $cuerpo  = "Nombre: {$nombre} {$apellido}\n";
    $cuerpo .= "Email: {$email}\n\n";
    $cuerpo .= "Mensaje:\n{$mensaje}";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        "Reply-To: {$nombre} {$apellido} <{$email}>",
    );

    $enviado = wp_mail( $email_dest, $asunto, $cuerpo, $headers );

    if ( $enviado ) {
        wp_send_json_success( array( 'mensaje' => 'Mensaje enviado correctamente. Te contactaremos pronto.' ) );
    } else {
        wp_send_json_error( array( 'mensaje' => 'No se pudo enviar el mensaje. Inténtalo de nuevo.' ) );
    }
}