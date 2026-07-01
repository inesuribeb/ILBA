<?php
/**
 * Contacto component: Form
 */

$contacto_id = get_page_by_path( 'contacto' )->ID ?? 0;
$telefono    = get_field( 'ct_telefono',         $contacto_id );
$email       = get_field( 'ct_email',            $contacto_id );
$direccion   = get_field( 'ct_direccion',        $contacto_id );
$horario     = get_field( 'ct_horario',          $contacto_id );
$ig_nombre   = get_field( 'ct_instagram_nombre', $contacto_id );
$ig_url      = get_field( 'ct_instagram_url',    $contacto_id );
?>

<section class="ct-form-section">

    <div class="ct-form-section__info">

        <?php if ( $telefono ) : ?>
            <div class="ct-info__item">
                <span class="ct-info__label">Teléfono</span>
                <a href="tel:<?php echo esc_attr( $telefono ); ?>" class="ct-info__valor">
                    <?php echo esc_html( $telefono ); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if ( $email ) : ?>
            <div class="ct-info__item">
                <span class="ct-info__label">Email</span>
                <a href="mailto:<?php echo esc_attr( $email ); ?>" class="ct-info__valor">
                    <?php echo esc_html( $email ); ?>
                </a>
            </div>
        <?php endif; ?>

        <?php if ( $direccion ) : ?>
            <div class="ct-info__item">
                <span class="ct-info__label">Dirección</span>
                <p class="ct-info__valor"><?php echo wp_kses_post( nl2br( esc_html( $direccion ) ) ); ?></p>
            </div>
        <?php endif; ?>

        <?php if ( $horario ) : ?>
            <div class="ct-info__item">
                <span class="ct-info__label">Horario</span>
                <p class="ct-info__valor"><?php echo wp_kses_post( nl2br( esc_html( $horario ) ) ); ?></p>
            </div>
        <?php endif; ?>

        <?php if ( $ig_nombre && $ig_url ) : ?>
            <div class="ct-info__item">
                <span class="ct-info__label">Instagram</span>
                <a href="<?php echo esc_url( $ig_url ); ?>"
                   class="ct-info__valor"
                   target="_blank"
                   rel="noopener noreferrer">
                    <?php echo esc_html( $ig_nombre ); ?>
                </a>
            </div>
        <?php endif; ?>

    </div>

    <div class="ct-form-section__form">
        <?php echo do_shortcode( '[contact-form-7 id="a0f7dbf" title="Contact form 1"]' ); ?>
    </div>

</section>