<?php
/**
 * Home component: Nuestras Clínicas
 */

$centros = get_posts( array(
    'post_type'   => 'centro',
    'post_status' => 'publish',
    'numberposts' => -1,
    'orderby'     => 'menu_order',
    'order'       => 'ASC',
) );

if ( empty( $centros ) ) return;
?>

<section class="home-nuestras-clinicas">

    <div class="home-nuestras-clinicas__col-tag">
        <span class="home-nuestras-clinicas__tag">Nuestras clínicas</span>
    </div>

    <div class="home-nuestras-clinicas__col-main">

        <div class="home-nuestras-clinicas__cards">
            <?php foreach ( $centros as $centro ) :
                $thumb   = get_the_post_thumbnail_url( $centro->ID, 'large' );
                $modal   = get_field( 'ce_modal_flotante', $centro->ID );
                $titulo  = $modal['titulo'] ?? $centro->post_title;
                $url     = get_permalink( $centro->ID );
            ?>
                <a href="<?php echo esc_url( $url ); ?>" class="home-nuestras-clinicas__card">
                    <?php if ( $thumb ) : ?>
                        <div class="home-nuestras-clinicas__card-img">
                            <img src="<?php echo esc_url( $thumb ); ?>"
                                 alt="<?php echo esc_attr( $titulo ); ?>">
                        </div>
                    <?php endif; ?>
                    <p class="home-nuestras-clinicas__card-titulo">
                        <?php echo esc_html( strtoupper( $titulo ) ); ?>
                    </p>
                </a>
            <?php endforeach; ?>
        </div>

    </div>

</section>