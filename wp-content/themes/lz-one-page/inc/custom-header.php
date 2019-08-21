<?php
/**
 * Custom header implementation
 */

function lz_one_page_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'lz_one_page_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'lz_one_page_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'lz_one_page_custom_header_setup' );

if ( ! function_exists( 'lz_one_page_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see lz_one_page_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'lz_one_page_header_style' );
function lz_one_page_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .page-template-custom-home-page #header,
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'lz-one-page-basic-style', $custom_css );
	endif;
}
endif; // lz_one_page_header_style