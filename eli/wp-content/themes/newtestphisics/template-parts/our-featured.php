<div class="container-our-featured">
    <a href="<?php echo get_category_link(3); ?>">
        <div class="title">OUR FEATURED PSYCHICS</div>
    </a>
    <div class="subtitle">Chose from our Most Popular Psychics Services</div>
    <div class="wrap-posts">
        <?php
        global $post;
        $args = array(
            'numberposts' => 5,
            'category_name' => 'featured'
        );
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

        <!--        --><?php //while (have_posts()) : the_post(); ?>
        <!--            <div class="item">-->
        <!--                <h1>--><?php //the_title(); ?><!--</h1>-->
        <!---->
        <!--                --><?php //the_content(); ?>
        <!--            </div>-->
        <!--        --><?php //endwhile; ?>
    </div>
</div>