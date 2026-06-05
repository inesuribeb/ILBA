<?php
/**
 * Component: Grid de productos
 * Archivo: components/shop/archive/grid.php
 */

$titulo_grid = 'Todos los productos';
$tax_query   = array();

if ( is_tax( 'product_cat' ) ) {
    $term_actual = get_queried_object();
    $padre       = get_term( $term_actual->parent, 'product_cat' );

    if ( $padre && ! is_wp_error( $padre ) && $padre->slug !== 'flag-comercial' ) {
        $titulo_grid = esc_html( $padre->name ) . ': ' . esc_html( $term_actual->name );
    } else {
        $titulo_grid = esc_html( $term_actual->name );
    }

    $tax_query = array(
        array(
            'taxonomy' => 'product_cat',
            'field'    => 'term_id',
            'terms'    => $term_actual->term_id,
        ),
    );
}

$args = array(
    'post_type'      => 'product',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'tax_query'      => $tax_query,
    'meta_query'     => array(
        array(
            'key'   => '_stock_status',
            'value' => 'instock',
        ),
    ),
);

$productos = new WP_Query( $args );
?>

<div class="shop-grid-wrapper">

    <aside class="shop-filtrado-col">
        <?php get_template_part( 'components/shop/archive/filtrado' ); ?>
    </aside>

    <div class="shop-grid-main">

        <div class="shop-grid__header">
            <h2 class="shop-grid__titulo">
                <button class="shop-grid__filtro-trigger" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </button>
                <?php echo $titulo_grid; ?>
            </h2>
            <div class="shop-grid__vista">
                <span class="shop-grid__vista-label">Vista</span>
                <div class="shop-grid__vista-track" data-vista="centro">
                    <div class="shop-grid__vista-circulo"></div>
                </div>
            </div>
        </div>

        <section class="shop-grid shop-grid--4">

            <?php if ( $productos->have_posts() ) : ?>
                <?php while ( $productos->have_posts() ) : $productos->the_post();
                    global $product;
                    $product = wc_get_product( get_the_ID() );
                ?>
                    <article class="shop-grid__card">

                        <div class="shop-grid__card-imagen">
                            <a href="<?php the_permalink(); ?>">
                                <?php echo $product->get_image( 'woocommerce_single' ); ?>
                            </a>
                        </div>

                        <div class="shop-grid__card-info">
                            <div class="line1">
                                <h3 class="shop-grid__card-titulo">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <span class="shop-grid__card-precio">
                                    <?php echo $product->get_price_html(); ?>
                                </span>
                            </div>
                            <div class="line2">
                                <?php
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
                                if ( $marca ) : ?>
                                    <span class="shop-grid__card-marca"><?php echo esc_html( $marca ); ?></span>
                                <?php endif; ?>
                            </div>
                        </div>

                    </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>

            <?php else : ?>
                <p class="shop-grid__vacio">No hay productos disponibles.</p>
            <?php endif; ?>

        </section>

    </div>

</div>