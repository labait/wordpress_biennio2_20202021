<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 *
 */

 get_header(); ?>

 	<div class="content-area">

    <section class="py4">
      <h1><?php the_title(); ?></h1>

    </section>

 		<?php while ( have_posts() ) : the_post();
 			get_template_part( 'template-parts/content', get_post_format() );
 		endwhile; ?>
 	</div>

 <?php get_footer();
