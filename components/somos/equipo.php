<?php
/**
 * Somos component: Equipo
 */

$todos = get_posts( array(
    'post_type'      => 'equipo_medico',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
    'meta_query'     => array(
        array(
            'key'     => 'em_mostrar',
            'value'   => '1',
            'compare' => '=',
        ),
    ),
) );

if ( empty( $todos ) ) return;

// --- Orden definido por la clínica ---
$orden_definido = array(
    'maite hormaza',
    'itxaso galán',
    'itxaso galan',
    'june blanco',
    'marta diez',
    'marta díez',
    'nerea martin',
    'nerea martín',
    'patricia quiroga',
    'idoia romo',
    'rosa mora',
    'laura san martin',
    'laura san martín',
    'begoña gabiola',
    'laura santa maría',
    'laura santa maria',
    'agurtzane otaola',
    'katerine romero',
    'miriam santos',
    'maría ibarra',
    'maria ibarra',
    'alexandra salamea',
    'estizen gordon',
    'uxue minguez',
    'uxue mínguez',
    'sandra rivera',
);

usort( $todos, function( $a, $b ) use ( $orden_definido ) {
    $nombre_a = strtolower( $a->post_title );
    $nombre_b = strtolower( $b->post_title );

    $pos_a = PHP_INT_MAX;
    $pos_b = PHP_INT_MAX;

    foreach ( $orden_definido as $i => $nombre ) {
        if ( str_contains( $nombre_a, $nombre ) ) {
            $pos_a = $i;
            break;
        }
    }

    foreach ( $orden_definido as $i => $nombre ) {
        if ( str_contains( $nombre_b, $nombre ) ) {
            $pos_b = $i;
            break;
        }
    }

    // Si ambos están en la lista, ordenar por posición
    if ( $pos_a !== PHP_INT_MAX && $pos_b !== PHP_INT_MAX ) return $pos_a - $pos_b;

    // Los que están en la lista van primero
    if ( $pos_a !== PHP_INT_MAX ) return -1;
    if ( $pos_b !== PHP_INT_MAX ) return 1;

    // Los que no están, alfabético al final
    return strcmp( $nombre_a, $nombre_b );
} );

$miembros = $todos;
?>

<section class="somos-equipo">

    <div class="somos-equipo__col-tag">
        <span class="somos-equipo__tag">El equipo</span>
    </div>

    <div class="somos-equipo__col-main">

        <div class="somos-equipo__grid-wrapper">

            <div class="somos-equipo__grid">
                <?php foreach ( $miembros as $miembro ) :
                    $foto   = get_field( 'em_foto',  $miembro->ID );
                    $cargo  = get_field( 'em_cargo', $miembro->ID );
                    $link   = get_field( 'em_link',  $miembro->ID );
                    $nombre = $miembro->post_title;

                    $tag   = $link ? 'a' : 'div';
                    $attrs = $link
                        ? 'href="' . esc_url( home_url( $link ) ) . '" class="somos-equipo__card"'
                        : 'class="somos-equipo__card"';
                ?>
                    <<?= $tag ?> <?= $attrs ?>>

                        <div class="somos-equipo__foto">
                            <?php if ( $foto ) : ?>
                                <img src="<?= esc_url( $foto['url'] ) ?>"
                                     alt="<?= esc_attr( $foto['alt'] ) ?>">
                            <?php endif; ?>
                        </div>

                        <div class="somos-equipo__info">
                            <span class="somos-equipo__nombre"><?= esc_html( $nombre ) ?></span>
                            <?php if ( $cargo ) : ?>
                                <span class="somos-equipo__cargo"><?= esc_html( $cargo ) ?></span>
                            <?php endif; ?>
                        </div>

                    </<?= $tag ?>>
                <?php endforeach; ?>
            </div>

            <div class="somos-equipo__fade">
                <button class="somos-equipo__ver-mas" aria-expanded="false">
                    <span class="somos-equipo__ver-mas-label">Ver más</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
            </div>

        </div>

    </div>

</section>