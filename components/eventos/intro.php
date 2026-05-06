<?php
/**
 * Eventos component: Intro
 */

$descripcion = get_field( 'ev_descripcion' );
$img_intro   = get_field( 'ev_img_intro' );
?>

<section class="ev-intro">

    <?php if ( $descripcion ) : ?>
        <p class="ev-intro__descripcion"><?php echo nl2br( wp_kses_post( $descripcion ) ); ?></p>    <?php endif; ?>

    <?php if ( $img_intro ) : ?>
        <div class="ev-intro__imagen">
            <img src="<?php echo esc_url( $img_intro['url'] ); ?>"
                 alt="<?php echo esc_attr( $img_intro['alt'] ); ?>">
        </div>
    <?php endif; ?>

</section>