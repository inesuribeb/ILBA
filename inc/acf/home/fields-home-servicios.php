<?php
/**
 * ACF Fields: Home - Sección Nuestros Servicios
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_home_servicios',
    'title'  => 'Home - Sección Nuestros Servicios',
    'fields' => array(

        // --- TAG ---
        array(
            'key'   => 'field_home_servicios_tag',
            'label' => 'Tag',
            'name'  => 'home_servicios_tag',
            'type'  => 'text',
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_home_servicios_titulo',
            'label'    => 'Título',
            'name'     => 'home_servicios_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- CARD 1 ---
        array(
            'key'     => 'field_home_servicios_msg_1',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 1</strong>',
        ),
        array(
            'key'   => 'field_home_servicios_card_1_titulo',
            'label' => 'Título',
            'name'  => 'home_servicios_card_1_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_servicios_card_1_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_servicios_card_1_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'           => 'field_home_servicios_card_1_imagen',
            'label'         => 'Imagen',
            'name'          => 'home_servicios_card_1_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_servicios_card_1_link',
            'label'        => 'Link (opcional)',
            'name'         => 'home_servicios_card_1_link',
            'type'         => 'url',
            'instructions' => 'Deja vacío si no quieres que la card sea clickable.',
        ),
        // --- CARD 2 ---
        array(
            'key'     => 'field_home_servicios_msg_2',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 2</strong>',
        ),
        array(
            'key'   => 'field_home_servicios_card_2_titulo',
            'label' => 'Título',
            'name'  => 'home_servicios_card_2_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_servicios_card_2_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_servicios_card_2_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'           => 'field_home_servicios_card_2_imagen',
            'label'         => 'Imagen',
            'name'          => 'home_servicios_card_2_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_servicios_card_2_link',
            'label'        => 'Link (opcional)',
            'name'         => 'home_servicios_card_2_link',
            'type'         => 'url',
            'instructions' => 'Deja vacío si no quieres que la card sea clickable.',
        ),
        // --- CARD 3 ---
        array(
            'key'     => 'field_home_servicios_msg_3',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 3</strong>',
        ),
        array(
            'key'   => 'field_home_servicios_card_3_titulo',
            'label' => 'Título',
            'name'  => 'home_servicios_card_3_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_servicios_card_3_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_servicios_card_3_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'           => 'field_home_servicios_card_3_imagen',
            'label'         => 'Imagen',
            'name'          => 'home_servicios_card_3_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_servicios_card_3_link',
            'label'        => 'Link (opcional)',
            'name'         => 'home_servicios_card_3_link',
            'type'         => 'url',
            'instructions' => 'Deja vacío si no quieres que la card sea clickable.',
        ),
        // --- CARD 4 ---
        array(
            'key'     => 'field_home_servicios_msg_4',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 4</strong>',
        ),
        array(
            'key'   => 'field_home_servicios_card_4_titulo',
            'label' => 'Título',
            'name'  => 'home_servicios_card_4_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_servicios_card_4_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_servicios_card_4_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'           => 'field_home_servicios_card_4_imagen',
            'label'         => 'Imagen',
            'name'          => 'home_servicios_card_4_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_servicios_card_4_link',
            'label'        => 'Link (opcional)',
            'name'         => 'home_servicios_card_4_link',
            'type'         => 'url',
            'instructions' => 'Deja vacío si no quieres que la card sea clickable.',
        ),
        // --- CARD 5 ---
        array(
            'key'     => 'field_home_servicios_msg_5',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 5</strong>',
        ),
        array(
            'key'   => 'field_home_servicios_card_5_titulo',
            'label' => 'Título',
            'name'  => 'home_servicios_card_5_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_servicios_card_5_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_servicios_card_5_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'           => 'field_home_servicios_card_5_imagen',
            'label'         => 'Imagen',
            'name'          => 'home_servicios_card_5_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_servicios_card_5_link',
            'label'        => 'Link (opcional)',
            'name'         => 'home_servicios_card_5_link',
            'type'         => 'url',
            'instructions' => 'Deja vacío si no quieres que la card sea clickable.',
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

    'menu_order'            => 4,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
) );

endif;