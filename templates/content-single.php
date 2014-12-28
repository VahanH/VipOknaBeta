<?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <div class="col-xs-12">
      <div>
        <h3><? the_title() ?></h3>
        <div class="alignleft articleimg"><? echo get_the_post_thumbnail($id, 'medium'); ?></div>
        <div>
          <p><? the_content() ?></p>
        </div>
      </div>
    </div>
  </article>
<?php endwhile; ?>
