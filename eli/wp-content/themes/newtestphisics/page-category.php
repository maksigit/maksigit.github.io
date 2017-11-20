<?php
get_header();
/*
Template name: Page with category
*/
?>
    <div class="category-test">

        <?php
        $a=1;
        $categories = get_categories(array(
                'type' => 'post'
        ))?>

        <?php foreach( $categories as $cat ):?>

            <div>
                <a href="<?php echo get_category_link($cat->cat_ID);?>"><h2><?php echo $cat->name;?></h2></a>
                <p><?php echo $cat->description;?></p>
<!--           --><?php //echo $cat->name;
////            echo $cat->cat_ID;
//            echo get_category_link($cat->cat_ID);?>
            </div>
        <?php endforeach;?>
<!--        --><?php //wp_list_categories(array(
//            'show_option_all' => ''
//        )); ?>
    </div>

<?php //while (have_posts()) : the_post(); ?>
<!--    <main>-->
<!--        <div class="container">-->
<!--            <h1>--><?php //the_title(); ?><!--</h1>-->
<!---->
<!--            --><?php //the_content(); ?>
<!--        </div>-->
<!--    </main>-->
<?php //endwhile; ?>
<?php get_template_part('./template-parts/category'); ?>

<?php get_footer(); ?>