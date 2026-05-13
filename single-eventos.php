<?php
/**
 * Template: Single Eventos
 */

get_header();

// Comprobamos si el evento ya pasó
$fecha_evento = get_field( 'ev_fecha' );
$es_pasado    = false;

if ( $fecha_evento ) {
    $ts_evento = DateTime::createFromFormat( 'd/m/Y', $fecha_evento )->getTimestamp();
    $ts_hoy    = DateTime::createFromFormat( 'd/m/Y', date( 'd/m/Y' ) )->getTimestamp();
    $es_pasado = $ts_evento < $ts_hoy;
}
?>

<main id="main" class="single-eventos">

    <?php get_template_part( 'components/eventos/modal' ); ?>
    <?php get_template_part( 'components/eventos/hero' ); ?>
    <?php get_template_part( 'components/eventos/intro' ); ?>
    <?php get_template_part( 'components/eventos/seccion2' ); ?>

    <?php if ( ! $es_pasado ) : ?>
        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ); ?>" class="ev-cta-flotante">Consulta disponibilidad</a>
    <?php endif; ?>

</main>

<?php
get_footer();