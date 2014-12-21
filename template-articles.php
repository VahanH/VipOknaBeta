<?php
/*
Template Name: Articles
*/
?>
<div>
    <?php $query = new WP_Query( array( 'category_name' => 'articles') );
    if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div class="row articlenews">
                <div class="col-xs-4 thumbnail"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
                <div class="col-xs-8 caption">
                    <h3><? the_title() ?></h3>
                    <p><? the_content() ?></p>
                    <button type="button" class="btn btn-default">Подробнее</button>
                </div>
        </div>
    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();
    ?>
</div>