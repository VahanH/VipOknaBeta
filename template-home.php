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
    <?php get_template_part('templates/page', 'header'); ?>
    <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>