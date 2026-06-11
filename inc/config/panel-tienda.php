<?php
/**
 * Configuración: Panel tienda del header
 */

function ilba_get_panel_tienda() {

    // Obtener hijos de "tipo-de-piel"
    $tipo_piel_term = get_term_by( 'slug', 'tipo-de-piel', 'product_cat' );
    $tipo_piel_items = array();

    if ( $tipo_piel_term ) {
        $hijos = get_terms( array(
            'taxonomy'   => 'product_cat',
            'parent'     => $tipo_piel_term->term_id,
            'hide_empty' => false,
        ) );
        foreach ( $hijos as $hijo ) {
            $tipo_piel_items[] = array(
                'titulo' => $hijo->name,
                'url'    => get_term_link( $hijo ),
            );
        }
    }

    return array(
        'tienda_url'      => function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : '/tienda/',
        'tipo_piel_items' => $tipo_piel_items,
        'imagen'          => get_stylesheet_directory_uri() . '/images/menu/tienda.webp',
    );
}