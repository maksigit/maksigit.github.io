<div class="container-trening">
    <a href="<?php echo get_category_link(2); ?>">
        <div class="title">TRENDING PSYCHICS CATEGORIES</div>
    </a>
    <div class="subtitle">Chose from our Most Popular Psychics Services</div>
    <div class="category-test">
        <?php wp_list_categories(array(
            'show_option_all' => ''
        )); ?>
    </div>
    <div class="wrap-posts">
        <?php
        global $post;
        $args = array('posts_per_page' => 5, 'category' => 2);
        $myposts = get_posts($args);
        foreach ($myposts as $post) {
            setup_postdata($post);
            ?>
            <div class="item">
                <div class="item-title">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </div>
                <div class="item-img"><?php the_post_thumbnail() ?></div>
            </div>
            <?php

        }
        wp_reset_postdata();
        ?>
    </div>
</div>