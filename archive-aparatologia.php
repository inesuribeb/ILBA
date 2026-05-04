<?php
/**
 * Template: Archive Aparatología
 * Archivo: archive-aparatologia.php
 */

get_header();

$aparatos = get_posts( array(
    'post_type'      => 'aparatologia',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
?>

<main class="archive-page archive-aparatologia">

    <div class="archive-page__header">
        <h1 class="archive-page__titulo">Aparatología</h1>
    </div>

    <div class="archive-page__grid">
        <?php foreach ( $aparatos as $post ) :
            $silueta = get_field( 'ap_imagen_silueta', $post->ID );
            $titulo  = get_field( 'ap_titulo', $post->ID ) ?: $post->post_title;
        ?>
            <a href="<?= esc_url( get_permalink( $post->ID ) ) ?>" class="archive-card archive-card--aparatologia">

                <div class="archive-card__imagen archive-card__imagen--silueta">
                    <?php if ( $silueta ) : ?>
                        <img src="<?= esc_url( $silueta['url'] ) ?>" alt="<?= esc_attr( $silueta['alt'] ) ?>">
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