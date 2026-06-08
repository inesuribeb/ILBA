<?php
/**
 * Component: Producto single — Intro
 * Archivo: components/shop/single/intro.php
 */

global $product;
if ( ! $product ) $product = wc_get_product( get_the_ID() );

// Marca
$terms = get_the_terms( get_the_ID(), 'product_cat' );
$marca = '';
if ( $terms && ! is_wp_error( $terms ) ) {
    foreach ( $terms as $term ) {
        $padre = get_term( $term->parent, 'product_cat' );
        if ( $padre && ! is_wp_error( $padre ) && $padre->slug === 'marca' ) {
            $marca = $term->name;
            break;
        }
    }
}

// Tamaño
$tamano = get_field( 'producto_tamano' );
?>

<div class="producto-intro">

    <div class="producto-intro__top">

        <div class="producto-intro__info">
            <?php if ( $marca ) : ?>
                <span class="producto-intro__marca"><?php echo esc_html( $marca ); ?></span>
            <?php endif; ?>
            <span class="producto-intro__precio"><?php echo $product->get_price_html(); ?></span>
        </div>

        <?php if ( $tamano ) : ?>
            <div class="producto-intro__titulo">
        <h1><?php the_title(); ?></h1>
    </div>
            <div class="producto-intro__tamano">
                <span><?php echo esc_html( $tamano ); ?></span>
            </div>
        <?php endif; ?>

    </div>

    <div class="producto-intro__cta">
    <?php
    global $product;
    echo sprintf(
        '<form class="cart" action="%s" method="post">
            <input type="hidden" name="quantity" value="1">
            <input type="hidden" name="add-to-cart" value="%s">
            <button type="submit" class="single_add_to_cart_button button alt">%s</button>
        </form>',
        esc_url( $product->add_to_cart_url() ),
        esc_attr( $product->get_id() ),
        esc_html( $product->single_add_to_cart_text() )
    ); ?>
</div>

</div>