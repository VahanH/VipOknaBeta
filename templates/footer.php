<footer class="content-info" role="contentinfo">
  <div class="container">
    <div class="navbar-footer">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <nav class="vip-footer-nav" role="navigation">
      <?php
      if (has_nav_menu('footer_navigation')) :
        wp_nav_menu(array('theme_location' => 'footer_navigation', 'walker' => new Roots_Nav_Walker(), 'menu_class' => 'nav navbar-nav navbar-center'));
      endif;
      ?>
    </nav>
  </div>
</footer>
