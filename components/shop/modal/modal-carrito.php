<?php
/**
 * Component: Modal Carrito
 * Archivo: components/shop/modal/modal-carrito.php
 */
?>

<div class="modal-carrito" id="modal-carrito" aria-hidden="true">

    <div class="modal-carrito__overlay"></div>

    <div class="modal-carrito__panel">

        <div class="modal-carrito__header">
            <span class="modal-carrito__titulo">
                Carrito [<?php echo function_exists( 'WC' ) && WC()->cart ? WC()->cart->get_cart_contents_count() : '0'; ?>]
            </span>
            <button class="modal-carrito__cerrar" aria-label="Cerrar carrito">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <div class="modal-carrito__items">
            <?php if ( function_exists( 'WC' ) && WC()->cart && ! WC()->cart->is_empty() ) : ?>
                <?php foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) :
                    $_product  = $cart_item['data'];
                    $permalink = $_product->get_permalink();
                ?>
                    <div class="modal-carrito__item">

                        <div class="modal-carrito__item-imagen">
                            <a href="<?php echo esc_url( $permalink ); ?>">
                                <?php echo $_product->get_image( 'thumbnail' ); ?>
                            </a>
                        </div>

                        <div class="modal-carrito__item-info">
    <div class="modal-carrito__item-info-top">
        <a href="<?php echo esc_url( $permalink ); ?>" class="modal-carrito__item-nombre">
            <?php echo esc_html( $_product->get_name() ); ?>
        </a>
        <span class="modal-carrito__item-precio">
            <?php echo WC()->cart->get_product_price( $_product ); ?>
        </span>
    </div>
    <div class="modal-carrito__item-info-bottom">
        <span class="modal-carrito__item-cantidad">
            Cantidad: <?php echo $cart_item['quantity']; ?>
        </span>
    </div>
</div>

                        <a href="<?php echo esc_url( wc_get_cart_remove_url( $cart_item_key ) ); ?>" class="modal-carrito__item-eliminar" aria-label="Eliminar">
                            &times;
                        </a>

                    </div>
                <?php endforeach; ?>
            <?php else : ?>
                <p class="modal-carrito__vacio">Tu carrito está vacío.</p>
            <?php endif; ?>
        </div>

        <div class="modal-carrito__footer">
            <div class="modal-carrito__subtotal">
                <span>Subtotal</span>
                <span><?php echo function_exists( 'WC' ) ? WC()->cart->get_cart_subtotal() : ''; ?></span>
            </div>
            <div class="modal-carrito__acciones">
                <a href="<?php echo esc_url( wc_get_cart_url() ); ?>" class="modal-carrito__btn modal-carrito__btn--secundario">
                    Ver carrito
                </a>
                <a href="<?php echo esc_url( wc_get_checkout_url() ); ?>" class="modal-carrito__btn modal-carrito__btn--principal">
                    Finalizar pedido
                </a>
            </div>
        </div>

    </div>

</div>