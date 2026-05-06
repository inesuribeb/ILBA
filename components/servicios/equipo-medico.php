<?php
/**
 * Servicios component: equipo-medico
 */

$subtitulo = get_field( 'sv_equipo_subtitulo' );
$equipo    = get_field( 'sv_equipo' );

if ( empty( $equipo ) ) return;

$somos_url = get_permalink( get_page_by_path( 'somos' ) );
?>

<section class="sv-equipo-medico" id="sv-equipo-medico">

    <div class="sv-equipo-medico__col-main">

        <?php if ( $subtitulo ) : ?>
            <div class="sv-equipo-medico__header">
                <h2 class="sv-equipo-medico__subtitulo"><?php echo esc_html( $subtitulo ); ?></h2>
            </div>
        <?php endif; ?>

        <div class="sv-equipo-medico__grid">
        <?php foreach ( $equipo as $miembro ) :
    $mostrar = get_field( 'em_mostrar', $miembro->ID );
    if ( ! $mostrar ) continue;

    $foto   = get_field( 'em_foto',  $miembro->ID );
    $cargo  = get_field( 'em_cargo', $miembro->ID );
    $nombre = $miembro->post_title;
?>
                <a href="<?php echo esc_url( $somos_url ); ?>" class="sv-equipo__card">

                    <div class="sv-equipo__foto">
                        <?php if ( $foto ) : ?>
                            <img src="<?php echo esc_url( $foto['url'] ); ?>"
                                 alt="<?php echo esc_attr( $foto['alt'] ); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="sv-equipo__info">
                        <span class="sv-equipo__nombre"><?php echo esc_html( $nombre ); ?></span>
                        <?php if ( $cargo ) : ?>
                            <span class="sv-equipo__cargo"><?php echo esc_html( $cargo ); ?></span>
                        <?php endif; ?>
                    </div>

                </a>
            <?php endforeach; ?>
        </div>

    </div>

</section>