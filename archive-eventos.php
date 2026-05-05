<?php
/**
 * Template: Eventos
 * Archivo: archive-eventos.php
 */

get_header();

$hoy = date( 'd/m/Y' );

$todos = get_posts( array(
    'post_type'      => 'eventos',
    'posts_per_page' => -1,
    'post_status'    => 'publish',
) );

$proximos   = array();
$anteriores = array();

foreach ( $todos as $evento ) {
    $fecha = get_field( 'ev_fecha', $evento->ID );
    if ( ! $fecha ) continue;

    $ts_evento = DateTime::createFromFormat( 'd/m/Y', $fecha )->getTimestamp();
    $ts_hoy    = DateTime::createFromFormat( 'd/m/Y', $hoy )->getTimestamp();

    $thumbnail = get_the_post_thumbnail_url( $evento->ID, 'large' );

    $data = array(
        'post'      => $evento,
        'fecha'     => $fecha,
        'ts'        => $ts_evento,
        'thumbnail' => $thumbnail,
    );

    if ( $ts_evento >= $ts_hoy ) {
        $proximos[] = $data;
    } else {
        $anteriores[] = $data;
    }
}

usort( $proximos,   fn( $a, $b ) => $a['ts'] - $b['ts'] );
usort( $anteriores, fn( $a, $b ) => $b['ts'] - $a['ts'] );
?>

<main class="page-eventos">

    <!-- FLEX 1: Título -->
    <div class="page-eventos__header">
        <h1 class="page-eventos__titulo">Eventos ILBA InternaTional porfin?</h1>
    </div>

    <!-- FLEX 2: Secciones -->
    <div class="page-eventos__body">

        <!-- Próximos eventos -->
        <div class="page-eventos__seccion">
            <div class="page-eventos__col-tag">
                <span class="page-eventos__tag">Próximos eventos</span>
            </div>
            <div class="page-eventos__lista">
                <?php if ( empty( $proximos ) ) : ?>
                    <p class="page-eventos__vacio">No hay eventos próximos.</p>
                <?php else : ?>
                    <?php foreach ( $proximos as $item ) : ?>
                        <a href="<?= esc_url( get_permalink( $item['post']->ID ) ) ?>"
                           class="page-eventos__item">
                            <span class="page-eventos__item-titulo"><?= esc_html( $item['post']->post_title ) ?></span>
                            <?php if ( $item['thumbnail'] ) : ?>
                                <div class="page-eventos__item-imagen">
                                    <img src="<?= esc_url( $item['thumbnail'] ) ?>" alt="<?= esc_attr( $item['post']->post_title ) ?>">
                                </div>
                            <?php endif; ?>
                            <span class="page-eventos__item-fecha"><?= esc_html( $item['fecha'] ) ?></span>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

        <!-- Eventos anteriores -->
        <div class="page-eventos__seccion">
            <div class="page-eventos__col-tag">
                <span class="page-eventos__tag">Eventos anteriores</span>
            </div>
            <div class="page-eventos__lista">
                <?php if ( empty( $anteriores ) ) : ?>
                    <p class="page-eventos__vacio">No hay eventos anteriores.</p>
                <?php else : ?>
                    <?php foreach ( $anteriores as $item ) : ?>
                        <a href="<?= esc_url( get_permalink( $item['post']->ID ) ) ?>"
                           class="page-eventos__item page-eventos__item--pasado">
                            <span class="page-eventos__item-titulo"><?= esc_html( $item['post']->post_title ) ?></span>
                            <?php if ( $item['thumbnail'] ) : ?>
                                <div class="page-eventos__item-imagen">
                                    <img src="<?= esc_url( $item['thumbnail'] ) ?>" alt="<?= esc_attr( $item['post']->post_title ) ?>">
                                </div>
                            <?php endif; ?>
                            <span class="page-eventos__item-fecha"><?= esc_html( $item['fecha'] ) ?></span>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>

    </div>

</main>

<?php get_footer(); ?>