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

        // --- CATEGORÍA ---
        array(
            'key'     => 'field_em_categoria',
            'label'   => 'Categoría',
            'name'    => 'em_categoria',
            'type'    => 'select',
            'choices' => array(
                'sanitaria'      => 'Sanitaria',
                'enfermera'      => 'Enfermera',
                'administrativa' => 'Administrativa',
                'tecnica'        => 'Técnica',
            ),
            'default_value' => 'sanitaria',
            'allow_null'    => 0,
            'ui'            => 0,
        ),

        // --- MOSTRAR ---
        array(
            'key'           => 'field_em_mostrar',
            'label'         => 'Mostrar',
            'name'          => 'em_mostrar',
            'type'          => 'true_false',
            'default_value' => 1,
            'ui'            => 1,
            'ui_on_text'    => 'Sí',
            'ui_off_text'   => 'No',
        ),

        // --- LINK ASOCIADO ---
        // array(
        //     'key'          => 'field_em_link',
        //     'label'        => 'Link asociado',
        //     'name'         => 'em_link',
        //     'type'         => 'url',
        //     'instructions' => 'Ej: perfil LinkedIn, página personal, etc.',
        // ),
        // --- LINK ASOCIADO ---
array(
    'key'          => 'field_em_link',
    'label'        => 'Link asociado',
    'name'         => 'em_link',
    'type'         => 'text',
    'instructions' => 'Escribe solo el slug, sin barras. Ej: somos, beauty/facial',
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