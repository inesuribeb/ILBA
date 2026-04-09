<?php
/**
 * ACF Fields: Protocolos
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_protocolos',
    'title'  => 'Protocolos - Campos',
    'fields' => array(

        // --- TÍTULO ---
        array(
            'key'      => 'field_pr_titulo',
            'label'    => 'Título',
            'name'     => 'pr_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- SUBTÍTULO ---
        array(
            'key'   => 'field_pr_subtitulo',
            'label' => 'Subtítulo',
            'name'  => 'pr_subtitulo',
            'type'  => 'text',
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'      => 'field_pr_descripcion',
            'label'    => 'Descripción',
            'name'     => 'pr_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
            'required' => 1,
        ),

        // --- FOTO HERO ---
        array(
            'key'           => 'field_pr_imagen_hero',
            'label'         => 'Foto Hero',
            'name'          => 'pr_imagen_hero',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // --- IMAGEN 2 ---
        array(
            'key'           => 'field_pr_imagen_2',
            'label'         => 'Imagen 2',
            'name'          => 'pr_imagen_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // --- INDICADO PARA (5 líneas fijas) ---
        array(
            'key'          => 'field_pr_indicado_1',
            'label'        => 'Indicado para — 1',
            'name'         => 'pr_indicado_1',
            'type'         => 'text',
            'instructions' => 'Campo fijo "Indicado para". Deja vacío si no aplica.',
        ),
        array(
            'key'   => 'field_pr_indicado_2',
            'label' => 'Indicado para — 2',
            'name'  => 'pr_indicado_2',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_pr_indicado_3',
            'label' => 'Indicado para — 3',
            'name'  => 'pr_indicado_3',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_pr_indicado_4',
            'label' => 'Indicado para — 4',
            'name'  => 'pr_indicado_4',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_pr_indicado_5',
            'label' => 'Indicado para — 5',
            'name'  => 'pr_indicado_5',
            'type'  => 'text',
        ),

        // --- QUÉ INCLUYE: SERVICIOS RELACIONADOS ---
        array(
            'key'           => 'field_pr_servicios',
            'label'         => '¿Qué incluye el protocolo? — Servicios',
            'name'          => 'pr_servicios',
            'type'          => 'relationship',
            'instructions'  => 'Selecciona los servicios que forman parte de este protocolo.',
            'post_type'     => array(
                0 => 'servicios',
            ),
            'filters'       => array(
                0 => 'search',
            ),
            'return_format' => 'object',
            'min'           => 0,
            'max'           => 0,
        ),

        // =============================================
        // APARTADO FORMULARIO
        // =============================================
        array(
            'key'     => 'field_pr_msg_formulario',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Apartado formulario —</h3>',
        ),
        array(
            'key'          => 'field_pr_form_descripcion',
            'label'        => 'Descripción formulario',
            'name'         => 'pr_form_descripcion',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Texto introductorio que aparece sobre el formulario, específico para este protocolo.',
        ),
        array(
            'key'   => 'field_pr_form_pregunta_1',
            'label' => 'Pregunta 1',
            'name'  => 'pr_form_pregunta_1',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_pr_form_pregunta_2',
            'label' => 'Pregunta 2',
            'name'  => 'pr_form_pregunta_2',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_pr_form_pregunta_3',
            'label' => 'Pregunta 3',
            'name'  => 'pr_form_pregunta_3',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_pr_form_pregunta_4',
            'label' => 'Pregunta 4',
            'name'  => 'pr_form_pregunta_4',
            'type'  => 'text',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'protocolos',
            ),
        ),
    ),

    'menu_order'            => 0,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
) );

endif;