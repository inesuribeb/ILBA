<?php
/**
 * Template: Checkout
 * Archivo: woocommerce/checkout/form-checkout.php
 */

do_action( 'woocommerce_before_checkout_form', $checkout );
?>

<div class="checkout-layout">

    <div class="checkout-layout__form">
        <form name="checkout" method="post" class="checkout woocommerce-checkout" action="<?php echo esc_url( wc_get_checkout_url() ); ?>" enctype="multipart/form-data">

            <?php if ( $checkout->get_checkout_fields() ) : ?>

                <div class="checkout-billing">
                    <h2 class="checkout__titulo"><?php esc_html_e( 'Datos de facturación', 'woocommerce' ); ?></h2>
                    <?php do_action( 'woocommerce_checkout_billing' ); ?>
                </div>

                <div class="checkout-shipping">
                    <?php do_action( 'woocommerce_checkout_shipping' ); ?>
                </div>

            <?php endif; ?>

            <div class="checkout-additional">
                <?php do_action( 'woocommerce_before_order_notes', $checkout ); ?>
                <?php do_action( 'woocommerce_after_order_notes', $checkout ); ?>
            </div>

            <?php do_action( 'woocommerce_checkout_before_order_review_heading' ); ?>

            <div class="checkout-payment">
                <h2 class="checkout__titulo"><?php esc_html_e( 'Pago', 'woocommerce' ); ?></h2>
                <?php do_action( 'woocommerce_checkout_order_review' ); ?>
            </div>

        </form>
    </div>

    <div class="checkout-layout__resumen">
        <h2 class="checkout__titulo">Tu pedido</h2>
        <div class="checkout-resumen">
            <?php do_action( 'woocommerce_checkout_before_order_review' ); ?>
            <div id="order_review" class="woocommerce-checkout-review-order">
                <?php woocommerce_order_review(); ?>
            </div>
            <?php do_action( 'woocommerce_checkout_after_order_review' ); ?>
        </div>
    </div>

</div>

<?php do_action( 'woocommerce_after_checkout_form', $checkout ); ?>