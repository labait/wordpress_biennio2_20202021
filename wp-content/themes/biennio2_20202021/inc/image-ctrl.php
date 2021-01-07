<?php

// ------------------------------------ //
// ULTIMATE IMAGE CONTROLLER
// ------------------------------------ //
function print_image($id, $template_size, $ratio, $classes) {
	$breakpoints = [1024, 768, 425];
	$sizes_1x = [1680, 960, 480];
	$sizes_2x = [1920, 1680, 960];
	$is_fly_active = is_plugin_active('fly-dynamic-image-resizer/fly-dynamic-image-resizer.php');
	$crop = FALSE;
	$height = 9999;

	$img_default = $is_fly_active ? 
		str_replace("http://","//",fly_get_attachment_image_src( $id, array($sizes_1x[2], $height), $crop)) : 
		str_replace("http://","//",wp_get_attachment_url($id, 'medium'));

	$img_placeholder = $is_fly_active ? 
		str_replace("http://","//",fly_get_attachment_image_src( $id, array($sizes_1x[2] / 20, $height), $crop)) : 
		str_replace("http://","//",wp_get_attachment_url($id, 'small'));

	$crop = $ratio ? TRUE : FALSE;
	$image = '<picture>';

	foreach ($breakpoints as $i => $breakpoint) {
		if ($template_size > $breakpoint) {
			$height_1x = $ratio ? ceil($sizes_1x[$i] / $ratio) : 9999;
			$height_2x = $ratio ? ceil($sizes_2x[$i] / $ratio) : 9999;

			$img_1x = $is_fly_active ?
				str_replace("http://","//",fly_get_attachment_image_src( $id, array($sizes_1x[$i], $height_1x), $crop)['src']) :
				str_replace("http://","//", wp_get_attachment_url($id, 'medium'));

			$img_2x = $is_fly_active ?
				str_replace("http://","//",fly_get_attachment_image_src( $id, array($sizes_2x[$i], $height_2x), $crop)['src']) :
				str_replace("http://","//", wp_get_attachment_url($id, 'large'));

			$image .= '<source media="(min-width: '. $breakpoint .'px)" srcset="'. $img_1x .' 1x, '. $img_2x .' 2x">';
		}
	}

	$img_default = $is_fly_active ?
		$image .= '<img class="lazy fluid ' . $classes . ' " src="' . $img_placeholder['src'] . '" data-lazy="' . $img_default['src'] . '" alt=""></picture>':
		$image .= '<img class="lazy fluid ' . $classes . ' " src="' . $img_placeholder . '" data-lazy="' . $img_default . '" alt=""></picture>';
	return $image;
}