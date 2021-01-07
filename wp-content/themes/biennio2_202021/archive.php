<?php
  $total = $query->max_num_pages;
  $paginator = paginate_links(array(
    'mid_size' => 1,
    'current' => max(1, get_query_var('paged')),
    'total' => $total,
    'prev_text' => __('Prev','incode_starter'),
    'next_text' => __('Next','incode_starter'),
  ));

	get_header();
?>

<div class="content-area">
	<header class="page__header">
		<h1 class="page__title m0 pb3"><?php echo single_term_title(); ?></h1>
	</header>

	<?php if (have_posts()): ?>
		<div class="page__list py3 flex flex-wrap">
			<?php while (have_posts()): the_post(); ?>
				<div class="page__item col-12 md-col-4 mb3 px2">
					<?php get_template_part('template-parts/content', get_post_format()); ?>
				</div>
			<?php endwhile; ?>
		</div>

		<div class="block block--paginator clearfix col-12"><?php echo $paginator ?></div>

	<?php else: get_template_part('template-parts/content', 'none'); endif; ?>
</div>

<?php get_footer();
