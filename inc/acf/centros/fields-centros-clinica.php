<?php
/**
 * ACF Fields: Centros - La Clínica
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_centros_clinica',
    'title'  => 'Centro - La Clínica',
    'fields' => array(

        // =============================================
        // LA CLÍNICA — imágenes
        // =============================================
        array(
            'key'     => 'field_ce_msg_clinica',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— La Clínica —</h3>',
        ),

        array(
            'key'           => 'field_ce_clinica_img_1',
            'label'         => 'Imagen 1',
            'name'          => 'ce_clinica_img_1',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_2',
            'label'         => 'Imagen 2',
            'name'          => 'ce_clinica_img_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_3',
            'label'         => 'Imagen 3',
            'name'          => 'ce_clinica_img_3',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_4',
            'label'         => 'Imagen 4',
            'name'          => 'ce_clinica_img_4',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_5',
            'label'         => 'Imagen 5',
            'name'          => 'ce_clinica_img_5',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_6',
            'label'         => 'Imagen 6',
            'name'          => 'ce_clinica_img_6',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_7',
            'label'         => 'Imagen 7',
            'name'          => 'ce_clinica_img_7',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_8',
            'label'         => 'Imagen 8',
            'name'          => 'ce_clinica_img_8',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_9',
            'label'         => 'Imagen 9',
            'name'          => 'ce_clinica_img_9',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_ce_clinica_img_10',
            'label'         => 'Imagen 10',
            'name'          => 'ce_clinica_img_10',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'centro',
            ),
        ),
    ),

) );

endif;