<?php
/**
 * Home component: La Clínica
 */

$tag            = get_field( 'home_clinica_tag' );
$titulo         = get_field( 'home_clinica_titulo' );
$cta_texto      = get_field( 'home_clinica_cta_texto' );
$cta_link       = get_field( 'home_clinica_cta_link' );
$img_vertical   = get_field( 'home_clinica_img_vertical' );
$img_horizontal = get_field( 'home_clinica_img_horizontal' );
?>

<section class="home-clinica">

    <div class="home-clinica__col-tag">
        <?php if ( $tag ) : ?>
            <span class="home-clinica__tag"><?php echo esc_html( $tag ); ?></span>
        <?php endif; ?>
    </div>

    <div class="home-clinica__col-main">

        <?php if ( $img_vertical ) : ?>
            <div class="home-clinica__img-vertical">
                <img src="<?php echo esc_url( $img_vertical['url'] ); ?>"
                     alt="<?php echo esc_attr( $img_vertical['alt'] ); ?>">
            </div>
        <?php endif; ?>

        <div class="home-clinica__content">

            <div class="home-clinica__content-top">
                <?php if ( $titulo ) : ?>
                    <h2 class="home-clinica__titulo"><?php echo esc_html( $titulo ); ?></h2>
                <?php endif; ?>

                <?php if ( $cta_texto && $cta_link ) : ?>
                    <a href="<?php echo esc_url( $cta_link ); ?>" class="home-clinica__cta">
                        <?php echo esc_html( $cta_texto ); ?>
                    </a>
                <?php endif; ?>
            </div>

            <?php if ( $img_horizontal ) : ?>
                <div class="home-clinica__img-horizontal">
                    <img src="<?php echo esc_url( $img_horizontal['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_horizontal['alt'] ); ?>">
                </div>
            <?php endif; ?>

        </div>

    </div>

</section>