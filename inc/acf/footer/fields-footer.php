<?php
/**
 * ACF Fields: Footer
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_footer',
    'title'  => 'Footer - Campos',
    'fields' => array(

        // --- EMAIL ---
        array(
            'key'   => 'field_footer_email',
            'label' => 'Email',
            'name'  => 'footer_email',
            'type'  => 'email',
        ),

        // --- TELÉFONO ---
        array(
            'key'   => 'field_footer_telefono',
            'label' => 'Teléfono',
            'name'  => 'footer_telefono',
            'type'  => 'text',
        ),

        // --- HORARIO ---
        array(
            'key'          => 'field_footer_horario',
            'label'        => 'Horario',
            'name'         => 'footer_horario',
            'type'         => 'textarea',
            'rows'         => 3,
            'instructions' => 'Ej: Lunes - Sábado, 10am - 6pm',
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