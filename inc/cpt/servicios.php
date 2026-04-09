<?php
/**
 * CPT: Servicios
 */

function ilba_register_cpt_servicios() {

    $labels = array(
        'name'                  => _x( 'Servicios', 'Post type general name', 'ilba-theme' ),
        'singular_name'         => _x( 'Servicio', 'Post type singular name', 'ilba-theme' ),
        'menu_name'             => _x( 'Servicios', 'Admin Menu text', 'ilba-theme' ),
        'add_new'               => __( 'Añadir nuevo', 'ilba-theme' ),
        'add_new_item'          => __( 'Añadir nuevo Servicio', 'ilba-theme' ),
        'new_item'              => __( 'Nuevo Servicio', 'ilba-theme' ),
        'edit_item'             => __( 'Editar Servicio', 'ilba-theme' ),
        'view_item'             => __( 'Ver Servicio', 'ilba-theme' ),
        'all_items'             => __( 'Todos los Servicios', 'ilba-theme' ),
        'search_items'          => __( 'Buscar Servicios', 'ilba-theme' ),
        'not_found'             => __( 'No se han encontrado resultados.', 'ilba-theme' ),
        'not_found_in_trash'    => __( 'No se han encontrado resultados en la papelera.', 'ilba-theme' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'show_in_rest'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'servicios' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 6,
        'menu_icon'          => 'dashicons-clipboard',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'servicios', $args );
}
add_action( 'init', 'ilba_register_cpt_servicios' );