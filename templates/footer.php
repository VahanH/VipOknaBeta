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
