<?php
/**
 * Somos component: Artículos de Prensa
 */

$somos_id = get_page_by_path( 'somos' )->ID;

$articulos = array();
for ( $i = 1; $i <= 10; $i++ ) {
    $titulo = get_field( 'somos_prensa_' . $i . '_titulo', $somos_id );
    $link   = get_field( 'somos_prensa_' . $i . '_link',   $somos_id );
    $imagen = get_field( 'somos_prensa_' . $i . '_imagen', $somos_id );
    if ( $titulo && $link ) {
        $articulos[] = array(
            'titulo' => $titulo,
            'link'   => $link,
            'imagen' => $imagen,
        );
    }
}

if ( empty( $articulos ) ) return;
?>

<section class="somos-prensa">

    <div class="somos-prensa__col-tag">
        <span class="somos-prensa__tag">Prensa</span>
    </div>

    <div class="somos-prensa__col-main">
        <div class="somos-prensa__cards">
            <?php foreach ( $articulos as $articulo ) : ?>
                <a href="<?php echo esc_url( $articulo['link'] ); ?>"
                   class="somos-prensa__card"
                   target="_blank"
                   rel="noopener noreferrer">

                    <div class="somos-prensa__card-imagen">
                        <?php if ( $articulo['imagen'] ) : ?>
                            <img src="<?php echo esc_url( $articulo['imagen']['url'] ); ?>"
                                 alt="<?php echo esc_attr( $articulo['imagen']['alt'] ); ?>">
                        <?php endif; ?>
                    </div>

                    <p class="somos-prensa__card-titulo">
                        <?php echo esc_html( $articulo['titulo'] ); ?>
                    </p>

                </a>
            <?php endforeach; ?>
        </div>
    </div>

</section>