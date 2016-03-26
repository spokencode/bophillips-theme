<header id="main-navigation-container" class="banner">
<div class="container">
      <div class="navbar-header row">

          <div class="col-xs-12 col-md-2">
            <a class="brand" href="<?= esc_url(home_url('/')); ?>">
              <img src="<?php bloginfo('stylesheet_directory'); ?>/assets/images/Bo Phillips Logo.png" /><?php //bloginfo('name'); ?>
            </a>
          </div>
          <div class="col-xs-12 col-md-10">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <nav id="main-navigation" class="nav-primary  navbar-right">
              <?php
                wp_nav_menu( array(
                    'menu'              => 'Top Navigation',
                    'theme_location'    => 'primary',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'bs-example-navbar-collapse-1',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                    'walker'            => new wp_bootstrap_navwalker())
                );
              ?>
            </nav>
            
          </div>
        </div>
</div>
</header>
<!--<div class="container hidden-xs">

    <div id="contact-callout" class="col-md-3 pull-right">
      <span class="callbox"><span class="call"><i class="fa fa-phone"></i></a></span><span class="bo">BO</span></span><a href="tel:+1-800-849-0803">800.849.0803</a>
      <a href="tel:770-939-6115">770.939.6115</a>
    </div>
</div>-->