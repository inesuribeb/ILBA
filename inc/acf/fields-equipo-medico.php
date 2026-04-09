<?php
/**
 * ACF Fields: Equipo Médico
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_equipo_medico',
    'title'  => 'Equipo Médico - Campos',
    'fields' => array(

        // --- FOTO ---
        array(
            'key'           => 'field_em_foto',
            'label'         => 'Foto',
            'name'          => 'em_foto',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // --- NOMBRE COMPLETO ---
        array(
            'key'      => 'field_em_nombre',
            'label'    => 'Nombre completo',
            'name'     => 'em_nombre',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- CARGO ---
        array(
            'key'      => 'field_em_cargo',
            'label'    => 'Cargo',
            'name'     => 'em_cargo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- LINK ASOCIADO ---
        array(
            'key'          => 'field_em_link',
            'label'        => 'Link asociado',
            'name'         => 'em_link',
            'type'         => 'url',
            'instructions' => 'Ej: perfil LinkedIn, página personal, etc.',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'equipo_medico',
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