<?php
/**
 * Home component: Nuestros Servicios
 */

$tag       = get_field( 'home_servicios_tag' );
$titulo    = get_field( 'home_servicios_titulo' );
$secciones = ilba_get_secciones_menu();
?>

<section class="home-servicios">

    <div class="home-servicios__col-tag">
        <?php if ( $tag ) : ?>
            <span class="home-servicios__tag"><?php echo esc_html( $tag ); ?></span>
        <?php endif; ?>
    </div>

    <div class="home-servicios__col-main">

        <h2 class="home-servicios__titulo"><?php echo esc_html( $titulo ); ?></h2>
        <div class="home-servicios__cards-wrapper">

        <div class="home-servicios__cards">
            <?php foreach ( $secciones as $key => $seccion ) : ?>
                <div class="home-servicios__card">
                    <div class="home-servicios__card-top">
                        <h3 class="home-servicios__card-titulo">
                            <?php echo esc_html( $seccion['titulo'] ); ?>
                        </h3>
                        <?php if ( ! empty( $seccion['descripcion'] ) ) : ?>
                            <p class="home-servicios__card-desc">
                                <?php echo esc_html( $seccion['descripcion'] ); ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="home-servicios__card-imagen">
                        <?php if ( ! empty( $seccion['imagen'] ) ) : ?>
                            <img src="<?php echo esc_url( $seccion['imagen'] ); ?>"
                                 alt="<?php echo esc_attr( $seccion['titulo'] ); ?>">
                        <?php endif; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        </div>

    </div>

</section>