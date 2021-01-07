<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="dns-prefetch" href="//fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<main id="main" class="site" data-template="<?php echo get_current_template() ?>">
			<div id="loader" class="fixed top-0 left-0 bottom-0 right-0 z2"></div>
			<?php get_template_part('template-parts/header', 'main') ?>
