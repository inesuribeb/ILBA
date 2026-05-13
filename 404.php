<?php
/**
 * Template para errores 404 (página no encontrada)
 */
get_header();
?>

<main class="error-404">
    <div class="error-404__container">
        <span class="error-404__code">404</span>
        <h1 class="error-404__title">Página no encontrada</h1>
        <p class="error-404__text">
            Lo sentimos, la página que buscas no existe o ha sido movida.
        </p>

        <div class="error-404__actions">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="error-404__btn">
                Volver al inicio
            </a>
            <a href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>" class="error-404__btn error-404__btn--secondary">
                Contáctanos
            </a>
        </div>

        <div class="error-404__suggestions">
            <p class="error-404__suggestions-title">Quizá te interese</p>

            <div class="error-404__suggestions-group">
                <span class="error-404__suggestions-label">Beauty &amp; Medical</span>
                <ul class="error-404__suggestions-list">
                    <li><a href="<?= esc_url( home_url( 'beauty/beauty-facial/' ) ) ?>">Estética facial</a></li>
                    <li><a href="<?= esc_url( home_url( 'beauty/beauty-corporal/' ) ) ?>">Estética corporal</a></li>
                    <li><a href="<?= esc_url( home_url( 'medical/medical-faciales/' ) ) ?>">Faciales médicos</a></li>
                    <li><a href="<?= esc_url( home_url( 'medical/medical-corporales/' ) ) ?>">Corporales médicos</a></li>
                    <li><a href="<?= esc_url( home_url( 'aparatologia/' ) ) ?>">Aparatología</a></li>
                </ul>
            </div>

            <div class="error-404__suggestions-group">
                <span class="error-404__suggestions-label">Especialidades médicas</span>
                <ul class="error-404__suggestions-list">
                    <li><a href="<?= esc_url( home_url( 'servicios/ginecologia/' ) ) ?>">Ginecología</a></li>
                    <li><a href="<?= esc_url( home_url( 'servicios/oftalmologia/' ) ) ?>">Oftalmología</a></li>
                    <li><a href="<?= esc_url( home_url( 'servicios/vascular/' ) ) ?>">Vascular</a></li>
                    <li><a href="<?= esc_url( home_url( 'servicios/nutricion/' ) ) ?>">Nutrición</a></li>
                    <li><a href="<?= esc_url( home_url( 'servicios/psicologia/' ) ) ?>">Psicología</a></li>
                    <li><a href="<?= esc_url( home_url( 'servicios/traumatologia/' ) ) ?>">Traumatología</a></li>
                </ul>
            </div>

            <div class="error-404__suggestions-group">
    <span class="error-404__suggestions-label">Protocolos Wellness</span>
    <ul class="error-404__suggestions-list">
        <li><a href="<?= esc_url( home_url( 'protocolos/protocolo-maternidad/' ) ) ?>">Maternidad</a></li>
        <li><a href="<?= esc_url( home_url( 'protocolos/protocolo-oncologico/' ) ) ?>">Oncológico</a></li>
        <li><a href="<?= esc_url( home_url( 'protocolos/protocolo-peso-saludable/' ) ) ?>">Peso saludable</a></li>
        <li><a href="<?= esc_url( home_url( 'protocolos/protocolo-menopausia/' ) ) ?>">Menopausia</a></li>
        <li><a href="<?= esc_url( home_url( 'protocolos/protocolo-longevidad/' ) ) ?>">Longevidad</a></li>
    </ul>
</div>
        </div>
    </div>
</main>

<?php get_footer(); ?>