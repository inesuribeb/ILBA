<?php
/**
 * Configuración: Secciones principales del menú
 * Editar aquí para actualizar imagen, descripción y subnav de cada sección.
 */

function ilba_get_secciones_menu() {

    $dir = get_stylesheet_directory_uri() . '/images/menu/';

    return array(

        'beauty' => array(
            'titulo'      => 'Beauty',
            'descripcion' => 'Descubre nuestros tratamientos de belleza facial, corporal y micropigmentación.',
            'imagen'      => $dir . 'beauty.PNG',
            'url'         => '#',
            'items'       => array(
                array( 'titulo' => 'Faciales',          'url' => '/beauty-medical/faciales/' ),
                array( 'titulo' => 'Corporales',        'url' => '/beauty-medical/corporales/' ),
                array( 'titulo' => 'Micropigmentación', 'url' => '/beauty-medical/micropigmentacion/' ),
            ),
        ),

        'medical' => array(
            'titulo'      => 'Medical',
            'descripcion' => 'Tratamientos médico-estéticos faciales, corporales y capilares.',
            'imagen'      => $dir . 'medical.jpg',
            'url'         => '#',
            'items'       => array(
                array( 'titulo' => 'Faciales',    'url' => '/beauty-medical/medical-faciales/' ),
                array( 'titulo' => 'Corporales',  'url' => '/beauty-medical/medical-corporales/' ),
                array( 'titulo' => 'Tricología',  'url' => '/beauty-medical/tricologia/' ),
            ),
        ),

        'salud' => array(
            'titulo'      => 'Salud',
            'descripcion' => 'Servicios médicos especializados para tu bienestar integral.',
            'imagen'      => $dir . 'salud.jpg',
            'url'         => '#',
            'items'       => array(
                array( 'titulo' => 'Ginecología',   'url' => '/servicios/ginecologia/' ),
                array( 'titulo' => 'Oftalmología',  'url' => '/servicios/oftalmologia/' ),
            ),
        ),

        'wellness' => array(
            'titulo'      => 'Wellness',
            'descripcion' => 'Protocolos personalizados para cada etapa de tu vida.',
            'imagen'      => $dir . 'wellness.PNG',
            'url'         => '#',
            'items'       => array(
                array( 'titulo' => 'Maternidad',      'url' => '/protocolos/maternidad/' ),
                array( 'titulo' => 'Oncológico',      'url' => '/protocolos/oncologico/' ),
                array( 'titulo' => 'Peso saludable',  'url' => '/protocolos/peso-saludable/' ),
                array( 'titulo' => 'Menopausia',      'url' => '/protocolos/menopausia/' ),
                array( 'titulo' => 'Longevidad',      'url' => '/protocolos/longevidad/' ),
            ),
        ),

    );
}