<?php
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style(
        'parent-style',
        get_template_directory_uri() . '/style.css'
    );
     // Child theme — aquí están tus fonts y variables
     wp_enqueue_style(
        'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' )
    );
});

/**
 * Cargar CPTs
 */
require_once get_stylesheet_directory() . '/inc/cpt/_load-cpts.php';
require_once get_stylesheet_directory() . '/inc/acf/_load-acf.php';

require_once get_stylesheet_directory() . '/inc/config/secciones-menu.php';

require_once get_stylesheet_directory() . '/inc/enqueue.php';

add_filter( 'show_admin_bar', '__return_false' );


add_filter( 'body_class', function( $classes ) {
    if ( is_page() ) {
        $page = get_queried_object();
        if ( $page ) {
            $classes[] = 'page-' . $page->post_name; // slug
            $classes[] = 'page-id-' . $page->ID;     // id (WordPress ya lo añade, pero por si acaso)
        }
    }
    return $classes;
});