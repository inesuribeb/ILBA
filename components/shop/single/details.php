<?php
/**
 * Component: Producto single — Details
 * Archivo: components/shop/single/details.php
 */

global $product;
if ( ! $product ) $product = wc_get_product( get_the_ID() );

$beneficios   = get_field( 'producto_beneficios' );
$ingredientes = $product->get_short_description();
$modo_empleo  = get_field( 'producto_modo_empleo' );
?>

<div class="producto-details-wrapper">
    <div class="producto-details__spacer"></div>

    <div class="producto-details">

        <?php if ( $beneficios ) : ?>
            <div class="producto-details__item">
                <button class="producto-details__trigger">
                    Beneficios
                </button>
                <div class="producto-details__contenido">
                    <?php echo wp_kses_post( $beneficios ); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( $ingredientes ) : ?>
            <div class="producto-details__item">
                <button class="producto-details__trigger">
                    Ingredientes
                </button>
                <div class="producto-details__contenido">
                    <?php echo wp_kses_post( $ingredientes ); ?>
                </div>
            </div>
        <?php endif; ?>

        <?php if ( $modo_empleo ) : ?>
            <div class="producto-details__item">
                <button class="producto-details__trigger">
                    Modo de empleo
                </button>
                <div class="producto-details__contenido">
                    <?php echo wp_kses_post( $modo_empleo ); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

    <div class="producto-details__spacer"></div>
</div>