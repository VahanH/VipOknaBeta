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
<div>
  <!-- Large modal -->
  <button type="button" class="btn btn-danger call-order-button" data-toggle="modal" data-target=".bs-example-modal-lg">Обратная Связь</button>

  <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <?php echo do_shortcode( '[contact-form-7 id="280" title="Контактная форма 1"]' ); ?>
      </div>
    </div>
  </div>
</div>