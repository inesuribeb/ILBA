<?php
/**
 * Enqueue de estilos y scripts
 */

function ilba_enqueue_assets() {

    // --- Estilos globales ---
    // wp_enqueue_style( 'ilba-global', get_stylesheet_directory_uri() . '/css/global.css' );

    // --- Home ---
    if ( is_front_page() ) {
        wp_enqueue_style( 'ilba-hero',               get_stylesheet_directory_uri() . '/css/home/hero.css' );
        wp_enqueue_style( 'ilba-nuestros-servicios', get_stylesheet_directory_uri() . '/css/home/nuestros-servicios.css' );
        wp_enqueue_style( 'ilba-nuestra-clinica', get_stylesheet_directory_uri() . '/css/home/section-clinica.css' );
        wp_enqueue_style( 'ilba-conocenos', get_stylesheet_directory_uri() . '/css/home/section-conocenos.css' );
        wp_enqueue_style( 'ilba-marcas', get_stylesheet_directory_uri() . '/css/home/section-marcas.css' );
        wp_enqueue_style( 'ilba-img-video', get_stylesheet_directory_uri() . '/css/home/section-img-video.css' );

        wp_enqueue_script(
            'ilba-sticky-tag',
            get_stylesheet_directory_uri() . '/js/home/sticky-tag.js',
            array(),
            null,
            true // ← carga en el footer, importante
        );

        wp_enqueue_script(
            'ilba-cards-servicios',
            get_stylesheet_directory_uri() . '/js/home/cards-servicios.js',
            array(),
            null,
            true
        );

        // footer
        wp_enqueue_style( 'ilba-footer', get_stylesheet_directory_uri() . '/css/footer/footer.css' );


    }

    // --- CPTs ---
    // if ( is_singular( 'beauty_medical' ) ) {
    //     wp_enqueue_style( 'ilba-beauty-medical', get_stylesheet_directory_uri() . '/css/beauty-medical.css' );
    // }

}
add_action( 'wp_enqueue_scripts', 'ilba_enqueue_assets' );

/*Header*/
wp_enqueue_style( 'ilba-header', get_stylesheet_directory_uri() . '/css/header/header.css' );
wp_enqueue_script( 'ilba-header', get_stylesheet_directory_uri() . '/js/header/header.js', array(), null, true );

