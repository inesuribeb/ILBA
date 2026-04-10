<?php
/**
 * Beauty & Medical component: Info
 */

$descripcion    = get_field( 'bm_descripcion' );
$imagen_estatica = get_field( 'bm_imagen_estatica' );
$imagen_1       = get_field( 'bm_imagen_1' );
$imagen_2       = get_field( 'bm_imagen_2' );

// Características
$caracteristicas = array();
for ( $i = 1; $i <= 6; $i++ ) {
    $car = get_field( 'bm_caracteristica_' . $i );
    if ( $car ) {
        $caracteristicas[] = $car;
    }
}
?>

<section class="bm-info">

    <div class="bm-info__col-imagen">
        <?php if ( $imagen_estatica ) : ?>
            <img src="<?php echo esc_url( $imagen_estatica['url'] ); ?>"
                 alt="<?php echo esc_attr( $imagen_estatica['alt'] ); ?>">
        <?php endif; ?>
    </div>

    <div class="bm-info__col-main">

        <?php if ( $descripcion ) : ?>
            <p class="bm-info__descripcion"><?php echo esc_html( $descripcion ); ?></p>
        <?php endif; ?>

        <?php if ( ! empty( $caracteristicas ) ) : ?>
            <ul class="bm-info__caracteristicas">
                <?php foreach ( $caracteristicas as $car ) : ?>
                    <li class="bm-info__caracteristica"><?php echo esc_html( $car ); ?></li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <?php if ( $imagen_1 || $imagen_2 ) : ?>
            <div class="bm-info__imagenes">
                <?php if ( $imagen_1 ) : ?>
                    <div class="bm-info__imagen">
                        <img src="<?php echo esc_url( $imagen_1['url'] ); ?>"
                             alt="<?php echo esc_attr( $imagen_1['alt'] ); ?>">
                    </div>
                <?php endif; ?>
                <?php if ( $imagen_2 ) : ?>
                    <div class="bm-info__imagen">
                        <img src="<?php echo esc_url( $imagen_2['url'] ); ?>"
                             alt="<?php echo esc_attr( $imagen_2['alt'] ); ?>">
                    </div>
                <?php endif; ?>
            </div>
        <?php endif; ?>

    </div>

</section>