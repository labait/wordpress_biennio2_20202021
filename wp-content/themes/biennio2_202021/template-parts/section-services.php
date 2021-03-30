<?php
  $name = get_sub_field('name');
  $title = get_sub_field('title');
  $abstract = get_sub_field('abstract');
  $link = get_sub_field('link');

  //dbg($link);
?>

<section class="section section--services">
  <h3 class="section__name"><?php echo $name; ?></h3>
  <div class="flex flex-wrap">
    <div class="col-12 lg-col-4">
      <header>
        <div class="">
          <h2><?php echo $title ?></h2>
          <div class="">
            <?php echo $abstract; ?>
          </div>
          <a href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $title; ?></a>
        </div>
      </header>
    </div>
    <div class="col-12 lg-col-7">
      <div class="section__content">
        <?php
            $wp_query = new WP_Query(array(
              'posts_per_page' => -1,
              'orderby' => 'title',
              'order' => 'ASC',
              'post_type' => 'service',
            ));
            if ($wp_query->have_posts()):
        ?>

          <div class="section__services container--inner">
              <div class="flex flex-wrap">
                <?php $i = 1; while (have_posts()): the_post(); ?>
                  <?php
                    include('content-service-preview.php');
                  ?>
                <?php $i++; endwhile; wp_reset_query();?>
            </div>
          </div>

        <?php endif; ?>
      </div>
    </div>
  </div>


</section>
