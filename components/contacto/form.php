<?php
/**
 * Contacto component: Form
 */

$contacto_id = get_page_by_path( 'contacto' )->ID ?? 0;

$bilbao_telefono  = get_field( 'ct_bilbao_telefono',          $contacto_id );
$bilbao_email     = get_field( 'ct_bilbao_email',             $contacto_id );
$bilbao_direccion = get_field( 'ct_bilbao_direccion',         $contacto_id );
$bilbao_horario   = get_field( 'ct_bilbao_horario',           $contacto_id );
$bilbao_ig_nombre = get_field( 'ct_bilbao_instagram_nombre',  $contacto_id );
$bilbao_ig_url    = get_field( 'ct_bilbao_instagram_url',     $contacto_id );

$donosti_telefono  = get_field( 'ct_donosti_telefono',         $contacto_id );
$donosti_email     = get_field( 'ct_donosti_email',            $contacto_id );
$donosti_direccion = get_field( 'ct_donosti_direccion',        $contacto_id );
$donosti_horario   = get_field( 'ct_donosti_horario',          $contacto_id );
$donosti_ig_nombre = get_field( 'ct_donosti_instagram_nombre', $contacto_id );
$donosti_ig_url    = get_field( 'ct_donosti_instagram_url',    $contacto_id );
?>

<section class="ct-form-section">

    <div class="ct-form-section__info">

        <!-- Donosti -->
        <div class="ct-info__centro">
            <p class="ct-info__centro-titulo">Donosti</p>

            <?php if ( $donosti_telefono ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Teléfono</span>
                    <a href="tel:<?php echo esc_attr( $donosti_telefono ); ?>" class="ct-info__valor">
                        <?php echo esc_html( $donosti_telefono ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ( $donosti_email ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Email</span>
                    <a href="mailto:<?php echo esc_attr( $donosti_email ); ?>" class="ct-info__valor">
                        <?php echo esc_html( $donosti_email ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ( $donosti_direccion ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Dirección</span>
                    <p class="ct-info__valor"><?php echo wp_kses_post( nl2br( esc_html( $donosti_direccion ) ) ); ?></p>
                </div>
            <?php endif; ?>

            <?php if ( $donosti_horario ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Horario</span>
                    <p class="ct-info__valor"><?php echo wp_kses_post( nl2br( esc_html( $donosti_horario ) ) ); ?></p>
                </div>
            <?php endif; ?>

            <?php if ( $donosti_ig_nombre && $donosti_ig_url ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Instagram</span>
                    <a href="<?php echo esc_url( $donosti_ig_url ); ?>"
                       class="ct-info__valor"
                       target="_blank"
                       rel="noopener noreferrer">
                        <?php echo esc_html( $donosti_ig_nombre ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

        <!-- Bilbao -->
        <div class="ct-info__centro">
            <p class="ct-info__centro-titulo">Bilbao</p>

            <?php if ( $bilbao_telefono ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Teléfono</span>
                    <a href="tel:<?php echo esc_attr( $bilbao_telefono ); ?>" class="ct-info__valor">
                        <?php echo esc_html( $bilbao_telefono ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ( $bilbao_email ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Email</span>
                    <a href="mailto:<?php echo esc_attr( $bilbao_email ); ?>" class="ct-info__valor">
                        <?php echo esc_html( $bilbao_email ); ?>
                    </a>
                </div>
            <?php endif; ?>

            <?php if ( $bilbao_direccion ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Dirección</span>
                    <p class="ct-info__valor"><?php echo wp_kses_post( nl2br( esc_html( $bilbao_direccion ) ) ); ?></p>
                </div>
            <?php endif; ?>

            <?php if ( $bilbao_horario ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Horario</span>
                    <p class="ct-info__valor"><?php echo wp_kses_post( nl2br( esc_html( $bilbao_horario ) ) ); ?></p>
                </div>
            <?php endif; ?>

            <?php if ( $bilbao_ig_nombre && $bilbao_ig_url ) : ?>
                <div class="ct-info__item">
                    <span class="ct-info__label">Instagram</span>
                    <a href="<?php echo esc_url( $bilbao_ig_url ); ?>"
                       class="ct-info__valor"
                       target="_blank"
                       rel="noopener noreferrer">
                        <?php echo esc_html( $bilbao_ig_nombre ); ?>
                    </a>
                </div>
            <?php endif; ?>
        </div>

    </div>

    <div class="ct-form-section__form">
        <?php echo do_shortcode( '[contact-form-7 id="a0f7dbf" title="Contact form 1"]' ); ?>
    </div>

</section>