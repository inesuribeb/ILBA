<?php
/**
 * Component: Producto single — Relacionados
 * Archivo: components/shop/single/relacionados.php
 */

global $product;
if ( ! $product ) $product = wc_get_product( get_the_ID() );

// Obtener la marca del producto actual
$terms = get_the_terms( get_the_ID(), 'product_cat' );
$marca_term = null;
if ( $terms && ! is_wp_error( $terms ) ) {
    foreach ( $terms as $term ) {
        $padre = get_term( $term->parent, 'product_cat' );
        if ( $padre && ! is_wp_error( $padre ) && $padre->slug === 'marca' ) {
            $marca_term = $term;
            break;
        }
    }
}

if ( ! $marca_term ) return;

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => 4,
    'post_status'    => 'publish',
    'post__not_in'   => array( get_the_ID() ),
    'tax_query'      => array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $marca_term->term_id,
        ),
    ),
    'meta_query'     => array(
        array(
            'key'   => '_stock_status',
            'value' => 'instock',
        ),
    ),
);

$relacionados = new WP_Query( $args );

if ( ! $relacionados->have_posts() ) return;
?>

<div class="producto-relacionados">

    <h2 class="producto-relacionados__titulo">Productos relacionados</h2>

    <div class="producto-relacionados__grid">
        <?php while ( $relacionados->have_posts() ) : $relacionados->the_post();
            $rel_product = wc_get_product( get_the_ID() );
        ?>
            <article class="shop-grid__card">

                <div class="shop-grid__card-imagen">
                    <a href="<?php the_permalink(); ?>">
                        <?php echo $rel_product->get_image( 'woocommerce_single' ); ?>
                    </a>
                </div>

                <div class="shop-grid__card-info">
                    <div class="line1">
                        <h3 class="shop-grid__card-titulo">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <span class="shop-grid__card-precio">
                            <?php echo $rel_product->get_price_html(); ?>
                        </span>
                    </div>
                    <div class="line2">
                        <span class="shop-grid__card-marca"><?php echo esc_html( $marca_term->name ); ?></span>
                    </div>
                </div>

            </article>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
    </div>

</div>