<?php
/**
 * Header Mobile
 */

$secciones    = ilba_get_secciones_menu();
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );
$somos_url    = get_permalink( get_page_by_path( 'somos' ) );

// Coger el primer evento publicado
$evento = get_posts( array(
    'post_type'      => 'eventos',
    'post_status'    => 'publish',
    'numberposts'    => 1,
) );
$evento_url = $evento ? get_permalink( $evento[0]->ID ) : '#';
$evento_titulo = $evento ? get_the_title( $evento[0]->ID ) : 'Evento';
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

<!-- Menú móvil desplegable -->
<div class="header-mobile__panel" aria-hidden="true">

    <!-- Nav principal -->
    <nav class="header-mobile__nav">
        <?php foreach ( $secciones as $key => $seccion ) : ?>
            <div class="header-mobile__nav-item">
                <button class="header-mobile__nav-btn" data-seccion="<?php echo esc_attr( $key ); ?>">
                    <?php echo esc_html( $seccion['titulo'] ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        <?php endforeach; ?>
    </nav>

    <!-- Imagen que rota -->
    <div class="header-mobile__imagen">
        <?php foreach ( $secciones as $key => $seccion ) : ?>
            <img src="<?php echo esc_url( $seccion['imagen'] ); ?>"
                 alt="<?php echo esc_html( $seccion['titulo'] ); ?>"
                 class="header-mobile__imagen-item"
                 data-seccion="<?php echo esc_attr( $key ); ?>">
        <?php endforeach; ?>
    </div>

    <!-- Links inferiores -->
    <div class="header-mobile__bottom">
        <a href="<?php echo esc_url( $contacto_url ); ?>" class="header-mobile__bottom-link">Contáctanos</a>
        <a href="<?php echo esc_url( $evento_url ); ?>" class="header-mobile__bottom-link">Evento</a>
        <a href="<?php echo esc_url( $somos_url ); ?>" class="header-mobile__bottom-link">Somos</a>
    </div>

</div>