<?php
get_header();
?>

        <?php while (have_posts()) : the_post(); ?>
            <div class="item">
                <a href="<?php the_permalink();?>"> <h1><?php the_title(); ?></h1></a>

                <?php the_content(); ?>
            </div>
        <?php endwhile; ?>

<?php
get_footer();

?>
