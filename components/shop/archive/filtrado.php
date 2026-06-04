<?php
/**
 * Component: Filtrado
 * Archivo: components/shop/archive/filtrado.php
 */

$padres_acordeon = array(
    'tipo-de-piel',
    'marca',
    'rutina',
    'zona-de-aplicacion',
    'ingredientes',
);
?>

<aside class="shop-filtrado">

    <!-- Grupo 1: flags -->
    <ul class="shop-filtrado__lista">

        <li class="shop-filtrado__item">
            <a href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>" class="shop-filtrado__link is-active">
                Todos los productos
            </a>
        </li>

        <?php
        $flags = get_terms( array(
            'taxonomy'   => 'product_cat',
            'parent'     => get_term_by( 'slug', 'flag-comercial', 'product_cat' )->term_id,
            'hide_empty' => false,
        ) );
        foreach ( $flags as $flag ) : ?>
            <li class="shop-filtrado__item">
                <a href="<?php echo get_term_link( $flag ); ?>" class="shop-filtrado__link">
                    <?php echo esc_html( $flag->name ); ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>

    <!-- Grupo 2: acordeones -->
    <ul class="shop-filtrado__lista shop-filtrado__lista--acordeones">

        <?php foreach ( $padres_acordeon as $slug ) :
            $padre = get_term_by( 'slug', $slug, 'product_cat' );
            if ( ! $padre ) continue;

            $hijos = get_terms( array(
                'taxonomy'   => 'product_cat',
                'parent'     => $padre->term_id,
                'hide_empty' => false,
            ) );
            if ( empty( $hijos ) ) continue;
        ?>
            <li class="shop-filtrado__item shop-filtrado__item--acordeon">
                <button class="shop-filtrado__acordeon-trigger">
                    <?php echo esc_html( $padre->name ); ?>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                    </svg>
                </button>
                <ul class="shop-filtrado__acordeon-lista">
                    <?php foreach ( $hijos as $hijo ) : ?>
                        <li class="shop-filtrado__acordeon-item">
                            <a href="<?php echo get_term_link( $hijo ); ?>" class="shop-filtrado__link">
                                <?php echo esc_html( $hijo->name ); ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </li>
        <?php endforeach; ?>

    </ul>

</aside>