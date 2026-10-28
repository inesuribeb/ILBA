<?php
/**
 * ACF Fields — Tratamientos
 */

if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

add_action( 'acf/init', function() {

    acf_add_local_field_group( array(
        'key'    => 'group_tratamientos',
        'title'  => 'Tratamientos',
        'fields' => array(

            // --- Datos generales ---
            array(
                'key'   => 'field_tr_tab_general',
                'label' => 'General',
                'type'  => 'tab',
            ),
            array(
                'key'      => 'field_tr_nombre',
                'label'    => 'Nombre',
                'name'     => 'tr_nombre',
                'type'     => 'text',
                'required' => 1,
            ),
            array(
                'key'           => 'field_tr_categoria',
                'label'         => 'Categoría',
                'name'          => 'tr_categoria',
                'type'          => 'checkbox',
                'choices'       => array(
                    'beauty-facial'    => 'Beauty facial',
                    'beauty-corporal'  => 'Beauty corporal',
                    'medical-facial'   => 'Medical facial',
                    'medical-corporal' => 'Medical corporal',
                ),
                'layout'        => 'vertical',
                'return_format' => 'value',
            ),
            array(
                'key'   => 'field_tr_duracion',
                'label' => 'Duración',
                'name'  => 'tr_duracion',
                'type'  => 'text',
                'placeholder' => 'Ej: 60 min',
            ),
            array(
                'key'           => 'field_tr_tecnologia',
                'label'         => 'Tecnología',
                'name'          => 'tr_tecnologia',
                'type'          => 'post_object',
                'post_type'     => array( 'aparatologia' ),
                'multiple'      => 1,
                'allow_null'    => 1,
                'return_format' => 'object',
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_tr_centros',
                'label'         => 'Centros',
                'name'          => 'tr_centros',
                'type'          => 'radio',
                'choices'       => array(
                    'bilbao'  => 'Bilbao',
                    'donosti' => 'Donosti',
                    'ambos'   => 'Ambos',
                ),
                'default_value' => 'ambos',
                'layout'        => 'horizontal',
                'return_format' => 'value',
            ),

            // --- Keywords ---
            array(
                'key'   => 'field_tr_tab_keywords',
                'label' => 'Keywords',
                'type'  => 'tab',
            ),
            array( 'key' => 'field_tr_keyword_1', 'label' => 'Keyword 1', 'name' => 'tr_keyword_1', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_2', 'label' => 'Keyword 2', 'name' => 'tr_keyword_2', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_3', 'label' => 'Keyword 3', 'name' => 'tr_keyword_3', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_4', 'label' => 'Keyword 4', 'name' => 'tr_keyword_4', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_5', 'label' => 'Keyword 5', 'name' => 'tr_keyword_5', 'type' => 'text' ),

            // --- Hero ---
            array(
                'key'   => 'field_tr_tab_hero',
                'label' => 'Hero',
                'type'  => 'tab',
            ),
            array(
                'key'   => 'field_tr_hero_titular',
                'label' => 'Titular hero',
                'name'  => 'tr_hero_titular',
                'type'  => 'text',
            ),
            array(
                'key'          => 'field_tr_intro',
                'label'        => 'Intro',
                'name'         => 'tr_intro',
                'type'         => 'textarea',
                'rows'         => 4,
                'new_lines'    => '',
            ),
            array(
                'key'           => 'field_tr_hero_img',
                'label'         => 'Imagen hero',
                'name'          => 'tr_hero_img',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ),

            // --- Fotos adicionales ---
            array(
                'key'   => 'field_tr_tab_fotos',
                'label' => 'Fotos adicionales',
                'type'  => 'tab',
            ),
            array( 'key' => 'field_tr_foto_1', 'label' => 'Foto 1', 'name' => 'tr_foto_1', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_2', 'label' => 'Foto 2', 'name' => 'tr_foto_2', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_3', 'label' => 'Foto 3', 'name' => 'tr_foto_3', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_4', 'label' => 'Foto 4', 'name' => 'tr_foto_4', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_5', 'label' => 'Foto 5', 'name' => 'tr_foto_5', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),

        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'tratamientos',
                ),
            ),
        ),
        'menu_order' => 0,
        'position'   => 'normal',
        'style'      => 'default',
    ) );

} );