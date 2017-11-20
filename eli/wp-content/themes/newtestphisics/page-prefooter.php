<?php
get_header();
/*
Template name: Page with pre-footer
*/
?>
<?php while (have_posts()) : the_post(); ?>
    <main>
        <div class="container">
            <h1><?php the_title(); ?></h1>

            <?php the_content(); ?>
        </div>
    </main>
<?php endwhile; ?>
<?php get_template_part('./template-parts/prefooter'); ?>

<?php get_footer(); ?>