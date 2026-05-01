<?php
/**
 * Eventos component: Sección 2
 */

$subtitulo_1  = get_field( 'ev_subtitulo_1' );
$img_1        = get_field( 'ev_img_1' );
$img_2        = get_field( 'ev_img_2' );
$subtitulo_2  = get_field( 'ev_subtitulo_2' );
$texto        = get_field( 'ev_texto' );
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );
?>

<section class="ev-seccion2">

    <?php if ( $subtitulo_1 ) : ?>
        <h2 class="ev-seccion2__subtitulo"><?php echo esc_html( $subtitulo_1 ); ?></h2>
    <?php endif; ?>

    <?php if ( $img_1 || $img_2 ) : ?>
        <div class="ev-seccion2__imagenes">
            <?php if ( $img_1 ) : ?>
                <div class="ev-seccion2__imagen">
                    <img src="<?php echo esc_url( $img_1['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_1['alt'] ); ?>">
                </div>
            <?php endif; ?>
            <?php if ( $img_2 ) : ?>
                <div class="ev-seccion2__imagen">
                    <img src="<?php echo esc_url( $img_2['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_2['alt'] ); ?>">
                </div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <?php if ( $subtitulo_2 ) : ?>
        <h2 class="ev-seccion2__subtitulo"><?php echo esc_html( $subtitulo_2 ); ?></h2>
    <?php endif; ?>

    <?php if ( $texto ) : ?>
        <div class="ev-seccion2__texto">
            <?php echo wp_kses_post( wpautop( $texto ) ); ?>
        </div>
    <?php endif; ?>

    <a href="<?php echo esc_url( $contacto_url ); ?>" class="ev-seccion2__cta">
        Más información
    </a>

</section>