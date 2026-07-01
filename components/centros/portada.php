<?php
/**
 * Centro component: Portada
 */

$titulo       = get_field( 'ce_titulo' );
$subtitulo    = get_field( 'ce_descripcion' );
$img_hero     = get_field( 'ce_imagen_hero' );
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );

$centros_nav = get_posts( array(
    'post_type'   => 'centro',
    'post_status' => 'publish',
    'numberposts' => -1,
    'orderby'     => 'menu_order',
    'order'       => 'ASC',
) );

$current_url = get_permalink( get_the_ID() );

?>

<section class="ce-hero">

    <?php if ( $img_hero ) : ?>
        <div class="ce-hero__bg">
            <img src="<?php echo esc_url( $img_hero['url'] ); ?>"
                 alt="<?php echo esc_attr( $img_hero['alt'] ); ?>">
        </div>
    <?php endif; ?>

    <div class="ce-hero__overlay"></div>

    <div class="ce-hero__layout">

        <!-- Columna izquierda: nav (solo desktop) -->
        <div class="ce-hero__nav">
            <?php foreach ( $centros_nav as $centro ) :
                $centro_url = get_permalink( $centro->ID );
                $is_active  = $current_url === $centro_url;
            ?>
                <a href="<?php echo esc_url( $centro_url ); ?>"
                   class="ce-hero__nav-link <?php echo $is_active ? 'is-active' : ''; ?>">
                    <span class="ce-hero__nav-dot"></span>
                    <?php echo esc_html( $centro->post_title ); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Columna derecha: contenido -->
        <div class="ce-hero__content">
            <?php if ( $subtitulo ) : ?>
                <p class="ce-hero__subtitulo"><?php echo esc_html( $subtitulo ); ?></p>
            <?php endif; ?>

            <?php if ( $titulo ) : ?>
                <h1 class="ce-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
            <?php endif; ?>

            <a href="#ce-formulario" class="ce-hero__cta">
    Pide cita
</a>
        </div>

    </div>

    <!-- Nav móvil -->
    <div class="ce-hero__movil-top">
        <button class="ce-hero__movil-btn" aria-expanded="false">
            Centros
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
        <div class="ce-hero__movil-nav">
            <?php foreach ( $centros_nav as $centro ) :
                $centro_url = get_permalink( $centro->ID );
                $is_active  = $current_url === $centro_url;
            ?>
                <a href="<?php echo esc_url( $centro_url ); ?>"
                   class="ce-hero__movil-nav-link <?php echo $is_active ? 'is-active' : ''; ?>">
                    <?php echo esc_html( $centro->post_title ); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- CTA fijo abajo móvil -->
    <a href="#ce-formulario" class="ce-hero__cta-movil">
    Pide cita
</a>

</section>