<?php
  $name = get_sub_field('name');
  $abstract = get_sub_field('abstract');
  $image = get_sub_field('image');
  $title= get_sub_field('title');
  $link = get_sub_field('link');

?>


<section class="section section--resident">

  <header class="section__header">
    <h2 class="section__name"><?php echo $name; ?></h2>
    <img class="section__image fluid" src="<?php echo $image['url']; ?>" alt="">
  </header>
  <div class="">
    <h2 class="section__title"><?php echo $title; ?></h2>
    <div class="section__abstract">
      <?php echo $abstract; ?>
    </div>
    <a class="section__link" href="<?php echo $link['link'] ?>"><?php echo $link['title'] ?></a>
  </div>

  <div class="section__content">

    <?php
        $wp_query = new WP_Query(array(
          'posts_per_page' => 24,
          'orderby' => 'title',
          'order' => 'ASC',
          'post_type' => 'resident',
        ));
        if ($wp_query->have_posts()):
    ?>

      <div class="section__residents container--inner">
          <div class="flex flex-wrap">
            <?php $i = 1; while (have_posts()): the_post(); ?>
              <?php
                include('content-resident-preview.php');
              ?>
            <?php $i++; endwhile; wp_reset_query();?>
        </div>
      </div>

    <?php endif; ?>
  </div>

</section>
