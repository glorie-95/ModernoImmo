<?php
 /**
  * Template Name: Front Page
  *
  * @package Construc
  */

get_header();

if ('enable' == get_theme_mod('header_slider_on_off')) {
	get_template_part( 'template-parts/section/home', 'slider' );
}
if ('enable' == get_theme_mod('services_section_on_off')) {
	get_template_part( 'template-parts/section/services' );
}
if ('enable' == get_theme_mod('about_on_off')) {
	get_template_part( 'template-parts/section/about' );
}
if ('enable' == get_theme_mod( 'blog_on_off' )) {
	get_template_part( 'template-parts/section/blog', 'slider' );
}

get_footer();
