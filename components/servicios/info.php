<?php
/**
 * Servicios component: Info — Qué es y qué no es
 */

$subtitulo   = get_field( 'sv_quees_subtitulo' );
$descripcion = get_field( 'sv_quees_descripcion' );
$fotos       = array();
for ( $i = 1; $i <= 6; $i++ ) {
    $foto = get_field( 'sv_quees_foto_' . $i );
    if ( $foto ) $fotos[] = $foto;
}
$caracteristicas = array();
for ( $i = 1; $i <= 6; $i++ ) {
    $car = get_field( 'sv_quees_car_' . $i );
    if ( $car ) $caracteristicas[] = $car;
}
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );
?>

<section class="sv-info" id="sv-info">

    <div class="sv-info__col-main">
        
    <span class="sv-info__tag-movil">Qué es y qué no es</span>


        <?php if ( $subtitulo ) : ?>
            <h2 class="sv-info__subtitulo"><?php echo esc_html( $subtitulo ); ?></h2>
        <?php endif; ?>

        <?php if ( $descripcion ) : ?>
            <p class="sv-info__descripcion"><?php echo esc_html( $descripcion ); ?></p>
        <?php endif; ?>

        <div class="sv-info__bottom">

            <div class="sv-info__cta-wrapper">
                <a href="<?php echo esc_url( $contacto_url ); ?>" class="sv-info__cta">
                    Pide cita
                </a>
            </div>

            <?php if ( ! empty( $caracteristicas ) ) : ?>
                <ul class="sv-info__caracteristicas">
                    <?php foreach ( $caracteristicas as $car ) : ?>
                        <li class="sv-info__caracteristica"><?php echo esc_html( $car ); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>

        </div>

        <?php if ( ! empty( $fotos ) ) : ?>
            <div class="sv-info__fotos">
                <?php foreach ( $fotos as $foto ) : ?>
                    <div class="sv-info__foto">
                        <img src="<?php echo esc_url( $foto['url'] ); ?>"
                             alt="<?php echo esc_attr( $foto['alt'] ); ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

    </div>

</section>