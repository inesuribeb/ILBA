<?php
/**
 * Protocolo component: servicios
 */

$titulo_protocolo = get_the_title();
$titulo_seccion   = '¿Qué incluye el protocolo de ' . $titulo_protocolo . '?';

$servicios = array();
for ( $i = 1; $i <= 6; $i++ ) {
    $titulo = get_field( "pr_srv_{$i}_titulo" );
    if ( ! $titulo ) continue;
    $servicios[] = array(
        'titulo' => $titulo,
        'imagen' => get_field( "pr_srv_{$i}_imagen" ),
        'texto'  => get_field( "pr_srv_{$i}_texto" ),
    );
}

if ( empty( $servicios ) ) return;

$grid_class = count( $servicios ) > 3 ? 'pr-servicios__grid pr-servicios__grid--scroll' : 'pr-servicios__grid';
?>

<section class="pr-servicios">

    <h2 class="pr-servicios__titulo"><?= esc_html( $titulo_seccion ) ?></h2>

    <div class="<?= esc_attr( $grid_class ) ?>">
        <?php foreach ( $servicios as $srv ) : ?>
            <article class="pr-srv-card">

                <?php if ( $srv['imagen'] ) : ?>
                    <div class="pr-srv-card__imagen"
                         style="background-image: url('<?= esc_url( $srv['imagen']['url'] ) ?>');"
                         role="img"
                         aria-label="<?= esc_attr( $srv['imagen']['alt'] ) ?>">
                    </div>
                <?php else : ?>
                    <div class="pr-srv-card__imagen pr-srv-card__imagen--placeholder"></div>
                <?php endif; ?>

                <div class="pr-srv-card__overlay"></div>

                <div class="pr-srv-card__info-default">
                    <span class="pr-srv-card__nombre"><?= esc_html( $srv['titulo'] ) ?></span>
                </div>

                <div class="pr-srv-card__info-hover">
                    <?php if ( $srv['texto'] ) : ?>
                        <p class="pr-srv-card__descripcion"><?= wp_kses_post( $srv['texto'] ) ?></p>
                    <?php endif; ?>
                </div>

            </article>
        <?php endforeach; ?>
    </div>

</section>