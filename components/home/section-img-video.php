<?php
/**
 * Home component: Imagen / Video
 */

$tipo   = get_field( 'home_iv_tipo' );
$imagen = get_field( 'home_iv_imagen' );
$video  = get_field( 'home_iv_video' );
$titulo = get_field( 'home_iv_titulo' );
$texto  = get_field( 'home_iv_texto' );
$cta    = get_field( 'home_iv_cta' );
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

    <?php if ( $titulo || $texto || $cta ) : ?>
        <div class="home-img-video__content">

        <div class="bf-content">
            <?php if ( $titulo ) : ?>
                <h2 class="home-img-video__title"><?php echo esc_html( $titulo ); ?></h2>
            <?php endif; ?>

            <?php if ( $texto ) : ?>
                <p class="home-img-video__text"><?php echo wp_kses_post( $texto ); ?></p>
            <?php endif; ?>

            <?php if ( $cta ) : ?>
                <a class="home-img-video__cta"
                   href="<?php echo esc_url( $cta['url'] ); ?>"
                   <?php if ( $cta['target'] ) : ?>target="<?php echo esc_attr( $cta['target'] ); ?>" rel="noopener"<?php endif; ?>>
                    <?php echo esc_html( $cta['title'] ); ?>
                </a>
            <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>

</section>