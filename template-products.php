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
    if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post();?>
            <li role="presentation" class=""><a href="#profile" role="tab" id="<? the_title() ?>" data-toggle="tab" aria-controls="profile" aria-expanded="false"><? the_title() ?></a></li>

    <?
    endwhile;
    endif;
    // Reset Query
    //wp_reset_query();

    ?>
</ul>
