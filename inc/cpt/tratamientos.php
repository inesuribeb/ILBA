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
        'public'       => true,
        'has_archive'  => false,
        'menu_icon'    => 'dashicons-heart',
        'menu_position'=> 21,
        'supports'     => array( 'title', 'thumbnail' ),
        'rewrite'      => array( 'slug' => 'tratamientos' ),
        'show_in_rest' => true,
    ) );

} );