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

    if ( is_singular( 'servicios' ) ) {
        wp_enqueue_style( 'ilba-sv-layout', get_stylesheet_directory_uri() . '/css/servicios/layout.css' );
        wp_enqueue_style( 'ilba-sv-hero', get_stylesheet_directory_uri() . '/css/servicios/hero.css' );
        wp_enqueue_style( 'ilba-sv-info', get_stylesheet_directory_uri() . '/css/servicios/info.css' );
        wp_enqueue_style( 'ilba-sv-tratamientos', get_stylesheet_directory_uri() . '/css/servicios/tratamientos.css' );
        wp_enqueue_style( 'ilba-sv-contacto', get_stylesheet_directory_uri() . '/css/servicios/contacto.css' );

        wp_enqueue_script( 'ilba-sv-acordeones', get_stylesheet_directory_uri() . '/js/servicios/acordeones.js', array(), null, true );
        wp_enqueue_script( 'ilba-sv-scrollspy', get_stylesheet_directory_uri() . '/js/servicios/scrollspy.js', array(), null, true );
        wp_enqueue_script( 'ilba-sv-contacto', get_stylesheet_directory_uri() . '/js/servicios/contacto.js', array(), null, true );
        wp_enqueue_script( 'ilba-sv-tratamientos', get_stylesheet_directory_uri() . '/js/servicios/tratamientos.js', array(), null, true );
    }

    if ( is_singular( 'protocolos' ) ) {
        wp_enqueue_style( 'ilba-pr-layout', get_stylesheet_directory_uri() . '/css/protocolos/layout.css' );
        wp_enqueue_style( 'ilba-pr-hero',   get_stylesheet_directory_uri() . '/css/protocolos/hero.css' );
        wp_enqueue_style( 'ilba-pr-info', get_stylesheet_directory_uri() . '/css/protocolos/info.css' );
        wp_enqueue_style( 'ilba-pr-formulario', get_stylesheet_directory_uri() . '/css/protocolos/formulario.css' );

        // wp_enqueue_script( 'ilba-pr-scroll', get_stylesheet_directory_uri() . '/js/protocolos/scroll-horizontal.js', array(), null, true );
    }

    if ( is_singular( 'aparatologia' ) ) {
        wp_enqueue_style( 'ilba-ap-hero',        get_stylesheet_directory_uri() . '/css/aparatologia/hero.css' );
        wp_enqueue_style( 'ilba-ap-descripcion', get_stylesheet_directory_uri() . '/css/aparatologia/descripcion.css' );
        wp_enqueue_style( 'ilba-ap-relacionados', get_stylesheet_directory_uri() . '/css/aparatologia/relacionados.css' );

        wp_enqueue_script( 'ilba-ap-acordeones', get_stylesheet_directory_uri() . '/js/aparatologia/acordeones.js', array(), null, true );
    }

    if ( is_page( 'somos' ) ) {
        wp_enqueue_style( 'ilba-somos-hero',   get_stylesheet_directory_uri() . '/css/somos/hero.css' );
        wp_enqueue_style( 'ilba-somos-intro',  get_stylesheet_directory_uri() . '/css/somos/intro.css' );
        wp_enqueue_style( 'ilba-somos-equipo', get_stylesheet_directory_uri() . '/css/somos/equipo.css' );
        wp_enqueue_style( 'ilba-somos-clinica', get_stylesheet_directory_uri() . '/css/somos/clinica.css' );
        wp_enqueue_style( 'ilba-somos-prensa', get_stylesheet_directory_uri() . '/css/somos/prensa.css' );
    }

    if ( is_page( 'contacto' ) ) {
        wp_enqueue_style( 'ilba-ct-contacto', get_stylesheet_directory_uri() . '/css/contacto/contacto.css' );
        wp_enqueue_style( 'ilba-ct-intro', get_stylesheet_directory_uri() . '/css/contacto/intro.css' );
        wp_enqueue_style( 'ilba-ct-form',  get_stylesheet_directory_uri() . '/css/contacto/form.css' );
        
        wp_enqueue_script( 'ilba-ct-contactform', get_stylesheet_directory_uri() . '/js/contacto/contactform.js', array(), null, true );
    }

}
add_action( 'wp_enqueue_scripts', 'ilba_enqueue_assets' );