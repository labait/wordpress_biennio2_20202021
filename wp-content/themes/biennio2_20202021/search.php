<?php 
	$post_type = $_GET['post_type'];
	get_header(); 
?>

	<div class="content-area">
		<?php if (have_posts()): ?>
			<header class="page__header">
				<h1 class="page__title m0 mb3 px2 wysiwyg"><?php _e('<em>Search result for: </em>' . $s, 'incode_starter'); ?></h1>
			</header>
			
			<div class="page__content py3">
				<ul class="page__list m0 p0 flex flex-wrap pb4">
					<?php while (have_posts()): the_post(); ?>
						<li class="page__item list-reset col-12 md-col-9 mb3">
							<?php get_template_part('template-parts/preview', $post_type); ?>
						</li>
					<?php endwhile; ?>
				</ul>
			</div>
		<?php else: ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
	</div>

<?php get_footer();