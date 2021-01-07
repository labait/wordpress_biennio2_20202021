<?php 

function get_current_template() {
  global $template;
  return basename($template, '.php');
}
