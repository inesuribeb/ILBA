<?php
/**
 * Protocolos component: Formulario
 */

$form_descripcion = get_field( 'pr_form_descripcion' );
?>

<section class="pr-formulario" id="pr-formulario">

    <div class="pr-formulario__izq">
        <h2 class="pr-formulario__titulo">Empieza tu valoración personalizada</h2>
        <?php if ( $form_descripcion ) : ?>
            <p class="pr-formulario__descripcion"><?php echo esc_html( $form_descripcion ); ?></p>
        <?php endif; ?>
    </div>

    <div class="pr-formulario__der">
        <?php echo do_shortcode( '[contact-form-7 id="948a20c" title="Protocolos"]' ); ?>
    </div>

</section>