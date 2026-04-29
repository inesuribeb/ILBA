<?php
/**
 * Servicios component: Contacto
 * Contenido común a todos los servicios — editar aquí para actualizar todos.
 */

$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );

// Imagen — cambiar el ID por el de la imagen subida en Media
$imagen_id  = 0; // TODO: poner el ID de la imagen desde Media
// $imagen_url = $imagen_id ? wp_get_attachment_image_url( $imagen_id, 'full' ) : '';
$imagen_url = 'http://ilba.local/wp-content/uploads/2026/04/ai_ingrediens-3.png';
?>

<section class="sv-contacto" id="sv-contacto">

    <?php if ( $imagen_url ) : ?>
        <div class="sv-contacto__bg">
            <img src="<?php echo esc_url( $imagen_url ); ?>" alt="">
        </div>
    <?php endif; ?>

    <div class="sv-contacto__content">
        <h2 class="sv-contacto__titulo">
            ¿Quieres saber si este servicio<br>es para ti?
        </h2>
        <a href="<?php echo esc_url( $contacto_url ); ?>" class="sv-contacto__cta">
            Contáctanos
        </a>
    </div>

</section>