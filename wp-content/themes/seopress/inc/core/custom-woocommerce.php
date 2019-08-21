<?php
if( !class_exists( 'WooCommerce' ) )
{
	return;
}

// Setup woo.
function seopress_woo_setup()
{
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'seopress_woo_setup' );

// Woo gallery zoom, lightbox, slider Support
function seopress_woo_features_support()
{
	if( get_theme_mod( 'support_gallery_zoom', '1' ) == 1 )
	{
		add_theme_support( 'wc-product-gallery-zoom' );
	}

	if( get_theme_mod( 'support_gallery_lightbox', '1' ) == 1 )
	{
		add_theme_support( 'wc-product-gallery-lightbox' );
	}

	if( get_theme_mod( 'support_gallery_slider', '1' ) == 1 )
	{
		add_theme_support( 'wc-product-gallery-slider' );
	}
	
}
add_action( 'wp_loaded', 'seopress_woo_features_support' );

//seopress_product_per_page
function seopress_product_per_page_func( $cols )
{
	$cols = absint( get_theme_mod( 'seopress_product_per_page', '12' ) );
	return $cols;
}
add_filter( 'loop_shop_per_page', 'seopress_product_per_page_func', 20 );

//seopress_related_product_per_column
function seopress_related_products_args( $args )
{
	$args['posts_per_page'] = absint( get_theme_mod( 'seopress_product_per_column', '4' ) );
	//$args['columns'] = 1;
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'seopress_related_products_args' );

//seopress_product_per_column
function seopress_loop_columns()
{
	return absint( get_theme_mod( 'seopress_product_per_column', '4' ) );
}
add_filter('loop_shop_columns', 'seopress_loop_columns');

//seopress_remove_wc_breadcrumbs
function seopress_wc_breadcrumbs_handle()
{
	if( get_theme_mod( 'seopress_display_wc_breadcrumbs', '0' ) == 0 )
	{
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
	}
}
add_action( 'wp_loaded', 'seopress_wc_breadcrumbs_handle' );

//change_breadcrumb_delimiter, add class breadcrumb in wrap_before
function seopress_change_breadcrumb_delimiter( $defaults )
{
	$defaults['delimiter'] = ' <span class="woobreadcrumbdelimiter fa fa-chevron-right"></span> ';
	$defaults['wrap_before'] = '<div class="col-md-12"><nav class="woocommerce-breadcrumb breadcrumb" ' . ( is_single() ? 'itemprop="breadcrumb"' : '' ) . '>';
	$defaults['wrap_after']  = '</nav></div>';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'seopress_change_breadcrumb_delimiter' );

// i want breadcrumb before main_content so priority is 30, breadcrumb priority is 20(default)
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper' );
add_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 30 );

// Enable / Disable related product base on setting.
function seopress_related_product_handle()
{
	if( get_theme_mod( 'seopress_display_related_prdkt', '1' ) == 0 )
	{
		remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );
	}
}
add_action( 'wp_loaded', 'seopress_related_product_handle' );
