<?php
/**
 * Home component: Portada Promo
 * Se muestra en lugar del hero cuando home_hero_tipo = 'promo'.
 *
 * - Fondo (imagen o vídeo) + caja burdeos centrada: campos home_promo_*
 * - Título y CTAs abajo a la izquierda: los mismos campos y el mismo CSS que el hero (home_hero_*)
 */

// Promo
$media_tipo   = get_field( 'home_promo_media_tipo' );
$imagen       = get_field( 'home_promo_imagen' );
$video        = get_field( 'home_promo_video' );
$promo_titulo = get_field( 'home_promo_titulo' );
$promo_texto  = get_field( 'home_promo_texto' );

// Hero (título + CTAs)
$titulo     = get_field( 'home_hero_titulo' );
$cta1_texto = get_field( 'home_hero_cta1_texto' );
$cta1_link  = get_field( 'home_hero_cta1_link' );
$cta2_texto = get_field( 'home_hero_cta2_texto' );
$cta2_link  = get_field( 'home_hero_cta2_link' );
?>

<section class="home-promo">

    <!-- Fondo -->
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

    <!-- Degradado inferior para que se lean título y CTAs (CSS del hero) -->
    <div class="home-hero__overlay"></div>

    <!-- Caja promo centrada -->
    <?php if ( $promo_titulo || $promo_texto ) : ?>
        <div class="home-promo__content">
            <div class="home-promo__box">

                <?php if ( $promo_titulo ) : ?>
                    <h2 class="home-promo__titulo"><?php echo esc_html( $promo_titulo ); ?></h2>
                <?php endif; ?>

                <?php if ( $promo_texto ) : ?>
                    <p class="home-promo__texto"><?php echo nl2br( esc_html( $promo_texto ) ); ?></p>
                <?php endif; ?>

            </div>
        </div>
    <?php endif; ?>

    <!-- Título + CTAs abajo a la izquierda (CSS del hero) -->
    <div class="home-hero__content">
        <?php if ( $titulo ) : ?>
            <h1 class="home-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>

        <?php if ( ( $cta1_texto && $cta1_link ) || ( $cta2_texto && $cta2_link ) ) : ?>
            <div class="home-hero__ctas">
                <?php if ( $cta1_texto && $cta1_link ) : ?>
                    <a href="<?php echo esc_url( home_url( $cta1_link ) ); ?>" class="home-hero__cta home-hero__cta--primario">
                        <?php echo esc_html( $cta1_texto ); ?>
                    </a>
                <?php endif; ?>
                <?php if ( $cta2_texto && $cta2_link ) : ?>
                    <a href="<?php echo esc_url( home_url( $cta2_link ) ); ?>" class="home-hero__cta home-hero__cta--secundario">
                        <?php echo esc_html( $cta2_texto ); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</section>