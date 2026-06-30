<?php
/**
 * Template: Single Centro
 */

get_header();
?>

<main id="main" class="single-centro">
    <?php get_template_part( 'components/centros/portada' ); ?>
    <?php get_template_part( 'components/centros/servicios' ); ?>
    <?php get_template_part( 'components/centros/clinica' ); ?>
    <?php get_template_part( 'components/centros/formulario' ); ?>
</main>

<?php get_footer(); ?>