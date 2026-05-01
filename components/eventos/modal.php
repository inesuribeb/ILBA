<?php
/**
 * Eventos component: Modal
 */

$lugar         = get_field( 'ev_lugar' );
$fecha         = get_field( 'ev_fecha' );
$horario       = get_field( 'ev_horario' );
$solo_clientes = get_field( 'ev_solo_clientes' );
$img_1         = get_field( 'ev_img_1' );
?>

<div class="ev-modal">

    <?php if ( $img_1 ) : ?>
        <div class="ev-modal__imagen">
            <img src="<?php echo esc_url( $img_1['url'] ); ?>"
                 alt="<?php echo esc_attr( $img_1['alt'] ); ?>">
        </div>
    <?php endif; ?>

    <div class="ev-modal__info">
        <?php if ( $lugar ) : ?>
            <p class="ev-modal__lugar"><?php echo esc_html( strtoupper( $lugar ) ); ?></p>
        <?php endif; ?>

        <?php if ( $fecha ) : ?>
            <p class="ev-modal__fecha"><?php echo esc_html( $fecha ); ?></p>
        <?php endif; ?>

        <?php if ( $horario ) : ?>
            <p class="ev-modal__horario"> <?php echo esc_html( $horario ); ?></p>
        <?php endif; ?>

        <?php if ( $solo_clientes ) : ?>
            <p class="ev-modal__clientes">Solo para clientas Ilba</p>
        <?php endif; ?>
    </div>

</div>