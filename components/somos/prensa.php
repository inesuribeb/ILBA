<?php
/**
 * Somos component: Artículos de Prensa
 */

$somos_id = get_page_by_path( 'somos' )->ID;

$historia = get_field( 'somos_historia', $somos_id );

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
    <!-- <?php
        $historia = get_field( 'somos_historia' );
        if ( $historia ) : ?>
            <div class="somos-historia">
                <p class="somos-historia__texto"><?= wp_kses_post( nl2br( esc_html( $historia ) ) ) ?></p>
            </div>
        <?php endif; ?> -->

        <!-- <div class="somos-prensa__cards">
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
        </div> -->

        <div class="somos-prensa__lista">
    <?php foreach ( $articulos as $articulo ) : ?>
        <a href="<?php echo esc_url( $articulo['link'] ); ?>"
           class="somos-prensa__lista-item"
           target="_blank"
           rel="noopener noreferrer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
            </svg>
            <span><?php echo esc_html( $articulo['titulo'] ); ?></span>
        </a>
    <?php endforeach; ?>
</div>

    </div>

</section>