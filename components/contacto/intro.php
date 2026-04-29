<?php
/**
 * Contacto component: Intro
 */

$contacto_id = get_page_by_path( 'contacto' )->ID ?? 0;
$foto        = get_field( 'ct_foto',      $contacto_id );
$titulo      = get_field( 'ct_titulo',    $contacto_id );
$subtitulo   = get_field( 'ct_subtitulo', $contacto_id );
?>

<section class="ct-intro">

    <div class="ct-intro__foto-wrapper">
        <?php if ( $foto ) : ?>
            <div class="ct-intro__foto">
                <img src="<?php echo esc_url( $foto['url'] ); ?>"
                     alt="<?php echo esc_attr( $foto['alt'] ); ?>">
            </div>
        <?php endif; ?>
    </div>

    <div class="ct-intro__content">
        <?php if ( $titulo ) : ?>
            <h1 class="ct-intro__titulo"><?php echo esc_html( $titulo ); ?></h1>
        <?php endif; ?>
        <?php if ( $subtitulo ) : ?>
            <p class="ct-intro__subtitulo"><?php echo wp_kses_post( nl2br( esc_html( $subtitulo ) ) ); ?></p>
        <?php endif; ?>
    </div>

</section>