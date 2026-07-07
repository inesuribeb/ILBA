<?php
/**
 * Centro component: Modal Info
 */

$modal     = get_field( 'ce_modal_flotante' );
$thumb_id  = get_post_thumbnail_id();

if ( ! $modal ) return;

// $titulo    = $modal['titulo']    ?? '';
// $email     = $modal['email']     ?? '';
// $telefono  = $modal['telefono']  ?? '';
// $direccion = $modal['direccion'] ?? '';
// $maps_url  = $direccion ? 'https://www.google.com/maps/search/' . urlencode( $direccion ) : '';
// $thumb     = $thumb_id ? wp_get_attachment_image_src( $thumb_id, 'medium' ) : null;

$titulo    = $modal['titulo']    ?? '';
$email     = $modal['email']     ?? '';
$telefono  = $modal['telefono']  ?? '';
$maps_url  = $modal['direccion'] ?? '';
$thumb     = $thumb_id ? wp_get_attachment_image_src( $thumb_id, 'medium' ) : null;
?>

<div class="ce-modal" id="ce-modal">

    <button type="button" class="ce-modal__close" aria-label="Cerrar información">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>

    <?php if ( $thumb ) : ?>
        <div class="ce-modal__imagen">
            <img src="<?php echo esc_url( $thumb[0] ); ?>"
                 alt="<?php echo esc_attr( get_the_title() ); ?>">
        </div>
    <?php endif; ?>

    <div class="ce-modal__info">

        <?php if ( $titulo ) : ?>
            <p class="ce-modal__titulo"><?php echo esc_html( strtoupper( $titulo ) ); ?></p>
        <?php endif; ?>

        <p class="ce-modal__label">Contáctanos a:</p>

        <?php if ( $email ) : ?>
            <a href="mailto:<?php echo esc_attr( $email ); ?>" class="ce-modal__email">
                <?php echo esc_html( $email ); ?>
            </a>
        <?php endif; ?>

        <?php if ( $telefono ) : ?>
            <a href="tel:<?php echo esc_attr( $telefono ); ?>" class="ce-modal__telefono">
                o llama al <?php echo esc_html( $telefono ); ?>
            </a>
        <?php endif; ?>

        <?php if ( $maps_url ) : ?>
            <a href="<?php echo esc_url( $maps_url ); ?>" class="ce-modal__maps" target="_blank" rel="noopener noreferrer">
                Google Maps
            </a>
        <?php endif; ?>

    </div>

</div>

<button type="button" class="ce-modal-toggle" id="ce-modal-toggle" aria-label="Mostrar información del centro">
    + Info
</button>