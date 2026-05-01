<?php
/**
 * Eventos component: Hero
 */

$titulo      = get_field( 'ev_titulo' );
$imagen_hero = get_field( 'ev_imagen_hero' );
?>

<section class="ev-hero">

    <div class="ev-hero__titulo-wrapper">
        <?php if ( $titulo ) : ?>
            <h1 class="ev-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>
    </div>

    <?php if ( $imagen_hero ) : ?>
        <div class="ev-hero__imagen">
            <img src="<?php echo esc_url( $imagen_hero['url'] ); ?>"
                 alt="<?php echo esc_attr( $imagen_hero['alt'] ); ?>">
        </div>
    <?php endif; ?>

</section>