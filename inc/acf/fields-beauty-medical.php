<?php
/**
 * ACF Fields: Beauty & Medical
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_beauty_medical',
    'title'  => 'Beauty & Medical - Campos',
    'fields' => array(

        // --- CATEGORÍA ---
        array(
            'key'           => 'field_bm_categoria',
            'label'         => 'Categoría',
            'name'          => 'bm_categoria',
            'type'          => 'select',
            'choices'       => array(
                'beauty'  => 'Beauty',
                'medical' => 'Medical',
            ),
            'default_value' => '',
            'allow_null'    => 0,
            'required'      => 1,
        ),

        // --- SUBCATEGORÍA ---
        array(
            'key'           => 'field_bm_subcategoria',
            'label'         => 'Subcategoría',
            'name'          => 'bm_subcategoria',
            'type'          => 'select',
            'choices'       => array(
                'facial'            => 'Facial',
                'corporal'          => 'Corporal',
                'micropigmentacion' => 'Micropigmentación',
            ),
            'default_value' => '',
            'allow_null'    => 0,
            'required'      => 1,
        ),

        // --- HERO ---
        array(
            'key'           => 'field_bm_imagen_hero',
            'label'         => 'Imagen Hero',
            'name'          => 'bm_imagen_hero',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_bm_titulo',
            'label'    => 'Título',
            'name'     => 'bm_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- IMAGEN ESTÁTICA ---
        array(
            'key'           => 'field_bm_imagen_estatica',
            'label'         => 'Imagen estática',
            'name'          => 'bm_imagen_estatica',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'      => 'field_bm_descripcion',
            'label'    => 'Descripción',
            'name'     => 'bm_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
            'required' => 1,
        ),

        // --- CARACTERÍSTICAS (6 fijas) ---
        array(
            'key'   => 'field_bm_caracteristica_1',
            'label' => 'Característica 1',
            'name'  => 'bm_caracteristica_1',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_caracteristica_2',
            'label' => 'Característica 2',
            'name'  => 'bm_caracteristica_2',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_caracteristica_3',
            'label' => 'Característica 3',
            'name'  => 'bm_caracteristica_3',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_caracteristica_4',
            'label' => 'Característica 4',
            'name'  => 'bm_caracteristica_4',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_caracteristica_5',
            'label' => 'Característica 5',
            'name'  => 'bm_caracteristica_5',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_caracteristica_6',
            'label' => 'Característica 6',
            'name'  => 'bm_caracteristica_6',
            'type'  => 'text',
        ),

        // --- IMAGEN 1 ---
        array(
            'key'           => 'field_bm_imagen_1',
            'label'         => 'Imagen 1',
            'name'          => 'bm_imagen_1',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // --- IMAGEN 2 ---
        array(
            'key'           => 'field_bm_imagen_2',
            'label'         => 'Imagen 2',
            'name'          => 'bm_imagen_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // --- TRATAMIENTO 1 ---
        array(
            'key'   => 'field_bm_trat_1_imagen',
            'label' => 'Tratamiento 1 - Imagen',
            'name'  => 'bm_trat_1_imagen',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_bm_trat_1_titulo',
            'label' => 'Tratamiento 1 - Título',
            'name'  => 'bm_trat_1_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_1_subtitulo',
            'label' => 'Tratamiento 1 - Subtítulo',
            'name'  => 'bm_trat_1_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_1_texto',
            'label' => 'Tratamiento 1 - Texto',
            'name'  => 'bm_trat_1_texto',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // --- TRATAMIENTO 2 ---
        array(
            'key'   => 'field_bm_trat_2_imagen',
            'label' => 'Tratamiento 2 - Imagen',
            'name'  => 'bm_trat_2_imagen',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_bm_trat_2_titulo',
            'label' => 'Tratamiento 2 - Título',
            'name'  => 'bm_trat_2_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_2_subtitulo',
            'label' => 'Tratamiento 2 - Subtítulo',
            'name'  => 'bm_trat_2_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_2_texto',
            'label' => 'Tratamiento 2 - Texto',
            'name'  => 'bm_trat_2_texto',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // --- TRATAMIENTO 3 ---
        array(
            'key'   => 'field_bm_trat_3_imagen',
            'label' => 'Tratamiento 3 - Imagen',
            'name'  => 'bm_trat_3_imagen',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_bm_trat_3_titulo',
            'label' => 'Tratamiento 3 - Título',
            'name'  => 'bm_trat_3_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_3_subtitulo',
            'label' => 'Tratamiento 3 - Subtítulo',
            'name'  => 'bm_trat_3_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_3_texto',
            'label' => 'Tratamiento 3 - Texto',
            'name'  => 'bm_trat_3_texto',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // --- TRATAMIENTO 4 ---
        array(
            'key'   => 'field_bm_trat_4_imagen',
            'label' => 'Tratamiento 4 - Imagen',
            'name'  => 'bm_trat_4_imagen',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_bm_trat_4_titulo',
            'label' => 'Tratamiento 4 - Título',
            'name'  => 'bm_trat_4_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_4_subtitulo',
            'label' => 'Tratamiento 4 - Subtítulo',
            'name'  => 'bm_trat_4_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_4_texto',
            'label' => 'Tratamiento 4 - Texto',
            'name'  => 'bm_trat_4_texto',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // --- TRATAMIENTO 5 ---
        array(
            'key'   => 'field_bm_trat_5_imagen',
            'label' => 'Tratamiento 5 - Imagen',
            'name'  => 'bm_trat_5_imagen',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_bm_trat_5_titulo',
            'label' => 'Tratamiento 5 - Título',
            'name'  => 'bm_trat_5_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_5_subtitulo',
            'label' => 'Tratamiento 5 - Subtítulo',
            'name'  => 'bm_trat_5_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_5_texto',
            'label' => 'Tratamiento 5 - Texto',
            'name'  => 'bm_trat_5_texto',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // --- TRATAMIENTO 6 ---
        array(
            'key'   => 'field_bm_trat_6_imagen',
            'label' => 'Tratamiento 6 - Imagen',
            'name'  => 'bm_trat_6_imagen',
            'type'  => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_bm_trat_6_titulo',
            'label' => 'Tratamiento 6 - Título',
            'name'  => 'bm_trat_6_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_6_subtitulo',
            'label' => 'Tratamiento 6 - Subtítulo',
            'name'  => 'bm_trat_6_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_bm_trat_6_texto',
            'label' => 'Tratamiento 6 - Texto',
            'name'  => 'bm_trat_6_texto',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'beauty_medical',
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