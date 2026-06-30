<?php
/**
 * ACF Fields: Centros - Formulario
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_centros_formulario',
    'title'  => 'Centro - Formulario',
    'fields' => array(

        // =============================================
        // FORMULARIO
        // =============================================
        array(
            'key'     => 'field_ce_msg_formulario',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Formulario —</h3>',
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_ce_formulario_titulo',
            'label'    => 'Título',
            'name'     => 'ce_formulario_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'      => 'field_ce_formulario_descripcion',
            'label'    => 'Descripción',
            'name'     => 'ce_formulario_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
        ),

        // --- EMAIL DE DESTINO ---
        array(
            'key'           => 'field_ce_formulario_email',
            'label'         => 'Email de destino',
            'name'          => 'ce_formulario_email',
            'type'          => 'email',
            'instructions'  => 'Email al que llegarán los mensajes del formulario de este centro.',
            'required'      => 1,
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'centro',
            ),
        ),
    ),

) );

endif;