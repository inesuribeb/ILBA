<?php
if ( function_exists( 'acf_add_local_field_group' ) ) :

acf_add_local_field_group( array(
    'key'    => 'group_product',
    'title'  => 'Producto — Contenido extra',
    'fields' => array(
        array(
            'key'          => 'field_producto_beneficios',
            'label'        => 'Beneficios',
            'name'         => 'producto_beneficios',
            'type'         => 'textarea',
            'new_lines'    => 'br',
        ),
        array(
            'key'          => 'field_producto_modo_empleo',
            'label'        => 'Modo de empleo',
            'name'         => 'producto_modo_empleo',
            'type'         => 'textarea',
            'new_lines'    => 'br',
        ),
        array(
            'key'   => 'field_producto_tamano',
            'label' => 'Tamaño',
            'name'  => 'producto_tamano',
            'type'  => 'text',
        ),
    ),
    'location' => array(
        array(
            array(
                'param'    => 'post_type',
                'operator' => '==',
                'value'    => 'product',
            ),
        ),
    ),
) );

endif;