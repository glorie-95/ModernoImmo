<?php
/**
 * themesmake Construction Theme Customizer
 *
 * @package Themesmake Construction
 */
require get_template_directory() . '/inc/customizer-pro/class-customize.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function construction_map_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
    $default=construction_map_get_default_theme_options();
	require get_template_directory() . '/inc/themes-make/customizer/slider-sections/slider-customizer.php';
	require get_template_directory() . '/inc/themes-make/customizer/top-header-customizer/top-header-info-customizer.php';
	require get_template_directory() . '/inc/themes-make/customizer/layout-design/customization.php';
	require get_template_directory() . '/inc/themes-make/customizer/theme-options-customizer/theme-options-customizer.php';
	require get_template_directory() . '/inc/themes-make/customizer/footer-option/footer-option-customizer.php';

/*for important link*/


	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'construction_map_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'construction_map_customize_partial_blogdescription',
		) );
	}
}
add_action( 'customize_register', 'construction_map_customize_register' );
/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function construction_map_customize_preview_js() {
	wp_enqueue_script( 'construction-map-customizer', get_template_directory_uri() . '/assets/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'construction_map_customize_preview_js' );
