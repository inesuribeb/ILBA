<?php
/**
 * Servicios component: Hero
 */

$titulo      = get_field( 'sv_titulo' );
$imagen_hero = get_field( 'sv_imagen_hero' );
?>

<section class="sv-hero" id="sv-hero">

    <?php if ( $imagen_hero ) : ?>
        <div class="sv-hero__bg">
            <img src="<?php echo esc_url( $imagen_hero['url'] ); ?>"
                 alt="<?php echo esc_attr( $imagen_hero['alt'] ); ?>">
        </div>
    <?php endif; ?>

    <div class="sv-hero__overlay"></div>

    <div class="sv-hero__content">
        <?php if ( $titulo ) : ?>
            <h1 class="sv-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>
    </div>

</section>