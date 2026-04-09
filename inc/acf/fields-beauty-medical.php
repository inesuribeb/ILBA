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

        // --- APARTADO TRATAMIENTOS ---
        array(
            'key'   => 'field_bm_tratamientos_titulo',
            'label' => 'Tratamientos - Título del apartado',
            'name'  => 'bm_tratamientos_titulo',
            'type'  => 'text',
            'instructions' => 'Ej: "Nuestros tratamientos faciales" o "Nuestros tratamientos corporales"',
        ),
        array(
            'key'      => 'field_bm_tratamientos_descripcion',
            'label'    => 'Tratamientos - Descripción',
            'name'     => 'bm_tratamientos_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
        ),
        array(
            'key'           => 'field_bm_tratamientos_imagen',
            'label'         => 'Tratamientos - Imagen',
            'name'          => 'bm_tratamientos_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
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