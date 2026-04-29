<?php
/**
 * Template: Contacto
 * Archivo: page-contacto.php
 */

get_header();
?>

<main id="main" class="page-contacto">
    <?php get_template_part( 'components/contacto/intro' ); ?>
    <?php get_template_part( 'components/contacto/form' ); ?>
</main>

<?php get_footer(); ?>