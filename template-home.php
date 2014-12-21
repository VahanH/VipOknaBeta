<?php
/*
Template Name: Home
*/
?>
    <div id="owl-example" class="owl-carousel">
        <div class="general-slider"><img class="" src="<?php bloginfo('template_url'); ?>/assets/img/slide1.jpg"></div>
        <div class="general-slider"><img src="<?php bloginfo('template_url'); ?>/assets/img/retro_dra_69.jpg"></div>
    </div>
<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>

<?php $query = new WP_Query( array( 'category_name' => 'Info') );
if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
<div class="row">
    <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
            <img data-src="<? echo get_the_post_thumbnail($id, 'medium'); ?>" alt="...">
            <div class="caption">
                <h3><? the_title() ?></h3>
                <p><? the_content() ?></p>
                <p><a href="#" class="btn btn-primary" role="button">Кнопка</a> <a href="#" class="btn btn-default" role="button">Кнопка</a></p>
            </div>
        </div>
    </div>
</div>

<?
endwhile;
endif;
// Reset Query
//wp_reset_query();

?>