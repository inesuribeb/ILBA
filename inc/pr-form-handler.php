<?php
/**
 * Handler AJAX: Formulario de protocolos
 */

add_action( 'wp_ajax_pr_enviar_formulario',        'ilba_pr_enviar_formulario' );
add_action( 'wp_ajax_nopriv_pr_enviar_formulario', 'ilba_pr_enviar_formulario' );

function ilba_pr_enviar_formulario() {

    // --- Verificar nonce ---
    if ( ! isset( $_POST['nonce'] ) || ! wp_verify_nonce( sanitize_text_field( $_POST['nonce'] ), 'pr_formulario_nonce' ) ) {
        wp_send_json_error( array( 'mensaje' => 'Petición no válida.' ) );
    }

    // --- Sanitizar campos ---
    $nombre    = sanitize_text_field( $_POST['nombre']    ?? '' );
    $apellido  = sanitize_text_field( $_POST['apellido']  ?? '' );
    $email     = sanitize_email(      $_POST['email']     ?? '' );
    $momento   = sanitize_text_field( $_POST['momento']   ?? '' );
    $mensaje   = sanitize_textarea_field( $_POST['mensaje']  ?? '' );
    $protocolo = sanitize_text_field( $_POST['protocolo'] ?? '' );

    // --- Validar campos obligatorios ---
    if ( ! $nombre || ! $apellido || ! $email || ! is_email( $email ) ) {
        wp_send_json_error( array( 'mensaje' => 'Por favor, rellena todos los campos obligatorios.' ) );
    }

    if ( empty( $_POST['rgpd'] ) ) {
        wp_send_json_error( array( 'mensaje' => 'Debes aceptar la política de privacidad.' ) );
    }

    // --- Construir email ---
    $email_dest = 'info@ilbainternational.com';
    $asunto     = "Nueva valoración personalizada — {$protocolo}";

    $cuerpo  = "Protocolo: {$protocolo}\n\n";
    $cuerpo .= "Nombre: {$nombre} {$apellido}\n";
    $cuerpo .= "Email: {$email}\n";
    if ( $momento ) {
        $cuerpo .= "Momento: {$momento}\n";
    }
    if ( $mensaje ) {
        $cuerpo .= "\nMensaje:\n{$mensaje}";
    }

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