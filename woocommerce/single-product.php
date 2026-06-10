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
    <div class="producto__col-izq-intro">
        <?php get_template_part( 'components/shop/single/intro' ); ?>
    </div>
    <div class="producto__col-izq-carousel">
        <?php get_template_part( 'components/shop/single/carousel' ); ?>
    </div>
    <div class="producto__col-izq-descripcion">
        <?php get_template_part( 'components/shop/single/descripcion' ); ?>
    </div>
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