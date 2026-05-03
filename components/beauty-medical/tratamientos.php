<?php
/**
 * Beauty & Medical component: tratamientos
 */

$subcategoria = get_field( 'bm_subcategoria' );

if ( $subcategoria === 'facial' ) {
    $titulo_seccion = 'Nuestros tratamientos faciales';
} elseif ( $subcategoria === 'corporal' ) {
    $titulo_seccion = 'Nuestros tratamientos corporales';
} else {
    $titulo_seccion = 'Nuestros tratamientos';
}

$tratamientos = array();
for ( $i = 1; $i <= 6; $i++ ) {
    $titulo = get_field( "bm_trat_{$i}_titulo" );
    if ( ! $titulo ) continue;
    $tratamientos[] = array(
        'imagen'    => get_field( "bm_trat_{$i}_imagen" ),
        'titulo'    => $titulo,
        'subtitulo' => get_field( "bm_trat_{$i}_subtitulo" ),
        'texto'     => get_field( "bm_trat_{$i}_texto" ),
    );
}

if ( empty( $tratamientos ) ) return;
?>

<section class="bm-tratamientos">

    <h2 class="bm-tratamientos__titulo"><?= esc_html( $titulo_seccion ) ?></h2>

    <div class="bm-tratamientos__grid">
        <?php foreach ( $tratamientos as $trat ) : ?>
            <article class="bm-trat-card">

                <?php if ( $trat['imagen'] ) : ?>
                    <div class="bm-trat-card__imagen"
                         style="background-image: url('<?= esc_url( $trat['imagen']['url'] ) ?>');"
                         role="img"
                         aria-label="<?= esc_attr( $trat['imagen']['alt'] ) ?>">
                    </div>
                <?php else : ?>
                    <div class="bm-trat-card__imagen bm-trat-card__imagen--placeholder"></div>
                <?php endif; ?>

                <div class="bm-trat-card__overlay"></div>

                <div class="bm-trat-card__info-default">
                    <?php if ( $trat['subtitulo'] ) : ?>
                        <span class="bm-trat-card__subtitulo"><?= esc_html( $trat['subtitulo'] ) ?></span>
                    <?php endif; ?>
                    <span class="bm-trat-card__nombre"><?= esc_html( $trat['titulo'] ) ?></span>
                </div>

                <div class="bm-trat-card__info-hover">
                    <?php if ( $trat['texto'] ) : ?>
                        <p class="bm-trat-card__descripcion"><?= esc_html( $trat['texto'] ) ?></p>
                    <?php endif; ?>
                    <a href="/contacto" class="bm-trat-card__cta">Saber más</a>
                </div>

            </article>
        <?php endforeach; ?>
    </div>

</section>