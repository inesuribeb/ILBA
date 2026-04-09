<?php
/**
 * Footer
 */

// Campos dinámicos ACF — se leen desde la front page
$footer_page_id = url_to_postid( home_url( '/footer/' ) );
$email          = get_field( 'footer_email',       $footer_page_id );
$telefono       = get_field( 'footer_telefono',    $footer_page_id );
$direccion = get_field( 'footer_direccion', $footer_page_id );
$horario        = get_field( 'footer_horario',     $footer_page_id );
$descripcion    = get_field( 'footer_descripcion', $footer_page_id );

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

    <!-- BLOQUE SUPERIOR -->
    <div class="footer__top">

        <!-- Columna izquierda: logo + descripción -->
        <div class="footer__top-izq">
            <p class="footer__logo">ILBA International</p>
            <?php if ( $descripcion ) : ?>
        <div class="footer__descripcion-wrapper">
            <p class="footer__descripcion"><?php echo esc_html( $descripcion ); ?></p>
        </div>
    <?php endif; ?>
        </div>

        <!-- Columna derecha: dos filas -->
        <div class="footer__top-der">

            <!-- Fila 1: contacto + RRSS -->
            <div class="footer__contacto">
                <div class="footer__contacto-col">
                    <?php if ( $email ) : ?>
                        <a href="mailto:<?php echo esc_attr( $email ); ?>" class="footer__link">
                            <?php echo esc_html( $email ); ?>
                        </a>
                    <?php endif; ?>
                    <?php if ( $telefono ) : ?>
                        <a href="tel:<?php echo esc_attr( $telefono ); ?>" class="footer__link">
                            <?php echo esc_html( $telefono ); ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="footer__contacto-col">
                <p class="footer__direccion">
    <?php echo wp_kses_post( nl2br( esc_html( $direccion ) ) ); ?>
</p>
                    <?php if ( $horario ) : ?>
                        <p class="footer__horario"><?php echo nl2br( esc_html( $horario ) ); ?></p>
                    <?php endif; ?>
                </div>
                <div class="footer__contacto-col">
                    <?php foreach ( $rrss as $red ) : ?>
                        <a href="<?php echo esc_url( $red['link'] ); ?>"
                           class="footer__link"
                           target="_blank"
                           rel="noopener noreferrer">
                            <?php echo esc_html( $red['nombre'] ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- Fila 2: navegación -->
            <div class="footer__nav">
                <div class="footer__nav-col">
                    <p class="footer__nav-titulo">Tratamientos</p>
                    <nav>
                        <a href="#" class="footer__nav-link">Beauty</a>
                        <a href="#" class="footer__nav-link">Medical</a>
                        <a href="#" class="footer__nav-link">Salud</a>
                        <a href="#" class="footer__nav-link">Wellness</a>
                    </nav>
                </div>
                <div class="footer__nav-col">
                    <p class="footer__nav-titulo">Ilba</p>
                    <nav>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'somos' ) ) ); ?>" class="footer__nav-link">Somos</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'eventos' ) ) ); ?>" class="footer__nav-link">Nuestros eventos</a>
                    </nav>
                </div>
                <div class="footer__nav-col">
                    <p class="footer__nav-titulo">Info</p>
                    <nav>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'legal' ) ) ); ?>" class="footer__nav-link">Legal</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'privacidad' ) ) ); ?>" class="footer__nav-link">Privacidad</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'cookies' ) ) ); ?>" class="footer__nav-link">Cookies</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'compras' ) ) ); ?>" class="footer__nav-link">Compras</a>
                        <a href="<?php echo esc_url( get_permalink( get_page_by_path( 'devoluciones' ) ) ); ?>" class="footer__nav-link">Devoluciones</a>
                    </nav>
                </div>
            </div>

        </div>

    </div>

    <!-- BLOQUE INFERIOR -->
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

</footer>

<?php wp_footer(); ?>
</body>
</html>