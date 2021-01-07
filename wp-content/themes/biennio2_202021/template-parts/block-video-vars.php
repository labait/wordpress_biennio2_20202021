<?php 
  $is_youtube_video = strpos($video,'youtube');

  if ($is_youtube_video) {
    parse_str(parse_url($video, PHP_URL_QUERY), $youtube_url_vars);
    $video_id = $youtube_url_vars['v'];
    $source = 'https://www.youtube.com/embed/' . $video_id;
  } else {
    $video_id = substr(parse_url($video, PHP_URL_PATH), 1);
    $source = 'https://player.vimeo.com/video/' . $video_id;
  }