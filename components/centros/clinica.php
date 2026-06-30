<?php
/**
 * Centro component: La Clínica
 */

$imagenes = array();
for ( $i = 1; $i <= 10; $i++ ) {
    $img = get_field( 'ce_clinica_img_' . $i );
    if ( $img ) $imagenes[] = $img;
}

if ( empty( $imagenes ) ) return;
?>

<section class="ce-clinica">

    <div class="ce-clinica__col-tag">
        <span class="ce-clinica__tag">La clínica</span>
    </div>

    <div class="ce-clinica__col-main">
        <div class="ce-clinica__fotos">
            <?php foreach ( $imagenes as $img ) : ?>
                <div class="ce-clinica__foto">
                    <img src="<?php echo esc_url( $img['url'] ); ?>"
                         alt="<?php echo esc_attr( $img['alt'] ); ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</section>