<footer class="content-info hidden-xs hidden-sm" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <nav class="vip-footer-nav" role="navigation">
      <?php
      if (has_nav_menu('footer_navigation')) :
        wp_nav_menu(array('theme_location' => 'footer_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav'));
      endif;
      ?>
    </nav>
  </div>
</footer>

<!-- Button trigger modal -->
<div class="btn btn-danger div-contact-button" data-toggle="modal" data-target="#myModal">
  <p class="div-p-contact-button">Обратная связь</p>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Обратная связь</h4>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode( '[contact-form-7 id="280" title="Контактная форма 1"]' ); ?>
      </div>
    </div>
  </div>
  <div>