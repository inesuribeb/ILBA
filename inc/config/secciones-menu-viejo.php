<?php
/**
 * Configuración: Secciones principales del menú
 */

function ilba_get_secciones_menu() {

    $dir = get_stylesheet_directory_uri() . '/images/menu/';
    $ap  = '/aparatologia/';
    $bm  = '/beauty_medical/';

    return array(

        'beauty' => array(
            'titulo'   => 'Beauty',
            'imagen'   => $dir . 'beauty.PNG',
            'url'      => '#',
            'columnas' => array(
                array(
                    'titulo' => 'Faciales',
                    'url'    => $bm . 'beauty-facial/',
                    'items'  => array(
                        array( 'titulo' => 'Observ de Silton',              'url' => $ap . 'observ-de-silton/' ),
                        array( 'titulo' => 'Aquapure',                      'url' => $ap . 'aquapure/' ),
                        array( 'titulo' => 'Forma',                         'url' => $ap . 'forma-inmode/' ),
                        array( 'titulo' => 'Indiba CT8',                    'url' => $ap . 'indiba-ct8/' ),
                        array( 'titulo' => 'LPG Cellu M6 Alliance Medical', 'url' => $ap . 'lpg-cell-m6/' ),
                    ),
                ),
                array(
                    'titulo' => 'Corporales',
                    'url'    => $bm . 'beauty-corporal/',
                    'items'  => array(
                        array( 'titulo' => 'Evolvex',                  'url' => $ap . 'evolvex/' ),
                        array( 'titulo' => 'Indiba CT8',               'url' => $ap . 'indiba-ct8/' ),
                        array( 'titulo' => 'Forma',                    'url' => $ap . 'forma-inmode/' ),
                        array( 'titulo' => 'Linfopress Evolution Pro', 'url' => $ap . 'linfopress-evolution-pro/' ),
                    ),
                ),
                array(
                    'titulo' => 'Micropigmentación',
                    'url'    => $bm . 'beauty-micropigmentacion/',
                    'items'  => array(),
                ),
            ),
        ),

        'medical' => array(
            'titulo'   => 'Medical',
            'imagen'   => $dir . 'medical.jpg',
            'url'      => '#',
            'columnas' => array(
                array(
                    'titulo' => 'Faciales',
                    'url'    => $bm . 'medical-faciales/',
                    'items'  => array(
                        array( 'titulo' => 'Thermage by Soltan Medical', 'url' => $ap . 'thermage-by-soltan-medical/' ),
                        array( 'titulo' => 'BBL',                        'url' => $ap . 'bbl/' ),
                        array( 'titulo' => 'Moxi',                       'url' => $ap . 'moxi/' ),
                        array( 'titulo' => 'Morpheus',                   'url' => $ap . 'morpheus8/' ),
                        array( 'titulo' => 'Clear & Brillant',           'url' => $ap . 'clear-brilliant/' ),
                    ),
                ),
                array(
                    'titulo' => 'Corporales',
                    'url'    => $bm . 'medical-corporales/',
                    'items'  => array(
                        array( 'titulo' => 'Thermage by Soltan Medical', 'url' => $ap . 'thermage-by-soltan-medical/' ),
                        array( 'titulo' => 'Morpheus 8',                 'url' => $ap . 'morpheus8/' ),
                        array( 'titulo' => 'Vasculaze',                  'url' => $ap . 'vasculaze/' ),
                        array( 'titulo' => 'BBL',                        'url' => $ap . 'bbl/' ),
                        array( 'titulo' => 'Clear & Brillant',           'url' => $ap . 'clear-brilliant/' ),
                    ),
                ),
                array(
                    'titulo' => 'Tricología',
                    'url'    => $bm . 'medical-tricologia/',
                    'items'  => array(),
                ),
            ),
        ),

        'salud' => array(
            'titulo'   => 'Salud',
            'imagen'   => $dir . 'salud.jpg',
            'url'      => '#',
            'filas'    => array(
                array(
                    array(
                        'titulo' => 'Ginecología',
                        'url'    => '/servicios/ginecologia/',
                        'items'  => array(
                            array( 'titulo' => 'Empower', 'url' => $ap . 'empower/' ),
                        ),
                    ),
                    array(
                        'titulo' => 'Oftalmología',
                        'url'    => '/servicios/oftalmologia/',
                        'items'  => array(
                            array( 'titulo' => 'Morpheus', 'url' => $ap . 'morpheus8/' ),
                            array( 'titulo' => 'Thermage', 'url' => $ap . 'thermage-by-soltan-medical/' ),
                        ),
                    ),
                    array(
                        'titulo' => 'Vascular',
                        'url'    => '/servicios/vascular/',
                        'items'  => array(
                            array( 'titulo' => 'Vasculize', 'url' => $ap . 'vasculaze/' ),
                        ),
                    ),
                ),
                array(
                    array(
                        'titulo' => 'Nutrición',
                        'url'    => '/servicios/nutricion/',
                        'items'  => array(
                            array( 'titulo' => 'Tanita', 'url' => $ap . 'tanita/' ),
                        ),
                    ),
                    array(
                        'titulo' => 'Psicología',
                        'url'    => '/servicios/psicologia/',
                        'items'  => array(),
                    ),
                ),
            ),
        ),

        'wellness' => array(
            'titulo'   => 'Wellness',
            'imagen'   => $dir . 'wellness.PNG',
            'url'      => '#',
            'columnas' => array(
                array(
                    'titulo' => 'Maternidad',
                    'url'    => '/protocolos/protocolo-maternidad/',
                    'items'  => array(),
                ),
                array(
                    'titulo' => 'Oncológico',
                    'url'    => '/protocolos/protocolo-oncologico/',
                    'items'  => array(),
                ),
                array(
                    'titulo' => 'Peso saludable',
                    'url'    => '/protocolos/protocolo-peso-saludable/',
                    'items'  => array(),
                ),
                array(
                    'titulo' => 'Menopausia',
                    'url'    => '/protocolos/protocolo-menopausia/',
                    'items'  => array(),
                ),
                array(
                    'titulo' => 'Longevidad',
                    'url'    => '/protocolos/protocolo-longevidad/',
                    'items'  => array(),
                ),
            ),
        ),

    );
}