<?php
/**
 * CPT: Centros
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ilba_registrar_cpt_centros() {

	$labels = array(
		'name'                  => 'Centros',
		'singular_name'         => 'Centro',
		'menu_name'             => 'Centros',
		'name_admin_bar'        => 'Centro',
		'add_new'               => 'Añadir nuevo',
		'add_new_item'          => 'Añadir nuevo centro',
		'new_item'              => 'Nuevo centro',
		'edit_item'             => 'Editar centro',
		'view_item'             => 'Ver centro',
		'all_items'             => 'Todos los centros',
		'search_items'          => 'Buscar centros',
		'not_found'             => 'No se encontraron centros',
		'not_found_in_trash'    => 'No se encontraron centros en la papelera',
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'show_in_nav_menus'  => true,
		'show_in_admin_bar'  => true,
		'show_in_rest'       => true,
		'menu_position'      => 21,
		'menu_icon'          => 'dashicons-building',
		'query_var'          => true,
		'rewrite'            => array(
			'slug'       => 'centro',
			'with_front' => false,
		),
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	);

	register_post_type( 'centro', $args );
}
add_action( 'init', 'ilba_registrar_cpt_centros' );