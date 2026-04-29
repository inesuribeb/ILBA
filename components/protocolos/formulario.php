<?php
/**
 * Protocolos component: Formulario
 */

$form_descripcion = get_field( 'pr_form_descripcion' );

$preguntas = array();
for ( $i = 1; $i <= 4; $i++ ) {
    $pregunta = get_field( 'pr_form_pregunta_' . $i );
    if ( $pregunta ) $preguntas[] = $pregunta;
}
?>

<section class="pr-formulario" id="pr-formulario">

    <div class="pr-formulario__izq">
        <h2 class="pr-formulario__titulo">Empieza tu valoración personalizada</h2>
        <?php if ( $form_descripcion ) : ?>
            <p class="pr-formulario__descripcion"><?php echo esc_html( $form_descripcion ); ?></p>
        <?php endif; ?>
    </div>

    <div class="pr-formulario__der">
        <form class="pr-form" method="post" action="">

            <div class="pr-form__row pr-form__row--dos">
                <input type="text" name="nombre" placeholder="Nombre*" required class="pr-form__input">
                <input type="text" name="apellidos" placeholder="Apellidos*" required class="pr-form__input">
            </div>

            <div class="pr-form__row">
                <input type="email" name="email" placeholder="Email*" required class="pr-form__input">
            </div>

            <?php if ( ! empty( $preguntas ) ) : ?>
            <div class="pr-form__row">
                <select name="momento" required class="pr-form__select">
                    <option value="" disabled selected>¿En qué momento estás?*</option>
                    <?php foreach ( $preguntas as $pregunta ) : ?>
                        <option value="<?php echo esc_attr( $pregunta ); ?>">
                            <?php echo esc_html( $pregunta ); ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <?php endif; ?>

            <div class="pr-form__row">
                <textarea name="mensaje" placeholder="Mensaje" rows="6" class="pr-form__textarea"></textarea>
            </div>

            <div class="pr-form__row">
                <button type="submit" class="pr-form__submit">Enviar</button>
            </div>

        </form>
    </div>

</section>