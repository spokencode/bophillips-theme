<footer class="content-info">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>
  <div id="footer-bottom">
    <div class="container">
      <div id="copyright" class="col-md-6">
        ©2015 BoPhillips Company
      </div>
      <div id="login" class="col-md-6">
        <?php wp_loginout(); ?>
      </div>
    </div>
  </div>
</footer>