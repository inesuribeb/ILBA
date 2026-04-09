<?php
/**
 * Home component: Imagen / Video
 */

$tipo   = get_field( 'home_iv_tipo' );
$imagen = get_field( 'home_iv_imagen' );
$video  = get_field( 'home_iv_video' );
?>

<section class="home-img-video">

    <?php if ( $tipo === 'video' && $video ) : ?>

        <video class="home-img-video__media"
               autoplay
               muted
               loop
               playsinline>
            <source src="<?php echo esc_url( $video['url'] ); ?>"
                    type="<?php echo esc_attr( $video['mime_type'] ); ?>">
        </video>

    <?php elseif ( $imagen ) : ?>

        <img class="home-img-video__media"
             src="<?php echo esc_url( $imagen['url'] ); ?>"
             alt="<?php echo esc_attr( $imagen['alt'] ); ?>">

    <?php endif; ?>

</section>