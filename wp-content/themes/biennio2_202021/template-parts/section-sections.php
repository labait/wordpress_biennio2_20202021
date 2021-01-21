<?php
if(have_rows('sections')):
    while (have_rows('sections')): the_row();
        include(get_row_layout());
    endwhile;
endif;
