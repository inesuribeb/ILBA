<?php
/**
 * ACF Fields: Servicios
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_servicios',
    'title'  => 'Servicios - Campos',
    'fields' => array(

        // --- IMAGEN HERO ---
        array(
            'key'           => 'field_sv_imagen_hero',
            'label'         => 'Imagen Hero',
            'name'          => 'sv_imagen_hero',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'required'      => 1,
        ),

        // --- TÍTULO ---
        array(
            'key'      => 'field_sv_titulo',
            'label'    => 'Título',
            'name'     => 'sv_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // --- IMAGEN ESTÁTICA ---
        array(
            'key'           => 'field_sv_imagen_estatica',
            'label'         => 'Imagen estática',
            'name'          => 'sv_imagen_estatica',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
        ),

        // =============================================
        // SECCIÓN 1: QUÉ ES Y QUÉ NO ES
        // =============================================
        array(
            'key'     => 'field_sv_msg_seccion1',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Sección 1: Qué es y qué no es —</h3>',
        ),
        array(
            'key'      => 'field_sv_quees_subtitulo',
            'label'    => 'Subtítulo',
            'name'     => 'sv_quees_subtitulo',
            'type'     => 'text',
        ),
        array(
            'key'      => 'field_sv_quees_descripcion',
            'label'    => 'Descripción',
            'name'     => 'sv_quees_descripcion',
            'type'     => 'textarea',
            'rows'     => 4,
        ),

        // Características (6 fijas)
        array(
            'key'   => 'field_sv_quees_car_1',
            'label' => 'Característica 1',
            'name'  => 'sv_quees_car_1',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_sv_quees_car_2',
            'label' => 'Característica 2',
            'name'  => 'sv_quees_car_2',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_sv_quees_car_3',
            'label' => 'Característica 3',
            'name'  => 'sv_quees_car_3',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_sv_quees_car_4',
            'label' => 'Característica 4',
            'name'  => 'sv_quees_car_4',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_sv_quees_car_5',
            'label' => 'Característica 5',
            'name'  => 'sv_quees_car_5',
            'type'  => 'text',
        ),
        array(
            'key'   => 'field_sv_quees_car_6',
            'label' => 'Característica 6',
            'name'  => 'sv_quees_car_6',
            'type'  => 'text',
        ),

        // Fotos (6 fijas)
        array(
            'key'           => 'field_sv_quees_foto_1',
            'label'         => 'Foto 1',
            'name'          => 'sv_quees_foto_1',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_sv_quees_foto_2',
            'label'         => 'Foto 2',
            'name'          => 'sv_quees_foto_2',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_sv_quees_foto_3',
            'label'         => 'Foto 3',
            'name'          => 'sv_quees_foto_3',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_sv_quees_foto_4',
            'label'         => 'Foto 4',
            'name'          => 'sv_quees_foto_4',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_sv_quees_foto_5',
            'label'         => 'Foto 5',
            'name'          => 'sv_quees_foto_5',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'           => 'field_sv_quees_foto_6',
            'label'         => 'Foto 6',
            'name'          => 'sv_quees_foto_6',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),

        // =============================================
        // SECCIÓN 2: TRATAMIENTOS (5 cards fijas)
        // =============================================
        array(
            'key'     => 'field_sv_msg_seccion2',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Sección 2: Tratamientos —</h3>',
        ),
        array(
            'key'   => 'field_sv_tratamientos_subtitulo',
            'label' => 'Subtítulo',
            'name'  => 'sv_tratamientos_subtitulo',
            'type'  => 'text',
        ),

        // Card 1
        array(
            'key'     => 'field_sv_msg_card1',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Tratamiento 1</strong>',
        ),
        array(
            'key'   => 'field_sv_tr1_titulo',
            'label' => 'Título',
            'name'  => 'sv_tr1_titulo',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_sv_tr1_imagen',
            'label'         => 'Imagen',
            'name'          => 'sv_tr1_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'   => 'field_sv_tr1_que_es',
            'label' => '¿Qué es?',
            'name'  => 'sv_tr1_que_es',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr1_beneficios',
            'label' => 'Beneficios',
            'name'  => 'sv_tr1_beneficios',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr1_indicado',
            'label' => '¿Cuándo está indicado?',
            'name'  => 'sv_tr1_indicado',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'          => 'field_sv_tr1_cta',
            'label'        => 'Link contratar servicio',
            'name'         => 'sv_tr1_cta',
            'type'         => 'url',
            'instructions' => 'URL de la página de contacto para este tratamiento',
        ),

        // Card 2
        array(
            'key'     => 'field_sv_msg_card2',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Tratamiento 2</strong>',
        ),
        array(
            'key'   => 'field_sv_tr2_titulo',
            'label' => 'Título',
            'name'  => 'sv_tr2_titulo',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_sv_tr2_imagen',
            'label'         => 'Imagen',
            'name'          => 'sv_tr2_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'   => 'field_sv_tr2_que_es',
            'label' => '¿Qué es?',
            'name'  => 'sv_tr2_que_es',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr2_beneficios',
            'label' => 'Beneficios',
            'name'  => 'sv_tr2_beneficios',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr2_indicado',
            'label' => '¿Cuándo está indicado?',
            'name'  => 'sv_tr2_indicado',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'          => 'field_sv_tr2_cta',
            'label'        => 'Link contratar servicio',
            'name'         => 'sv_tr2_cta',
            'type'         => 'url',
            'instructions' => 'URL de la página de contacto para este tratamiento',
        ),

        // Card 3
        array(
            'key'     => 'field_sv_msg_card3',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Tratamiento 3</strong>',
        ),
        array(
            'key'   => 'field_sv_tr3_titulo',
            'label' => 'Título',
            'name'  => 'sv_tr3_titulo',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_sv_tr3_imagen',
            'label'         => 'Imagen',
            'name'          => 'sv_tr3_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'   => 'field_sv_tr3_que_es',
            'label' => '¿Qué es?',
            'name'  => 'sv_tr3_que_es',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr3_beneficios',
            'label' => 'Beneficios',
            'name'  => 'sv_tr3_beneficios',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr3_indicado',
            'label' => '¿Cuándo está indicado?',
            'name'  => 'sv_tr3_indicado',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'          => 'field_sv_tr3_cta',
            'label'        => 'Link contratar servicio',
            'name'         => 'sv_tr3_cta',
            'type'         => 'url',
            'instructions' => 'URL de la página de contacto para este tratamiento',
        ),

        // Card 4
        array(
            'key'     => 'field_sv_msg_card4',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Tratamiento 4</strong>',
        ),
        array(
            'key'   => 'field_sv_tr4_titulo',
            'label' => 'Título',
            'name'  => 'sv_tr4_titulo',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_sv_tr4_imagen',
            'label'         => 'Imagen',
            'name'          => 'sv_tr4_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'   => 'field_sv_tr4_que_es',
            'label' => '¿Qué es?',
            'name'  => 'sv_tr4_que_es',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr4_beneficios',
            'label' => 'Beneficios',
            'name'  => 'sv_tr4_beneficios',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr4_indicado',
            'label' => '¿Cuándo está indicado?',
            'name'  => 'sv_tr4_indicado',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'          => 'field_sv_tr4_cta',
            'label'        => 'Link contratar servicio',
            'name'         => 'sv_tr4_cta',
            'type'         => 'url',
            'instructions' => 'URL de la página de contacto para este tratamiento',
        ),

        // Card 5
        array(
            'key'     => 'field_sv_msg_card5',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<strong>Tratamiento 5</strong>',
        ),
        array(
            'key'   => 'field_sv_tr5_titulo',
            'label' => 'Título',
            'name'  => 'sv_tr5_titulo',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_sv_tr5_imagen',
            'label'         => 'Imagen',
            'name'          => 'sv_tr5_imagen',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'thumbnail',
        ),
        array(
            'key'   => 'field_sv_tr5_que_es',
            'label' => '¿Qué es?',
            'name'  => 'sv_tr5_que_es',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr5_beneficios',
            'label' => 'Beneficios',
            'name'  => 'sv_tr5_beneficios',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'   => 'field_sv_tr5_indicado',
            'label' => '¿Cuándo está indicado?',
            'name'  => 'sv_tr5_indicado',
            'type'  => 'textarea',
            'rows'  => 3,
        ),
        array(
            'key'          => 'field_sv_tr5_cta',
            'label'        => 'Link contratar servicio',
            'name'         => 'sv_tr5_cta',
            'type'         => 'url',
            'instructions' => 'URL de la página de contacto para este tratamiento',
        ),

        // =============================================
        // SECCIÓN 3: EQUIPO MÉDICO
        // =============================================
        array(
            'key'     => 'field_sv_msg_seccion3',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Sección 3: Equipo médico —</h3>',
        ),
        array(
            'key'   => 'field_sv_equipo_subtitulo',
            'label' => 'Subtítulo',
            'name'  => 'sv_equipo_subtitulo',
            'type'  => 'text',
        ),
        array(
            'key'           => 'field_sv_equipo',
            'label'         => 'Miembros del equipo',
            'name'          => 'sv_equipo',
            'type'          => 'relationship',
            'instructions'  => 'Selecciona los miembros del equipo médico para este servicio.',
            'post_type'     => array(
                0 => 'equipo_medico',
            ),
            'filters'       => array(
                0 => 'search',
            ),
            'return_format' => 'object',
            'min'           => 0,
            'max'           => 0,
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'servicios',
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