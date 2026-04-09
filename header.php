<?php
/**
 * Header
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="header">

    <div class="header__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo-link">
            ILBA
        </a>
    </div>

    <nav class="header__nav">

        <div class="header__nav-izq">
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'tienda' ) ) ); ?>" class="header__nav-link">
    Tienda [<?php echo function_exists( 'WC' ) && WC()->cart ? WC()->cart->get_cart_contents_count() : '0'; ?>]
</a>

        </div>

        <div class="header__nav-der">
            <?php
            $secciones = ilba_get_secciones_menu();
            foreach ( $secciones as $key => $seccion ) : ?>
                <a href="<?php echo esc_url( $seccion['url'] ); ?>"
                   class="header__nav-link header__nav-link--seccion"
                   data-seccion="<?php echo esc_attr( $key ); ?>">
                    <?php echo esc_html( $seccion['titulo'] ); ?>
                </a>
            <?php endforeach; ?>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ); ?>" class="header__nav-link">
                Contáctanos
            </a>
        </div>

    </nav>

</header>