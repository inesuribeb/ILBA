<?php
/**
 * Aparatología component: Hero
 */

$titulo         = get_field( 'ap_titulo' );
$imagen_silueta = get_field( 'ap_imagen_silueta' );
$sede           = get_field( 'ap_sede' ) ?: 'ambas';

$sedes_label = array(
    'bilbao'  => 'Bilbao',
    'donosti' => 'Donosti',
);
?>

<section class="ap-hero">

    <div class="ap-hero__imagen">
        <?php if ( $imagen_silueta ) : ?>
            <img src="<?php echo esc_url( $imagen_silueta['url'] ); ?>"
                 alt="<?php echo esc_attr( $imagen_silueta['alt'] ); ?>">
        <?php endif; ?>
    </div>

    <div class="ap-hero__content">
        <!-- <?php if ( isset( $sedes_label[ $sede ] ) ) : ?>
            <p class="ap-hero__sede">
                Solo disponible en <?php echo esc_html( $sedes_label[ $sede ] ); ?>
            </p>
        <?php endif; ?> -->

        <?php if ( $titulo ) : ?>
            <h1 class="ap-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>
        <?php if ( isset( $sedes_label[ $sede ] ) ) : ?>
            <p class="ap-hero__sede">
                Solo disponible en <?php echo esc_html( $sedes_label[ $sede ] ); ?>
            </p>
        <?php endif; ?>
    </div>

</section>