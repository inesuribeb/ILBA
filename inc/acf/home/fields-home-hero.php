<?php
/**
 * ACF Fields: Home
 */

if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_home',
    'title'  => 'Home - Portada',
    'fields' => array(

        // =============================================
        // HERO
        // =============================================
        array(
            'key'     => 'field_home_msg_hero',
            'label'   => '',
            'name'    => '',
            'type'    => 'message',
            'message' => '<h3>— Hero —</h3>',
        ),

        // Tipo de background
        array(
            'key'           => 'field_home_hero_tipo',
            'label'         => 'Tipo de fondo',
            'name'          => 'home_hero_tipo',
            'type'          => 'radio',
            'choices'       => array(
                'dos_mitades'       => 'Dos imágenes (50% / 50%)',
                'pantalla_completa' => 'Una imagen a pantalla completa',
            ),
            'default_value' => 'dos_mitades',
            'layout'        => 'horizontal',
            'required'      => 1,
        ),

        // Imagen izquierda — solo si dos_mitades
        array(
            'key'           => 'field_home_hero_img_izq',
            'label'         => 'Imagen izquierda',
            'name'          => 'home_hero_img_izq',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'instructions'  => 'Ocupa el 50% izquierdo.',
            'conditional_logic' => array(
                array(
                    array(
                        'field'    => 'field_home_hero_tipo',
                        'operator' => '==',
                        'value'    => 'dos_mitades',
                    ),
                ),
            ),
        ),

        // Imagen derecha — solo si dos_mitades
        array(
            'key'           => 'field_home_hero_img_der',
            'label'         => 'Imagen derecha',
            'name'          => 'home_hero_img_der',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'instructions'  => 'Ocupa el 50% derecho.',
            'conditional_logic' => array(
                array(
                    array(
                        'field'    => 'field_home_hero_tipo',
                        'operator' => '==',
                        'value'    => 'dos_mitades',
                    ),
                ),
            ),
        ),

        // Imagen pantalla completa — solo si pantalla_completa
        array(
            'key'           => 'field_home_hero_img_full',
            'label'         => 'Imagen pantalla completa',
            'name'          => 'home_hero_img_full',
            'type'          => 'image',
            'return_format' => 'array',
            'preview_size'  => 'medium',
            'conditional_logic' => array(
                array(
                    array(
                        'field'    => 'field_home_hero_tipo',
                        'operator' => '==',
                        'value'    => 'pantalla_completa',
                    ),
                ),
            ),
        ),

        // Título
        array(
            'key'      => 'field_home_hero_titulo',
            'label'    => 'Título',
            'name'     => 'home_hero_titulo',
            'type'     => 'text',
            'required' => 1,
        ),

        // CTA 1
        array(
            'key'          => 'field_home_hero_cta1_texto',
            'label'        => 'CTA 1 — Texto',
            'name'         => 'home_hero_cta1_texto',
            'type'         => 'text',
            'instructions' => 'Deja vacío si no quieres mostrar este CTA.',
        ),
        array(
            'key'   => 'field_home_hero_cta1_link',
            'label' => 'CTA 1 — Link',
            'name'  => 'home_hero_cta1_link',
            'type'  => 'url',
        ),

        // CTA 2
        array(
            'key'          => 'field_home_hero_cta2_texto',
            'label'        => 'CTA 2 — Texto',
            'name'         => 'home_hero_cta2_texto',
            'type'         => 'text',
            'instructions' => 'Deja vacío si no quieres mostrar este CTA.',
        ),
        array(
            'key'   => 'field_home_hero_cta2_link',
            'label' => 'CTA 2 — Link',
            'name'  => 'home_hero_cta2_link',
            'type'  => 'url',
        ),

    ),

    'location' => array(
        array(
            array(
                'param'    => 'page_type',
                'operator' => '==',
                'value'    => 'front_page',
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