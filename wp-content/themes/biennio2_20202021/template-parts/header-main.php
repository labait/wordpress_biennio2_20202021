<?php
  $logo = get_field('logo', 'options');
?>

<header class="header header--main fixed fluid left-0" role="banner">
  <div class="header__inner max-width-5 mx-auto flex flex-wrap py2">
    <div class="header__logo-wrapper col-6 md-col-4 px2">
      <a class="header__logo inline-block" href="<?php echo esc_url(home_url('/')); ?>" rel="home">
        <img class="contain-image" src="<?php echo $logo; ?>"/>
      </a>
    </div>

    <div class="header__menu-wrapper col-8 px2 xs-hide sm-hide">
      <nav class="header__nav" role="navigation">
        <?php wp_nav_menu( array('theme_location' => 'primary', 'menu_class' => 'menu menu--primary m0 p0')); ?>
      </nav>
    </div>

    <div class="header__toggle-wrapper flex items-center justify-end col-6 px2 md-hide lg-hide">
      <div class="header__toggle flex justify-center">
        <div class="bar relative"></div>
      </div>
    </div>
  </div>
</header>

<div class="header--offcanvas fixed top-0 md-hide lg-hide overflow-hidden" role="navigation" data-enter-from="top">
  <div class="header__wrapper">
    <?php wp_nav_menu(array('theme_location'=>'primary', 'menu_class' => 'menu menu--primary m0 p0')); ?>
  </div>
</div>
