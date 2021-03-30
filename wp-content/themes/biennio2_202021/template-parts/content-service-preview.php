<?php
	$title = get_the_title();
	$content = get_the_content();
	$image_url = get_the_post_thumbnail_url();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('service--preview'); ?>>

	<div class="flex flex-wrap items-center">
		<div class="col-1">
			<h3><?php echo '0' . $i . '.'; ?></h3>
		</div>
		<div class="col-7 md-col-9">
			<header class="service__header">
				<h2><?php echo $title; ?></h2>
			</header>
		</div>
		<div class="col-4 md-col-2">
			<a class="link link--arrow link--dark" href="#"><?php _e('Discover more', 'cobox'); ?></a>
		</div>
	</div>

	<div class="service__content">
		<div class="col-12 lg-col-5">
			<img class="fluid" src="<?php echo $image_url; ?>" alt="<?php echo $title; ?>">
		</div>
		<?php echo $content; ?>
	</div>

</article>
