<?php
/**
 * Template: Single Aparatología
 */
 
get_header();
?>
 
<main id="main" class="single-aparatologia">
    <?php get_template_part( 'components/aparatologia/hero' ); ?>
    <?php get_template_part( 'components/aparatologia/descripcion' ); ?>
    <?php get_template_part( 'components/aparatologia/relacionados' ); ?>
</main>
 
<?php get_footer(); ?>