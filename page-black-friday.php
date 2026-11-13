<?php
/**
 * Template: Black Friday (contacto promo)
 * Archivo: page-black-friday.php — se aplica automáticamente a la página con slug "black-friday"
 */

get_header();

// ID de la imagen en la Biblioteca de medios (lo ves en la URL al editarla: post=123)
$foto_id = 123;
?>

<main id="main" class="page-contacto">

    <!-- Intro -->
    <section class="ct-intro">

        <div class="ct-intro__foto-wrapper">
            <div class="ct-intro__foto">
                <?php echo wp_get_attachment_image( $foto_id, 'full' ); ?>
            </div>
        </div>

        <div class="ct-intro__content">
            <h1 class="ct-intro__titulo">BLACK FRIDAY</h1>
            <p class="ct-intro__subtitulo">
                Consigue tu 20% de descuento en cualquiera de nuestros faciales y/o corporales durante la semana del 23 al 29 de noviembre.
            </p>
        </div>

    </section>

    <!-- Info de centros (ACF de la página Contacto) + formulario promo -->
    <?php
    get_template_part( 'components/contacto/form', null, array(
        'shortcode' => '[contact-form-7 id="66d4550" title="Contacto-promo"]',
    ) );
    ?>

</main>

<?php get_footer(); ?>