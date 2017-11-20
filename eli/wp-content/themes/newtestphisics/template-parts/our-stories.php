<div class="container-our-stories">
    <a href="<?php echo get_category_link(10); ?>">
        <div class="title">OUR STORIES</div>
    </a>
    <div class="subtitle">Chose from our Most Popular Psychics Services</div>
    <div class="wrap-posts">
        <?php
        global $post;
        $args = array(
            'numberposts' => 5,
            'category_name' => 'our-stories'
        );
        $myposts = get_posts($args);

        foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <div class="item">
                <div class="item-img"><?php the_post_thumbnail() ?></div>
                <div class="item-img"><?php the_content() ?></div>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="img-company">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php echo get_template_directory_uri(); ?>/images/layer-1174.png">
        </a>
    </div>
</div>