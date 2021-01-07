<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
*
 */

 	$date = get_the_date();
 	$image = get_post_thumbnail_id();
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('max-width-5 mx-auto px2 md-px0'); ?>>
	<?php if ($image): ?>
		<div class="post__image"><?php echo print_image($image, 1920, '', 'contain-image'); ?></div>
	<?php endif; ?>
	<header class="post__header">
		<span class="post__date"><?php echo $date; ?></span>
		<h1 class="post__title m0 py2"><?php the_title(); ?></h1>
	</header>
	<div class="post__content wysiwyg"><?php the_content(); ?></div>
</article>
