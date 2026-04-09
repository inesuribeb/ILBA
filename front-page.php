<?php
/**
 * Template: Home
 * Archivo: front-page.php
 */
 
get_header();
?>
 
<main id="main" class="home">
 
    <?php get_template_part( 'components/home/hero' ); ?>
 
    <?php get_template_part( 'components/home/section-nuestros-servicios' ); ?>
 
    <?php get_template_part( 'components/home/section-clinica' ); ?>
 
    <?php get_template_part( 'components/home/section-conocenos' ); ?>
 
    <?php get_template_part( 'components/home/section-nuestras-marcas' ); ?>
 
    <?php get_template_part( 'components/home/section-nuestra-coleccion' ); ?>
 
    <?php get_template_part( 'components/home/section-img-video' ); ?>
 
</main>
 
<?php
get_footer();