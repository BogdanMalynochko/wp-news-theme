<?php
/*
Template Name: Home template
*/
get_header();

echo get_template_part('_template-parts/banner');
echo get_template_part('_template-parts/red-block');  
echo get_template_part('_template-parts/news-items'); 

get_footer();