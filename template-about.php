<?php
/*
Template Name: About
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<div class="clear"></div>
<div class="row info">
    <?php $query = new WP_Query( array( 'category_name' => 'about-icons') );
    if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div class="col-md-6">
            <div class="thumbnail">
                <div class="thumb"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
                <div class="caption">
                    <h3><? the_title() ?></h3>
                    <p><? the_content() ?></p>
                </div>
            </div>
        </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</div>