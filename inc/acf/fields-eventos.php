<?php
/**
 * ACF Fields: Eventos
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_eventos',
    'title'  => 'Eventos - Campos',
    'fields' => array(

        // =============================================
        // MODAL
        // =============================================
        array(
            'key'     => 'field_ev_msg_modal',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Modal —</h3>',
        ),
        array(
            'key'   => 'field_ev_lugar',
            'label' => 'Lugar',
            'name'  => 'ev_lugar',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_ev_fecha',
            'label' => 'Fecha',
            'name'  => 'ev_fecha',
            'type'  => 'date_picker',
            'display_format' => 'd/m/Y',
            'return_format'  => 'd/m/Y',
        ),
        array(
            'key'   => 'field_ev_horario',
            'label' => 'Horario',
            'name'  => 'ev_horario',
            'type'  => 'text',
        ),
        array(
            'key'     => 'field_ev_solo_clientes',
            'label'   => 'Solo para clientes ILBA',
            'name'    => 'ev_solo_clientes',
            'type'    => 'true_false',
            'ui'      => 1,
            'default_value' => 0,
        ),

        // =============================================
        // HERO
        // =============================================
        array(
            'key'     => 'field_ev_msg_hero',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Hero —</h3>',
        ),
        array(
            'key'      => 'field_ev_titulo',
            'label'    => 'Título',
            'name'     => 'ev_titulo',
            'type'     => 'text',
            'required' => 1,
        ),
        array(
            'key'           => 'field_ev_imagen_hero',
            'label'         => 'Imagen Hero',
            'name'          => 'ev_imagen_hero',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // =============================================
        // INTRO
        // =============================================
        array(
            'key'     => 'field_ev_msg_intro',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Intro —</h3>',
        ),
        array(
            'key'   => 'field_ev_descripcion',
            'label' => 'Descripción',
            'name'  => 'ev_descripcion',
            'type'  => 'textarea',
            'rows'  => 4,
        ),
        array(
            'key'           => 'field_ev_img_intro',
            'label'         => 'Imagen Intro',
            'name'          => 'ev_img_intro',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // =============================================
        // SECCIÓN 2
        // =============================================
        array(
            'key'     => 'field_ev_msg_seccion2',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Sección 2 —</h3>',
        ),
        array(
            'key'   => 'field_ev_subtitulo_1',
            'label' => 'Subtítulo 1',
            'name'  => 'ev_subtitulo_1',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_ev_img_1',
            'label'         => 'Imagen 1',
            'name'          => 'ev_img_1',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'           => 'field_ev_img_2',
            'label'         => 'Imagen 2',
            'name'          => 'ev_img_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),
        array(
            'key'   => 'field_ev_subtitulo_2',
            'label' => 'Subtítulo 2',
            'name'  => 'ev_subtitulo_2',
            'type'  => 'text',
        ),
        array(
            'key'          => 'field_ev_texto',
            'label'        => 'Texto',
            'name'         => 'ev_texto',
            'type'         => 'textarea',
            'rows'         => 6,
            'new_lines'    => 'wpautop',
            'instructions' => 'Se respetan los saltos de línea.',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'eventos',
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