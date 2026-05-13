<?php
/**
 * Template: Page (todas las páginas estáticas)
 */
get_header();
?>

<main class="page-default">
    <div class="page-default__container">
        <?php while ( have_posts() ) : the_post(); ?>
            <article class="page-default__content">
                <h1 class="page-default__title"><?php the_title(); ?></h1>
                <div class="page-default__body">
                    <?php the_content(); ?>
                </div>
            </article>
        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>