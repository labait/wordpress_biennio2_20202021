<?php
	$image = get_sub_field('image');
	$title = get_the_title();
	$content = get_the_content();
?>

<div class="col-1 xs-hide sm-hide">

</div>
<article id="post-<?php the_ID(); ?>" <?php post_class('resident--preview col-12 lg-col-5'); ?>>
	<div class="resident__image">
		<img class="fluid" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>">
	</div>
	<header class="page__header">
		<h1 class="page__title"><?php echo $title; ?></h1>
	</header>
	<div class="page__content"><?php echo $content; ?></div>
</article>
