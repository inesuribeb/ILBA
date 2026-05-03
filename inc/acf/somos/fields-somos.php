<?php
/**
 * ACF Fields: Somos
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_somos',
    'title'  => 'Somos - Campos',
    'fields' => array(

        // =============================================
        // HERO
        // =============================================
        array(
            'key'     => 'field_somos_msg_hero',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Hero —</h3>',
        ),
        array(
            'key'           => 'field_somos_hero_imagen',
            'label'         => 'Imagen Hero',
            'name'          => 'somos_hero_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // =============================================
        // INTRO
        // =============================================
        array(
            'key'     => 'field_somos_msg_intro',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Intro —</h3>',
        ),
        array(
            'key'   => 'field_somos_intro_subtitulo',
            'label' => 'Subtítulo',
            'name'  => 'somos_intro_subtitulo',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'           => 'field_somos_intro_img_1',
            'label'         => 'Imagen vertical 1',
            'name'          => 'somos_intro_img_1',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'           => 'field_somos_intro_img_2',
            'label'         => 'Imagen vertical 2',
            'name'          => 'somos_intro_img_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_somos_intro_descripcion',
            'label' => 'Descripción',
            'name'  => 'somos_intro_descripcion',
            'type'  => 'textarea',
            'rows'  => 4,
        ),

        // =============================================
        // LA CLÍNICA — imágenes
        // =============================================
        array(
            'key'     => 'field_somos_msg_clinica',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— La Clínica —</h3>',
        ),
        
        array(
            'key'           => 'field_somos_clinica_img_1',
            'label'         => 'Imagen 1',
            'name'          => 'somos_clinica_img_1',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_2',
            'label'         => 'Imagen 2',
            'name'          => 'somos_clinica_img_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_3',
            'label'         => 'Imagen 3',
            'name'          => 'somos_clinica_img_3',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_4',
            'label'         => 'Imagen 4',
            'name'          => 'somos_clinica_img_4',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_5',
            'label'         => 'Imagen 5',
            'name'          => 'somos_clinica_img_5',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_6',
            'label'         => 'Imagen 6',
            'name'          => 'somos_clinica_img_6',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_7',
            'label'         => 'Imagen 7',
            'name'          => 'somos_clinica_img_7',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_8',
            'label'         => 'Imagen 8',
            'name'          => 'somos_clinica_img_8',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_9',
            'label'         => 'Imagen 9',
            'name'          => 'somos_clinica_img_9',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_somos_clinica_img_10',
            'label'         => 'Imagen 10',
            'name'          => 'somos_clinica_img_10',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),

        // =============================================
        // ARTÍCULOS DE PRENSA
        // =============================================
        array(
            'key'   => 'field_somos_historia',
            'label' => 'Historia de ILBA',
            'name'  => 'somos_historia',
            'type'  => 'textarea',
            'rows'  => 6,
        ),


        array(
            'key'     => 'field_somos_msg_prensa',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Artículos de Prensa —</h3>',
        ),
        
        array(
            'key'     => 'field_somos_prensa_msg_1',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 1</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_1_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_1_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_1_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_1_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_1_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_1_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_2',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 2</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_2_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_2_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_2_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_2_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_2_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_2_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_3',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 3</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_3_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_3_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_3_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_3_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_3_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_3_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_4',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 4</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_4_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_4_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_4_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_4_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_4_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_4_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_5',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 5</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_5_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_5_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_5_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_5_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_5_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_5_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_6',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 6</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_6_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_6_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_6_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_6_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_6_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_6_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_7',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 7</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_7_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_7_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_7_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_7_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_7_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_7_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_8',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 8</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_8_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_8_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_8_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_8_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_8_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_8_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_9',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 9</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_9_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_9_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_9_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_9_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_9_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_9_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'     => 'field_somos_prensa_msg_10',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Artículo 10</strong>',
        ),
        array(
            'key'   => 'field_somos_prensa_10_titulo',
            'label' => 'Título',
            'name'  => 'somos_prensa_10_titulo',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_somos_prensa_10_link',
            'label' => 'Link',
            'name'  => 'somos_prensa_10_link',
            'type'  => 'url',
        ),
        array(
            'key'           => 'field_somos_prensa_10_imagen',
            'label'         => 'Imagen',
            'name'          => 'somos_prensa_10_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'page',
                'operator' => '==',
                'value'    => url_to_postid( home_url( '/somos/' ) ),
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