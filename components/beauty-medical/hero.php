<?php
/**
 * Beauty & Medical component: Hero
 */

$titulo      = get_field( 'bm_titulo' );
$imagen_hero = get_field( 'bm_imagen_hero' );
?>

<section class="bm-hero">

    <?php if ( $imagen_hero ) : ?>
        <div class="bm-hero__bg">
            <img src="<?php echo esc_url( $imagen_hero['url'] ); ?>"
                 alt="<?php echo esc_attr( $imagen_hero['alt'] ); ?>">
        </div>
    <?php endif; ?>

    <div class="bm-hero__overlay"></div>

    <div class="bm-hero__content">
        <?php if ( $titulo ) : ?>
            <h1 class="bm-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>
    </div>

</section>