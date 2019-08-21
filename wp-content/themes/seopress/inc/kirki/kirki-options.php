<?php
//set Kirki config
Kirki::add_config( 'seopress_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

//the main panel
Kirki::add_panel( 'seopress_options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'SEOPress Options', 'seopress' ),
    'description' => esc_attr__( 'All options of SEOPress theme', 'seopress' ),
) );

//seopress pro info section
Kirki::add_section( 'seopress_pro_sec', array(
	'title'          => 'Try SEOPress Pro',
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_pro_custom_fld',
	'label'       => 'SEOPress Pro is Available',
	'section'     => 'seopress_pro_sec',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">SEOPress Pro version is fully compatible with premium plugins like Visual Composer Page Builder, Massive Addons for Visual Composer, Revolution Slider, Advance Mega Menu and also have advance theme options like options to change credit text / link, all color options etc. so let <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">Try SEOPress Pro</a> Version.</div>',
	'priority'    => 10,
) );

//seopress pro info section END


//typography
Kirki::add_section( 'typography_options', array(
	'title'          => esc_attr__( 'Typography Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_typog',
	'label'       => esc_attr__( 'Body Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Lora',
		'variant'        => 'regular'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h1_typog',
	'label'       => esc_attr__( 'H1 / Headline 1 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h1, .h1',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h2_typog',
	'label'       => esc_attr__( 'H2 / Headline 2 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h2, .h2',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h3_typog',
	'label'       => esc_attr__( 'H3 / Headline 3 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '22px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'uppercase'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h3, .h3',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h4_typog',
	'label'       => esc_attr__( 'H4 / Headline 4 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h4, .h4',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h5_typog',
	'label'       => esc_attr__( 'H5 / Headline 5 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h5, .h5',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_h6_typog',
	'label'       => esc_attr__( 'H6 / Headline 6 Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Arvo',
		'variant'        => 'regular',
		'font-size'      => '20px',
		'line-height'    => '1.1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'body h6, .h6',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_body_p_typog',
	'label'       => esc_attr__( 'Paragraph Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Fauna One',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#maincontainer p',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_top_bar_typog',
	'label'       => esc_attr__( 'Top Bar Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '22px',
		'letter-spacing' => '0px',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.bgtoph',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_top_menu_typog',
	'label'       => esc_attr__( 'Main Menu Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Rajdhani',
		'variant'        => '500',
		'font-size'      => '22px'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => 'ul.navbar-nav li a',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'sb_menu_typo',
	'label'       => esc_attr__( 'Sidebar Menu Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Rajdhani',
		'variant'        => '500',
		'font-size'      => '18px',
		'line-height'    => '25px',
		'letter-spacing' => '0.1px',
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.side-menu-menu-wrap ul li a',
		),
	),
	'transport' => 'auto',
	'active_callback'  => array(
		array(
			'setting'  => 'sb_menu_onoff',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_widget_ul_ol_typog',
	'label'       => esc_attr__( 'Widgets UL/OL Typography', 'seopress' ),
	'description' => esc_attr__( 'Widgets Unordered List / Ordered List Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.1px',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.widget_sidebar_main ul li, .widget_sidebar_main ol li',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'body_ul_ol_li_typog',
	'label'       => esc_attr__( 'Container UL/OL Typography', 'seopress' ),
	'description' => esc_attr__( 'Typography for list in main contents.', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Fauna One',
		'variant'        => 'regular',
		'font-size'      => '14px',
		'line-height'    => '1.6',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'text-transform' => 'inherit',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.entry-content ul li, .entry-content ol li',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_mn_footer_typog',
	'label'       => esc_attr__( 'Footer Widgets Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1.7',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.footer',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'typography',
	'settings'    => 'seopress_cprt_footer_typog',
	'label'       => esc_attr__( 'Footer Copyright Typography', 'seopress' ),
	'section'     => 'typography_options',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '15px',
		'line-height'    => '1',
		'letter-spacing' => '0',
		'text-transform' => 'inherit'
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.footer-copyright',
		),
	),
	'transport' => 'auto',
) );

//typography END

//top bar
Kirki::add_section( 'top_bar', array(
	'title'          => esc_attr__( 'Top Bar Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_display_top_bar',
	'label'       => esc_attr__( 'Top Bar Feature', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Top Bar', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'display_sicons_top_bar',
	'label'       => esc_attr__( 'Social Icons', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Social Icons', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 's_link_open',
	'label'       => esc_attr__( 'Social Links in New Tab?', 'seopress' ),
	'description' => esc_attr__( 'Open social links in new tab or same.', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'display_sicons_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'select',
	'settings'    => 'seopress_tpbr_left_view',
	'label'       => esc_attr__( 'Top Bar Left Content View', 'seopress' ),
	'description' => esc_attr__( 'Simply phone, email or Text/HTML or Disable ?', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'1' => esc_attr__( 'Text / HTML', 'seopress' ),
		'2' => esc_attr__( 'Phone and Email', 'seopress' ),
		'3' => esc_attr__( 'Disable', 'seopress' ),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_tpbr_lft_phne',
	'label'			=> esc_attr__( 'Phone Number', 'seopress' ),
	'description' 	=> esc_attr__( 'Leave empty for disable.', 'seopress' ),
	'section'		=> 'top_bar',
	'default'		=> '0123456789',
	'priority'		=> 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'seopress_tpbr_left_view',
			'operator' => '==',
			'value'    => 2,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_tpbr_lft_email',
	'label'			=> esc_attr__( 'Email Address', 'seopress' ),
	'description' 	=> esc_attr__( 'Leave empty for disable.', 'seopress' ),
	'section'		=> 'top_bar',
	'default'		=> 'info@example.com',
	'priority'		=> 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'seopress_tpbr_left_view',
			'operator' => '==',
			'value'    => 2,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'editor',
	'settings'    => 'seopress_top_bar_left_content',
	'label'       => esc_attr__( 'Top Bar Left Content', 'seopress' ),
	'description' => esc_attr__( 'Content/HTML of Top Bar Left Side. Leave empty for disable.', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '<p><span class="fa fa-phone"></span> Call: <a href="tel:0123456789">0123456789</a> | <span class="fa fa-at"></span> Email: <a href="mailto:info@example.com">info@example.com</a></p>',
	'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.topbar_ctmzr',
			'function' => 'html',
		),
	),
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
		array(
			'setting'  => 'seopress_tpbr_left_view',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'top_bar_seach_icon',
	'label'       => esc_attr__( 'Search Icon', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Search Icon', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '1',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_topbar',
	'label'       => esc_attr__( 'More Options', 'seopress' ),
	'section'     => 'top_bar',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">More options are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro Version</a>.</div>',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_display_top_bar',
			'operator' => '==',
			'value'    => 1,
		)
	)
) );

//top bar END

//Header layout
Kirki::add_section( 'header_layout_section', array(
	'title'          => esc_attr__( 'Header Layout Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'radio-image',
	'settings'		=> 'header_layout',
	'label'			=> esc_attr__( 'Select Header Layout', 'seopress' ),
	'description'	=> esc_attr__( 'Save and reload front page for alignment', 'seopress' ),
	'section'		=> 'header_layout_section',
	'default'		=> '1',
	'priority'		=> 10,
	'choices'		=> array(
		'1'		=> get_template_directory_uri() . '/images/header-1.png',
		'2'		=> get_template_directory_uri() . '/images/header-2.png',
		'3'		=> get_template_directory_uri() . '/images/header-3.png',
		'4'		=> get_template_directory_uri() . '/images/header-4.png',
		'5'		=> get_template_directory_uri() . '/images/header-5.png',
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'slider',
	'settings'    => 'custom_logo_width',
	'label'       => esc_attr__( 'Logo Width', 'seopress' ),
	'description'    => esc_attr__( 'Width will be set in Pixel. Height is automatic to maintain quality of Logo', 'seopress' ),
	'section'     => 'title_tagline',
	'default'     => '360',
	'priority'    => 9,
	'choices'     => array(
		'min'  => '10',
		'max'  => '600',
		'step' => '1',
	),
	'output' => array(
		array(
			'element'	=> '.custom-logo',
			'property'	=> 'width',
			'suffix'	=> 'px',
		),
	),
	'transport' => 'auto',
	'active_callback'  => 'has_custom_logo',
) );
//Header layout END

//color options
Kirki::add_section( 'color_options', array(
	'title'          => esc_attr__( 'Color Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_default_a_color',
	'label'       => esc_attr__( 'Default Color of Links', 'seopress' ),
	'section'     => 'color_options',
	'default'     => '#337ab7',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => 'body a, .woocommerce .woocommerce-breadcrumb a, .woocommerce .star-rating span',
			'property' => 'color',
		),
		array(
			'element'  => '.widget_sidebar_main ul li::before',
			'property' => 'color',
		),
		array(
			'element'  => '.navigation.pagination .nav-links .page-numbers, .navigation.pagination .nav-links .page-numbers:last-child',
			'property' => 'border-color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'color',
	'settings'    => 'seopress_default_a_mover_color',
	'label'       => esc_attr__( 'Default Color of Mouse Over Links', 'seopress' ),
	'section'     => 'color_options',
	'default'     => '#23527c',
	'choices'     => array(
		'alpha' => true,
	),
	'priority'    => 10,
	'output' => array(
		array(
			'element'  => 'body a:hover, .woocommerce .woocommerce-breadcrumb a:hover',
			'property' => 'color',
		),
		array(
			'element'  => '.widget_sidebar_main ul li:hover::before',
			'property' => 'color',
		),
	),
	'transport' => 'auto',
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_pro_clr',
	'label'       => esc_attr__( 'More color options', 'seopress' ),
	'section'     => 'color_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">More color options like Title / Headline Color, Button Color, Menu Color, Breadcrumb Color, Top Bar color, Header color, Footer Widget / Copyright color etc are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro Version</a>.</div>',
	'priority'    => 10,
) );
//color options END

//social profile
Kirki::add_section( 'social_options', array(
	'title'          => esc_attr__( 'Social Profile', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_facebook',
	'label'			=> esc_attr__( 'Facebook Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> 'http://facebook.com',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_twitter',
	'label'			=> esc_attr__( 'Twitter Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> 'http://twitter.com',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_youtube',
	'label'			=> esc_attr__( 'YouTube Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> 'http://youtube.com',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_vk',
	'label'			=> esc_attr__( 'VK Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_okru',
	'label'			=> esc_attr__( 'Ok.ru (odnoklassniki) Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_linkedin',
	'label'			=> esc_attr__( 'Linkedin Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_pinterest',
	'label'			=> esc_attr__( 'Pinterest Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_instagram',
	'label'			=> esc_attr__( 'Instagram Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_telegram',
	'label'			=> esc_attr__( 'Telegram Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_snapchat',
	'label'			=> esc_attr__( 'Snapchat Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_flickr',
	'label'			=> esc_attr__( 'Flickr Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_reddit',
	'label'			=> esc_attr__( 'Reddit Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_tumblr',
	'label'			=> esc_attr__( 'Tumblr Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_yelp',
	'label'			=> esc_attr__( 'Yelp Link', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'sprofile_link_whatsappno',
	'label'			=> esc_attr__( 'WhatsApp Number', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'text',
	'settings'		=> 'seopress_social_profile_link_skype',
	'label'			=> esc_attr__( 'Skype Id', 'seopress' ),
	'description'	=> esc_attr__( 'Leave empty for disable', 'seopress' ),
	'section'		=> 'social_options',
	'default'		=> '',
	'priority'		=> 10,
) );
//social profile END

// Blog
Kirki::add_section( 'blog_options', array(
	'title'          => esc_attr__( 'Blog Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );
	
Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_breadcrumbx_setting',
	'label'       => esc_attr__( 'Breadcrumb', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Breadcrumb', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'			=> 'toggle',
	'settings'		=> 'seopress_archive_post_thumbnail',
	'label'			=> esc_attr__( 'Thumbnail on Archive Post', 'seopress' ),
	'description'	=> esc_attr__( 'Enable/Disable Thumbnail on Archive/Loop Page', 'seopress' ),
	'section'		=> 'blog_options',
	'default'		=> '1',
	'priority'		=> 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_single_post_thumbnail',
	'label'       => esc_attr__( 'Thumbnail on Single Post', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Thumbnail on Single Post', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_posts_meta_disply',
	'label'       => esc_attr__( 'Display Post Meta on Archive', 'seopress' ),
	'description' => esc_attr__( 'Show/Hide post meta on archive / loop posts like: author, category, date.', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_post_meta_disply',
	'label'       => esc_attr__( 'Display Post Meta on Single Post', 'seopress' ),
	'description' => esc_attr__( 'Show/Hide post meta on single post like: author, category, date.', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_sticky_dt_disply',
	'label'       => esc_attr__( 'Display Sticky Post Date', 'seopress' ),
	'description' => esc_attr__( 'Show/Hide date of sticky post on archive/loop page.', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_posts_meta_disply',
			'operator' => '==',
			'value'    => 1,
			),
		)
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'select',
	'settings'    => 'seopress_post_date_view',
	'label'       => esc_attr__( 'Post Date View', 'seopress' ),
	'description' => esc_attr__( 'Which date do you want to display for single post?', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '1',
	'priority'    => 10,
	'choices'     => array(
		'1' => esc_attr__( 'Display Updated Date', 'seopress' ),
		'2' => esc_attr__( 'Display Publish Date', 'seopress' ),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'select',
	'settings'    => 'excerpt_or_content',
	'label'       => esc_attr__( 'Display Excerpt or Content on Archive', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 'excerpt',
	'priority'    => 10,
	'choices'     => array(
		'excerpt' => esc_attr__( 'Display Excerpt', 'seopress' ),
		'content' => esc_attr__( 'Display Content', 'seopress' ),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'number',
	'settings'    => 'seopress_excerpt_length',
	'label'       => esc_attr__( 'Excerpt Length', 'seopress' ),
	'description' => esc_attr__( 'How much words you want to display on Archive page?', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 40,
	'choices'     => array(
		'min'  => 1,
		'step' => 1,
	),
	'active_callback'  => array(
		array(
			'setting'  => 'excerpt_or_content',
			'operator' => '==',
			'value'    => 'excerpt',
		),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'select',
	'settings'    => 'display_archive_pagination',
	'label'       => esc_attr__( 'Display Pagination on Archive', 'seopress' ),
	'description' => esc_attr__( 'Which type of pagination, you want to display?', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 'nextprev',
	'priority'    => 10,
	'choices'     => array(
		'nextprev'	=> esc_attr__( 'Next Previous Pagination', 'seopress' ),
		'number' 	=> esc_attr__( 'Number Pagination', 'seopress' ),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'radio-image',
	'settings'    => 'seopress_blog_archive_layout',
	'label'       => esc_attr__( 'Archive / Loop Layout', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 'rights',
	'priority'    => 10,
	'choices'     => array(
		'fullw'	  => get_template_directory_uri() . '/images/fullw.png',
		'rights'  => get_template_directory_uri() . '/images/rights.png',
		'lefts'   => get_template_directory_uri() . '/images/lefts.png',
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'radio-image',
	'settings'    => 'seopress_blog_single_layout',
	'label'       => esc_attr__( 'Single Post Layout', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => 'rights',
	'priority'    => 10,
	'choices'     => array(
		'fullw'	  => get_template_directory_uri() . '/images/fullw.png',
		'rights'  => get_template_directory_uri() . '/images/rights.png',
		'lefts'   => get_template_directory_uri() . '/images/lefts.png',
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'     => 'textarea',
	'settings' => 'seopress_comment_panel_title',
	'label'    => esc_attr__( 'Comment Box Headline', 'seopress' ),
	'section'  => 'blog_options',
	'default'  => 'Have any Question or Comment?',
	'priority' => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.cmnthdlne_ctmzr',
			'function' => 'html',
		),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_pro_blg',
	'label'       => esc_attr__( 'More Options', 'seopress' ),
	'section'     => 'blog_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">More options are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro Version</a>.</div>',
	'priority'    => 10,
) );
// Blog END

//Sidebar menu Options
Kirki::add_section( 'sidebarmenu_options', array(
	'title'          => esc_attr__( 'Sidebar Menu Options', 'seopress' ),
	'panel'          => 'seopress_options', // Not typically needed.
	'priority'       => 10,
	'capability'     => 'edit_theme_options',
	'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'sb_menu_onoff',
	'label'       => esc_attr__( 'Side Bar Menu', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Side Bar Menu', 'seopress' ),
	'section'     => 'sidebarmenu_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_sb_menu',
	'label'       => esc_attr__( 'Color Options', 'seopress' ),
	'section'     => 'sidebarmenu_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">Color options are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro Version</a>.</div>',
	'priority'    => 10,
) );
//Sidebar menu Options END

//woocommerce section
if( class_exists( 'WooCommerce' ) )
{
	Kirki::add_section( 'woocommerce_options', array(
		'title'          => esc_attr__( 'Woocommerce Options', 'seopress' ),
		'panel'          => 'seopress_options', // Not typically needed.
		'priority'       => 10,
		'capability'     => 'edit_theme_options',
		'theme_supports' => '', // Rarely needed.
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_shop_link_top_bar',
		'label'       => esc_attr__( 'Display shop icon in Top Bar?', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable shop icon in Top Bar', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_cart_link_top_bar',
		'label'       => esc_attr__( 'Display cart icon in Top Bar?', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable cart icon in Top Bar', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_myaccount_link_top_bar',
		'label'       => esc_attr__( 'Display My Account icon in Top Bar?', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable My Account icon in Top Bar', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_wc_breadcrumbs',
		'label'       => esc_attr__( 'WC Breadcrumbs', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable WooCommerce Breadcrumbs.', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '0',
		'priority'    => 10,
	) );

	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'seopress_display_related_prdkt',
		'label'       => esc_attr__( 'Related Products', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable WooCommerce Related Products.', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'support_gallery_zoom',
		'label'       => esc_attr__( 'Gallery Zoom', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable gallery zoom support on single product.', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'support_gallery_lightbox',
		'label'       => esc_attr__( 'Gallery Light Box', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable gallery light box support on single product.', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'seopress_config', array(
		'type'        => 'toggle',
		'settings'    => 'support_gallery_slider',
		'label'       => esc_attr__( 'Gallery Slider', 'seopress' ),
		'description' => esc_attr__( 'Enable/Disable gallery slider support on single product.', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'seopress_config', array(
		'type'        => 'number',
		'settings'    => 'seopress_product_per_page',
		'label'       => esc_attr__( 'Number of products display on loop page', 'seopress' ),
		'description' => esc_attr__( 'How much products you want to display on loop page?', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => 12,
		'choices'     => array(
			'min'  => 0,
			'max'  => 100,
			'step' => 1,
		),
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'slider',
		'settings'    => 'seopress_product_per_column',
		'label'       => esc_attr__( 'Number of products display per column', 'seopress' ),
		'description' => esc_attr__( 'How much products you want to display in single line?', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => 4,
		'priority'    => 10,
		'choices'     => array(
			'min'  => '2',
			'max'  => '5',
			'step' => '1',
			),
	) );
	
	Kirki::add_field( 'seopress_config', array(
		'type'        => 'custom',
		'settings'    => 'seopress_info_woo_layout',
		'section'     => 'woocommerce_options',
		'default'     => '<hr /><div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">' . esc_html__( 'This layout will apply on Shop, Single Product and Product Search Pages. If you want to set full width for Cart, Checkout and My Account pages, then edit these pages and select Full Width No Sidebar Template.', 'seopress' ) . '</div>',
		'priority'    => 10,
	) );

	Kirki::add_field( 'seopress_config', array(
		'type'        => 'radio-image',
		'settings'    => 'seopress_woo_layout',
		'label'       => esc_attr__( 'WooCommerce Page Layout', 'seopress' ),
		'section'     => 'woocommerce_options',
		'default'     => 'fullw',
		'priority'    => 10,
		'choices'     => array(
			'fullw'	  => get_template_directory_uri() . '/images/fullw.png',
			'rights'  => get_template_directory_uri() . '/images/rights.png',
			'lefts'   => get_template_directory_uri() . '/images/lefts.png',
		),
	) );
}
//woocommerce section END

//footer widgets section - footer means footer widget section (footer copyright not covered)
Kirki::add_section( 'footer_options', array(
    'title'          => esc_attr__( 'Footer Widget Options', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'slider',
	'settings'    => 'seopress_number_of_footer_widgets',
	'label'       => esc_attr__( 'Footer Widgets', 'seopress' ),
	'description' => esc_attr__( 'How much Widgets you want? (please save and go to Widgets page to add.)', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'min'  => '0',
		'max'  => '4',
		'step' => '1',
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_ftrwdgt',
	'label'       => esc_attr__( 'Color Options', 'seopress' ),
	'section'     => 'footer_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">Color options are available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro Version</a>.</div>',
	'priority'    => 10,
) );
//footer widgets section END

//footer copyright section
Kirki::add_section( 'footer_copy_options', array(
    'title'          => esc_attr__( 'Footer Copyright Options', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'editor',
	'settings'    => 'seopress_left_footer_setting',
	'label'       => esc_attr__( 'Footer Left Content', 'seopress' ),
	'description' => esc_attr__( 'Content of Footer Left Side', 'seopress' ),
	'section'     => 'footer_copy_options',
	'default'     => '<p>All right reserved.</p>',
	'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.cprtlft_ctmzr',
			'function' => 'html',
		),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'editor',
	'settings'    => 'seopress_center_footer_setting',
	'label'       => esc_attr__( 'Footer Center Content', 'seopress' ),
	'description' => esc_attr__( 'Content of Footer Center Side', 'seopress' ),
	'section'     => 'footer_copy_options',
	'default'     => '<p><a href="#">Terms of Use - Privacy Policy</a></p>',
	'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
		array(
			'element'  => '.cprtcntr_ctmzr',
			'function' => 'html',
		),
	),
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_info_footer_right',
	'label'       => esc_attr__( 'Footer Right Content', 'seopress' ),
	'section'     => 'footer_copy_options',
	'default'     => '<div style="padding: 10px;background-color: #333; color: #fff; border-radius: 8px;">This option is available in <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">SEOPress Pro Version</a>.</div>',
	'priority'    => 10,
) );
//footer copyright section END

//misc section
Kirki::add_section( 'misc_options', array(
    'title'          => esc_attr__( 'MISC Options', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_stickymenu_setting',
	'label'       => esc_attr__( 'Sticky Menu', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Sticky Menu (This will not work for small devices)', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_back_to_top',
	'label'       => esc_attr__( 'Back To Top Button', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Back To Top Button', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'toggle',
	'settings'    => 'seopress_loading_icon',
	'label'       => esc_attr__( 'Page Loading Icon', 'seopress' ),
	'description' => esc_attr__( 'Enable/Disable Page Loading Icon', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '0',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'image',
	'settings'    => 'seopress_loading_icon_img',
	'label'       => __( 'Upload Custom Loading Icon', 'seopress' ),
	'description' => __( 'It will replace default loading icon.', 'seopress' ),
	'section'     => 'misc_options',
	'default'     => '',
	'priority'    => 10,
	'active_callback'  => array(
		array(
			'setting'  => 'seopress_loading_icon',
			'operator' => '==',
			'value'    => 1,
		),
	)
) );
//misc section END

//Theme Info section
Kirki::add_section( 'seopress_theme_info', array(
    'title'          => esc_attr__( 'Theme Info', 'seopress' ),
    'panel'          => 'seopress_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_docs',
	'label'       => __( 'SEOPress DOCS', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">You can check SEOPress Free theme <a target="_blank" href="http://ewptheme.com/seopress-free-wordpress-theme-documentation/">DOCS Here</a>.</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_dmo',
	'label'       => __( 'SEOPress Demo', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">You can check SEOPress Free theme <a target="_blank" href="http://seopress.ewptheme.com/">Demo Here</a>.</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_sprt',
	'label'       => __( 'SEOPress Support', 'seopress' ),
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">Do you want our support? Please <a target="_blank" href="http://ewptheme.com/support/">Create a support ticket</a>.</div>',
	'priority'    => 10,
) );

Kirki::add_field( 'seopress_config', array(
	'type'        => 'custom',
	'settings'    => 'seopress_custom_crddit',
	'label'       => 'SEOPress PRO Version',
	'section'     => 'seopress_theme_info',
	'default'     => '<div style="background-color: #333;border-radius: 9px;color: #fff;padding: 13px 7px;">Do you want missing options and compatibility with premium plugins? Please <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/">Install SEOPress Pro version</a>.</div>',
	'priority'    => 10,
) );

//Theme Info section END

