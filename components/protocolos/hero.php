<?php
/**
 * Protocolos component: Hero
 */

$titulo       = get_field( 'pr_titulo' );
$subtitulo    = get_field( 'pr_subtitulo' );
$img_hero     = get_field( 'pr_imagen_hero' );
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );

$slugs_nav = array(
    'Maternidad'     => 'protocolo-maternidad',
    'Oncológico'     => 'protocolo-oncologico',
    'Peso Saludable' => 'protocolo-peso-saludable',
    'Menopausia'     => 'protocolo-menopausia',
    'Longevidad'     => 'protocolo-longevidad',
);

$protocolos_nav = array();
foreach ( $slugs_nav as $titulo_nav => $slug ) {
    $page = get_posts( array(
        'name'        => $slug,
        'post_type'   => 'protocolos',
        'post_status' => 'publish',
        'numberposts' => 1,
    ) );
    $protocolos_nav[] = array(
        'titulo' => $titulo_nav,
        'url'    => $page ? get_permalink( $page[0]->ID ) : '#',
    );
}

$current_url = get_permalink( get_the_ID() );


?>

<section class="pr-hero">

    <?php if ( $img_hero ) : ?>
        <div class="pr-hero__bg">
            <img src="<?php echo esc_url( $img_hero['url'] ); ?>"
                 alt="<?php echo esc_attr( $img_hero['alt'] ); ?>">
        </div>
    <?php endif; ?>

    <div class="pr-hero__overlay"></div>

    <div class="pr-hero__layout">

        <!-- Columna izquierda: nav (solo desktop) -->
        <div class="pr-hero__nav">
            <?php foreach ( $protocolos_nav as $item ) :
                $is_active = $current_url === $item['url'];
            ?>
                <a href="<?php echo esc_url( $item['url'] ); ?>"
                   class="pr-hero__nav-link <?php echo $is_active ? 'is-active' : ''; ?>">
                    <span class="pr-hero__nav-dot"></span>
                    <?php echo esc_html( $item['titulo'] ); ?>
                </a>
            <?php endforeach; ?>
        </div>

        <!-- Columna derecha: contenido -->
        <div class="pr-hero__content">
            <?php if ( $subtitulo ) : ?>
                <p class="pr-hero__subtitulo"><?php echo esc_html( $subtitulo ); ?></p>
            <?php endif; ?>

            <?php if ( $titulo ) : ?>
                <h1 class="pr-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
            <?php endif; ?>

            <a href="<?php echo esc_url( $contacto_url ); ?>" class="pr-hero__cta">
                Pide cita
            </a>
        </div>

    </div>

    <!-- Nav móvil -->
    <div class="pr-hero__movil-top">
        <button class="pr-hero__movil-btn" aria-expanded="false">
            + Protocolos
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
            </svg>
        </button>
        <div class="pr-hero__movil-nav">
            <?php foreach ( $protocolos_nav as $item ) :
                $is_active = $current_url === $item['url'];
            ?>
                <a href="<?php echo esc_url( $item['url'] ); ?>"
                   class="pr-hero__movil-nav-link <?php echo $is_active ? 'is-active' : ''; ?>">
                    <?php echo esc_html( $item['titulo'] ); ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- CTA fijo abajo móvil -->
    <a href="<?php echo esc_url( $contacto_url ); ?>" class="pr-hero__cta-movil">
        Pide cita
    </a>

</section>