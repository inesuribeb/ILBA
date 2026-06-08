<?php
/**
 * Template: Producto single
 * Archivo: woocommerce/single-product.php
 */

get_header();
?>

<main id="main" class="page-producto">

    <section class="producto__layout">

        <div class="producto__col-izq">
            <?php get_template_part( 'components/shop/single/intro' ); ?>
            <?php get_template_part( 'components/shop/single/carousel' ); ?>
            <?php get_template_part( 'components/shop/single/descripcion' ); ?>
        </div>

        <div class="producto__col-der">
            <?php get_template_part( 'components/shop/single/details' ); ?>
        </div>

    </section>

    <section class="producto__relacionados">
        <?php get_template_part( 'components/shop/single/relacionados' ); ?>
    </section>

</main>

<?php get_footer(); ?>