<?php
/**
 * ACF Fields: Aparatología
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_aparatologia',
    'title'  => 'Aparatología - Campos',
    'fields' => array(

        // --- TÍTULO ---
        array(
            'key'      => 'field_ap_titulo',
            'label'    => 'Título',
            'name'     => 'ap_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- IMAGEN SILUETEADA ---
        array(
            'key'           => 'field_ap_imagen_silueta',
            'label'         => 'Imagen silueteada',
            'name'          => 'ap_imagen_silueta',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
            'instructions'  => 'Imagen con fondo transparente (PNG recomendado)',
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'      => 'field_ap_descripcion',
            'label'    => 'Descripción',
            'name'     => 'ap_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
            'required' => 1,
        ),

        // --- PREGUNTA 1: ¿Para qué sirve? ---
        array(
            'key'          => 'field_ap_para_que_sirve',
            'label'        => '¿Para qué sirve? — Respuesta',
            'name'         => 'ap_para_que_sirve',
            'type'         => 'textarea',
            'rows'         => 3,
            'required'     => 1,
            'instructions' => 'Pregunta fija: "¿Para qué sirve?"',
        ),

        // --- PREGUNTA 2: ¿Cómo funciona? ---
        array(
            'key'          => 'field_ap_como_funciona',
            'label'        => '¿Cómo funciona? — Respuesta',
            'name'         => 'ap_como_funciona',
            'type'         => 'textarea',
            'rows'         => 3,
            'required'     => 1,
            'instructions' => 'Pregunta fija: "¿Cómo funciona?"',
        ),

        // --- PREGUNTA 3: ¿En qué tratamientos lo utilizamos? ---
        array(
            'key'          => 'field_ap_tratamientos',
            'label'        => '¿En qué tratamientos lo utilizamos? — Respuesta',
            'name'         => 'ap_tratamientos',
            'type'         => 'textarea',
            'rows'         => 3,
            'required'     => 1,
            'instructions' => 'Pregunta fija: "¿En qué tratamientos lo utilizamos?"',
        ),

        // --- CATEGORÍA ---
        array(
            'key'           => 'field_ap_categoria',
            'label'         => 'Categoría',
            'name'          => 'ap_categoria',
            'type'          => 'select',
            'choices'       => array(
                'facial'           => 'Facial',
                'corporal'         => 'Corporal',
                'facial_corporal'  => 'Facial + Corporal',
            ),
            'default_value' => '',
            'allow_null'    => 0,
            'required'      => 1,
            'instructions'  => 'Determina el CTA y las cards de "Otras aparatologías"',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'aparatologia',
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