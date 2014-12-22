<?php
/*
Template Name: Products
*/
?>

<?php while (have_posts()) : the_post(); ?>
    <?php get_template_part('templates/content', 'page'); ?>
<?php endwhile; ?>
<ul id="myTab" class="nav nav-tabs" role="tablist">
    <?php $query = new WP_Query( array( 'category_name' => 'products') );
    $first="active";
    if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
            <li role="presentation" class="<?=$first?>"><a href="#<?=get_the_ID()?>" role="tab" data-toggle="tab" aria-controls="<?=get_the_ID()?>" aria-expanded="false"><? the_title() ?></a></li>

    <?
    $first="";
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();

    ?>
</ul>

<div class="row">
    <div class="tab-content">
<?php $query = new WP_Query( array( 'category_name' => 'products') );
$first="active in";
if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div id="<?=get_the_ID() ?>" role="tabpanel" class="tab-pane fade <?=$first;?>" aria-labelledby="<? the_title() ?>">
           <div class="col-xs-4"> <? echo get_the_post_thumbnail($id,'medium');?></div>
            <div class="col-xs-8"><p><? the_content() ?></p></div>
        </div>
<?
$first="";
endwhile;
endif;
// Reset Query
//wp_reset_query();

?>
    </div>
</div>

