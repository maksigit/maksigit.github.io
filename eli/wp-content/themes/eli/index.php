<?php
get_header();
?>
<div class="wrap-main">
    <div class="banner">
        <img src="http://elibakhtiari.com/wp-content/uploads/2017/09/background.jpg" alt="eli">
    </div>
    <div class="container">
        <h2>Featured Neighbourhoods</h2>
        <ul class="wrap-posts">
            <?php
            global $post;
            $args = array('posts_per_page' => 6);
            $myposts = get_posts($args);
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>
                <div class="wrap-item">
                    <li><a href="<?php the_permalink(); ?>"
                           class="link-post">
                            <?php the_post_thumbnail(array(320, 320)); ?>
                            <div class="thumbnail-background"><?php the_title(); ?></div>
                        </a></li>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </ul>

    </div>
</div>


<?php
get_footer();
?>



