<?php
/**
 * ACF Fields: Home - Sección Imagen / Video
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_home_img_video',
    'title'  => 'Home - Sección Imagen / Video',
    'fields' => array(

        // Tipo de contenido
        array(
            'key'           => 'field_home_iv_tipo',
            'label'         => 'Tipo de contenido',
            'name'          => 'home_iv_tipo',
            'type'          => 'radio',
            'choices'       => array(
                'imagen' => 'Imagen',
                'video'  => 'Video',
            ),
            'default_value' => 'imagen',
            'layout'        => 'horizontal',
            'required'      => 1,
        ),

        // Imagen — solo si tipo = imagen
        array(
            'key'           => 'field_home_iv_imagen',
            'label'         => 'Imagen',
            'name'          => 'home_iv_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'large',
            'conditional_logic' => array(
                array(
                    array(
                        'field'    => 'field_home_iv_tipo',
                        'operator' => '==',
                        'value'    => 'imagen',
                    ),
                ),
            ),
        ),

        // Video — solo si tipo = video
        array(
            'key'          => 'field_home_iv_video',
            'label'        => 'Video',
            'name'         => 'home_iv_video',
            'type'         => 'file',
            'return_format' => 'array',
            'mime_types'   => 'mp4,webm',
            'instructions' => 'Formatos aceptados: mp4, webm.',
            'conditional_logic' => array(
                array(
                    array(
                        'field'    => 'field_home_iv_tipo',
                        'operator' => '==',
                        'value'    => 'video',
                    ),
                ),
            ),
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