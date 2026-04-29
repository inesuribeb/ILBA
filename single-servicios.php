<?php
/**
 * Template: Single Servicios
 */

get_header();

$imagen_estatica = get_field( 'sv_imagen_estatica' );
?>

<main id="main" class="single-servicios">

    <div class="sv-layout">

        <div class="sv-layout__sidebar">
            <div class="sv-sidebar__top">
                <?php if ( $imagen_estatica ) : ?>
                    <div class="sv-sidebar__imagen">
                        <img src="<?php echo esc_url( $imagen_estatica['url'] ); ?>"
                             alt="<?php echo esc_attr( $imagen_estatica['alt'] ); ?>">
                    </div>
                <?php endif; ?>

                <nav class="sv-sidebar__nav">
                    <a href="#sv-info"          class="sv-sidebar__nav-link" data-target="sv-info">Qué es y qué no es</a>
                    <a href="#sv-tratamientos"  class="sv-sidebar__nav-link" data-target="sv-tratamientos">Tratamientos</a>
                    <a href="#sv-equipo-medico" class="sv-sidebar__nav-link" data-target="sv-equipo-medico">Equipo médico</a>
                </nav>
            </div>
        </div>

        <div class="sv-layout__content">
            <?php get_template_part( 'components/servicios/hero' ); ?>
            <?php get_template_part( 'components/servicios/info' ); ?>
            <?php get_template_part( 'components/servicios/tratamientos' ); ?>
            <?php get_template_part( 'components/servicios/equipo-medico' ); ?>
        </div>

    </div>

    <?php get_template_part( 'components/servicios/contacto' ); ?>

</main>

<?php
get_footer();