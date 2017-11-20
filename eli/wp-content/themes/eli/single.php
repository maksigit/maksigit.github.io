<?php get_header(); ?>

<div class="single">
    <div class="container">
        <?php the_post() ?>
        <div class="wrap-header space-beetween">
            <div class="wrap-title space-beetween">
                <div class="title"> <?php the_title() ?></div>
                <div class="for-sale">For Sale</div>
            </div>
            <div class="price">
                <?php if (get_field('price')): ?>
                    <?php the_field('price'); ?>
                <?php endif; ?>
            </div>
        </div>
        <div class="wrap-header-bottom space-beetween">
            <div class="address-home">
                <?php if (get_field('addess-home')): ?>
                    <?php the_field('addess-home'); ?>
                <?php endif; ?></div>
            <div class="kurs">$6,350.00/sq ft</div>
        </div>
        <?php the_post_thumbnail(); ?>

        <div class="wrap-content-side-bar space-beetween">
            <div class="content">
                <ul class="wrap-link">
                    <li><a href=""><i class="fa fa-clock-o" aria-hidden="true"></i>Shedule Showing</a></li>
                    <li><a href=""><i class="fa fa-envelope" aria-hidden="true"></i>Request Info</a></li>
                    <li><a href=""><i class="fa fa-heart" aria-hidden="true"></i>Save To Favorites</a></li>
                </ul>
                <div class="wrap-desc">
                    <div class="desk-map space-beetween">
                        <div class="desc">Description</div>
                        <div class="map">Open on Google Maps<i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    </div>
                    <?php the_content(); ?>
                </div>


                <div class="wrap-desc">
                    <div class="desk-map space-beetween">
                        <div class="desc">Featured</div>
                    </div>
                    <div class="item-check">
                        <?php if (get_field('check')): ?>
                            <ul>
                                <li><?php the_field('check'); ?></li>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="wrap-desc">
                    <div class="desk-map space-beetween">
                        <div class="desc">Featured</div>
                    </div>
                    <img src="<?php if (get_field('fetured')): ?>
                        <?php the_field('fetured'); ?>
                    <?php endif; ?>" alt="">
                </div>

            </div>
            <div class="side-bar">
                <?php
                if (function_exists('dynamic_sidebar'))
                    dynamic_sidebar('right-sidebar');
                ?>
            </div>
        </div>


        <div class="address">
            <?php if (get_field('addres-filed')): ?>
                <?php the_field('addres-filed'); ?>
            <?php endif; ?>
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>
