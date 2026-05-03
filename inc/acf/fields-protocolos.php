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
        // array(
        //     'key'           => 'field_pr_servicios',
        //     'label'         => '¿Qué incluye el protocolo? — Servicios',
        //     'name'          => 'pr_servicios',
        //     'type'          => 'relationship',
        //     'instructions'  => 'Selecciona los servicios que forman parte de este protocolo.',
        //     'post_type'     => array(
        //         0 => 'servicios',
        //     ),
        //     'filters'       => array(
        //         0 => 'search',
        //     ),
        //     'return_format' => 'object',
        //     'min'           => 0,
        //     'max'           => 0,
        // ),
        // --- CARD SERVICIO 1 ---
array(
    'key'   => 'field_pr_srv_1_titulo',
    'label' => 'Servicio 1 — Título',
    'name'  => 'pr_srv_1_titulo',
    'type'  => 'text',
),
array(
    'key'           => 'field_pr_srv_1_imagen',
    'label'         => 'Servicio 1 — Imagen',
    'name'          => 'pr_srv_1_imagen',
    'type'          => 'image',
    'return_format' => 'array',
    'preview_size'  => 'medium',
),
array(
    'key'          => 'field_pr_srv_1_texto',
    'label'        => 'Servicio 1 — Texto',
    'name'         => 'pr_srv_1_texto',
    'type'         => 'textarea',
    'rows'         => 4,
    'new_lines'    => 'br',
),

// --- CARD SERVICIO 2 ---
array(
    'key'   => 'field_pr_srv_2_titulo',
    'label' => 'Servicio 2 — Título',
    'name'  => 'pr_srv_2_titulo',
    'type'  => 'text',
),
array(
    'key'           => 'field_pr_srv_2_imagen',
    'label'         => 'Servicio 2 — Imagen',
    'name'          => 'pr_srv_2_imagen',
    'type'          => 'image',
    'return_format' => 'array',
    'preview_size'  => 'medium',
),
array(
    'key'       => 'field_pr_srv_2_texto',
    'label'     => 'Servicio 2 — Texto',
    'name'      => 'pr_srv_2_texto',
    'type'      => 'textarea',
    'rows'      => 4,
    'new_lines' => 'br',
),

// --- CARD SERVICIO 3 ---
array(
    'key'   => 'field_pr_srv_3_titulo',
    'label' => 'Servicio 3 — Título',
    'name'  => 'pr_srv_3_titulo',
    'type'  => 'text',
),
array(
    'key'           => 'field_pr_srv_3_imagen',
    'label'         => 'Servicio 3 — Imagen',
    'name'          => 'pr_srv_3_imagen',
    'type'          => 'image',
    'return_format' => 'array',
    'preview_size'  => 'medium',
),
array(
    'key'       => 'field_pr_srv_3_texto',
    'label'     => 'Servicio 3 — Texto',
    'name'      => 'pr_srv_3_texto',
    'type'      => 'textarea',
    'rows'      => 4,
    'new_lines' => 'br',
),

// --- CARD SERVICIO 4 ---
array(
    'key'   => 'field_pr_srv_4_titulo',
    'label' => 'Servicio 4 — Título',
    'name'  => 'pr_srv_4_titulo',
    'type'  => 'text',
),
array(
    'key'           => 'field_pr_srv_4_imagen',
    'label'         => 'Servicio 4 — Imagen',
    'name'          => 'pr_srv_4_imagen',
    'type'          => 'image',
    'return_format' => 'array',
    'preview_size'  => 'medium',
),
array(
    'key'       => 'field_pr_srv_4_texto',
    'label'     => 'Servicio 4 — Texto',
    'name'      => 'pr_srv_4_texto',
    'type'      => 'textarea',
    'rows'      => 4,
    'new_lines' => 'br',
),

// --- CARD SERVICIO 5 ---
array(
    'key'   => 'field_pr_srv_5_titulo',
    'label' => 'Servicio 5 — Título',
    'name'  => 'pr_srv_5_titulo',
    'type'  => 'text',
),
array(
    'key'           => 'field_pr_srv_5_imagen',
    'label'         => 'Servicio 5 — Imagen',
    'name'          => 'pr_srv_5_imagen',
    'type'          => 'image',
    'return_format' => 'array',
    'preview_size'  => 'medium',
),
array(
    'key'       => 'field_pr_srv_5_texto',
    'label'     => 'Servicio 5 — Texto',
    'name'      => 'pr_srv_5_texto',
    'type'      => 'textarea',
    'rows'      => 4,
    'new_lines' => 'br',
),

// --- CARD SERVICIO 6 ---
array(
    'key'   => 'field_pr_srv_6_titulo',
    'label' => 'Servicio 6 — Título',
    'name'  => 'pr_srv_6_titulo',
    'type'  => 'text',
),
array(
    'key'           => 'field_pr_srv_6_imagen',
    'label'         => 'Servicio 6 — Imagen',
    'name'          => 'pr_srv_6_imagen',
    'type'          => 'image',
    'return_format' => 'array',
    'preview_size'  => 'medium',
),
array(
    'key'       => 'field_pr_srv_6_texto',
    'label'     => 'Servicio 6 — Texto',
    'name'      => 'pr_srv_6_texto',
    'type'      => 'textarea',
    'rows'      => 4,
    'new_lines' => 'br',
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