<?php
  $name = get_sub_field('name');
  $abstract = get_sub_field('abstract');

?>

<section class="section section--about">
  <header>
    <h2><?php echo $name; ?></h2>
    <div class="">
      <?php echo $abstract; ?>
    </div>
  </header>
</section>
