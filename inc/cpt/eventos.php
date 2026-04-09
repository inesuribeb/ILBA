<?php
/**
 * CPT: Eventos
 */

function ilba_register_cpt_eventos() {

    $labels = array(
        'name'                  => _x( 'Eventos', 'Post type general name', 'ilba-theme' ),
        'singular_name'         => _x( 'Evento', 'Post type singular name', 'ilba-theme' ),
        'menu_name'             => _x( 'Eventos', 'Admin Menu text', 'ilba-theme' ),
        'add_new'               => __( 'Añadir nuevo', 'ilba-theme' ),
        'add_new_item'          => __( 'Añadir nuevo Evento', 'ilba-theme' ),
        'new_item'              => __( 'Nuevo Evento', 'ilba-theme' ),
        'edit_item'             => __( 'Editar Evento', 'ilba-theme' ),
        'view_item'             => __( 'Ver Evento', 'ilba-theme' ),
        'all_items'             => __( 'Todos los Eventos', 'ilba-theme' ),
        'search_items'          => __( 'Buscar Eventos', 'ilba-theme' ),
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
        'rewrite'            => array( 'slug' => 'eventos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 9,
        'menu_icon'          => 'dashicons-calendar-alt',
        'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'eventos', $args );
}
add_action( 'init', 'ilba_register_cpt_eventos' );