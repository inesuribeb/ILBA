<?php
/**
 * Template: Checkout wrapper
 * Archivo: woocommerce/checkout/checkout.php
 */

get_header();
?>

<main id="main" class="page-checkout">
    <?php
    $checkout_page_id = wc_get_page_id( 'checkout' );
    if ( $checkout_page_id ) {
        $page = get_post( $checkout_page_id );
        echo apply_filters( 'the_content', $page->post_content );
    }
    ?>
</main>

<?php get_footer(); ?>