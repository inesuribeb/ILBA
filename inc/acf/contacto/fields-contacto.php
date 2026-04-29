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
        // FORM — INFO DE CONTACTO
        // =============================================
        array(
            'key'     => 'field_ct_msg_form',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Información de contacto —</h3>',
        ),
        array(
            'key'   => 'field_ct_telefono',
            'label' => 'Teléfono',
            'name'  => 'ct_telefono',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ct_email',
            'label' => 'Email',
            'name'  => 'ct_email',
            'type'  => 'email',
        ),
        array(
            'key'          => 'field_ct_direccion',
            'label'        => 'Dirección',
            'name'         => 'ct_direccion',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetan.',
        ),
        array(
            'key'          => 'field_ct_horario',
            'label'        => 'Horario',
            'name'         => 'ct_horario',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetan.',
        ),
        array(
            'key'   => 'field_ct_instagram_nombre',
            'label' => 'Instagram — Nombre',
            'name'  => 'ct_instagram_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ct_instagram_url',
            'label' => 'Instagram — URL',
            'name'  => 'ct_instagram_url',
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