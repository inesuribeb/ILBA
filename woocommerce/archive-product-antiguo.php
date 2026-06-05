<?php
/**
 * Template: Tienda (archivo de productos)
 * Archivo: woocommerce/archive-product.php
 */

get_header();
?>

<main id="main" class="page-tienda">
    <?php get_template_part( 'components/shop/archive/filtrado' ); ?>
    <?php get_template_part( 'components/shop/archive/grid' ); ?>
</main>

<?php get_footer(); ?>