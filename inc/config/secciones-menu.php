<?php
/**
 * Configuración: Secciones principales del menú
 */

function ilba_get_secciones_menu() {

    $dir = get_stylesheet_directory_uri() . '/images/menu/';
    $ap  = '/aparatologia/';
    $bm  = '/beauty_medical/';

    // --- Imágenes protocolos ---
    $slugs_protocolos = array(
        'maternidad'     => 'protocolo-maternidad',
        'oncologico'     => 'protocolo-oncologico',
        'peso-saludable' => 'protocolo-peso-saludable',
        'menopausia'     => 'protocolo-menopausia',
        'longevidad'     => 'protocolo-longevidad',
    );

    $imagenes_protocolos = array();
    foreach ( $slugs_protocolos as $key => $slug ) {
        $post = get_posts( array(
            'name'        => $slug,
            'post_type'   => 'protocolos',
            'post_status' => 'publish',
            'numberposts' => 1,
        ) );

        $imagenes_protocolos[ $key ] = $dir . 'wellness.PNG';

        if ( $post && function_exists( 'get_field' ) ) {
            $img = get_field( 'pr_imagen_hero', $post[0]->ID );
            if ( $img ) {
                $imagenes_protocolos[ $key ] = is_array( $img ) ? $img['url'] : $img;
            }
        }
    }

    // --- Imágenes centros (featured image) ---
    $centro_bilbao  = get_posts( array( 'name' => 'bilbao',  'post_type' => 'centro', 'post_status' => 'publish', 'numberposts' => 1 ) );
    $centro_donosti = get_posts( array( 'name' => 'donosti', 'post_type' => 'centro', 'post_status' => 'publish', 'numberposts' => 1 ) );

    $img_bilbao  = $centro_bilbao  ? get_the_post_thumbnail_url( $centro_bilbao[0]->ID,  'large' ) : $dir . 'wellness.PNG';
    $img_donosti = $centro_donosti ? get_the_post_thumbnail_url( $centro_donosti[0]->ID, 'large' ) : $dir . 'wellness.PNG';
    $img_eventos = $dir . 'wellness.PNG'; // reemplaza con imagen de eventos cuando la tengas

    return array(

        'beauty' => array(
            'titulo'      => 'Beauty',
            'descripcion' => 'Tratamientos de belleza facial, corporal y micropigmentación para realzar tu mejor versión.',
            'imagen'      => $dir . 'beauty2.png',
            'imagen_sv'   => $dir . 'beauty.PNG',
            'url'         => '#',
            'columnas'    => array(
                array(
                    'titulo' => 'Tratamientos faciales',
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
                    'titulo' => 'Tratamientos corporales',
                    'url'    => $bm . 'beauty-corporal/',
                    'items'  => array(
                        array( 'titulo' => 'Evolvex',                  'url' => $ap . 'evolvex/' ),
                        array( 'titulo' => 'Indiba CT8',               'url' => $ap . 'indiba-ct8/' ),
                        array( 'titulo' => 'Forma',                    'url' => $ap . 'forma-inmode/' ),
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
            'titulo'      => 'Medical',
            'descripcion' => 'Tratamientos médico-estéticos faciales, corporales y capilares con tecnología de vanguardia.',
            'imagen'      => $dir . 'cambioheader.webp',
            'imagen_sv'   => $dir . 'cambiocarru.webp',
            'url'         => '#',
            'columnas'    => array(
                array(
                    'titulo' => 'Tratamientos faciales',
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
                    'titulo' => 'Tratamientos corporales',
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
            'titulo'      => 'Salud',
            'descripcion' => 'Servicios médicos especializados para tu bienestar integral.',
            'imagen'      => $dir . 'salud.jpg',
            'imagen_sv'   => $dir . 'AmenuSalud.webp',
            'url'         => '#',
            'filas'       => array(
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
                            array( 'titulo' => 'Vasculaze', 'url' => $ap . 'vasculaze/' ),
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
                    array(
                        'titulo' => 'Traumatología',
                        'url'    => '/servicios/traumatologia/',
                        'items'  => array(),
                    ),
                ),
            ),
        ),

        'wellness' => array(
            'titulo'      => 'Wellness',
            'descripcion' => 'Protocolos personalizados para cada etapa de tu vida.',
            'imagen'      => $dir . 'wellness.webp',
            'imagen_sv'   => $dir . 'AmenuWellness.webp',
            'url'         => '#',
            'tipo'        => 'wellness',
            'label'       => 'Protocolos',
            'label_url'   => '',
            'protocolos'  => array(
                array( 'titulo' => 'Maternidad',     'url' => '/protocolos/protocolo-maternidad/',     'imagen' => $imagenes_protocolos['maternidad'] ),
                array( 'titulo' => 'Oncológico',     'url' => '/protocolos/protocolo-oncologico/',     'imagen' => $imagenes_protocolos['oncologico'] ),
                array( 'titulo' => 'Peso saludable', 'url' => '/protocolos/protocolo-peso-saludable/', 'imagen' => $imagenes_protocolos['peso-saludable'] ),
                array( 'titulo' => 'Menopausia',     'url' => '/protocolos/protocolo-menopausia/',     'imagen' => $imagenes_protocolos['menopausia'] ),
                array( 'titulo' => 'Longevidad',     'url' => '/protocolos/protocolo-longevidad/',     'imagen' => $imagenes_protocolos['longevidad'] ),
            ),
        ),

        'somos' => array(
            'titulo'      => 'Somos',
            'descripcion' => '',
            'imagen'      => $dir . 'recepcionChicas.webp',
            'imagen_sv'   => $dir . 'recepcionChicas.webp',
            'url'         => '/somos/',
            'tipo'        => 'wellness',
            'label'       => 'Sobre ILBA',
            'label_url'   => '/somos/',
            'protocolos'  => array(
                array( 'titulo' => 'Centro Bilbao',   'url' => '/centro/bilbao/',  'imagen' => $img_bilbao ),
                array( 'titulo' => 'Centro Donosti',  'url' => '/centro/donosti/', 'imagen' => $img_donosti ),
                array( 'titulo' => 'Nuestros eventos','url' => '/eventos/',        'imagen' => $img_eventos ),
            ),
        ),

    );
}