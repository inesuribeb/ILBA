<?php
/**
 * Footer
 */

$footer_page_id = url_to_postid( home_url( '/footer/' ) );

$bilbao_email     = get_field( 'footer_bilbao_email',     $footer_page_id );
$bilbao_telefono  = get_field( 'footer_bilbao_telefono',  $footer_page_id );
$bilbao_direccion = get_field( 'footer_bilbao_direccion', $footer_page_id );
$bilbao_horario   = get_field( 'footer_bilbao_horario',   $footer_page_id );

$donosti_email     = get_field( 'footer_donosti_email',     $footer_page_id );
$donosti_telefono  = get_field( 'footer_donosti_telefono',  $footer_page_id );
$donosti_direccion = get_field( 'footer_donosti_direccion', $footer_page_id );
$donosti_horario   = get_field( 'footer_donosti_horario',   $footer_page_id );

$descripcion = get_field( 'footer_descripcion', $footer_page_id );

$rrss = array();
for ( $i = 1; $i <= 4; $i++ ) {
    $nombre = get_field( 'footer_rrss_' . $i . '_nombre', $footer_page_id );
    $link   = get_field( 'footer_rrss_' . $i . '_link',   $footer_page_id );
    if ( $nombre && $link ) {
        $rrss[] = array( 'nombre' => $nombre, 'link' => $link );
    }
}
?>

<footer class="footer">

    <div class="footer__top">

        <div class="footer__top-izq">
            <p class="footer__logo">ILBA International</p>
            <?php if ( $descripcion ) : ?>
                <div class="footer__descripcion-wrapper">
                    <p class="footer__descripcion"><?php echo esc_html( $descripcion ); ?></p>
                </div>
            <?php endif; ?>
        </div>

        <div class="footer__top-der">

            <div class="footer__contacto">

                <!-- Donosti -->
                <div class="footer__contacto-col">
                    <p class="footer__nav-titulo">Donosti</p>
                    <?php if ( $donosti_direccion ) : ?>
                        <a class="footer__link" href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode( $donosti_direccion ); ?>" target="_blank" rel="noopener noreferrer">
                            <p class="footer__direccion"><?php echo wp_kses_post( nl2br( esc_html( $donosti_direccion ) ) ); ?></p>
                        </a>
                    <?php endif; ?>
                    <?php if ( $donosti_horario ) : ?>
                        <p class="footer__horario"><?php echo nl2br( esc_html( $donosti_horario ) ); ?></p>
                    <?php endif; ?>
                    <?php if ( $donosti_email ) : ?>
                        <a href="mailto:<?php echo esc_attr( $donosti_email ); ?>" class="footer__link">
                            <?php echo esc_html( $donosti_email ); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ( $donosti_telefono ) : ?>
                        <a href="tel:<?php echo esc_attr( $donosti_telefono ); ?>" class="footer__link">
                            <?php echo esc_html( $donosti_telefono ); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- Bilbao -->
                <div class="footer__contacto-col">
                    <p class="footer__nav-titulo">Bilbao</p>
                    <?php if ( $bilbao_direccion ) : ?>
                        <a class="footer__link" href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode( $bilbao_direccion ); ?>" target="_blank" rel="noopener noreferrer">
                            <p class="footer__direccion"><?php echo wp_kses_post( nl2br( esc_html( $bilbao_direccion ) ) ); ?></p>
                        </a>
                    <?php endif; ?>
                    <?php if ( $bilbao_horario ) : ?>
                        <p class="footer__horario"><?php echo nl2br( esc_html( $bilbao_horario ) ); ?></p>
                    <?php endif; ?>
                    <?php if ( $bilbao_email ) : ?>
                        <a href="mailto:<?php echo esc_attr( $bilbao_email ); ?>" class="footer__link">
                            <?php echo esc_html( $bilbao_email ); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ( $bilbao_telefono ) : ?>
                        <a href="tel:<?php echo esc_attr( $bilbao_telefono ); ?>" class="footer__link">
                            <?php echo esc_html( $bilbao_telefono ); ?>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- RRSS -->
                <div class="footer__contacto-col">
                    <?php foreach ( $rrss as $red ) : ?>
                        <a href="<?php echo esc_url( $red['link'] ); ?>" class="footer__link footer__link--rrss" target="_blank" rel="noopener noreferrer">
                            <?php if ( strpos( $red['link'], 'instagram.com' ) !== false ) : ?>
                                <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/insta-icon.png' ); ?>" alt="" class="footer__link-icon">
                            <?php endif; ?>
                            <?php echo esc_html( $red['nombre'] ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

            </div>

            <div class="footer__nav">

                <div class="footer__nav-col">
                    <p class="footer__nav-titulo">Tratamientos</p>
                    <nav>
                        <a href="<?php echo esc_url( home_url( 'beauty/beauty-facial/' ) ); ?>" class="footer__nav-link">Estética facial</a>
                        <a href="<?php echo esc_url( home_url( 'beauty/beauty-corporal/' ) ); ?>" class="footer__nav-link">Estética corporal</a>
                        <a href="<?php echo esc_url( home_url( 'medical/medical-faciales/' ) ); ?>" class="footer__nav-link">Faciales médicos</a>
                        <a href="<?php echo esc_url( home_url( 'medical/medical-corporales/' ) ); ?>" class="footer__nav-link">Corporales médicos</a>
                        <a href="<?php echo esc_url( home_url( 'aparatologia/' ) ); ?>" class="footer__nav-link">Aparatología</a>
                    </nav>
                </div>

                <div class="footer__nav-col">
                    <p class="footer__nav-titulo">Ilba</p>
                    <nav>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'somos' ) ) ); ?>" class="footer__nav-link">Somos</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'eventos' ) ) ); ?>" class="footer__nav-link">Nuestros eventos</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'contacto' ) ) ); ?>" class="footer__nav-link">Contáctanos</a>
                    </nav>
                </div>

                <div class="footer__nav-col">
                    <p class="footer__nav-titulo">Info</p>
                    <nav>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'legal' ) ) ); ?>" class="footer__nav-link">Legal</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacidad' ) ) ); ?>" class="footer__nav-link">Privacidad</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'cookies' ) ) ); ?>" class="footer__nav-link">Cookies</a>
                    </nav>
                </div>

            </div>

        </div>

    </div>

    <div class="footer__bottom">
        <p class="footer__copyright">© ILBA International <?php echo date( 'Y' ); ?>. Todos los derechos reservados</p>
        <div class="footer__creditos-wrapper">
            <span class="footer__creditos">Créditos</span>
            <div class="footer__creditos-tooltip">
                Diseñado por
                <a href="https://virgulillaestudio.com/" target="_blank" rel="noopener noreferrer">Virgulilla Estudio</a>
                y
                <a href="https://estudio.inesuribe.es/" target="_blank" rel="noopener noreferrer">Estudio Ines Uribe</a>
            </div>
        </div>
    </div>

    <a href="https://wa.me/34679789560" class="footer__whatsapp" target="_blank" rel="noopener noreferrer" aria-label="Contactar por WhatsApp">
        <img src="<?php echo esc_url( get_stylesheet_directory_uri() . '/images/whatsicon2.png' ); ?>" alt="WhatsApp">
    </a>

</footer>

<?php wp_footer(); ?>
</body>
</html>