<div class="no-results not-found">
	<header class="page__header">
		<h1 class="page__title m0 mb3 px2 wysiwyg"><?php _e('<em>Nothing found for: </em>' . $s, 'incode_starter'); ?></h1>
	</header>

	<div class="page__content py3">
		<?php if (is_search()): ?>
			<p class="px2 m0"><?php _e('Sorry, but nothing matched your search terms. <a href="' . get_home_url() . '">Back to Home</a>', 'incode_starter'); ?></p>
		<?php else : ?>
			<p class="px2 m0"><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. <a href="' . get_home_url() . '">Back to Home</a>', 'incode_starter' ); ?></p>
		<?php endif; ?>
	</div>
</div>