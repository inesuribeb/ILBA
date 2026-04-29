<?php
/**
 * Somos component: Intro
 */

$somos_id    = get_page_by_path( 'somos' )->ID;
$subtitulo   = get_field( 'somos_intro_subtitulo',   $somos_id );
$img_1       = get_field( 'somos_intro_img_1',       $somos_id );
$img_2       = get_field( 'somos_intro_img_2',       $somos_id );
$descripcion = get_field( 'somos_intro_descripcion', $somos_id );
?>

<section class="somos-intro">

    <?php if ( $subtitulo ) : ?>
        <p class="somos-intro__subtitulo"><?php echo wp_kses_post( nl2br( esc_html( $subtitulo ) ) ); ?></p>
    <?php endif; ?>

    <div class="somos-intro__imagenes">
        <?php if ( $img_1 ) : ?>
            <div class="somos-intro__imagen">
                <img src="<?php echo esc_url( $img_1['url'] ); ?>"
                     alt="<?php echo esc_attr( $img_1['alt'] ); ?>">
            </div>
        <?php endif; ?>
        <?php if ( $img_2 ) : ?>
            <div class="somos-intro__imagen">
                <img src="<?php echo esc_url( $img_2['url'] ); ?>"
                     alt="<?php echo esc_attr( $img_2['alt'] ); ?>">
            </div>
        <?php endif; ?>
    </div>

    <?php if ( $descripcion ) : ?>
        <p class="somos-intro__descripcion"><?php echo esc_html( $descripcion ); ?></p>
    <?php endif; ?>

</section>