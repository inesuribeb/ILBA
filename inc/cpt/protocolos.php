<?php
/**
 * CPT: Protocolos
 */

function ilba_register_cpt_protocolos() {

    $labels = array(
        'name'                  => _x( 'Protocolos', 'Post type general name', 'ilba-theme' ),
        'singular_name'         => _x( 'Protocolo', 'Post type singular name', 'ilba-theme' ),
        'menu_name'             => _x( 'Protocolos', 'Admin Menu text', 'ilba-theme' ),
        'add_new'               => __( 'Añadir nuevo', 'ilba-theme' ),
        'add_new_item'          => __( 'Añadir nuevo Protocolo', 'ilba-theme' ),
        'new_item'              => __( 'Nuevo Protocolo', 'ilba-theme' ),
        'edit_item'             => __( 'Editar Protocolo', 'ilba-theme' ),
        'view_item'             => __( 'Ver Protocolo', 'ilba-theme' ),
        'all_items'             => __( 'Todos los Protocolos', 'ilba-theme' ),
        'search_items'          => __( 'Buscar Protocolos', 'ilba-theme' ),
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
        'rewrite'            => array( 'slug' => 'protocolos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 7,
        'menu_icon'          => 'dashicons-list-view',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'protocolos', $args );
}
add_action( 'init', 'ilba_register_cpt_protocolos' );