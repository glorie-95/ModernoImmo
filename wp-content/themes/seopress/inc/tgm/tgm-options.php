<?php
/**
 * Include the TGM_Plugin_Activation class. (included in init.php)
 */

function seopress_register_required_plugins()
{
	$plugins = array(
		
		array(
			'name'      => __( 'Meta Slider (for Slider)', 'seopress' ),
			'slug'      => 'ml-slider',
			'required'  => false,
		),
		
		array(
			'name'      => __( 'Regenerate Thumbnails', 'seopress' ),
			'slug'      => 'regenerate-thumbnails',
			'required'  => false,
		),
		
		array(
			'name'      => __( 'Max Mega Menu (for Mega Menu)', 'seopress' ),
			'slug'      => 'megamenu',
			'required'  => false,
		),
		
		array(
			'name'      => __( 'Page Builder by SiteOrigin (Page Builder)', 'seopress' ),
			'slug'      => 'siteorigin-panels',
			'required'  => false,
		),
		
		array(
			'name'      => __( 'SiteOrigin Widgets Bundle (Page Builder Widgets)', 'seopress' ),
			'slug'      => 'so-widgets-bundle',
			'required'  => false,
		),
		
		array(
			'name'      => __( 'WooCommerce (For E-Commerce)', 'seopress' ),
			'slug'      => 'woocommerce',
			'required'  => false,
		),
		
		array(
			'name'      => __( 'Contact Form 7 (For Forms)', 'seopress' ),
			'slug'      => 'contact-form-7',
			'required'  => false,
		),

		array(
			'name'      => __( 'SEO (Search Engine Optimization)', 'seopress' ),
			'slug'      => 'wordpress-seo',
			'required'  => false,
		),
		
	);
	
	
	$config = array(
		'id'           => 'seopress',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'seopress-install-plugins', // Menu slug.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'seopress_register_required_plugins' );

