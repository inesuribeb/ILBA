<?php
/**
 * Header Mobile
 */

$secciones    = ilba_get_secciones_menu();
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );
$somos_url    = get_permalink( get_page_by_path( 'somos' ) );

$evento_url = get_post_type_archive_link( 'eventos' );

?>

<header class="header-mobile">
    <div class="header-mobile__logo">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header-mobile__logo-link">
            ILBA
        </a>
    </div>
    <div class="header-mobile__der">
        <button class="header-mobile__menu-btn" aria-expanded="false">
            <span class="header-mobile__menu-label">Menú</span>
        </button>
    </div>
</header>

<!-- Menú: capa única -->
<div class="header-mobile__menu" aria-hidden="true">

    <!-- Contenido cambiante -->
    <div class="header-mobile__contenido">

        <!-- Panel 1: secciones + imagen -->
        <div class="header-mobile__panel-1 is-active">
            <div class="header-mobile__panel-scroll">
                <nav class="header-mobile__nav">
                    <?php foreach ( $secciones as $key => $seccion ) : ?>
                        <div class="header-mobile__nav-item">
                            <button class="header-mobile__nav-btn" data-seccion="<?php echo esc_attr( $key ); ?>">
                                <?php echo esc_html( $seccion['titulo'] ); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                </svg>
                            </button>
                        </div>
                    <?php endforeach; ?>
                </nav>

                <div class="header-mobile__imagen">
                    <?php foreach ( $secciones as $key => $seccion ) : ?>
                        <img src="<?php echo esc_url( $seccion['imagen'] ); ?>"
                             alt="<?php echo esc_html( $seccion['titulo'] ); ?>"
                             class="header-mobile__imagen-item"
                             data-seccion="<?php echo esc_attr( $key ); ?>">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Paneles 2: uno por sección -->
        <?php foreach ( $secciones as $key => $seccion ) : ?>
            <div class="header-mobile__panel-2" data-panel-2="<?php echo esc_attr( $key ); ?>">
                <div class="header-mobile__panel-2-header">
                    <button class="header-mobile__back-btn">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                        </svg>
                        <?php echo esc_html( $seccion['titulo'] ); ?>
                    </button>
                </div>
                <div class="header-mobile__panel-scroll">

                    <?php if ( isset( $seccion['tipo'] ) && $seccion['tipo'] === 'wellness' ) : ?>
                        <?php foreach ( $seccion['protocolos'] as $protocolo ) : ?>
                            <div class="header-mobile__nav-item">
                                <a href="<?php echo esc_url( $protocolo['url'] ); ?>" class="header-mobile__nav-link">
                                    Protocolo <?php echo esc_html( $protocolo['titulo'] ); ?>
                                </a>
                            </div>
                        <?php endforeach; ?>

                    <?php elseif ( isset( $seccion['filas'] ) ) : ?>
                        <?php foreach ( $seccion['filas'] as $fila ) : ?>
                            <?php foreach ( $fila as $columna ) : ?>
                                <div class="header-mobile__aparatos-grupo">
                                    <div class="header-mobile__nav-item header-mobile__nav-item--titulo">
                                        <a href="<?php echo esc_url( $columna['url'] ); ?>" class="header-mobile__nav-link header-mobile__nav-link--titulo">
                                            <?php echo esc_html( $columna['titulo'] ); ?>
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                            </svg>
                                        </a>
                                    </div>
                                    <?php foreach ( $columna['items'] as $item ) : ?>
                                        <div class="header-mobile__nav-item header-mobile__nav-item--aparato">
                                            <a href="<?php echo esc_url( $item['url'] ); ?>" class="header-mobile__nav-link">
                                                <?php echo esc_html( $item['titulo'] ); ?>
                                            </a>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            <?php endforeach; ?>
                        <?php endforeach; ?>

                    <?php else : ?>
                        <?php foreach ( $seccion['columnas'] as $columna ) : ?>
                            <div class="header-mobile__aparatos-grupo">
                                <div class="header-mobile__nav-item header-mobile__nav-item--titulo">
                                    <a href="<?php echo esc_url( $columna['url'] ); ?>" class="header-mobile__nav-link header-mobile__nav-link--titulo">
                                        <?php echo esc_html( $columna['titulo'] ); ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                                        </svg>
                                    </a>
                                </div>
                                <?php foreach ( $columna['items'] as $item ) : ?>
                                    <div class="header-mobile__nav-item header-mobile__nav-item--aparato">
                                        <a href="<?php echo esc_url( $item['url'] ); ?>" class="header-mobile__nav-link">
                                            <?php echo esc_html( $item['titulo'] ); ?>
                                        </a>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        <?php endforeach; ?>
                    <?php endif; ?>

                </div>
            </div>
        <?php endforeach; ?>

    </div>

    <!-- Bottom fijo — siempre en la misma posición -->
    <div class="header-mobile__bottom">
        <a href="<?php echo esc_url( $contacto_url ); ?>" class="header-mobile__bottom-link">Contáctanos</a>
        <a href="<?php echo esc_url( $evento_url ); ?>" class="header-mobile__bottom-link">Eventos</a>
        <a href="<?php echo esc_url( $somos_url ); ?>" class="header-mobile__bottom-link">Somos</a>
    </div>

</div>