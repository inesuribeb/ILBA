<?php
/**
 * CPT: Beauty & Medical
 */

function ilba_register_cpt_beauty_medical() {

    $labels = array(
        'name'                  => _x( 'Beauty & Medical', 'Post type general name', 'ilba-theme' ),
        'singular_name'         => _x( 'Beauty & Medical', 'Post type singular name', 'ilba-theme' ),
        'menu_name'             => _x( 'Beauty & Medical', 'Admin Menu text', 'ilba-theme' ),
        'add_new'               => __( 'Añadir nuevo', 'ilba-theme' ),
        'add_new_item'          => __( 'Añadir nuevo Beauty & Medical', 'ilba-theme' ),
        'new_item'              => __( 'Nuevo Beauty & Medical', 'ilba-theme' ),
        'edit_item'             => __( 'Editar Beauty & Medical', 'ilba-theme' ),
        'view_item'             => __( 'Ver Beauty & Medical', 'ilba-theme' ),
        'all_items'             => __( 'Todos', 'ilba-theme' ),
        'search_items'          => __( 'Buscar Beauty & Medical', 'ilba-theme' ),
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
        // 'rewrite'            => array( 'slug' => 'beauty-medical' ),
        'rewrite'            => array( 'slug' => '' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'menu_icon'          => 'dashicons-heart',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'beauty_medical', $args );
}
add_action( 'init', 'ilba_register_cpt_beauty_medical' );