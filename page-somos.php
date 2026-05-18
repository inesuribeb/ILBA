<?php
/**
 * Template: Somos
 * Archivo: page-somos.php
 */

get_header();
?>

<main id="main" class="page-somos">
    <?php get_template_part( 'components/somos/hero' ); ?>
    <?php get_template_part( 'components/somos/intro' ); ?>
    <?php get_template_part( 'components/somos/equipo' ); ?>
    <?php get_template_part( 'components/somos/clinica' ); ?>
    <?php get_template_part( 'components/somos/prensa' ); ?>
</main>

<?php get_footer(); ?>