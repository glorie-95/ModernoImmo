<?php
/**
 * About configuration
 *
 * @package Fire_Blog
 */

$config = array(
	'menu_name' => esc_html__( 'About Dream House Construction Lite', 'dream-house-construction' ),
	'page_name' => esc_html__( 'About Dream House Construction Lite', 'dream-house-construction' ),

	/* translators: theme version */
	'welcome_title' => sprintf( esc_html__( 'Welcome to %s - ', 'dream-house-construction' ), 'Dream House Construction Lite' ),

	/* translators: 1: theme name */
	'welcome_content' => sprintf( esc_html__( 'We hope this page will help you to setup %1$s with few clicks. We believe you will find it easy to use and perfect for your website development.', 'dream-house-construction' ), 'About Dream House Construction Lite' ),

	// Quick links.
	'quick_links' => array(
		'theme_url' => array(
			'text' => esc_html__( 'Theme Details','dream-house-construction' ),
			'url'  => 'https://cyclonethemes.com/downloads/dream-house-construction-lite/',
			),
		'demo_url' => array(
			'text' => esc_html__( 'View Demo','dream-house-construction' ),
			'url'  => 'https://cyclonethemes.com/live-demo/?demo=2151',
			),
		'documentation_url' => array(
			'text'   => esc_html__( 'View Documentation','dream-house-construction' ),
			'url'    => 'https://cyclonethemes.com/documentation/dream-house-construction/',
			'button' => 'primary',
			),
		'support_url' => array(
			'text'   => esc_html__( 'View Support','dream-house-construction' ),
			'url'    => 'https://cyclonethemes.com/forums/forum/free-version/dream-house-construction-lite/',
			),
		'pro_url' => array(
            'text'   => esc_html__( 'Buy Pro Version','dream-house-construction' ),
            'url'    => 'https://cyclonethemes.com/downloads/dream-house-construction-pro/',
            'button' => 'primary',
            ),
		),

	// Tabs.
	'tabs' => array(
		'getting_started'     => esc_html__( 'Getting Started', 'dream-house-construction' ),
		'recommended_actions' => esc_html__( 'Recommended Actions', 'dream-house-construction' ),
		'support'             => esc_html__( 'Support', 'dream-house-construction' ),
		'upgrade_to_pro'      => esc_html__( 'Upgrade to PRO', 'dream-house-construction' ),
	),

	// Getting started.
	'getting_started' => array(
		array(
			'title'               => esc_html__( 'Theme Documentation', 'dream-house-construction' ),
			'text'                => esc_html__( 'Find step by step instructions with video documentation to setup theme easily.', 'dream-house-construction' ),
			'button_label'        => esc_html__( 'View documentation', 'dream-house-construction' ),
			'button_link'         => 'https://cyclonethemes.com/documentation/dream-house-construction/',
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => true,
		),
		array(
			'title'               => esc_html__( 'Recommended Actions', 'dream-house-construction' ),
			'text'                => esc_html__( 'We recommend few steps to take so that you can get complete site like shown in demo.', 'dream-house-construction' ),
			'button_label'        => esc_html__( 'Check recommended actions', 'dream-house-construction' ),
			'button_link'         => esc_url( admin_url( 'themes.php?page=fire-blog-about&tab=recommended_actions' ) ),
			'is_button'           => false,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
		array(
			'title'               => esc_html__( 'Customize Everything', 'dream-house-construction' ),
			'text'                => esc_html__( 'Start customizing every aspect of the website with customizer.', 'dream-house-construction' ),
			'button_label'        => esc_html__( 'Go to Customizer', 'dream-house-construction' ),
			'button_link'         => esc_url( wp_customize_url() ),
			'is_button'           => true,
			'recommended_actions' => false,
			'is_new_tab'          => false,
		),
	),

	// Recommended actions.
	'recommended_actions' => array(
		'content' => array(
			'one-click-demo-import' => array(
				'title'       => esc_html__( 'One Click Demo Import', 'dream-house-construction' ),
				'description' => esc_html__( 'Please install the One Click Demo Import plugin to import the demo content. After activation go to Appearance >> Import Demo Data and import it.', 'dream-house-construction' ),
				'check'       => class_exists( 'OCDI_Plugin' ),
				'plugin_slug' => 'one-click-demo-import',
				'id'          => 'one-click-demo-import',
			),
			'cyclone-widget' => array(
				'title'       => esc_html__( 'Cyclone Widgets', 'dream-house-construction' ),
				'description' => esc_html__( 'Please install the Cyclone Widgets plugin to get additionals widgets for the theme.', 'dream-house-construction' ),
				'check'       => function_exists( 'cyclone_widgets' ),
				'plugin_slug' => 'cyclone-widget',
				'id'          => 'cyclone-widget',
			)
		),
	),

	// Support.
	'support_content' => array(
		'first' => array(
			'title'        => esc_html__( 'Contact Support', 'dream-house-construction' ),
			'icon'         => 'dashicons dashicons-sos',
			'text'         => esc_html__( 'If you have any problem, feel free to create ticket on our dedicated Support forum.', 'dream-house-construction' ),
			'button_label' => esc_html__( 'Contact Support', 'dream-house-construction' ),
			'button_link'  => esc_url( 'https://cyclonethemes.com/forums/forum/free-version/dream-house-construction-lite/' ),
			'is_button'    => true,
			'is_new_tab'   => true,
		),
		'second' => array(
			'title'        => esc_html__( 'Theme Documentation', 'dream-house-construction' ),
			'icon'         => 'dashicons dashicons-book-alt',
			'text'         => esc_html__( 'Kindly check our theme documentation for detailed information and video instructions.', 'dream-house-construction' ),
			'button_label' => esc_html__( 'View Documentation', 'dream-house-construction' ),
			'button_link'  => 'https://cyclonethemes.com/documentation/dream-house-construction/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'third' => array(
            'title'        => esc_html__( 'Pro Version', 'dream-house-construction' ),
            'icon'         => 'dashicons dashicons-products',
            'icon'         => 'dashicons dashicons-star-filled',
            'text'         => esc_html__( 'Upgrade to pro version for additional features and options.', 'dream-house-construction' ),
            'button_label' => esc_html__( 'View Pro Version', 'dream-house-construction' ),
            'button_link'  => 'https://cyclonethemes.com/downloads/dream-house-construction-pro/',
            'is_button'    => true,
            'is_new_tab'   => true,
        ),
		'fifth' => array(
			'title'        => esc_html__( 'Customization Request', 'dream-house-construction' ),
			'icon'         => 'dashicons dashicons-admin-tools',
			'text'         => esc_html__( 'We have dedicated team members for theme customization. Feel free to contact us any time if you need any customization service.', 'dream-house-construction' ),
			'button_label' => esc_html__( 'Customization Request', 'dream-house-construction' ),
			'button_link'  => 'https://cyclonethemes.com/customization-request/',
			'is_button'    => false,
			'is_new_tab'   => true,
		),
		'sixth' => array(),
	),

	// Upgrade.
    'upgrade_to_pro'        => array(
            'description'   => esc_html__( 'Upgrade to pro version for more exciting features and additional theme options.', 'dream-house-construction' ),
            'button_label'  => esc_html__( 'Upgrade to Pro', 'dream-house-construction' ),
            'button_link'   => 'https://cyclonethemes.com/downloads/dream-house-construction-pro/',
            'is_new_tab'    => true,
    ),

);
Dream_House_Construction_About::init( apply_filters( 'fire_blog_about_filter', $config ) );
