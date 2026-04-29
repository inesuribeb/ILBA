<?php
/**
 * Aparatología component: Descripción
 */

$descripcion  = get_field( 'ap_descripcion' );
$para_que     = get_field( 'ap_para_que_sirve' );
$como         = get_field( 'ap_como_funciona' );
$tratamientos = get_field( 'ap_tratamientos' );
?>

<section class="ap-descripcion" id="ap-descripcion">

    <div class="ap-descripcion__izq">
        <?php if ( $descripcion ) : ?>
            <p class="ap-descripcion__texto"><?php echo esc_html( $descripcion ); ?></p>
        <?php endif; ?>
    </div>

    <div class="ap-descripcion__der">
        <div class="ap-acordeones">

            <?php if ( $para_que ) : ?>
                <div class="ap-acordeon">
                    <button class="ap-acordeon__btn">¿Para qué sirve?</button>
                    <div class="ap-acordeon__content">
                        <p><?php echo esc_html( $para_que ); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( $como ) : ?>
                <div class="ap-acordeon">
                    <button class="ap-acordeon__btn">¿Cómo funciona?</button>
                    <div class="ap-acordeon__content">
                        <p><?php echo esc_html( $como ); ?></p>
                    </div>
                </div>
            <?php endif; ?>

            <?php if ( $tratamientos ) : ?>
                <div class="ap-acordeon">
                    <button class="ap-acordeon__btn">¿En qué tratamientos lo utilizamos?</button>
                    <div class="ap-acordeon__content">
                        <p><?php echo esc_html( $tratamientos ); ?></p>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>

</section>