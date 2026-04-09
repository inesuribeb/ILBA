<?php
/**
 * ACF Fields: Home - Sección Conócenos
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_home_conocenos',
    'title'  => 'Home - Sección Conócenos',
    'fields' => array(

        // --- TAG ---
        array(
            'key'   => 'field_home_conocenos_tag',
            'label' => 'Tag',
            'name'  => 'home_conocenos_tag',
            'type'  => 'text',
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_home_conocenos_titulo',
            'label'    => 'Título',
            'name'     => 'home_conocenos_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'   => 'field_home_conocenos_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_conocenos_descripcion',
            'type'  => 'textarea',
            'rows'  => 4,
        ),

        // --- CTA ---
        array(
            'key'   => 'field_home_conocenos_cta_texto',
            'label' => 'CTA — Texto',
            'name'  => 'home_conocenos_cta_texto',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_conocenos_cta_link',
            'label' => 'CTA — Link',
            'name'  => 'home_conocenos_cta_link',
            'type'  => 'url',
        ),

        // --- IMAGEN VERTICAL ---
        array(
            'key'           => 'field_home_conocenos_img_vertical',
            'label'         => 'Imagen vertical',
            'name'          => 'home_conocenos_img_vertical',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // --- IMAGEN CUADRADA ---
        array(
            'key'           => 'field_home_conocenos_img_cuadrada',
            'label'         => 'Imagen cuadrada',
            'name'          => 'home_conocenos_img_cuadrada',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'page_type',
                'operator' => '==',
                'value'    => 'front_page',
            ),
        ),
    ),

    'menu_order'            => 2,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
) );

endif;