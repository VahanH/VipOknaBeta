<?php

/*
Template Name: Articles
*/
?>
<div>
    <?php  if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="row articlenews">
            <div class="col-lg-3 col-sm-4 thumbnail under-thumbnail-margin"><a href="<? the_permalink(); ?>"><? echo get_the_post_thumbnail($id, 'medium'); ?></a></div>
            <div class="col-lg-9 col-sm-8 caption">
                <div class="caption-text">
                    <h3><a href="<? the_permalink(); ?>"><? the_title() ?></a></h3>
                    <?php

                    $content = get_the_content();
                    $trimmed_content = wp_trim_words( $content, 70 );
                    echo $trimmed_content;

                    ?>
                </div>
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

