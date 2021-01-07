<?php
  $facebook_url = get_field('facebook_url', 'option');
  $twitter_url = get_field('twitter_url', 'option');
  $instagram_url = get_field('instagram_url', 'option');
  $linkedin_url = get_field('linkedin_url', 'option');
  $vimeo_url = get_field('vimeo_url', 'option');

  if($facebook_url || $twitter_url || $linkedin_url || $instagram_url || $vimeo_url):
?>
  <ul class="block block--social list-reset py1 m0 align-middle center">
    <?php
      if ($facebook_url) echo '<li class="inline-block mx1"><a title="Facebook" target="_blank" href="' . $facebook_url . '"><img width="30" height="30" src="' . get_template_directory_uri() . '/assets/icons/facebook.svg' . '" /></a></li>';
      if ($twitter_url) echo '<li class="inline-block mx1"><a title="Youtube" target="_blank" href="' . $twitter_url . '"><img width="30" height="30" src="' . get_template_directory_uri() . '/assets/icons/twitter.svg' . '" /></a></li>';
      if ($instagram_url) echo '<li class="inline-block mx1"><a title="Instagram" target="_blank" href="' . $instagram_url . '"><img width="30" height="30" src="' . get_template_directory_uri() . '/assets/icons/instagram.svg' . '" /></a></li>';
      if ($linkedin_url) echo '<li class="inline-block mx1"><a title="LinkedIn" target="_blank" href="' . $linkedin_url . '"><img width="30" height="30" src="' . get_template_directory_uri() . '/assets/icons/linkedin.svg' . '" /></a></li>';
      if ($vimeo_url) echo '<li class="inline-block mx1"><a title="Vimeo" target="_blank" href="' . $vimeo_url . '"><img width="30" height="30" src="' . get_template_directory_uri() . '/assets/icons/vimeo.svg' . '" /></a></li>';
    ?>
  </ul>
<?php endif; ?>
