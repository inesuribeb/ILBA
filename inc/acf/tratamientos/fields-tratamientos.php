<?php
/**
 * ACF Fields — Tratamientos
 */

if ( ! function_exists( 'acf_add_local_field_group' ) ) return;

add_action( 'acf/init', function() {

    acf_add_local_field_group( array(
        'key'    => 'group_tratamientos',
        'title'  => 'Tratamientos',
        'fields' => array(

            // --- General ---
            array(
                'key'   => 'field_tr_tab_general',
                'label' => 'General',
                'type'  => 'tab',
            ),
            array(
                'key'      => 'field_tr_nombre',
                'label'    => 'Nombre',
                'name'     => 'tr_nombre',
                'type'     => 'text',
                'required' => 1,
            ),
            array(
                'key'           => 'field_tr_categoria',
                'label'         => 'Categoría',
                'name'          => 'tr_categoria',
                'type'          => 'checkbox',
                'choices'       => array(
                    'beauty-facial'    => 'Beauty facial',
                    'beauty-corporal'  => 'Beauty corporal',
                    'medical-facial'   => 'Medical facial',
                    'medical-corporal' => 'Medical corporal',
                ),
                'layout'        => 'vertical',
                'return_format' => 'value',
            ),
            array(
                'key'         => 'field_tr_duracion',
                'label'       => 'Duración',
                'name'        => 'tr_duracion',
                'type'        => 'text',
                'placeholder' => 'Ej: 60 min',
            ),
            array(
                'key'           => 'field_tr_centros',
                'label'         => 'Centros',
                'name'          => 'tr_centros',
                'type'          => 'radio',
                'choices'       => array(
                    'bilbao'  => 'Bilbao',
                    'donosti' => 'Donosti',
                    'ambos'   => 'Ambos',
                ),
                'default_value' => 'ambos',
                'layout'        => 'horizontal',
                'return_format' => 'value',
            ),

            // --- Tecnologías ---
            array(
                'key'   => 'field_tr_tab_tecnologia',
                'label' => 'Tecnologías',
                'type'  => 'tab',
            ),
            array(
                'key'           => 'field_tr_tecnologia',
                'label'         => 'Aparatologías relacionadas',
                'name'          => 'tr_tecnologia',
                'type'          => 'post_object',
                'post_type'     => array( 'aparatologia' ),
                'multiple'      => 1,
                'allow_null'    => 1,
                'return_format' => 'object',
                'ui'            => 1,
            ),
            array(
                'key'           => 'field_tr_marcas',
                'label'         => 'Marcas relacionadas',
                'name'          => 'tr_marcas',
                'type'          => 'taxonomy',
                'taxonomy'      => 'product_cat',
                'field_type'    => 'multi_select',
                'allow_null'    => 1,
                'add_term'      => 0,
                'save_terms'    => 0,
                'load_terms'    => 0,
                'return_format' => 'object',
                'instructions'  => 'Enlazan a la tienda filtrada por esa marca.',
            ),

            // Otras tecnologías (3 x nombre + url)
            array(
                'key'     => 'field_tr_otras_tec_msg',
                'label'   => 'Otras tecnologías',
                'type'    => 'message',
                'message' => 'Hasta 3. La URL es opcional.',
            ),
            array( 'key' => 'field_tr_otra_tec_1_nombre', 'label' => 'Otra tecnología 1 — Nombre', 'name' => 'tr_otra_tec_1_nombre', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_tr_otra_tec_1_url',    'label' => 'Otra tecnología 1 — URL',    'name' => 'tr_otra_tec_1_url',    'type' => 'url',  'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_tr_otra_tec_2_nombre', 'label' => 'Otra tecnología 2 — Nombre', 'name' => 'tr_otra_tec_2_nombre', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_tr_otra_tec_2_url',    'label' => 'Otra tecnología 2 — URL',    'name' => 'tr_otra_tec_2_url',    'type' => 'url',  'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_tr_otra_tec_3_nombre', 'label' => 'Otra tecnología 3 — Nombre', 'name' => 'tr_otra_tec_3_nombre', 'type' => 'text', 'wrapper' => array( 'width' => '50' ) ),
            array( 'key' => 'field_tr_otra_tec_3_url',    'label' => 'Otra tecnología 3 — URL',    'name' => 'tr_otra_tec_3_url',    'type' => 'url',  'wrapper' => array( 'width' => '50' ) ),

            // --- Solo en card ---
            array(
                'key'   => 'field_tr_tab_card',
                'label' => 'Solo en card',
                'type'  => 'tab',
            ),
            array(
                'key'           => 'field_tr_img_card',
                'label'         => 'Img card',
                'name'          => 'tr_img_card',
                'type'          => 'image',
                'instructions'  => 'Formato vertical 4:5 (por ejemplo, 1080 × 1350 px).',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ),

            // Etiquetas (hasta 4)
            array(
                'key'     => 'field_tr_etiquetas_msg',
                'label'   => 'Etiquetas',
                'type'    => 'message',
                'message' => 'Hasta 4.',
            ),
            array( 'key' => 'field_tr_etiqueta_1', 'label' => 'Etiqueta 1', 'name' => 'tr_etiqueta_1', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
            array( 'key' => 'field_tr_etiqueta_2', 'label' => 'Etiqueta 2', 'name' => 'tr_etiqueta_2', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
            array( 'key' => 'field_tr_etiqueta_3', 'label' => 'Etiqueta 3', 'name' => 'tr_etiqueta_3', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),
            array( 'key' => 'field_tr_etiqueta_4', 'label' => 'Etiqueta 4', 'name' => 'tr_etiqueta_4', 'type' => 'text', 'wrapper' => array( 'width' => '25' ) ),

            // Keywords (hasta 5)
            array(
                'key'     => 'field_tr_keywords_msg',
                'label'   => 'Keywords',
                'type'    => 'message',
                'message' => 'Hasta 5.',
            ),
            array( 'key' => 'field_tr_keyword_1', 'label' => 'Keyword 1', 'name' => 'tr_keyword_1', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_2', 'label' => 'Keyword 2', 'name' => 'tr_keyword_2', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_3', 'label' => 'Keyword 3', 'name' => 'tr_keyword_3', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_4', 'label' => 'Keyword 4', 'name' => 'tr_keyword_4', 'type' => 'text' ),
            array( 'key' => 'field_tr_keyword_5', 'label' => 'Keyword 5', 'name' => 'tr_keyword_5', 'type' => 'text' ),

            // --- Hero ---
            array(
                'key'   => 'field_tr_tab_hero',
                'label' => 'Hero',
                'type'  => 'tab',
            ),
            array(
                'key'   => 'field_tr_hero_titular',
                'label' => 'Titular hero',
                'name'  => 'tr_hero_titular',
                'type'  => 'text',
            ),
            array(
                'key'       => 'field_tr_intro',
                'label'     => 'Intro',
                'name'      => 'tr_intro',
                'type'      => 'textarea',
                'rows'      => 4,
                'new_lines' => '',
            ),
            array(
                'key'           => 'field_tr_hero_img',
                'label'         => 'Imagen hero',
                'name'          => 'tr_hero_img',
                'type'          => 'image',
                'return_format' => 'array',
                'preview_size'  => 'medium',
            ),

            // --- Fotos adicionales ---
            array(
                'key'   => 'field_tr_tab_fotos',
                'label' => 'Fotos adicionales',
                'type'  => 'tab',
            ),
            array( 'key' => 'field_tr_foto_1', 'label' => 'Foto 1', 'name' => 'tr_foto_1', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_2', 'label' => 'Foto 2', 'name' => 'tr_foto_2', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_3', 'label' => 'Foto 3', 'name' => 'tr_foto_3', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_4', 'label' => 'Foto 4', 'name' => 'tr_foto_4', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),
            array( 'key' => 'field_tr_foto_5', 'label' => 'Foto 5', 'name' => 'tr_foto_5', 'type' => 'image', 'return_format' => 'array', 'preview_size' => 'thumbnail' ),

        ),
        'location' => array(
            array(
                array(
                    'param'    => 'post_type',
                    'operator' => '==',
                    'value'    => 'tratamientos',
                ),
            ),
        ),
        'menu_order' => 0,
        'position'   => 'normal',
        'style'      => 'default',
    ) );

} );

/**
 * Marcas: mostrar solo las subcategorías de "Marca"
 */
add_filter( 'acf/fields/taxonomy/query/key=field_tr_marcas', function( $args ) {
    $marca = get_term_by( 'slug', 'marca', 'product_cat' );
    if ( $marca ) {
        $args['child_of'] = $marca->term_id;
    }
    return $args;
} );