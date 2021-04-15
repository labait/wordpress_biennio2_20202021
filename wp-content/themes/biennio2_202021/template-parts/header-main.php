<?php
  $logo = get_field('logo', 'options');
?>

<header class="header header--main fixed fluid left-0 top-0">
  <div class="container-fluid">
    <div class="flex justify-between items-center">
      <div class="">
        <a class="header__logo inline-block" href="<?php echo esc_url(home_url('/')); ?>">
          <img class="contain-image" src="<?php echo $logo; ?>"/>
        </a>
      </div>
      <div class="xs-hide sm-hide">
        <nav class="header__nav" role="navigation">
          <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'menu menu--primary m0 p0')); ?>
        </nav>
      </div>
      <div class="md-hide lg-hide">
        <div class="toggle--menu flex flex-wrap justify-end">
          <div class="bar"></div>
          <div class="bar"></div>
          <div class="bar"></div>
        </div>
      </div>
    </div>
  </div>
</header>
