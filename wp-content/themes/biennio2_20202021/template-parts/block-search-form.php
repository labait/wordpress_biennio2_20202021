<div class="block block--search-form">
  <div class="flex flex-wrap justify-end items-center pb3 px2 md-px0">
    <h3 class="block__title m0 p0 pr1"><?php _e('Search', 'incode_starter') ?></h3>
    <form role="search" action="<?php echo site_url('/'); ?>" method="get" id="searchform">
      <input type="text" name="s" placeholder=""/>
      <input type="hidden" name="post_type" value="<?php echo get_post_type(); ?>" />
      <input type="submit" alt="Search" value="Search" />
    </form>
  </div>   
</div>