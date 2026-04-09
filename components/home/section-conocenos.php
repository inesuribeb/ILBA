<?php
/**
 * Home component: Conócenos
 */

$tag            = get_field( 'home_conocenos_tag' );
$titulo         = get_field( 'home_conocenos_titulo' );
$descripcion    = get_field( 'home_conocenos_descripcion' );
$cta_texto      = get_field( 'home_conocenos_cta_texto' );
$cta_link       = get_field( 'home_conocenos_cta_link' );
$img_vertical   = get_field( 'home_conocenos_img_vertical' );
$img_cuadrada   = get_field( 'home_conocenos_img_cuadrada' );
?>

<section class="home-conocenos">

    <div class="home-conocenos__col-tag">
        <?php if ( $tag ) : ?>
            <span class="home-conocenos__tag"><?php echo esc_html( $tag ); ?></span>
        <?php endif; ?>
    </div>

    <div class="home-conocenos__col-main">

        <div class="home-conocenos__texto">
            <?php if ( $titulo ) : ?>
                <h2 class="home-conocenos__titulo"><?php echo esc_html( $titulo ); ?></h2>
            <?php endif; ?>

            <?php if ( $descripcion ) : ?>
                <p class="home-conocenos__descripcion"><?php echo esc_html( $descripcion ); ?></p>
            <?php endif; ?>

            <?php if ( $cta_texto && $cta_link ) : ?>
                <a href="<?php echo esc_url( $cta_link ); ?>" class="home-conocenos__cta">
                    <?php echo esc_html( $cta_texto ); ?>
                </a>
            <?php endif; ?>
        </div>

        <div class="home-conocenos__imagenes">
            <?php if ( $img_vertical ) : ?>
                <div class="home-conocenos__img-vertical">
                    <img src="<?php echo esc_url( $img_vertical['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_vertical['alt'] ); ?>">
                </div>
            <?php endif; ?>

            <?php if ( $img_cuadrada ) : ?>
                <div class="home-conocenos__img-cuadrada">
                    <img src="<?php echo esc_url( $img_cuadrada['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_cuadrada['alt'] ); ?>">
                </div>
            <?php endif; ?>
        </div>

    </div>

</section>