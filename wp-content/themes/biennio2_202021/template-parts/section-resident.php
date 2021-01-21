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
    <h2 class="section__title">Nullam id dolor id.</h2>
    <div class="section__abstract">
      <?php echo $abstract; ?>
    </div>
    <a class="section__link" href="<?php echo $link['link'] ?>"><?php echo $link['title'] ?></a>
  </div>

</section>
