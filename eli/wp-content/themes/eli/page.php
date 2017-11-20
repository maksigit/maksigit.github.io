<?php get_header(); ?>

    <ul>
        <?php
        global $post;
        $args = array( 'posts_per_page' => 5);
        $myposts = get_posts( $args );
        foreach( $myposts as $post ){ setup_postdata($post);
            ?>
            <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        }
        wp_reset_postdata();
        ?>
    </ul>

<?php while (have_posts()) : the_post(); ?>


<!--    <li><a href="--><?php //the_permalink(); ?><!--">--><?php //the_title(); ?><!--</a></li>-->
    <?php the_content(); ?>

<?php endwhile; ?>

<?php get_footer(); ?>