<?php
/**
 * Servicios component: Contacto
 * Contenido común a todos los servicios — editar aquí para actualizar todos.
 */

$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );

// Imagen — cambiar el ID por el de la imagen subida en Media
$imagen_url = get_stylesheet_directory_uri() . '/images/espera2.webp';
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