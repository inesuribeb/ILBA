<?php
/**
 * Home component: Nuestras Marcas — marquee infinito
 */

// Recoger solo las marcas que tengan imagen
$marcas = array();
for ( $i = 1; $i <= 10; $i++ ) {
    $imagen = get_field( 'home_marca_' . $i . '_imagen' );
    $nombre = get_field( 'home_marca_' . $i . '_nombre' );
    if ( $imagen ) {
        $marcas[] = array(
            'imagen' => $imagen,
            'nombre' => $nombre ?: '',
        );
    }
}

if ( empty( $marcas ) ) return;
?>

<section class="home-marcas">
    <div class="home-marcas__track">
        <?php
        // Duplicamos el array para el loop infinito
        $marcas_loop = array_merge( $marcas, $marcas );
        foreach ( $marcas_loop as $marca ) : ?>
            <div class="home-marcas__item">
                <img src="<?php echo esc_url( $marca['imagen']['url'] ); ?>"
                     alt="<?php echo esc_attr( $marca['nombre'] ); ?>">
            </div>
        <?php endforeach; ?>
    </div>
</section>