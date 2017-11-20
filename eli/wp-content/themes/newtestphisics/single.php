<?php get_header(); ?>

<?php the_post() ?>
    <div class="single-content">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
    </div>


<?php get_footer(); ?>
