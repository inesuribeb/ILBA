<?php
/**
 * Template: Black Friday (contacto promo)
 * Archivo: page-black-friday.php — se aplica automáticamente a la página con slug "black-friday"
 */

get_header();

// Misma foto que la página Contacto (ACF ct_foto)
$contacto_id = get_page_by_path( 'contacto' )->ID ?? 0;
$foto        = get_field( 'ct_foto', $contacto_id );
?>

<main id="main" class="page-contacto">

    <!-- Intro -->
    <section class="ct-intro">

        <div class="ct-intro__foto-wrapper">
            <?php if ( $foto ) : ?>
                <div class="ct-intro__foto">
                    <img src="<?php echo esc_url( $foto['url'] ); ?>"
                         alt="<?php echo esc_attr( $foto['alt'] ); ?>">
                </div>
            <?php endif; ?>
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