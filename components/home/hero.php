<?php
/**
 * Home component: Hero
 */

$tipo   = get_field( 'home_hero_tipo' );
$titulo = get_field( 'home_hero_titulo' );

$cta1_texto = get_field( 'home_hero_cta1_texto' );
$cta1_link  = get_field( 'home_hero_cta1_link' );
$cta2_texto = get_field( 'home_hero_cta2_texto' );
$cta2_link  = get_field( 'home_hero_cta2_link' );
?>

<section class="home-hero">

    <?php if ( $tipo === 'dos_mitades' ) : ?>

        <?php
        $img_izq = get_field( 'home_hero_img_izq' );
        $img_der = get_field( 'home_hero_img_der' );
        ?>

        <div class="home-hero__bg home-hero__bg--dos-mitades">
            <div class="home-hero__mitad home-hero__mitad--izq">
                <?php if ( $img_izq ) : ?>
                    <img src="<?php echo esc_url( $img_izq['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_izq['alt'] ); ?>">
                <?php endif; ?>
            </div>
            <div class="home-hero__mitad home-hero__mitad--der">
                <?php if ( $img_der ) : ?>
                    <img src="<?php echo esc_url( $img_der['url'] ); ?>"
                         alt="<?php echo esc_attr( $img_der['alt'] ); ?>">
                <?php endif; ?>
            </div>
        </div>

    <?php else : ?>

        <?php $img_full = get_field( 'home_hero_img_full' ); ?>

        <div class="home-hero__bg home-hero__bg--full">
            <?php if ( $img_full ) : ?>
                <img src="<?php echo esc_url( $img_full['url'] ); ?>"
                     alt="<?php echo esc_attr( $img_full['alt'] ); ?>">
            <?php endif; ?>
        </div>

    <?php endif; ?>

    <div class="home-hero__overlay"></div>

    <div class="home-hero__content">
        <?php if ( $titulo ) : ?>
            <h1 class="home-hero__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>

        <?php if ( ( $cta1_texto && $cta1_link ) || ( $cta2_texto && $cta2_link ) ) : ?>
            <div class="home-hero__ctas">
                <?php if ( $cta1_texto && $cta1_link ) : ?>
                    <a href="<?php echo esc_url( $cta1_link ); ?>" class="home-hero__cta home-hero__cta--primario">
                        <?php echo esc_html( $cta1_texto ); ?>
                    </a>
                <?php endif; ?>
                <?php if ( $cta2_texto && $cta2_link ) : ?>
                    <a href="<?php echo esc_url( $cta2_link ); ?>" class="home-hero__cta home-hero__cta--secundario">
                        <?php echo esc_html( $cta2_texto ); ?>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

</section>