<?php
if(get_field('sections')) {
  while(has_sub_field('sections')):
    get_template_part('template-parts/section', get_sub_field('type'));
  endwhile;
}
