<?php
/**
 * Template: Cart
 * Archivo: woocommerce/cart/cart.php
 */

get_header();
?>

<main id="main" class="page-cart">
    <?php woocommerce_output_all_notices(); ?>
    <?php do_action( 'woocommerce_before_cart' ); ?>

    <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">

        <div class="cart-layout">

            <div class="cart-layout__items">
                <h2 class="cart__titulo">Tu carrito</h2>

                <?php do_action( 'woocommerce_before_cart_table' ); ?>

                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">
                    <thead>
                        <tr>
                            <th class="product-thumbnail"></th>
                            <th class="product-name"><?php esc_html_e( 'Producto', 'woocommerce' ); ?></th>
                            <th class="product-price"><?php esc_html_e( 'Precio', 'woocommerce' ); ?></th>
                            <!-- <th class="product-quantity"><?php esc_html_e( 'Cantidad', 'woocommerce' ); ?></th> -->
                            <!-- <th class="product-subtotal"><?php esc_html_e( 'Subtotal', 'woocommerce' ); ?></th> -->
                            <th class="product-remove"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                        <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) :
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );

                                $stock     = $_product->get_stock_quantity();
                                $max_value = ( $stock !== null ) ? $stock : $_product->get_max_purchase_quantity();
                        ?>
                            <tr class="woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">

                                <td class="product-thumbnail">
                                    <?php
                                    $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );
                                    if ( $product_permalink ) echo '<a href="' . esc_url( $product_permalink ) . '">' . $thumbnail . '</a>';
                                    else echo $thumbnail;
                                    ?>
                                </td>

                                <td class="product-name">
                                    <?php if ( $product_permalink ) : ?>
                                        <a href="<?php echo esc_url( $product_permalink ); ?>"><?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ); ?></a>
                                    <?php else : ?>
                                        <?php echo wp_kses_post( apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) ); ?>
                                    <?php endif; ?>
                                    <?php do_action( 'woocommerce_after_cart_item_name', $cart_item, $cart_item_key ); ?>
                                </td>

                                <td class="product-price">
                                    <?php echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key ); ?>
                                </td>

                                <!-- <td class="product-quantity">
                                    <?php
                                    if ( $_product->is_sold_individually() ) {
                                        echo '<span class="product-quantity__single">1</span>';
                                    } else {
                                        echo apply_filters(
                                            'woocommerce_cart_item_quantity',
                                            woocommerce_quantity_input( array(
                                                'input_name'   => "cart[{$cart_item_key}][qty]",
                                                'input_value'  => $cart_item['quantity'],
                                                'max_value'    => $max_value,
                                                'min_value'    => '0',
                                                'product_name' => $_product->get_name(),
                                            ), $_product, false ),
                                            $cart_item, $cart_item_key
                                        );
                                    }
                                    ?>
                                </td> -->

                                <!-- <td class="product-subtotal">
                                    <?php echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key ); ?>
                                </td> -->

                                <td class="product-remove">
                                    <?php echo apply_filters(
                                        'woocommerce_cart_item_remove_link',
                                        sprintf(
                                            '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s">&times;</a>',
                                            esc_url( wc_get_cart_remove_url( $cart_item_key ) ),
                                            esc_attr__( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ),
                                        $cart_item_key
                                    ); ?>
                                </td>

                            </tr>
                            <?php endif; ?>
                        <?php endforeach; ?>

                        <?php do_action( 'woocommerce_cart_contents' ); ?>

                        <tr>
                            <td colspan="6" class="actions">
                                <?php do_action( 'woocommerce_cart_coupon' ); ?>
                                <!-- <button type="submit" class="button" name="update_cart" value="<?php esc_attr_e( 'Update cart', 'woocommerce' ); ?>"><?php esc_html_e( 'Actualizar carrito', 'woocommerce' ); ?></button> -->
                                <?php do_action( 'woocommerce_cart_actions' ); ?>
                                <?php wp_nonce_field( 'woocommerce-cart', 'woocommerce-cart-nonce' ); ?>
                            </td>
                        </tr>

                        <?php do_action( 'woocommerce_after_cart_contents' ); ?>
                    </tbody>
                </table>

                <?php do_action( 'woocommerce_after_cart_table' ); ?>
            </div>

            <div class="cart-layout__resumen">
                <?php do_action( 'woocommerce_before_cart_collaterals' ); ?>
                <?php do_action( 'woocommerce_cart_collaterals' ); ?>
            </div>

        </div>

    </form>

    <?php do_action( 'woocommerce_after_cart' ); ?>
</main>

<?php get_footer(); ?>