<?php
/*
Template Name: About
*/
?>

<?php while (have_posts()) : the_post(); ?>
   <div class="margin-bottom"> <?php get_template_part('templates/content', 'page'); ?></div>
<?php endwhile; ?>
<div class="clear"></div>
<?php $query = new WP_Query( array( 'category_name' => 'about-icons') ); $q=0;
if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $q++;
    if($q%2==1) echo '<div class="row">'; ?>
    <div class="col-md-6">
        <div class="thumbnail info">
            <div class="thumb"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
            <div class="caption">
                <h3><? the_title() ?></h3>
                <p><? the_content() ?></p>
            </div>
        </div>
    </div>
<?
    if($q%2==0) echo '</div>';
endwhile;
endif;
// Reset Query
//wp_reset_query();
?>