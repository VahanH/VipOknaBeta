<?php

/*
Template Name: Articles
*/
?>
<div>
    <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row articlenews">
            <div class="col-lg-3 col-sm-4 thumbnail under-thumbnail-margin"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
            <div class="col-lg-9 col-sm-8 caption">
                <h3><? the_title() ?></h3>
                <p><? the_content() ?></p>
                <a href="<? the_permalink(); ?>" class="btn btn-default button-right button-margin">Подробнее</a>
            </div>
        </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</div>

