<?php
/**
 * Servicios component: Tratamientos
 */

$subtitulo = get_field( 'sv_tratamientos_subtitulo' );
$contacto_url = get_permalink( get_page_by_path( 'contacto' ) );

// Recoger tratamientos que tengan título
$tratamientos = array();
for ( $i = 1; $i <= 5; $i++ ) {
    $titulo = get_field( 'sv_tr' . $i . '_titulo' );
    if ( ! $titulo ) continue;
    $tratamientos[] = array(
        'titulo'    => $titulo,
        'imagen'    => get_field( 'sv_tr' . $i . '_imagen' ),
        'que_es'    => get_field( 'sv_tr' . $i . '_que_es' ),
        'beneficios'=> get_field( 'sv_tr' . $i . '_beneficios' ),
        'indicado'  => get_field( 'sv_tr' . $i . '_indicado' ),
        'cta'       => get_field( 'sv_tr' . $i . '_cta' ),
    );
}

if ( empty( $tratamientos ) ) return;
?>

<section class="sv-tratamientos" id="sv-tratamientos">

    <div class="sv-tratamientos__header">
    <span class="sv-tratamientos__tag-movil">Tratamientos</span>

    <?php if ( $subtitulo ) : ?>
            <h2 class="sv-tratamientos__subtitulo"><?php echo esc_html( $subtitulo ); ?></h2>
        <?php endif; ?>
    </div>

    <div class="sv-tratamientos__lista">
        <?php foreach ( $tratamientos as $tr ) : ?>
            <div class="sv-tr">

                <div class="sv-tr__izq">
                    <h3 class="sv-tr__titulo"><?php echo esc_html( $tr['titulo'] ); ?></h3>

                    <div class="sv-tr__acordeones">

                        <?php if ( $tr['que_es'] ) : ?>
                            <div class="sv-tr__acordeon">
                                <button class="sv-tr__acordeon-btn">¿Qué es?</button>
                                <div class="sv-tr__acordeon-content">
                                    <p><?php echo esc_html( $tr['que_es'] ); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ( $tr['beneficios'] ) : ?>
                            <div class="sv-tr__acordeon">
                                <button class="sv-tr__acordeon-btn">Beneficios</button>
                                <div class="sv-tr__acordeon-content">
                                    <p><?php echo esc_html( $tr['beneficios'] ); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <?php if ( $tr['indicado'] ) : ?>
                            <div class="sv-tr__acordeon">
                                <button class="sv-tr__acordeon-btn">¿Cuándo está indicado?</button>
                                <div class="sv-tr__acordeon-content">
                                    <p><?php echo esc_html( $tr['indicado'] ); ?></p>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="sv-tr__acordeon">
                            <a href="<?php echo esc_url( $tr['cta'] ?: $contacto_url ); ?>"
                               class="sv-tr__acordeon-btn sv-tr__acordeon-btn--link">
                                Contratar servicio
                            </a>
                        </div>

                    </div>
                </div>

                <?php if ( $tr['imagen'] ) : ?>
                    <div class="sv-tr__imagen">
                        <img src="<?php echo esc_url( $tr['imagen']['url'] ); ?>"
                             alt="<?php echo esc_attr( $tr['imagen']['alt'] ); ?>">
                    </div>
                <?php endif; ?>

            </div>
        <?php endforeach; ?>
    </div>

</section>