<?php
/**
 * Servicios component: equipo-medico
 */

$subtitulo = get_field( 'sv_equipo_subtitulo' );
$equipo    = get_field( 'sv_equipo' );

if ( empty( $equipo ) ) return;
?>

<section class="sv-equipo-medico" id="sv-equipo-medico">

    <div class="sv-equipo-medico__col-tag">
        <span class="sv-equipo-medico__tag">Equipo médico</span>
    </div>

    <div class="sv-equipo-medico__col-main">

        <?php if ( $subtitulo ) : ?>
            <div class="sv-equipo-medico__header">
                <h2 class="sv-equipo-medico__subtitulo"><?php echo esc_html( $subtitulo ); ?></h2>
            </div>
        <?php endif; ?>

        <div class="sv-equipo-medico__grid">
            <?php foreach ( $equipo as $miembro ) :
                $foto   = get_field( 'em_foto',  $miembro->ID );
                $cargo  = get_field( 'em_cargo', $miembro->ID );
                $nombre = $miembro->post_title;
                $somos_url = get_permalink( get_page_by_path( 'somos' ) );
            ?>
                <a href="<?php echo esc_url( $somos_url ); ?>" class="somos-equipo__card">

                    <div class="somos-equipo__foto">
                        <?php if ( $foto ) : ?>
                            <img src="<?php echo esc_url( $foto['url'] ); ?>"
                                 alt="<?php echo esc_attr( $foto['alt'] ); ?>">
                        <?php endif; ?>
                    </div>

                    <div class="somos-equipo__info">
                        <span class="somos-equipo__nombre"><?php echo esc_html( $nombre ); ?></span>
                        <?php if ( $cargo ) : ?>
                            <span class="somos-equipo__cargo"><?php echo esc_html( $cargo ); ?></span>
                        <?php endif; ?>
                    </div>

                </a>
            <?php endforeach; ?>
        </div>

    </div>

</section>