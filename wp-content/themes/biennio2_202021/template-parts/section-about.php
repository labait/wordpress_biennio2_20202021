<?php
  $name = get_sub_field('name');
  $abstract = get_sub_field('abstract');

?>

<section class="section section--about">
  <header>
    <h2 class="section__name"><?php echo $name; ?></h2>
    <div class="section__abstract section__abstract--big">
      <?php echo $abstract; ?>
    </div>
  </header>
</section>
