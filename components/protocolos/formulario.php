<?php
/**
 * Protocolos component: Formulario
 */

$descripcion = get_field( 'pr_form_descripcion' );
$pregunta_1  = get_field( 'pr_form_pregunta_1' );
$pregunta_2  = get_field( 'pr_form_pregunta_2' );
$pregunta_3  = get_field( 'pr_form_pregunta_3' );
$pregunta_4  = get_field( 'pr_form_pregunta_4' );
$protocolo   = get_the_title();
$nonce       = wp_create_nonce( 'pr_formulario_nonce' );

$preguntas = array_filter( array( $pregunta_1, $pregunta_2, $pregunta_3, $pregunta_4 ) );
?>

<section class="pr-form-section" id="pr-formulario">

    <!-- Col izquierda: info -->
    <div class="pr-form-section__info">
        <h2 class="pr-form-section__titulo">Empieza tu valoración personalizada</h2>
        <?php if ( $descripcion ) : ?>
            <p class="pr-form-section__descripcion"><?php echo esc_html( $descripcion ); ?></p>
        <?php endif; ?>
    </div>

    <!-- Col derecha: form -->
    <div class="pr-form-section__form">

        <form class="pr-form" id="pr-formulario-form" novalidate>

            <input type="hidden" name="action"    value="pr_enviar_formulario">
            <input type="hidden" name="nonce"     value="<?php echo esc_attr( $nonce ); ?>">
            <input type="hidden" name="protocolo" value="<?php echo esc_attr( $protocolo ); ?>">

            <!-- Nombre + Apellidos -->
            <div class="pr-form__fila">
                <div class="pr-form__campo">
                    <input type="text" name="nombre" placeholder="Nombre*" required>
                </div>
                <div class="pr-form__campo">
                    <input type="text" name="apellido" placeholder="Apellidos*" required>
                </div>
            </div>

            <!-- Email -->
            <div class="pr-form__campo">
                <input type="email" name="email" placeholder="Email*" required>
            </div>

            <!-- Select: ¿En qué momento estás? -->
            <?php if ( ! empty( $preguntas ) ) : ?>
                <div class="pr-select-wrapper" id="pr-select-wrapper">
                    <input type="hidden" name="momento" id="pr-select-value">
                    <div class="pr-select-trigger" id="pr-select-trigger">
                        <span id="pr-select-label">¿En qué momento estás?</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>
                    </div>
                    <div class="pr-select-options" id="pr-select-options">
                        <?php foreach ( $preguntas as $pregunta ) : ?>
                            <div class="pr-select-option" data-value="<?php echo esc_attr( $pregunta ); ?>">
                                <?php echo esc_html( $pregunta ); ?>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>

            <!-- Mensaje -->
            <div class="pr-form__campo">
                <textarea name="mensaje" placeholder="Mensaje" rows="5"></textarea>
            </div>

            <!-- Submit -->
            <button type="submit" class="pr-form__submit">Enviar</button>

            <p class="pr-form__respuesta" aria-live="polite"></p>

        </form>

    </div>

</section>