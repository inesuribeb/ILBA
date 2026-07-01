<?php
/**
 * Centro component: Servicios
 */

$labels_beauty = array(
    'facial'            => 'Estética facial',
    'corporal'          => 'Estética corporal',
    'micropigmentacion' => 'Micropigmentación',
    'tricologia'        => 'Tricología',
);

$labels_medical = array(
    'facial'            => 'Medicina facial',
    'corporal'          => 'Medicina corporal',
    'micropigmentacion' => 'Micropigmentación',
    'tricologia'        => 'Tricología',
);

$beauty_query = new WP_Query( array(
    'post_type'      => 'beauty_medical',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_query'     => array( array( 'key' => 'bm_categoria', 'value' => 'beauty', 'compare' => '=' ) ),
) );

$medical_query = new WP_Query( array(
    'post_type'      => 'beauty_medical',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'meta_query'     => array( array( 'key' => 'bm_categoria', 'value' => 'medical', 'compare' => '=' ) ),
) );

$salud_query = new WP_Query( array(
    'post_type'      => 'servicios',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
) );
?>

<section class="ce-servicios">

    <!-- Columna izquierda: índice -->
    <div class="ce-servicios__col-nav">
        <a href="#ce-servicios-beauty"  class="ce-servicios__nav-link">Beauty</a>
        <a href="#ce-servicios-medical" class="ce-servicios__nav-link">Medical</a>
        <a href="#ce-servicios-salud"   class="ce-servicios__nav-link">Salud</a>
    </div>

    <!-- Columna derecha: grupos de cards -->
    <div class="ce-servicios__col-main">

        <!-- Beauty -->
        <?php if ( $beauty_query->have_posts() ) : ?>
            <div class="ce-servicios__grupo" id="ce-servicios-beauty">
                <p class="ce-servicios__grupo-titulo">Beauty</p>
                <div class="ce-servicios__cards">
                    <?php while ( $beauty_query->have_posts() ) : $beauty_query->the_post();
                        $thumb        = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                        $subcategoria = get_field( 'bm_subcategoria' );
                        $label        = $labels_beauty[ $subcategoria ] ?? ucfirst( $subcategoria );
                        $url          = get_permalink();
                    ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="ce-servicios__card <?php echo $thumb ? '' : 'ce-servicios__card--sin-imagen'; ?>">
                            <div class="ce-servicios__card-img">
                                <?php if ( $thumb ) : ?>
                                    <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $label ); ?>">
                                <?php endif; ?>
                            </div>
                            <p class="ce-servicios__card-titulo"><?php echo esc_html( $label ); ?></p>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Medical -->
        <?php if ( $medical_query->have_posts() ) : ?>
            <div class="ce-servicios__grupo" id="ce-servicios-medical">
                <p class="ce-servicios__grupo-titulo">Medical</p>
                <div class="ce-servicios__cards">
                    <?php while ( $medical_query->have_posts() ) : $medical_query->the_post();
                        $thumb        = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                        $subcategoria = get_field( 'bm_subcategoria' );
                        $label        = $labels_medical[ $subcategoria ] ?? ucfirst( $subcategoria );
                        $url          = get_permalink();
                    ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="ce-servicios__card <?php echo $thumb ? '' : 'ce-servicios__card--sin-imagen'; ?>">
                            <div class="ce-servicios__card-img">
                                <?php if ( $thumb ) : ?>
                                    <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( $label ); ?>">
                                <?php endif; ?>
                            </div>
                            <p class="ce-servicios__card-titulo"><?php echo esc_html( $label ); ?></p>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif; ?>

        <!-- Salud -->
        <?php if ( $salud_query->have_posts() ) : ?>
            <div class="ce-servicios__grupo" id="ce-servicios-salud">
                <p class="ce-servicios__grupo-titulo">Salud</p>
                <div class="ce-servicios__cards">
                    <?php while ( $salud_query->have_posts() ) : $salud_query->the_post();
                        $thumb = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                        $url   = get_permalink();
                    ?>
                        <a href="<?php echo esc_url( $url ); ?>" class="ce-servicios__card <?php echo $thumb ? '' : 'ce-servicios__card--sin-imagen'; ?>">
                            <div class="ce-servicios__card-img">
                                <?php if ( $thumb ) : ?>
                                    <img src="<?php echo esc_url( $thumb ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                                <?php endif; ?>
                            </div>
                            <p class="ce-servicios__card-titulo"><?php echo esc_html( get_the_title() ); ?></p>
                        </a>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </div>
        <?php endif; ?>

    </div>

</section>