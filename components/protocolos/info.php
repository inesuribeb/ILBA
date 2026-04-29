<?php
/**
 * Protocolos component: Info
 */

$descripcion = get_field( 'pr_descripcion' );
$imagen_2    = get_field( 'pr_imagen_2' );

$indicados = array();
for ( $i = 1; $i <= 5; $i++ ) {
    $item = get_field( 'pr_indicado_' . $i );
    if ( $item ) $indicados[] = $item;
}
?>

<section class="pr-info" id="pr-info">

    <div class="pr-info__imagen">
        <?php if ( $imagen_2 ) : ?>
            <img src="<?php echo esc_url( $imagen_2['url'] ); ?>"
                 alt="<?php echo esc_attr( $imagen_2['alt'] ); ?>">
        <?php endif; ?>
    </div>

    <div class="pr-info__content">

        <?php if ( $descripcion ) : ?>
            <p class="pr-info__descripcion"><?php echo esc_html( $descripcion ); ?></p>
        <?php endif; ?>

        <?php if ( ! empty( $indicados ) ) : ?>
            <div class="pr-info__indicados">
                <p class="pr-info__indicados-titulo">Este protocolo está indicado para:</p>
                <ul class="pr-info__indicados-lista">
                    <?php foreach ( $indicados as $item ) : ?>
                        <li><?php echo esc_html( $item ); ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

    </div>

</section>