<?php
/**
 * Component: Producto single — Carousel
 * Archivo: components/shop/single/carousel.php
 */

global $product;
if ( ! $product ) $product = wc_get_product( get_the_ID() );

$imagen_principal = get_post_thumbnail_id();
$galeria_ids      = $product->get_gallery_image_ids();
$todas            = array_filter( array_merge( array( $imagen_principal ), $galeria_ids ) );
?>

<div class="producto-carousel">

    <div class="producto-carousel__main">
        <?php echo wp_get_attachment_image( $imagen_principal, 'large', false, array( 'class' => 'producto-carousel__img-main' ) ); ?>
    </div>

    <?php if ( ! empty( $todas ) ) : ?>
        <div class="producto-carousel__thumbs">
            <?php foreach ( $todas as $i => $img_id ) : ?>
                <div class="producto-carousel__thumb <?php echo $i === 0 ? 'is-active' : ''; ?>" data-index="<?php echo $i; ?>">
                    <?php echo wp_get_attachment_image( $img_id, 'medium' ); ?>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

</div>