<div class="container-our-popular">
   <a href="<?php echo get_category_link( 3 ); ?>">

       <div class="title">OUR POPULAR PSYCHICS </div>

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
    <div class="button"><a href="#">Browse more Psychics</a> </div>
</div>