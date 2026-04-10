<?php
/**
 * Template: Single Beauty & Medical
 */
 
get_header();
?>
<?php echo '<!-- Template: ' . __FILE__ . ' -->'; ?>

 
<main id="main" class="single-beauty-medical">
 
    <?php get_template_part( 'components/beauty-medical/hero' ); ?>
 
    <?php get_template_part( 'components/beauty-medical/info' ); ?>
 
    <?php get_template_part( 'components/beauty-medical/tratamientos' ); ?>
 
</main>
 
<?php
get_footer();