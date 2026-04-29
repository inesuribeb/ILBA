<?php
/**
 * Aparatología component: Relacionados
 */

$categoria   = get_field( 'ap_categoria' );
$current_id  = get_the_ID();

// Subtítulo según categoría
$subtitulos = array(
    'facial'          => 'Descubre nuestros faciales',
    'corporal'        => 'Descubre nuestros corporales',
    'facial_corporal' => 'Descubre nuestros faciales y corporales',
);
$subtitulo = $categoria && isset( $subtitulos[ $categoria ] ) ? $subtitulos[ $categoria ] : '';

// Query: otros aparatos de la misma categoría, máx 6
$args = array(
    'post_type'      => 'aparatologia',
    'posts_per_page' => 6,
    'post__not_in'   => array( $current_id ),
    'meta_query'     => array(
        array(
            'key'     => 'ap_categoria',
            'value'   => $categoria,
            'compare' => '=',
        ),
    ),
);
$relacionados = new WP_Query( $args );
?>

<section class="ap-relacionados" id="ap-relacionados">

    <div class="ap-relacionados__header">
        <h2 class="ap-relacionados__titulo">
            Somos el centro con más aparatología de Bilbao.<br>
            ¿De Euskadi? Puede que también.
        </h2>
        <?php if ( $subtitulo ) : ?>
            <p class="ap-relacionados__subtitulo"><?php echo esc_html( $subtitulo ); ?></p>
        <?php endif; ?>
    </div>

    <?php if ( $relacionados->have_posts() ) : ?>
        <div class="ap-relacionados__grid">
            <?php while ( $relacionados->have_posts() ) : $relacionados->the_post(); ?>
                <?php
                $img_silueta = get_field( 'ap_imagen_silueta' );
                $img_url     = $img_silueta ? $img_silueta['url'] : '';
                $img_alt     = $img_silueta ? $img_silueta['alt'] : get_the_title();
                ?>
                <a href="<?php the_permalink(); ?>" class="ap-relacionados__card">
                    <?php if ( $img_url ) : ?>
                        <div class="ap-relacionados__card-bg">
                            <img src="<?php echo esc_url( $img_url ); ?>"
                                 alt="<?php echo esc_attr( $img_alt ); ?>">
                        </div>
                    <?php endif; ?>
                    <div class="ap-relacionados__card-overlay"></div>
                    <div class="ap-relacionados__card-content">
                        <h3 class="ap-relacionados__card-titulo"><?php the_title(); ?></h3>
                    </div>
                </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div>
    <?php endif; ?>

</section>