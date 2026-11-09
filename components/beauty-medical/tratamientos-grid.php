<?php
/**
 * Component: Tratamientos grid
 * Muestra los tratamientos cuya tr_categoria coincide con
 * bm_categoria + bm_subcategoria de la página actual (ej: "beauty-facial").
 */

$categoria    = get_field( 'bm_categoria' );
$subcategoria = get_field( 'bm_subcategoria' );

if ( ! $categoria || ! $subcategoria ) return;

$clave = $categoria . '-' . $subcategoria;

$tratamientos = new WP_Query( array(
    'post_type'      => 'tratamientos',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => array( 'menu_order' => 'ASC', 'title' => 'ASC' ),
    'meta_query'     => array(
        array(
            'key'     => 'tr_categoria',
            'value'   => '"' . $clave . '"',
            'compare' => 'LIKE',
        ),
    ),
) );

if ( ! $tratamientos->have_posts() ) return;
?>

<section class="tratamientos-grid">
    <div class="tratamientos-grid__list">
        <?php while ( $tratamientos->have_posts() ) : $tratamientos->the_post(); ?>
            <?php get_template_part( 'components/beauty-medical/components/tratamiento-card', null, array( 'post_id' => get_the_ID() ) ); ?>
        <?php endwhile; ?>
    </div>
</section>

<?php wp_reset_postdata(); ?>