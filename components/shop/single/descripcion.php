<?php
/**
 * Component: Producto single — Descripción
 * Archivo: components/shop/single/descripcion.php
 */

global $product;
if ( ! $product ) $product = wc_get_product( get_the_ID() );

$descripcion = $product->get_description();

if ( ! $descripcion ) return;
?>

<div class="producto-descripcion">
    <?php echo wp_kses_post( $descripcion ); ?>
</div>