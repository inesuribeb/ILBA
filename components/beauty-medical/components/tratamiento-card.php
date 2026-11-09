<?php
/**
 * Component: Tratamiento card
 *
 * Uso:
 * get_template_part( 'components/beauty-medical/tratamiento-card', null, array( 'post_id' => get_the_ID() ) );
 */

$post_id = ! empty( $args['post_id'] ) ? (int) $args['post_id'] : get_the_ID();
if ( ! $post_id ) return;

$nombre   = get_field( 'tr_nombre', $post_id ) ?: get_the_title( $post_id );
$duracion = get_field( 'tr_duracion', $post_id );
$img      = get_field( 'tr_img_card', $post_id );

// Etiquetas (hasta 4) + Keywords (hasta 5) → se muestran juntas sobre la foto
$tags = array();
for ( $i = 1; $i <= 4; $i++ ) {
    $tag = trim( (string) get_field( 'tr_etiqueta_' . $i, $post_id ) );
    if ( $tag !== '' ) $tags[] = $tag;
}
for ( $i = 1; $i <= 5; $i++ ) {
    $tag = trim( (string) get_field( 'tr_keyword_' . $i, $post_id ) );
    if ( $tag !== '' ) $tags[] = $tag;
}
$tags = array_unique( $tags );
?>

<article class="tratamiento-card">
    <div class="tratamiento-card__link">

        <div class="tratamiento-card__media">
            <?php if ( $img ) : ?>
                <?php echo wp_get_attachment_image( $img['ID'], 'large', false, array(
                    'class'   => 'tratamiento-card__img',
                    'alt'     => esc_attr( $img['alt'] ?: $nombre ),
                    'loading' => 'lazy',
                ) ); ?>
            <?php endif; ?>

            <?php if ( $tags ) : ?>
                <ul class="tratamiento-card__tags">
                    <?php foreach ( $tags as $tag ) : ?>
                        <li class="tratamiento-card__tag"><?php echo esc_html( $tag ); ?></li>
                    <?php endforeach; ?>
                </ul>
            <?php endif; ?>
        </div>

        <div class="tratamiento-card__body">
            <div class="tratamiento-card__header">
                <h3 class="tratamiento-card__title">
                    <a class="tratamiento-card__title-link" href="<?php echo esc_url( get_permalink( $post_id ) ); ?>">
                        <?php echo esc_html( $nombre ); ?>
                    </a>
                </h3>
                <?php if ( $duracion ) : ?>
                    <span class="tratamiento-card__duracion"><?php echo esc_html( $duracion ); ?></span>
                <?php endif; ?>
            </div>

            <a class="tratamiento-card__cta" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">Más información</a>
        </div>

    </div>
</article>