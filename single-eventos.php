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

</main>

<?php
get_footer();