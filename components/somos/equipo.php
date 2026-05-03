<?php
/**
 * Somos component: Equipo
 */
 
$miembros = get_posts( array(
    'post_type'      => 'equipo_medico',
    'posts_per_page' => -1,
    'orderby'        => 'menu_order',
    'order'          => 'ASC',
) );
 
if ( empty( $miembros ) ) return;
?>
 
<section class="somos-equipo">
 
    <div class="somos-equipo__col-tag">
        <span class="somos-equipo__tag">El equipo</span>
    </div>
 
    <div class="somos-equipo__col-main">
 
        <div class="somos-equipo__grid-wrapper">
 
            <div class="somos-equipo__grid">
                <?php foreach ( $miembros as $miembro ) :
                    $foto   = get_field( 'em_foto',  $miembro->ID );
                    $cargo  = get_field( 'em_cargo', $miembro->ID );
                    $link   = get_field( 'em_link',  $miembro->ID );
                    $nombre = $miembro->post_title;
 
                    $tag   = $link ? 'a' : 'div';
                    $attrs = $link
                        ? 'href="' . esc_url( home_url( $link ) ) . '" class="somos-equipo__card"'
                        : 'class="somos-equipo__card"';
                ?>
                    <<?= $tag ?> <?= $attrs ?>>
 
                        <div class="somos-equipo__foto">
                            <?php if ( $foto ) : ?>
                                <img src="<?= esc_url( $foto['url'] ) ?>"
                                     alt="<?= esc_attr( $foto['alt'] ) ?>">
                            <?php endif; ?>
                        </div>
 
                        <div class="somos-equipo__info">
                            <span class="somos-equipo__nombre"><?= esc_html( $nombre ) ?></span>
                            <?php if ( $cargo ) : ?>
                                <span class="somos-equipo__cargo"><?= esc_html( $cargo ) ?></span>
                            <?php endif; ?>
                        </div>
 
                    </<?= $tag ?>>
                <?php endforeach; ?>
            </div>
 
            <div class="somos-equipo__fade">
            <button class="somos-equipo__ver-mas" aria-expanded="false">
    <span class="somos-equipo__ver-mas-label">Ver más</span>
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
    </svg>
</button>
            </div>
 
        </div>
 
    </div>
 
</section>