<?php
/**
 * Component: Home — Sección Tienda
 * Archivo: components/home/section-tienda.php
 */

if ( ! get_field( 'home_tienda_visible' ) ) return;

$tag         = get_field( 'home_tienda_tag' );
$titulo      = get_field( 'home_tienda_titulo' );
$cta_texto   = get_field( 'home_tienda_cta_texto' );
$cta_url     = get_field( 'home_tienda_cta_url' );

$cards = array();
for ( $i = 1; $i <= 7; $i++ ) {
    $cards[] = array(
        'titulo'      => get_field( 'home_tienda_card_' . $i . '_titulo' ),
        'descripcion' => get_field( 'home_tienda_card_' . $i . '_descripcion' ),
        'precio'      => get_field( 'home_tienda_card_' . $i . '_precio' ),
        'bg'          => get_field( 'home_tienda_card_' . $i . '_bg' ),
        'front'       => get_field( 'home_tienda_card_' . $i . '_front' ),
        'url'         => get_field( 'home_tienda_card_' . $i . '_url' ),
    );
}
?>

<section class="home-tienda" id="home-tienda">

    <div class="home-tienda__col-tag">
        <?php if ( $tag ) : ?>
            <span class="home-tienda__tag"><?php echo esc_html( $tag ); ?></span>
        <?php endif; ?>
    </div>

    <div class="home-tienda__col-main">

        <h2 class="home-tienda__titulo"><?php echo esc_html( $titulo ); ?></h2>

        <?php if ( $cta_texto && $cta_url ) : ?>
            <a href="<?php echo esc_url( home_url( $cta_url ) ); ?>" class="home-tienda__cta">
                <?php echo esc_html( $cta_texto ); ?>
            </a>
        <?php endif; ?>

        <div class="home-tienda__cards-wrapper">
            <div class="home-tienda__cards">
                <?php foreach ( $cards as $card ) :
                    if ( ! $card['titulo'] && ! $card['bg'] ) continue;
                ?>
                    <a href="<?php echo $card['url'] ? esc_url( home_url( $card['url'] ) ) : '#'; ?>" class="home-tienda__card">

                        <div class="home-tienda__card-imagenes">
                            <?php if ( $card['bg'] ) : ?>
                                <img class="home-tienda__card-bg" src="<?php echo esc_url( $card['bg']['url'] ); ?>" alt="<?php echo esc_attr( $card['bg']['alt'] ); ?>">
                            <?php endif; ?>
                            <?php if ( $card['front'] ) : ?>
                                <img class="home-tienda__card-front" src="<?php echo esc_url( $card['front']['url'] ); ?>" alt="<?php echo esc_attr( $card['front']['alt'] ); ?>">
                            <?php endif; ?>
                        </div>

                        <div class="home-tienda__card-info">
                            <div class="home-tienda__card-line1">
                                <?php if ( $card['titulo'] ) : ?>
                                    <span class="home-tienda__card-titulo"><?php echo esc_html( $card['titulo'] ); ?></span>
                                <?php endif; ?>
                                <?php if ( $card['precio'] ) : ?>
                                    <span class="home-tienda__card-precio"><?php echo esc_html( $card['precio'] ); ?> €</span>
                                <?php endif; ?>
                            </div>
                            <?php if ( $card['descripcion'] ) : ?>
                                <div class="home-tienda__card-descripcion">
                                    <?php echo esc_html( $card['descripcion'] ); ?>
                                </div>
                            <?php endif; ?>
                        </div>

                    </a>
                <?php endforeach; ?>
            </div>
        </div>

    </div>

</section>