<?php
/**
 * Demo configuration
 *
 * @package Dream_House_Construction
 */

$config = array(
	'static_page'    => 'homepage',
	'posts_page'     => '',
	'menu_locations' => array(
		'menu-1' => 'main-menu'
	),
	'theme_mods' => array(
		'cons_slider_cat' => 6,
		'portfo_cat1' => array(3,5),
		'our_team_cat' => 7,
		'blog_cat1' => 7,
		'blog_cat' => 2,
		'partner_cat' => 4,
		'action_page2' => 107,
		'insta_shortcode' => '[cyclone-instragram title="Follow Us on Instagram" insta_user_id="3301700665" insta_username="CycloneThemes" insta_access_token="3301700665.4445ec5.c3ba39ad7828412286c1563cac3f594b" no_of_pic_to_show="20" ]'
	),
	'ocdi'           => array(
		array(
			'import_file_name'             => esc_html__( 'Theme Demo Content', 'dream-house-construction' ),
			'local_import_file'            => trailingslashit( get_stylesheet_directory() ) . 'inc/demo/demo-content/content.xml',
			'local_import_widget_file'     => trailingslashit( get_stylesheet_directory() ) . 'inc/demo/demo-content/widget.wie',
			'local_import_customizer_file' => trailingslashit( get_stylesheet_directory() ) . 'inc/demo/demo-content/customizer.dat',
		),
	),
);

Dream_House_Construction_Demo::init( apply_filters( 'fire_blog_demo_filter', $config ) );
