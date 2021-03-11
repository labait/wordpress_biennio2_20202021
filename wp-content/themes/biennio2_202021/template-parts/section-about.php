<?php
  $name = get_sub_field('name');
  $abstract = get_sub_field('abstract');

?>

<section class="section section--about">
  <header class="section__header px2 lg-px40">
    <h2 class="section__name"><?php echo $name; ?></h2>
    <div class="flex flex-wrap">
      <div class="col-1 xs-hide sm-hide"></div>
      <div class="col-12 lg-col-10 section__abstract section__abstract--big">
        <?php echo $abstract; ?>
      </div>
    </div>

  </header>

  <?php if (have_rows('tiles')): ?>

    <div class="flex flex-wrap tiles">
      <div class="col-3 xs-hide sm-hide"></div>

      <?php while(have_rows('tiles') ): the_row();
        $title = get_sub_field('title');
        $abstract = get_sub_field('abstract');
        $image = get_sub_field('image');
        $link = get_sub_field('link');
      ?>

        <div class="col-12 lg-col-4 px2 lg-px3">
          <article class="tile--preview">
            <header>
              <h1><?php echo $title; ?></h1>
              <p><?php echo $abstract ?></p>
              <img class="fluid px0 lg-px3" src="<?php echo $image['url'] ?>" alt="">
              <a class="link--cover" href="<?php echo $link['url']; ?>" target="<?php echo $link['target'] ?>"><?php echo $link['title']; ?></a>
            </header>
          </article>
        </div>
      <?php endwhile; ?>

    </div>
  <?php endif; ?>
</section>
