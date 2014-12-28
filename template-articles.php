<?php

/*
Template Name: Articles
*/
?>
<div>
    <?php $category_name=str_replace("/", "",get_the_title() ); $query = new WP_Query(array('category_name' => $category_name ));
    if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
        <div class="row articlenews">
            <div class="col-sm-3 col-xs-12 thumbnail under-thumbnail-margin"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
            <div class="col-sm-9 col-xs-12 caption">
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

