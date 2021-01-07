<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 *
 */

get_header(); ?>

<div class="content-area">
	<section class="page__404 404 not-found">
		<header class="page__header">
			<h1 class="page__title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'incode_starter' ); ?></h1>
		</header>
		<div class="page__content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'incode_starter' ); ?></p>
		</div>
	</section>
</div>

<?php get_footer();
