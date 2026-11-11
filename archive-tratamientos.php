<?php
/**
 * Archivo — Tratamientos
 * Agrupados por categoría (orden del campo ACF tr_categoria)
 */

get_header();

// Etiquetas de categoría: [ 'beauty-facial' => 'Beauty facial', ... ]
$cat_field  = function_exists( 'acf_get_field' ) ? acf_get_field( 'field_tr_categoria' ) : null;
$cat_labels = ( $cat_field && ! empty( $cat_field['choices'] ) ) ? $cat_field['choices'] : array();
$cat_keys   = ilba_tratamiento_categorias_orden();

// Agrupar los posts (ya vienen ordenados desde el CPT)
$grupos = array();
while ( have_posts() ) {
    the_post();
    $pos = ilba_tratamiento_posicion_categoria( get_the_ID(), $cat_keys );
    $key = ( $pos !== PHP_INT_MAX ) ? $cat_keys[ $pos ] : 'otros';
    $grupos[ $key ][] = get_the_ID();
}
rewind_posts();
?>

<main class="tratamientos-archive">

    <header class="tratamientos-archive__header">
        <h1 class="tratamientos-archive__title">Tratamientos</h1>
    </header>

    <?php if ( $grupos ) : ?>

        <?php foreach ( $grupos as $cat => $ids ) : ?>
            <section class="tratamientos-archive__group" id="<?php echo esc_attr( $cat ); ?>">

                <h2 class="tratamientos-archive__group-title">
                    <?php echo esc_html( $cat_labels[ $cat ] ?? 'Otros tratamientos' ); ?>
                </h2>

                <div class="tratamientos-archive__grid">
                    <?php foreach ( $ids as $id ) : ?>
                        <?php get_template_part( 'components/beauty-medical/components/tratamiento-card', null, array(
                            'post_id' => $id,
                        ) ); ?>
                    <?php endforeach; ?>
                </div>

            </section>
        <?php endforeach; ?>

    <?php else : ?>
        <p class="tratamientos-archive__empty">No hay tratamientos disponibles.</p>
    <?php endif; ?>

</main>

<?php get_footer(); ?>