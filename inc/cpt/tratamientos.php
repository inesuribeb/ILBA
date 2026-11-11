<?php
/**
 * CPT — Tratamientos
 */

add_action( 'init', function() {

    register_post_type( 'tratamientos', array(
        'labels' => array(
            'name'               => 'Tratamientos',
            'singular_name'      => 'Tratamiento',
            'add_new'            => 'Añadir tratamiento',
            'add_new_item'       => 'Añadir nuevo tratamiento',
            'edit_item'          => 'Editar tratamiento',
            'new_item'           => 'Nuevo tratamiento',
            'view_item'          => 'Ver tratamiento',
            'search_items'       => 'Buscar tratamientos',
            'not_found'          => 'No se han encontrado tratamientos',
            'not_found_in_trash' => 'No hay tratamientos en la papelera',
            'all_items'          => 'Todos los tratamientos',
            'menu_name'          => 'Tratamientos',
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-heart',
        'menu_position' => 21,
        'supports'      => array( 'title', 'thumbnail', 'page-attributes' ),
        'rewrite'       => array( 'slug' => 'tratamientos' ),
        'show_in_rest'  => true,
    ) );

} );

/**
 * Archivo de tratamientos: traer todos, ordenados por "Orden" y título
 * (el orden por categoría se aplica después, en the_posts)
 */
add_action( 'pre_get_posts', function( $query ) {
    if ( ! is_admin() && $query->is_main_query() && is_post_type_archive( 'tratamientos' ) ) {
        $query->set( 'posts_per_page', -1 );
        $query->set( 'orderby', 'menu_order title' );
        $query->set( 'order', 'ASC' );
    }
} );

/**
 * Orden de categorías, sacado de los choices del campo ACF
 */
function ilba_tratamiento_categorias_orden() {
    $field = function_exists( 'acf_get_field' ) ? acf_get_field( 'field_tr_categoria' ) : null;

    if ( $field && ! empty( $field['choices'] ) ) {
        return array_keys( $field['choices'] );
    }

    // Fallback por si ACF no está disponible
    return array(
        'beauty-facial',
        'beauty-corporal',
        'beauty-micropigmentacion',
        'medical-facial',
        'medical-corporal',
        'medical-tricologia',
    );
}

/**
 * Posición de un tratamiento según su primera categoría (en el orden del ACF)
 */
function ilba_tratamiento_posicion_categoria( $post_id, $orden ) {
    $cats = (array) get_field( 'tr_categoria', $post_id );
    $posiciones = array();

    foreach ( $cats as $cat ) {
        $pos = array_search( $cat, $orden, true );
        if ( $pos !== false ) $posiciones[] = $pos;
    }

    // Sin categoría → al final
    return $posiciones ? min( $posiciones ) : PHP_INT_MAX;
}

/**
 * Archivo de tratamientos: reordenar por categoría
 * usort es estable (PHP 8+), así que dentro de cada categoría
 * se mantiene el orden de la consulta (Orden + título)
 */
add_filter( 'the_posts', function( $posts, $query ) {
    if ( is_admin() || ! $query->is_main_query() || ! $query->is_post_type_archive( 'tratamientos' ) ) {
        return $posts;
    }

    $orden = ilba_tratamiento_categorias_orden();
    $pos   = array();

    foreach ( $posts as $post ) {
        $pos[ $post->ID ] = ilba_tratamiento_posicion_categoria( $post->ID, $orden );
    }

    usort( $posts, function( $a, $b ) use ( $pos ) {
        return $pos[ $a->ID ] <=> $pos[ $b->ID ];
    } );

    return $posts;
}, 10, 2 );