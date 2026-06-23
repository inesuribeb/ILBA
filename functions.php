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
require_once get_stylesheet_directory() . '/inc/config/panel-tienda.php';

require_once get_stylesheet_directory() . '/inc/enqueue.php';

add_filter( 'show_admin_bar', '__return_false' );


add_filter( 'body_class', function( $classes ) {
    if ( is_page() ) {
        $page = get_queried_object();
        if ( $page ) {
            $classes[] = 'page-' . $page->post_name;
            $classes[] = 'page-id-' . $page->ID;
        }
    }

    if ( is_singular( 'protocolos' ) ) {
        $classes[] = 'single-protocolos-dark';
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

add_filter( 'wpcf7_form_elements', function( $html ) {
    if ( ! is_singular( 'protocolos' ) ) return $html;

    $preguntas = array();
    for ( $i = 1; $i <= 4; $i++ ) {
        $pregunta = get_field( 'pr_form_pregunta_' . $i );
        if ( $pregunta ) $preguntas[] = '<option value="' . esc_attr( $pregunta ) . '">' . esc_html( $pregunta ) . '</option>';
    }

    if ( empty( $preguntas ) ) return $html;

    $opciones = implode( '', $preguntas );

    $html = preg_replace(
        '/(<select[^>]*id="pr-form-select-momento"[^>]*>)(.*?)(<\/select>)/s',
        '$1<option value="" disabled selected>¿En qué momento estás?*</option>' . $opciones . '$3',
        $html
    );

    return $html;
});


// --- WooCommerce: templates personalizados ---

function ilba_woo_templates( $template ) {
    if ( ! function_exists( 'is_shop' ) ) return $template;

    if ( is_shop() || is_product_category() || is_product_tag() ) {
        $custom = get_stylesheet_directory() . '/woocommerce/archive-product.php';
        if ( file_exists( $custom ) ) return $custom;
    }
    if ( is_product() ) {
        $custom = get_stylesheet_directory() . '/woocommerce/single-product.php';
        if ( file_exists( $custom ) ) return $custom;
    }
    return $template;
}
add_filter( 'template_include', 'ilba_woo_templates', 99 );


// --- WooCommerce: cart y checkout ---

function ilba_woo_cart_checkout_templates( $template ) {
    if ( ! function_exists( 'is_cart' ) ) return $template;

    if ( is_cart() ) {
        $custom = get_stylesheet_directory() . '/woocommerce/cart/cart.php';
        if ( file_exists( $custom ) ) return $custom;
    }
    if ( is_checkout() ) {
        $custom = get_stylesheet_directory() . '/woocommerce/checkout/checkout.php';
        if ( file_exists( $custom ) ) return $custom;
    }
    return $template;
}
add_filter( 'template_include', 'ilba_woo_cart_checkout_templates', 99 );

// --- WooCommerce: actualizar fragmentos del carrito ---
// add_filter( 'woocommerce_add_to_cart_fragments', function( $fragments ) {


//     $fragments['a#abrir-modal-carrito'] = '<a href="#" class="header__nav-link header__nav-link--carrito" id="abrir-modal-carrito">Carrito [<span class="carrito-count">' . WC()->cart->get_cart_contents_count() . '</span>]</a>';
//     ob_start();
//     get_template_part( 'components/shop/modal/modal-carrito' );
//     $fragments['#modal-carrito'] = ob_get_clean();

//     return $fragments;
// } );
add_filter( 'woocommerce_add_to_cart_fragments', function( $fragments ) {

    $fragments['a#abrir-modal-carrito'] = '<a href="#" class="header__nav-link header__nav-link--carrito" id="abrir-modal-carrito">Carrito [<span class="carrito-count">' . WC()->cart->get_cart_contents_count() . '</span>]</a>';
    $fragments['a#abrir-modal-carrito-mobile'] = '<a href="#" class="header-mobile__carrito-btn" id="abrir-modal-carrito-mobile">' . WC()->cart->get_cart_contents_count() . '</a>';

    ob_start();
    get_template_part( 'components/shop/modal/modal-carrito' );
    $html = ob_get_clean();

    // Forzar que el modal siempre se renderice cerrado
    $html = str_replace( 'class="modal-carrito is-open"', 'class="modal-carrito"', $html );
    $html = str_replace( 'aria-hidden="false"', 'aria-hidden="true"', $html );

    $fragments['#modal-carrito'] = $html;

    return $fragments;
} );

// --- WooCommerce: quitar avisos de añadido/eliminado del carrito ---
add_filter( 'wc_add_to_cart_message_html', '__return_empty_string' );
remove_action( 'woocommerce_cart_item_removed', 'woocommerce_cart_item_removed_notice' );
add_filter( 'woocommerce_cart_item_removed_notice_type', '__return_empty_string' );