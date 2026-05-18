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
    'uxue miguez',
    'uxue míguez',
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

    // Si ambos están en el orden definido, respetar ese orden
    if ( $pos_a !== PHP_INT_MAX && $pos_b !== PHP_INT_MAX ) {
        return $pos_a - $pos_b;
    }

    // Los del orden definido van primero
    if ( $pos_a !== PHP_INT_MAX ) return -1;
    if ( $pos_b !== PHP_INT_MAX ) return 1;

    // Los que no están en la lista, al final por orden alfabético
    return strcmp( $nombre_a, $nombre_b );
} );

if ( empty( $todos ) ) return;
?>