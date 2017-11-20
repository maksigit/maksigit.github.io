<?php
get_header();
/*
Template name: Page with contact
*/
?>
    <div class="container">
        <h2>Contacts</h2>
        <ul class="wrap-posts">
            <?php
            global $post;
//            $args = array('posts_per_page' => 6);
            $myposts = get_posts();
            foreach ($myposts as $post) {
                setup_postdata($post);
                ?>
                <div class="wrap-item">
                    <li><a href="<?php the_permalink(); ?>"
                           class="link-post"><?php the_title(); ?>
                        </a></li>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </ul>

    </div>

<?php get_footer(); ?>