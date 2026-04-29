<?php
/**
 * Somos component: Hero
 */
 
$somos_id    = get_page_by_path( 'somos' )->ID;
$imagen_hero = get_field( 'somos_hero_imagen', $somos_id );
?>
 
<section class="somos-hero">
    <?php if ( $imagen_hero ) : ?>
        <img src="<?php echo esc_url( $imagen_hero['url'] ); ?>"
             alt="<?php echo esc_attr( $imagen_hero['alt'] ); ?>">
    <?php endif; ?>
</section>