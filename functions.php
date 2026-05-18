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


// --- Beauty & Medical: rewrites y permalink personalizado ---

function ilba_beauty_medical_rewrites() {
    $categorias = array( 'beauty', 'medical' );

    foreach ( $categorias as $cat ) {
        add_rewrite_rule(
            '^' . $cat . '/([^/]+)/?$',
            'index.php?post_type=beauty_medical&name=$matches[1]',
            'top'
        );
    }
}
add_action( 'init', 'ilba_beauty_medical_rewrites' );

function ilba_beauty_medical_permalink( $url, $post ) {
    if ( $post->post_type !== 'beauty_medical' ) return $url;

    $categoria = get_field( 'bm_categoria', $post->ID );

    if ( $categoria ) {
        return home_url( $categoria . '/' . $post->post_name . '/' );
    }

    return $url;
}
add_filter( 'post_type_link', 'ilba_beauty_medical_permalink', 10, 2 );


// --- CF7: opciones dinámicas ACF en formulario de protocolos ---
// --- CF7: opciones dinámicas ACF en formulario de protocolos ---
add_filter( 'wpcf7_form_elements', function( $html ) {
    if ( ! is_singular( 'protocolos' ) ) return $html;

    $preguntas = array();
    for ( $i = 1; $i <= 4; $i++ ) {
        $pregunta = get_field( 'pr_form_pregunta_' . $i );
        if ( $pregunta ) $preguntas[] = '<option value="' . esc_attr( $pregunta ) . '">' . esc_html( $pregunta ) . '</option>';
    }

    if ( empty( $preguntas ) ) return $html;

    $opciones = implode( '', $preguntas );

    // Inyectamos las opciones en el select HTML normal (no en el de CF7)
    $html = preg_replace(
        '/(<select[^>]*id="pr-form-select-momento"[^>]*>)(.*?)(<\/select>)/s',
        '$1<option value="" disabled selected>¿En qué momento estás?*</option>' . $opciones . '$3',
        $html
    );

    return $html;
});

// --- CF7: validación custom del campo 'momento' ---
// Acepta cualquier valor (las opciones se inyectan dinámicamente vía ACF)



