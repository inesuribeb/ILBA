<?php
/**
 * ACF Fields: Home - Sección Clínica
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_home_clinica',
    'title'  => 'Home - Sección Clínica',
    'fields' => array(

        // --- TAG ---
        array(
            'key'   => 'field_home_clinica_tag',
            'label' => 'Tag',
            'name'  => 'home_clinica_tag',
            'type'  => 'text',
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_home_clinica_titulo',
            'label'    => 'Título',
            'name'     => 'home_clinica_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- CTA ---
        array(
            'key'   => 'field_home_clinica_cta_texto',
            'label' => 'CTA — Texto',
            'name'  => 'home_clinica_cta_texto',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_clinica_cta_link',
            'label' => 'CTA — Link',
            'name'  => 'home_clinica_cta_link',
            'type'  => 'url',
        ),

        // --- IMAGEN VERTICAL ---
        array(
            'key'           => 'field_home_clinica_img_vertical',
            'label'         => 'Imagen vertical',
            'name'          => 'home_clinica_img_vertical',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // --- IMAGEN HORIZONTAL ---
        array(
            'key'           => 'field_home_clinica_img_horizontal',
            'label'         => 'Imagen horizontal',
            'name'          => 'home_clinica_img_horizontal',
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

    'menu_order'            => 1,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
) );

endif;