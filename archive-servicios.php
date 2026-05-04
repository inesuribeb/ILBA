<?php
/**
 * Template: Archive Servicios
 * Archivo: archive-servicios.php
 */

get_header();

$servicios = get_posts( array(
    'post_type'      => 'servicios',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
?>

<main class="archive-page archive-servicios">

    <div class="archive-page__header">
        <h1 class="archive-page__titulo">Servicios</h1>
    </div>

    <div class="archive-page__grid">
        <?php foreach ( $servicios as $post ) :
            $imagen = get_field( 'sv_imagen_hero', $post->ID );
            $titulo = get_field( 'sv_titulo', $post->ID ) ?: $post->post_title;
        ?>
            <a href="<?= esc_url( get_permalink( $post->ID ) ) ?>" class="archive-card">

                <div class="archive-card__imagen">
                    <?php if ( $imagen ) : ?>
                        <img src="<?= esc_url( $imagen['url'] ) ?>" alt="<?= esc_attr( $imagen['alt'] ) ?>">
                    <?php endif; ?>
                </div>

                <div class="archive-card__overlay"></div>

                <div class="archive-card__info">
                    <span class="archive-card__titulo"><?= esc_html( $titulo ) ?></span>
                </div>

            </a>
        <?php endforeach; ?>
    </div>

</main>

<?php get_footer(); ?>