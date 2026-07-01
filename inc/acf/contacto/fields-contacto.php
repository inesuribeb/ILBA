<?php
/**
 * ACF Fields: Contacto
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_contacto',
    'title'  => 'Contacto - Campos',
    'fields' => array(

        // =============================================
        // INTRO
        // =============================================
        array(
            'key'     => 'field_ct_msg_intro',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Intro —</h3>',
        ),
        array(
            'key'           => 'field_ct_foto',
            'label'         => 'Foto',
            'name'          => 'ct_foto',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'      => 'field_ct_titulo',
            'label'    => 'Título',
            'name'     => 'ct_titulo',
            'type'     => 'text',
            'required' => 1,
        ),
        array(
            'key'   => 'field_ct_subtitulo',
            'label' => 'Subtítulo',
            'name'  => 'ct_subtitulo',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // =============================================
        // BILBAO
        // =============================================
        array(
            'key'     => 'field_ct_msg_bilbao',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Bilbao —</h3>',
        ),
        array(
            'key'   => 'field_ct_bilbao_telefono',
            'label' => 'Teléfono',
            'name'  => 'ct_bilbao_telefono',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ct_bilbao_email',
            'label' => 'Email',
            'name'  => 'ct_bilbao_email',
            'type'  => 'email',
        ),
        array(
            'key'          => 'field_ct_bilbao_direccion',
            'label'        => 'Dirección',
            'name'         => 'ct_bilbao_direccion',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetan.',
        ),
        array(
            'key'          => 'field_ct_bilbao_horario',
            'label'        => 'Horario',
            'name'         => 'ct_bilbao_horario',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetan.',
        ),
        array(
            'key'   => 'field_ct_bilbao_instagram_nombre',
            'label' => 'Instagram — Nombre',
            'name'  => 'ct_bilbao_instagram_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ct_bilbao_instagram_url',
            'label' => 'Instagram — URL',
            'name'  => 'ct_bilbao_instagram_url',
            'type'  => 'url',
        ),

        // =============================================
        // DONOSTI
        // =============================================
        array(
            'key'     => 'field_ct_msg_donosti',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Donosti —</h3>',
        ),
        array(
            'key'   => 'field_ct_donosti_telefono',
            'label' => 'Teléfono',
            'name'  => 'ct_donosti_telefono',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ct_donosti_email',
            'label' => 'Email',
            'name'  => 'ct_donosti_email',
            'type'  => 'email',
        ),
        array(
            'key'          => 'field_ct_donosti_direccion',
            'label'        => 'Dirección',
            'name'         => 'ct_donosti_direccion',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetan.',
        ),
        array(
            'key'          => 'field_ct_donosti_horario',
            'label'        => 'Horario',
            'name'         => 'ct_donosti_horario',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetan.',
        ),
        array(
            'key'   => 'field_ct_donosti_instagram_nombre',
            'label' => 'Instagram — Nombre',
            'name'  => 'ct_donosti_instagram_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ct_donosti_instagram_url',
            'label' => 'Instagram — URL',
            'name'  => 'ct_donosti_instagram_url',
            'type'  => 'url',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'page',
                'operator' => '==',
                'value'    => get_page_by_path( 'contacto' )->ID ?? 0,
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