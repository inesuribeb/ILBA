<?php
/**
 * Enqueue de estilos y scripts
 */

function ilba_enqueue_assets() {

    // --- Header y footer (todas las páginas) ---
    wp_enqueue_style( 'ilba-header', get_stylesheet_directory_uri() . '/css/header/header.css' );
    wp_enqueue_style( 'ilba-footer', get_stylesheet_directory_uri() . '/css/footer/footer.css' );
    wp_enqueue_script( 'ilba-header', get_stylesheet_directory_uri() . '/js/header/header.js', array(), null, true );

    // --- Home ---
    if ( is_front_page() ) {
        wp_enqueue_style( 'ilba-hero',               get_stylesheet_directory_uri() . '/css/home/hero.css' );
        wp_enqueue_style( 'ilba-nuestros-servicios', get_stylesheet_directory_uri() . '/css/home/nuestros-servicios.css' );
        wp_enqueue_style( 'ilba-nuestra-clinica',    get_stylesheet_directory_uri() . '/css/home/section-clinica.css' );
        wp_enqueue_style( 'ilba-conocenos',          get_stylesheet_directory_uri() . '/css/home/section-conocenos.css' );
        wp_enqueue_style( 'ilba-marcas',             get_stylesheet_directory_uri() . '/css/home/section-marcas.css' );
        wp_enqueue_style( 'ilba-img-video',          get_stylesheet_directory_uri() . '/css/home/section-img-video.css' );

        wp_enqueue_script( 'ilba-sticky-tag',      get_stylesheet_directory_uri() . '/js/home/sticky-tag.js',      array(), null, true );
        wp_enqueue_script( 'ilba-cards-servicios', get_stylesheet_directory_uri() . '/js/home/cards-servicios.js', array(), null, true );
    }

    // --- Beauty & Medical ---
    if ( is_singular( 'beauty_medical' ) ) {
        wp_enqueue_style( 'ilba-bm-hero', get_stylesheet_directory_uri() . '/css/beauty-medical/hero.css' );
        wp_enqueue_style( 'ilba-bm-info', get_stylesheet_directory_uri() . '/css/beauty-medical/info.css' );
        wp_enqueue_script( 'ilba-bm-sticky-img', get_stylesheet_directory_uri() . '/js/beauty-medical/sticky-img.js', array(), null, true );


    }

}
add_action( 'wp_enqueue_scripts', 'ilba_enqueue_assets' );