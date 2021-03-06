<?php
/*
Template Name: Home
*/
?>
<div id="owl-example" class="owl-carousel">
    <?php $query = new WP_Query(array('category_name' => 'slider'));
    if ($query->have_posts()) : while ($query->have_posts()) :
    $query->the_post(); ?>
    <div class="general-slider">
        <div class="sl-items">
            <? echo get_the_post_thumbnail($id); ?>
        </div>
        <div class="owl-under-img-text">
            <h2><? the_title() ?></h2>
            <p><? the_content() ?></p>
        </div>
    </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</div>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<div class="row info">
    <?php $query = new WP_Query(array('category_name' => 'Info'));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <div class="thumb under-thumbnail-margin"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
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