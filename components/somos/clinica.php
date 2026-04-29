<?php
/**
 * Somos component: La Clínica
 */

$somos_id = get_page_by_path( 'somos' )->ID;

$imagenes = array();
for ( $i = 1; $i <= 10; $i++ ) {
    $img = get_field( 'somos_clinica_img_' . $i, $somos_id );
    if ( $img ) $imagenes[] = $img;
}

if ( empty( $imagenes ) ) return;
?>

<section class="somos-clinica">

    <div class="somos-clinica__col-tag">
        <span class="somos-clinica__tag">La clínica</span>
    </div>

    <div class="somos-clinica__col-main">
        <div class="somos-clinica__fotos">
            <?php foreach ( $imagenes as $img ) : ?>
                <div class="somos-clinica__foto">
                    <img src="<?php echo esc_url( $img['url'] ); ?>"
                         alt="<?php echo esc_attr( $img['alt'] ); ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>