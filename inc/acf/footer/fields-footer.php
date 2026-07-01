<?php
/**
 * ACF Fields: Footer
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_footer',
    'title'  => 'Footer - Campos',
    'fields' => array(

        // =============================================
        // BILBAO
        // =============================================
        array(
            'key'     => 'field_footer_msg_bilbao',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Bilbao —</h3>',
        ),

        array(
            'key'   => 'field_footer_bilbao_email',
            'label' => 'Email',
            'name'  => 'footer_bilbao_email',
            'type'  => 'email',
        ),

        array(
            'key'   => 'field_footer_bilbao_telefono',
            'label' => 'Teléfono',
            'name'  => 'footer_bilbao_telefono',
            'type'  => 'text',
        ),

        array(
            'key'          => 'field_footer_bilbao_direccion',
            'label'        => 'Dirección',
            'name'         => 'footer_bilbao_direccion',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetarán en el frontend.',
        ),

        array(
            'key'          => 'field_footer_bilbao_horario',
            'label'        => 'Horario',
            'name'         => 'footer_bilbao_horario',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetarán en el frontend.',
        ),

        // =============================================
        // DONOSTI
        // =============================================
        array(
            'key'     => 'field_footer_msg_donosti',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Donosti —</h3>',
        ),

        array(
            'key'   => 'field_footer_donosti_email',
            'label' => 'Email',
            'name'  => 'footer_donosti_email',
            'type'  => 'email',
        ),

        array(
            'key'   => 'field_footer_donosti_telefono',
            'label' => 'Teléfono',
            'name'  => 'footer_donosti_telefono',
            'type'  => 'text',
        ),

        array(
            'key'          => 'field_footer_donosti_direccion',
            'label'        => 'Dirección',
            'name'         => 'footer_donosti_direccion',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetarán en el frontend.',
        ),

        array(
            'key'          => 'field_footer_donosti_horario',
            'label'        => 'Horario',
            'name'         => 'footer_donosti_horario',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Los saltos de línea se respetarán en el frontend.',
        ),

        // =============================================
        // GENERAL
        // =============================================
        array(
            'key'     => 'field_footer_msg_general',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— General —</h3>',
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'   => 'field_footer_descripcion',
            'label' => 'Descripción',
            'name'  => 'footer_descripcion',
            'type'  => 'textarea',
            'rows'  => 3,
        ),

        // --- RRSS (4 fijas) ---
        array(
            'key'     => 'field_footer_msg_rrss',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Redes sociales</strong>',
        ),
        array(
            'key'   => 'field_footer_rrss_1_nombre',
            'label' => 'Red social 1 — Nombre',
            'name'  => 'footer_rrss_1_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_footer_rrss_1_link',
            'label' => 'Red social 1 — Link',
            'name'  => 'footer_rrss_1_link',
            'type'  => 'url',
        ),
        array(
            'key'   => 'field_footer_rrss_2_nombre',
            'label' => 'Red social 2 — Nombre',
            'name'  => 'footer_rrss_2_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_footer_rrss_2_link',
            'label' => 'Red social 2 — Link',
            'name'  => 'footer_rrss_2_link',
            'type'  => 'url',
        ),
        array(
            'key'   => 'field_footer_rrss_3_nombre',
            'label' => 'Red social 3 — Nombre',
            'name'  => 'footer_rrss_3_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_footer_rrss_3_link',
            'label' => 'Red social 3 — Link',
            'name'  => 'footer_rrss_3_link',
            'type'  => 'url',
        ),
        array(
            'key'   => 'field_footer_rrss_4_nombre',
            'label' => 'Red social 4 — Nombre',
            'name'  => 'footer_rrss_4_nombre',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_footer_rrss_4_link',
            'label' => 'Red social 4 — Link',
            'name'  => 'footer_rrss_4_link',
            'type'  => 'url',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'page',
                'operator' => '==',
                'value'    => '81',
            ),
        ),
    ),

    'menu_order'            => 10,
    'position'              => 'normal',
    'style'                 => 'default',
    'label_placement'       => 'top',
    'instruction_placement' => 'label',
) );

endif;