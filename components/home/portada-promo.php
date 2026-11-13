<?php
/**
 * Home component: Portada Promo
 * Se muestra en lugar del hero cuando home_hero_tipo = 'promo'.
 */

$media_tipo = get_field( 'home_promo_media_tipo' );
$imagen     = get_field( 'home_promo_imagen' );
$video      = get_field( 'home_promo_video' );
$titulo     = get_field( 'home_promo_titulo' );
$texto      = get_field( 'home_promo_texto' );
?>

<section class="home-promo">

    <?php if ( $media_tipo === 'video' && $video ) : ?>

        <video class="home-promo__media"
               autoplay
               muted
               loop
               playsinline>
            <source src="<?php echo esc_url( $video['url'] ); ?>"
                    type="<?php echo esc_attr( $video['mime_type'] ); ?>">
        </video>

    <?php elseif ( $imagen ) : ?>

        <img class="home-promo__media"
             src="<?php echo esc_url( $imagen['url'] ); ?>"
             alt="<?php echo esc_attr( $imagen['alt'] ); ?>">

    <?php endif; ?>

    <?php if ( $titulo || $texto ) : ?>
        <div class="home-promo__content">
            <div class="home-promo__box">

                <?php if ( $titulo ) : ?>
                    <h1 class="home-promo__titulo"><?php echo esc_html( $titulo ); ?></h1>
                <?php endif; ?>

                <?php if ( $texto ) : ?>
                    <p class="home-promo__texto"><?php echo nl2br( esc_html( $texto ) ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    <?php endif; ?>

</section>