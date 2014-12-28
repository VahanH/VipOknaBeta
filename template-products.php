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
            <li role="presentation" class="<?=$first?>"><a href="#<?=get_the_ID()?>" role="tab" data-toggle="tab" aria-controls="<?=get_the_ID()?>" aria-expanded="false"><h5><? the_title() ?></h5></a></li>

    <?
    $first="";
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();

    ?>
</ul>

<div class="row prod_info margin-bottom">
    <div class="tab-content">
<?php $query = new WP_Query( array( 'category_name' => 'products') );
$first="active in";
if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
        <div id="<?=get_the_ID() ?>" role="tabpanel" class="product_img tab-pane fade <?=$first;?>" aria-labelledby="<? the_title() ?>">
           <div class="col-lg-3 col-sm-4 thumbnail"> <? echo get_the_post_thumbnail($id,'medium');?></div>
            <div class="col-lg-9 col-sm-8"><p><? the_content() ?></p></div>
        </div>
<?
$first="";
endwhile;
endif;
// Reset Query
//wp_reset_query();

?>
        <button type="button" class="btn btn-danger button-right button-margin prod-btn">Рассчитать стоимость</button>
    </div>
</div>

<div class="row info">
    <?php $query = new WP_Query( array( 'category_name' => 'Info') );
    if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
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