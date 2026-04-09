<?php
/**
 * CPT: Equipo Médico
 */

function ilba_register_cpt_equipo_medico() {

    $labels = array(
        'name'                  => _x( 'Equipo Médico', 'Post type general name', 'ilba-theme' ),
        'singular_name'         => _x( 'Miembro del equipo', 'Post type singular name', 'ilba-theme' ),
        'menu_name'             => _x( 'Equipo Médico', 'Admin Menu text', 'ilba-theme' ),
        'add_new'               => __( 'Añadir nuevo', 'ilba-theme' ),
        'add_new_item'          => __( 'Añadir miembro', 'ilba-theme' ),
        'new_item'              => __( 'Nuevo miembro', 'ilba-theme' ),
        'edit_item'             => __( 'Editar miembro', 'ilba-theme' ),
        'view_item'             => __( 'Ver miembro', 'ilba-theme' ),
        'all_items'             => __( 'Todo el equipo', 'ilba-theme' ),
        'search_items'          => __( 'Buscar miembro', 'ilba-theme' ),
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
        'rewrite'            => array( 'slug' => 'equipo' ),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'menu_icon'          => 'dashicons-id-alt',
        'supports'           => array( 'title' ),
    );

    register_post_type( 'equipo_medico', $args );
}
add_action( 'init', 'ilba_register_cpt_equipo_medico' );