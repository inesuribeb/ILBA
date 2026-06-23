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
            <a href="<?php echo esc_url( wc_get_page_permalink( 'shop' ) ); ?>" class="header__nav-link">
                Tienda
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
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'somos' ) ) ); ?>" class="header__nav-link">
                Somos
            </a>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ); ?>" class="header__nav-link">
                Contáctanos
            </a>
            <a href="#" class="header__nav-link header__nav-link--carrito" id="abrir-modal-carrito">
    Carrito [<span class="carrito-count"><?php echo function_exists( 'WC' ) && WC()->cart ? WC()->cart->get_cart_contents_count() : '0'; ?></span>]
</a>
        </div>

    </nav>

    <!-- Paneles desplegables -->
    <?php foreach ( $secciones as $key => $seccion ) : ?>
        <div class="header__panel" data-panel="<?php echo esc_attr( $key ); ?>">

            <?php if ( isset( $seccion['tipo'] ) && $seccion['tipo'] === 'wellness' ) : ?>

                <!-- Panel Wellness -->
                <div class="header__panel-nav header__panel-nav--wellness">
                    <span class="header__panel-wellness-label">Protocolos</span>
                    <div class="header__panel-wellness-links">
                        <?php foreach ( $seccion['protocolos'] as $protocolo ) : ?>
                            <a href="<?php echo esc_url( $protocolo['url'] ); ?>"
                               class="header__panel-wellness-link"
                               data-imagen="<?php echo esc_url( $protocolo['imagen'] ); ?>">
                                <?php echo esc_html( $protocolo['titulo'] ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="header__panel-imagen">
                    <img src="<?php echo esc_url( $seccion['imagen'] ); ?>"
                         alt="Wellness"
                         class="header__panel-wellness-img">
                </div>

            <?php else : ?>

                <div class="header__panel-nav">
                    <?php if ( isset( $seccion['filas'] ) ) : ?>
                        <?php foreach ( $seccion['filas'] as $fila ) : ?>
                            <div class="header__panel-fila">
                                <?php foreach ( $fila as $columna ) : ?>
                                    <div class="header__panel-columna">
                                        <a href="<?php echo esc_url( $columna['url'] ); ?>" class="header__panel-col-titulo">
                                            <?php echo esc_html( $columna['titulo'] ); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                        <?php if ( ! empty( $columna['items'] ) ) : ?>
                                            <ul class="header__panel-items">
                                                <?php foreach ( $columna['items'] as $item ) : ?>
                                                    <li>
                                                        <a href="<?php echo esc_url( $item['url'] ); ?>" class="header__panel-item-link">
                                                            <?php echo esc_html( $item['titulo'] ); ?>
                                                        </a>
                                                    </li>
                                                <?php endforeach; ?>
                                            </ul>
                                        <?php endif; ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <div class="header__panel-fila">
                            <?php foreach ( $seccion['columnas'] as $columna ) : ?>
                                <div class="header__panel-columna">
                                    <a href="<?php echo esc_url( $columna['url'] ); ?>" class="header__panel-col-titulo">
                                        <?php echo esc_html( $columna['titulo'] ); ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>
                                    <?php if ( ! empty( $columna['items'] ) ) : ?>
                                        <ul class="header__panel-items">
                                            <?php foreach ( $columna['items'] as $item ) : ?>
                                                <li>
                                                    <a href="<?php echo esc_url( $item['url'] ); ?>" class="header__panel-item-link">
                                                        <?php echo esc_html( $item['titulo'] ); ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="header__panel-imagen">
                    <img src="<?php echo esc_url( $seccion['imagen'] ); ?>"
                         alt="<?php echo esc_html( $seccion['titulo'] ); ?>">
                </div>

            <?php endif; ?>

        </div>
    <?php endforeach; ?>

    <!-- Panel Tienda -->
    <?php
    $panel_tienda = function_exists( 'ilba_get_panel_tienda' ) ? ilba_get_panel_tienda() : null;
    if ( $panel_tienda ) : ?>
        <div class="header__panel header__panel--tienda" data-panel="tienda">

            <div class="header__panel-nav header__panel-nav--tienda">

                <div class="header__panel-tienda-col">
                    <a href="<?php echo esc_url( $panel_tienda['tienda_url'] ); ?>" class="header__panel-tienda-todo">
                        Comprar todo
                    </a>
                </div>

                <div class="header__panel-tienda-col">
                    <span class="header__panel-tienda-label">Por necesidad</span>
                    <div class="header__panel-tienda-links">
                        <?php foreach ( $panel_tienda['tipo_piel_items'] as $item ) : ?>
                            <a href="<?php echo esc_url( $item['url'] ); ?>" class="header__panel-tienda-link">
                                <?php echo esc_html( $item['titulo'] ); ?>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>

            <div class="header__panel-imagen">
                <img src="<?php echo esc_url( $panel_tienda['imagen'] ); ?>" alt="Tienda">
            </div>

        </div>
    <?php endif; ?>

    <?php get_template_part( 'components/shop/modal/modal-carrito' ); ?>


</header>

<?php get_template_part( 'header-mobile' ); ?>