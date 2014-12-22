<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="col-xs-12">
      <div class="thumbnail">
        <div class="thumb"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
        <div class="caption">
          <h3><? the_title() ?></h3>
          <p><? the_content() ?></p>
        </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>
