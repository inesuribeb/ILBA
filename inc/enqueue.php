<?php
/**
 * Enqueue de estilos y scripts
 */

function ilba_enqueue_assets() {

    $dir = get_stylesheet_directory();
    $uri = get_stylesheet_directory_uri();

    // --- Header y footer (todas las páginas) ---
    wp_enqueue_style( 'ilba-header',        $uri . '/css/header/header.css',        array(), filemtime( $dir . '/css/header/header.css' ) );
    wp_enqueue_style( 'ilba-header-mobile', $uri . '/css/header/header-mobile.css', array(), filemtime( $dir . '/css/header/header-mobile.css' ) );
    wp_enqueue_style( 'ilba-header-panel',  $uri . '/css/header/header-panel.css',  array(), filemtime( $dir . '/css/header/header-panel.css' ) );
    wp_enqueue_style( 'ilba-footer',        $uri . '/css/footer/footer.css',        array(), filemtime( $dir . '/css/footer/footer.css' ) );
    wp_enqueue_script( 'ilba-header',        $uri . '/js/header/header.js',        array(), filemtime( $dir . '/js/header/header.js' ),        true );
    wp_enqueue_script( 'ilba-header-mobile', $uri . '/js/header/header-mobile.js', array(), filemtime( $dir . '/js/header/header-mobile.js' ), true );


    // --- Home ---
    if ( is_front_page() ) {
        wp_enqueue_style( 'ilba-hero',               $uri . '/css/home/hero.css',               array(), filemtime( $dir . '/css/home/hero.css' ) );
        wp_enqueue_style( 'ilba-nuestros-servicios', $uri . '/css/home/nuestros-servicios.css', array(), filemtime( $dir . '/css/home/nuestros-servicios.css' ) );
        wp_enqueue_style( 'ilba-nuestra-clinica',    $uri . '/css/home/section-clinica.css',    array(), filemtime( $dir . '/css/home/section-clinica.css' ) );
        wp_enqueue_style( 'ilba-conocenos',          $uri . '/css/home/section-conocenos.css',  array(), filemtime( $dir . '/css/home/section-conocenos.css' ) );
        wp_enqueue_style( 'ilba-marcas',             $uri . '/css/home/section-marcas.css',     array(), filemtime( $dir . '/css/home/section-marcas.css' ) );
        wp_enqueue_style( 'ilba-img-video',          $uri . '/css/home/section-img-video.css',  array(), filemtime( $dir . '/css/home/section-img-video.css' ) );

        wp_enqueue_script( 'ilba-sticky-tag',      $uri . '/js/home/sticky-tag.js',      array(), filemtime( $dir . '/js/home/sticky-tag.js' ),      true );
        wp_enqueue_script( 'ilba-cards-servicios', $uri . '/js/home/cards-servicios.js', array(), filemtime( $dir . '/js/home/cards-servicios.js' ), true );
    }

    // --- Beauty & Medical ---
    if ( is_singular( 'beauty_medical' ) ) {
        wp_enqueue_style( 'ilba-bm-hero',        $uri . '/css/beauty-medical/hero.css',        array(), filemtime( $dir . '/css/beauty-medical/hero.css' ) );
        wp_enqueue_style( 'ilba-bm-info',        $uri . '/css/beauty-medical/info.css',        array(), filemtime( $dir . '/css/beauty-medical/info.css' ) );
        wp_enqueue_style( 'ilba-bm-tratamientos', $uri . '/css/beauty-medical/tratamientos.css', array(), filemtime( $dir . '/css/beauty-medical/tratamientos.css' ) );

        wp_enqueue_script( 'ilba-bm-sticky-img', $uri . '/js/beauty-medical/sticky-img.js', array(), filemtime( $dir . '/js/beauty-medical/sticky-img.js' ), true );
    }

    // --- Servicios ---
    if ( is_singular( 'servicios' ) ) {
        wp_enqueue_style( 'ilba-sv-layout',      $uri . '/css/servicios/layout.css',      array(), filemtime( $dir . '/css/servicios/layout.css' ) );
        wp_enqueue_style( 'ilba-sv-hero',        $uri . '/css/servicios/hero.css',        array(), filemtime( $dir . '/css/servicios/hero.css' ) );
        wp_enqueue_style( 'ilba-sv-info',        $uri . '/css/servicios/info.css',        array(), filemtime( $dir . '/css/servicios/info.css' ) );
        wp_enqueue_style( 'ilba-sv-tratamientos', $uri . '/css/servicios/tratamientos.css', array(), filemtime( $dir . '/css/servicios/tratamientos.css' ) );
        wp_enqueue_style( 'ilba-sv-equipo', $uri . '/css/servicios/equipo-medico.css', array(), filemtime( $dir . '/css/servicios/equipo-medico.css' ) );
        wp_enqueue_style( 'ilba-sv-contacto',    $uri . '/css/servicios/contacto.css',    array(), filemtime( $dir . '/css/servicios/contacto.css' ) );

        wp_enqueue_script( 'ilba-sv-acordeones',  $uri . '/js/servicios/acordeones.js',  array(), filemtime( $dir . '/js/servicios/acordeones.js' ),  true );
        wp_enqueue_script( 'ilba-sv-scrollspy',   $uri . '/js/servicios/scrollspy.js',   array(), filemtime( $dir . '/js/servicios/scrollspy.js' ),   true );
        wp_enqueue_script( 'ilba-sv-contacto',    $uri . '/js/servicios/contacto.js',    array(), filemtime( $dir . '/js/servicios/contacto.js' ),    true );
        wp_enqueue_script( 'ilba-sv-tratamientos', $uri . '/js/servicios/tratamientos.js', array(), filemtime( $dir . '/js/servicios/tratamientos.js' ), true );
    }

    // --- Protocolos ---
    if ( is_singular( 'protocolos' ) ) {
        wp_enqueue_style( 'ilba-pr-layout',     $uri . '/css/protocolos/layout.css',     array(), filemtime( $dir . '/css/protocolos/layout.css' ) );
        wp_enqueue_style( 'ilba-pr-hero',       $uri . '/css/protocolos/hero.css',       array(), filemtime( $dir . '/css/protocolos/hero.css' ) );
        wp_enqueue_style( 'ilba-pr-info',       $uri . '/css/protocolos/info.css',       array(), filemtime( $dir . '/css/protocolos/info.css' ) );
        wp_enqueue_style( 'ilba-pr-queincluye', $uri . '/css/protocolos/que-incluye.css', array(), filemtime( $dir . '/css/protocolos/que-incluye.css' ) );
        wp_enqueue_style( 'ilba-pr-formulario', $uri . '/css/protocolos/formulario.css', array(), filemtime( $dir . '/css/protocolos/formulario.css' ) );

        wp_enqueue_script( 'ilba-pr-desplegable', $uri . '/js/protocolos/desplegable.js', array(), filemtime( $dir . '/js/protocolos/desplegable.js' ), true );
    }

    // --- Aparatología ---
    if ( is_singular( 'aparatologia' ) ) {
        wp_enqueue_style( 'ilba-ap-hero',        $uri . '/css/aparatologia/hero.css',        array(), filemtime( $dir . '/css/aparatologia/hero.css' ) );
        wp_enqueue_style( 'ilba-ap-descripcion', $uri . '/css/aparatologia/descripcion.css', array(), filemtime( $dir . '/css/aparatologia/descripcion.css' ) );
        wp_enqueue_style( 'ilba-ap-relacionados', $uri . '/css/aparatologia/relacionados.css', array(), filemtime( $dir . '/css/aparatologia/relacionados.css' ) );

        wp_enqueue_script( 'ilba-ap-acordeones', $uri . '/js/aparatologia/acordeones.js', array(), filemtime( $dir . '/js/aparatologia/acordeones.js' ), true );
    }

    // --- Somos ---
    if ( is_page( 'somos' ) ) {
        wp_enqueue_style( 'ilba-somos-hero',    $uri . '/css/somos/hero.css',    array(), filemtime( $dir . '/css/somos/hero.css' ) );
        wp_enqueue_style( 'ilba-somos-intro',   $uri . '/css/somos/intro.css',   array(), filemtime( $dir . '/css/somos/intro.css' ) );
        wp_enqueue_style( 'ilba-somos-equipo',  $uri . '/css/somos/equipo.css',  array(), filemtime( $dir . '/css/somos/equipo.css' ) );
        wp_enqueue_style( 'ilba-somos-clinica', $uri . '/css/somos/clinica.css', array(), filemtime( $dir . '/css/somos/clinica.css' ) );
        wp_enqueue_style( 'ilba-somos-prensa',  $uri . '/css/somos/prensa.css',  array(), filemtime( $dir . '/css/somos/prensa.css' ) );

        wp_enqueue_script( 'ilba-somos-vermas', $uri . '/js/somos/somos.js', array(), filemtime( $dir . '/js/somos/somos.js' ), true );
    }

    // --- Contacto ---
    if ( is_page( 'contacto' ) ) {
        wp_enqueue_style( 'ilba-ct-contacto', $uri . '/css/contacto/contacto.css', array(), filemtime( $dir . '/css/contacto/contacto.css' ) );
        wp_enqueue_style( 'ilba-ct-intro',    $uri . '/css/contacto/intro.css',    array(), filemtime( $dir . '/css/contacto/intro.css' ) );
        wp_enqueue_style( 'ilba-ct-form',     $uri . '/css/contacto/form.css',     array(), filemtime( $dir . '/css/contacto/form.css' ) );

        wp_enqueue_script( 'ilba-ct-contactform', $uri . '/js/contacto/contactform.js', array(), filemtime( $dir . '/js/contacto/contactform.js' ), true );
    }

    // --- Eventos (single) ---
    if ( is_singular( 'eventos' ) ) {
        wp_enqueue_style( 'ilba-ev-layout',   $uri . '/css/eventos/layout.css',   array(), filemtime( $dir . '/css/eventos/layout.css' ) );
        wp_enqueue_style( 'ilba-ev-hero',     $uri . '/css/eventos/hero.css',     array(), filemtime( $dir . '/css/eventos/hero.css' ) );
        wp_enqueue_style( 'ilba-ev-modal',    $uri . '/css/eventos/modal.css',    array(), filemtime( $dir . '/css/eventos/modal.css' ) );
        wp_enqueue_style( 'ilba-ev-intro',    $uri . '/css/eventos/intro.css',    array(), filemtime( $dir . '/css/eventos/intro.css' ) );
        wp_enqueue_style( 'ilba-ev-seccion2', $uri . '/css/eventos/seccion2.css', array(), filemtime( $dir . '/css/eventos/seccion2.css' ) );
        wp_enqueue_script( 'ilba-ev-modal', $uri . '/js/eventos/modal.js', array(), filemtime( $dir . '/js/eventos/modal.js' ), true );

    }

    // --- Archivo eventos ---
    if ( is_post_type_archive( 'eventos' ) ) {
        wp_enqueue_style( 'ilba-page-eventos', $uri . '/css/eventos/eventos.css', array(), filemtime( $dir . '/css/eventos/eventos.css' ) );

    }

    // --- Archives grids ---
    if ( is_post_type_archive( 'protocolos' ) || is_post_type_archive( 'servicios' ) || is_post_type_archive( 'aparatologia' ) ) {
        wp_enqueue_style( 'ilba-archive-grids', $uri . '/css/archives/archive-grids.css', array(), filemtime( $dir . '/css/archives/archive-grids.css' ) );
    }

    // --- 404 ---
    if ( is_404() ) {
        wp_enqueue_style( 'ilba-404', $uri . '/css/404/404.css', array(), filemtime( $dir . '/css/404/404.css' ) );
    }

    // --- Páginas legales ---
    if ( is_page( array( 'privacidad', 'legal', 'cookies' ) ) ) {
        wp_enqueue_style( 'ilba-legal', $uri . '/css/legal/legal.css', array(), filemtime( $dir . '/css/legal/legal.css' ) );
    }
}
add_action( 'wp_enqueue_scripts', 'ilba_enqueue_assets' );