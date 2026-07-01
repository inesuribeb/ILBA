<?php
/**
 * Centro component: Formulario
 */

$titulo      = get_field( 'ce_formulario_titulo' );
$descripcion = get_field( 'ce_formulario_descripcion' );
$email_dest  = get_field( 'ce_formulario_email' );
$nonce       = wp_create_nonce( 'ce_formulario_nonce' );
$centro_id   = get_the_ID();
?>

<section class="ce-formulario">

    <div class="ce-formulario__col-info">
        <?php if ( $titulo ) : ?>
            <h2 class="ce-formulario__titulo"><?php echo esc_html( $titulo ); ?></h2>
        <?php endif; ?>
        <?php if ( $descripcion ) : ?>
            <p class="ce-formulario__descripcion"><?php echo esc_html( $descripcion ); ?></p>
        <?php endif; ?>
    </div>

    <div class="ce-formulario__col-form">

        <form class="ce-formulario__form" id="ce-formulario-form" novalidate>

            <input type="hidden" name="action"     value="ce_enviar_formulario">
            <input type="hidden" name="nonce"      value="<?php echo esc_attr( $nonce ); ?>">
            <input type="hidden" name="email_dest" value="<?php echo esc_attr( $email_dest ); ?>">
            <input type="hidden" name="centro_id"  value="<?php echo esc_attr( $centro_id ); ?>">

            <div class="ce-formulario__fila">
                <div class="ce-formulario__campo">
                    <input type="text"
                           name="nombre"
                           placeholder="Nombre*"
                           required>
                </div>
                <div class="ce-formulario__campo">
                    <input type="text"
                           name="apellido"
                           placeholder="Apellidos*"
                           required>
                </div>
            </div>

            <div class="ce-formulario__campo">
                <input type="email"
                       name="email"
                       placeholder="Email*"
                       required>
            </div>

            <div class="ce-formulario__campo">
                <textarea name="mensaje"
                          placeholder="Mensaje"
                          rows="5"></textarea>
            </div>

            <button type="submit" class="ce-formulario__submit">Enviar</button>

            <p class="ce-formulario__respuesta" aria-live="polite"></p>

        </form>

    </div>

</section>