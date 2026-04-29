<?php
/**
 * Protocolos component: Hero
 */

$titulo       = get_field( 'pr_titulo' );
$subtitulo    = get_field( 'pr_subtitulo' );
$img_hero     = get_field( 'pr_imagen_hero' );
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );

$protocolos_nav = array(
    array( 'titulo' => 'Maternidad',     'url' => get_permalink( get_page_by_path( 'maternidad',     OBJECT, 'protocolos' ) ) ),
    array( 'titulo' => 'Oncológico',     'url' => get_permalink( get_page_by_path( 'oncologico',     OBJECT, 'protocolos' ) ) ),
    array( 'titulo' => 'Peso Saludable', 'url' => get_permalink( get_page_by_path( 'peso-saludable', OBJECT, 'protocolos' ) ) ),
    array( 'titulo' => 'Menopausia',     'url' => get_permalink( get_page_by_path( 'menopausia',     OBJECT, 'protocolos' ) ) ),
    array( 'titulo' => 'Longevidad',     'url' => get_permalink( get_page_by_path( 'longevidad',     OBJECT, 'protocolos' ) ) ),
);
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

        <!-- Columna izquierda: nav -->
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

</section>