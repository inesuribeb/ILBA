<?php


function ilba_register_cpt_aparatologia() {

    $labels = array(
        'name'                  => _x( 'Aparatología', 'Post type general name', 'ilba-theme' ),
        'singular_name'         => _x( 'Aparatología', 'Post type singular name', 'ilba-theme' ),
        'menu_name'             => _x( 'Aparatología', 'Admin Menu text', 'ilba-theme' ),
        'add_new'               => __( 'Añadir nuevo', 'ilba-theme' ),
        'add_new_item'          => __( 'Añadir nueva Aparatología', 'ilba-theme' ),
        'new_item'              => __( 'Nueva Aparatología', 'ilba-theme' ),
        'edit_item'             => __( 'Editar Aparatología', 'ilba-theme' ),
        'view_item'             => __( 'Ver Aparatología', 'ilba-theme' ),
        'all_items'             => __( 'Todas', 'ilba-theme' ),
        'search_items'          => __( 'Buscar Aparatología', 'ilba-theme' ),
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
        'rewrite'            => array( 'slug' => 'aparatologia' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 8,
        'menu_icon'          => 'dashicons-search',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'aparatologia', $args );
}
add_action( 'init', 'ilba_register_cpt_aparatologia' );