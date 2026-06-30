<?php
/**
 * ACF Fields: Centros - Portada
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_centros_portada',
    'title'  => 'Centro - Portada',
    'fields' => array(

        // --- TÍTULO ---
        array(
            'key'      => 'field_ce_titulo',
            'label'    => 'Título',
            'name'     => 'ce_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- SUBTÍTULO ---
        array(
            'key'   => 'field_ce_subtitulo',
            'label' => 'Subtítulo',
            'name'  => 'ce_subtitulo',
            'type'  => 'text',
        ),

        // --- DESCRIPCIÓN ---
        array(
            'key'      => 'field_ce_descripcion',
            'label'    => 'Descripción',
            'name'     => 'ce_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
            'required' => 1,
        ),

        // --- FOTO HERO ---
        array(
            'key'           => 'field_ce_imagen_hero',
            'label'         => 'Foto Hero',
            'name'          => 'ce_imagen_hero',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // --- MODAL FLOTANTE ---
        array(
            'key'        => 'field_ce_modal_flotante',
            'label'      => 'Modal flotante',
            'name'       => 'ce_modal_flotante',
            'type'       => 'group',
            'layout'     => 'block',
            'sub_fields' => array(

                array(
                    'key'      => 'field_ce_modal_titulo',
                    'label'    => 'Título',
                    'name'     => 'titulo',
                    'type'     => 'text',
                    'required' => 1,
                ),

                array(
                    'key'      => 'field_ce_modal_email',
                    'label'    => 'Email',
                    'name'     => 'email',
                    'type'     => 'email',
                    'required' => 1,
                ),

                array(
                    'key'      => 'field_ce_modal_telefono',
                    'label'    => 'Teléfono',
                    'name'     => 'telefono',
                    'type'     => 'text',
                    'required' => 1,
                ),

                array(
                    'key'      => 'field_ce_modal_direccion',
                    'label'    => 'Dirección',
                    'name'     => 'direccion',
                    'type'     => 'text',
                    'required' => 1,
                ),

            ),
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