<?php
/**
 * Template: Page (todas las páginas estáticas)
 */
get_header();
?>

<main class="legal-page">
    <?php while ( have_posts() ) : the_post(); ?>
        <h1 class="legal-page__title"><?php the_title(); ?></h1>
        <div class="legal-page__body">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>