<?php
/**
 * ACF Fields: Home - Sección Tienda
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_home_tienda',
    'title'  => 'Home - Sección Tienda',
    'fields' => array(

        // --- MOSTRAR SECCIÓN ---
array(
    'key'          => 'field_home_tienda_visible',
    'label'        => 'Mostrar sección',
    'name'         => 'home_tienda_visible',
    'type'         => 'true_false',
    'default_value' => 1,
    'ui'           => 1,
    'ui_on_text'   => 'Visible',
    'ui_off_text'  => 'Oculta',
),

        // --- TAG ---
        array(
            'key'   => 'field_home_tienda_tag',
            'label' => 'Tag',
            'name'  => 'home_tienda_tag',
            'type'  => 'text',
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_home_tienda_titulo',
            'label'    => 'Título',
            'name'     => 'home_tienda_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- CTA ---
        array(
            'key'     => 'field_home_tienda_msg_cta',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>CTA</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_cta_texto',
            'label' => 'Texto del CTA',
            'name'  => 'home_tienda_cta_texto',
            'type'  => 'text',
        ),
        array(
            'key'          => 'field_home_tienda_cta_url',
            'label'        => 'URL del CTA',
            'name'         => 'home_tienda_cta_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/categoria',
        ),

        // --- CARD 1 ---
        array(
            'key'     => 'field_home_tienda_msg_1',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 1</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_1_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_1_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_1_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_1_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_1_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_1_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_1_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_1_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_1_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_1_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_1_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_1_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
        ),

        // --- CARD 2 ---
        array(
            'key'     => 'field_home_tienda_msg_2',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 2</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_2_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_2_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_2_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_2_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_2_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_2_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_2_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_2_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_2_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_2_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_2_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_2_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
        ),

        // --- CARD 3 ---
        array(
            'key'     => 'field_home_tienda_msg_3',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 3</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_3_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_3_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_3_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_3_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_3_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_3_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_3_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_3_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_3_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_3_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_3_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_3_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
        ),

        // --- CARD 4 ---
        array(
            'key'     => 'field_home_tienda_msg_4',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 4</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_4_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_4_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_4_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_4_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_4_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_4_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_4_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_4_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_4_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_4_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_4_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_4_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
        ),

        // --- CARD 5 ---
        array(
            'key'     => 'field_home_tienda_msg_5',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 5</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_5_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_5_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_5_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_5_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_5_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_5_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_5_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_5_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_5_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_5_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_5_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_5_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
        ),

        // --- CARD 6 ---
        array(
            'key'     => 'field_home_tienda_msg_6',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 6</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_6_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_6_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_6_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_6_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_6_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_6_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_6_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_6_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_6_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_6_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_6_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_6_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
        ),

        // --- CARD 7 ---
        array(
            'key'     => 'field_home_tienda_msg_7',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Card 7</strong>',
        ),
        array(
            'key'   => 'field_home_tienda_card_7_titulo',
            'label' => 'Título',
            'name'  => 'home_tienda_card_7_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_home_tienda_card_7_descripcion',
            'label' => 'Descripción',
            'name'  => 'home_tienda_card_7_descripcion',
            'type'  => 'textarea',
            'rows'  => 2,
        ),
        array(
            'key'   => 'field_home_tienda_card_7_precio',
            'label' => 'Precio',
            'name'  => 'home_tienda_card_7_precio',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_home_tienda_card_7_bg',
            'label'         => 'Imagen de fondo',
            'name'          => 'home_tienda_card_7_bg',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_home_tienda_card_7_front',
            'label'         => 'Imagen frontal (silueteada)',
            'name'          => 'home_tienda_card_7_front',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'          => 'field_home_tienda_card_7_url',
            'label'        => 'URL',
            'name'         => 'home_tienda_card_7_url',
            'type'         => 'text',
            'instructions' => 'Introduce solo lo que va después del dominio. Ej: /tienda/producto',
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

    'menu_order'            => 5,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
) );

endif;