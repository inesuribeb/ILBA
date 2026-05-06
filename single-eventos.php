<?php
/**
 * Template: Single Eventos
 */

get_header();
?>

<main id="main" class="single-eventos">

    <?php get_template_part( 'components/eventos/modal' ); ?>
    <?php get_template_part( 'components/eventos/hero' ); ?>
    <?php get_template_part( 'components/eventos/intro' ); ?>
    <?php get_template_part( 'components/eventos/seccion2' ); ?>

    <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ); ?>" class="ev-cta-flotante">Consulta disponibilidad</a>

</main>

<?php
get_footer();