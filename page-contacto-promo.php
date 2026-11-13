<?php
/**
 * Template Name: Contacto Promo
 * Archivo: page-contacto-promo.php
 */

get_header();

// ID de la imagen en la Biblioteca de medios (lo ves en la URL al editarla: post=123)
$foto_id = 123;
?>

<main id="main" class="page-contacto">

    <!-- Intro -->
    <section class="ct-intro">

        <div class="ct-intro__foto-wrapper">
            <div class="ct-intro__foto">
                <?php echo wp_get_attachment_image( $foto_id, 'full' ); ?>
            </div>
        </div>

        <div class="ct-intro__content">
            <h1 class="ct-intro__titulo">Título de la página</h1>
            <p class="ct-intro__subtitulo">
                Primera línea del subtítulo<br>
                Segunda línea del subtítulo
            </p>
        </div>

    </section>

    <!-- Info + Form -->
    <section class="ct-form-section">

        <div class="ct-form-section__info">

            <!-- Donosti -->
            <div class="ct-info__centro">
                <p class="ct-info__centro-titulo">Donosti</p>

                <div class="ct-info__item">
                    <span class="ct-info__label">Teléfono</span>
                    <a href="tel:+34600000000" class="ct-info__valor">600 000 000</a>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Email</span>
                    <a href="mailto:donosti@ejemplo.com" class="ct-info__valor">donosti@ejemplo.com</a>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Dirección</span>
                    <p class="ct-info__valor">Calle Ejemplo 1<br>20000 Donostia</p>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Horario</span>
                    <p class="ct-info__valor">L–V: 10:00–20:00<br>S: 10:00–14:00</p>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Instagram</span>
                    <a href="https://instagram.com/usuario" class="ct-info__valor" target="_blank" rel="noopener noreferrer">@usuario</a>
                </div>
            </div>

            <!-- Bilbao -->
            <div class="ct-info__centro">
                <p class="ct-info__centro-titulo">Bilbao</p>

                <div class="ct-info__item">
                    <span class="ct-info__label">Teléfono</span>
                    <a href="tel:+34600000000" class="ct-info__valor">600 000 000</a>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Email</span>
                    <a href="mailto:bilbao@ejemplo.com" class="ct-info__valor">bilbao@ejemplo.com</a>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Dirección</span>
                    <p class="ct-info__valor">Calle Ejemplo 1<br>48000 Bilbao</p>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Horario</span>
                    <p class="ct-info__valor">L–V: 10:00–20:00<br>S: 10:00–14:00</p>
                </div>

                <div class="ct-info__item">
                    <span class="ct-info__label">Instagram</span>
                    <a href="https://instagram.com/usuario" class="ct-info__valor" target="_blank" rel="noopener noreferrer">@usuario</a>
                </div>
            </div>

        </div>

        <div class="ct-form-section__form">
            <?php echo do_shortcode( '[contact-form-7 id="66d4550" title="Contacto-promo"]' ); ?>
        </div>

    </section>

</main>

<?php get_footer(); ?>