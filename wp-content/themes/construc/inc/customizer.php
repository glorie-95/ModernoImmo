<?php
/**
 * Construc Theme Customizer
 *
 * @package construc
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function construc_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'construc_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'construc_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'construc_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function construc_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function construc_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function construc_customize_preview_js() {
	wp_enqueue_script( 'construc-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'construc_customize_preview_js' );


/**
 * Topbar Customizer
 */

// Customize function.
if ( ! function_exists( 'construc_customize_name_panel_section' ) ) {
	add_action( 'customize_register', 'construc_customize_name_panel_section' );
	/**
	 *
	 * Construc customize name panel section
	 */
	function construc_customize_name_panel_section( $wp_customize ) {

		$wp_customize->add_panel(
			'general_settings',
			array(
				'priority'       => 50,
				'title'          => __( 'Construc Settings', 'construc' ),
				'description'    => __( 'Customize Website Topbar Area', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
	if (!function_exists('construc_credit_remove')) :
		$wp_customize->add_section( 'construc_premium' , array(
			'title'      	=> __( 'Construc Premium Version', 'construc' ),
			'priority' => 1,
		) );

		$wp_customize->add_setting( 'construc_premium', array(
			'default'    		=> null,
			'sanitize_callback' => 'sanitize_text_field',
		) );

		$wp_customize->add_control( new Construc_Pro_Button( $wp_customize, 'construc_premium', array(
			'label'    => __( 'Get Construc Premium', 'construc' ),
			'section'  => 'construc_premium',
			'settings' => 'construc_premium',
			'priority' => 1,
		) ) );

	endif;
		/*
		 * Topbar Options
		 */
		$wp_customize->add_section(
			'topbar_content',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Topbar Content', 'construc' ),
				'description'    => __( 'Customize Website Topbar Area', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'topbar_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'topbar_on_off',
			array(
				'label'       => __( 'Topbar On//Off', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'short_address',
			array(

				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'    => 'wp_filter_nohtml_kses',
			)
		);

		$wp_customize->add_control(
			'short_address',
			array(
				'label'       => __( 'Short Address', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'text',
			)
		);
		
		$wp_customize->add_setting(
			'email_address',
			array(
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'    => 'sanitize_email',
			)
		);

		$wp_customize->add_control(
			'email_address',
			array(
				'label'       => __( 'Your Email', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'text',
			)
		);

		$wp_customize->add_setting(
			'facebook',
			array(
				'default'              => esc_url( 'https://facebook.com' ),
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'esc_url_raw',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'facebook',
			array(
				'label'       => __( 'Facebook Link', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'url',
			)
		);

		$wp_customize->add_setting(
			'twitter',
			array(
				'default'              => esc_url( 'https://twitter.com' ),
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'esc_url_raw',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'twitter',
			array(
				'label'       => __( 'twitter Link', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'url',
			)
		);
		$wp_customize->add_setting(
			'pinterest',
			array(
				'default'              => esc_url( 'https://pinterest.com' ),
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'esc_url_raw',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'pinterest',
			array(
				'label'       => __( 'pinterest Link', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'url',
			)
		);
		$wp_customize->add_setting(
			'googleplus',
			array(
				'default'              => esc_url( 'https://google.com' ),
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'esc_url_raw',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'googleplus',
			array(
				'label'       => __( 'Google plus Link', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'url',
			)
		);
		$wp_customize->add_setting(
			'youtube',
			array(
				'default'              => esc_url( 'https://youtube.com' ),
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'esc_url_raw',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'youtube',
			array(
				'label'       => __( 'youtube Link', 'construc' ),
				'section'     => 'topbar_content',
				'type'        => 'url',
			)
		);

		// footer content
		$wp_customize->add_section(
			'footer_content',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Footer Content', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'copyright_text',
			array(

				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_kses_post',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'copyright_text',
			array(
				'label'       => __( 'Copyright Text', 'construc' ),
				'section'     => 'footer_content',
				'type'        => 'textarea',
			)
		);
		$wp_customize->add_section(
			'breadcrumb_section',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Breadcrumb Settings', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'quote_btn_text',
			array(
				'default'              => __( 'Get Quote', 'construc' ),
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_filter_nohtml_kses',
			)
		);
		$wp_customize->add_control(
			'quote_btn_text',
			array(
				'label'       => __( 'Get Quote Button Text', 'construc' ),
				'section'     => 'breadcrumb_section',
				'type'        => 'text',
			)
		);
		$wp_customize->add_setting(
			'quote_btn_url',
			array(
				'default'              => '#',
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'esc_url_raw',
			)
		);
		$wp_customize->add_control(
			'quote_btn_url',
			array(
				'label'       => __( 'Get Quote Button URL', 'construc' ),
				'section'     => 'breadcrumb_section',
				'type'        => 'url',
			)
		);


		$wp_customize->add_section(
			'header_layout_section',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Header layout', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'header_layout',
			array(
				'default' => 'one',
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
			)
		);
		$wp_customize->add_control(
			'header_layout',
			array(
				'label'       => __( 'Header Layout', 'construc' ),
				'section'     => 'header_layout_section',
				'type'        => 'radio',
				'choices'  => array(
					'one'  => __( 'Layout One', 'construc' ),
					'two' => __( 'Layout Two', 'construc' ),
					'three' => __( 'Layout Three', 'construc' ),
				),
			)
		);

		$wp_customize->add_section(
			'prealoader_section',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Prealoader', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'prealoader_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'prealoader_on_off',
			array(
				'label'       => __( 'Prealoader ON//OFF', 'construc' ),
				'section'     => 'prealoader_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'prealoader_image',
			array(
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_image',
			)
		);
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'prealoader_image',
				array(
					'label'      => __( 'Upload Prealoader Image', 'construc' ),
					'section'    => 'prealoader_section',
					'settings'   => 'prealoader_image',
				)
			)
		);

		/**
		 * Header Style
		 */
		$wp_customize->add_section(
			'header_style',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Header Style', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'topbar_background_color',
			array(
				'default'              => '#f2f2f2',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'topbar_background_color',
			array(
				'label'       => __( 'Topbar Background Color', 'construc' ),
				'section'     => 'header_style',
				'type'        => 'color',
				'active_callback' => 'construc_topbar_on_off',
			)
		);
		$wp_customize->add_setting(
			'topbar_icon_color',
			array(
				'default'              => '#ffb400',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'topbar_icon_color',
			array(
				'label'       => __( 'Topbar Icon Color', 'construc' ),
				'section'     => 'header_style',
				'type'        => 'color',
				'active_callback' => 'construc_topbar_on_off',
			)
		);
		$wp_customize->add_setting(
			'topbar_text_color',
			array(
				'default'              => '#000531',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'topbar_text_color',
			array(
				'label'       => __( 'Topbar Text Color', 'construc' ),
				'section'     => 'header_style',
				'type'        => 'color',
				'active_callback' => 'construc_topbar_on_off',
			)
		);
		/**
		 * Logo and Menu
		 */

		$wp_customize->add_setting(
			'logo_menu_background_color',
			array(
				'default'              => '#ffffff',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'logo_menu_background_color',
			array(
				'label'       => __( 'Menu Section Background Color', 'construc' ),
				'section'     => 'header_style',
				'type'        => 'color',
			)
		);
		$wp_customize->add_setting(
			'menu_link_color',
			array(
				'default'              => '#000531',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'menu_link_color',
			array(
				'label'       => __( 'Menu Color', 'construc' ),
				'section'     => 'header_style',
				'type'        => 'color',
			)
		);

		$wp_customize->add_setting(
			'menu_active_hover_color',
			array(
				'default'              => '#ffb300',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'menu_active_hover_color',
			array(
				'label'       => __( 'Menu Hove & Active Color', 'construc' ),
				'section'     => 'header_style',
				'type'        => 'color',
			)
		);

		/**
		 * Footer Style
		 */

		$wp_customize->add_section(
			'footer_style',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Footer Style', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'footer_background_color',
			array(
				'default'              => '#000531',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'footer_background_color',
			array(
				'label'       => __( 'Footer Background Color', 'construc' ),
				'section'     => 'footer_style',
				'type'        => 'color',
			)
		);
		$wp_customize->add_setting(
			'footer_widget_title_color',
			array(
				'default'              => '#ffffff',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'footer_widget_title_color',
			array(
				'label'       => __( 'Footer Widget Title Color', 'construc' ),
				'section'     => 'footer_style',
				'type'        => 'color',
			)
		);
		$wp_customize->add_setting(
			'footer_widget_text_color',
			array(
				'default'              => '#c4c4c4',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'footer_widget_text_color',
			array(
				'label'       => __( 'Footer Widget Text Color', 'construc' ),
				'section'     => 'footer_style',
				'type'        => 'color',
			)
		);

		$wp_customize->add_setting(
			'footer_widget_link_color',
			array(
				'default'              => '#c4c4c4',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'footer_widget_link_color',
			array(
				'label'       => __( 'Footer Widget Link Color', 'construc' ),
				'section'     => 'footer_style',
				'type'        => 'color',
			)
		);
		$wp_customize->add_setting(
			'footer_widget_link_hover_active_color',
			array(
				'default'              => '#c4c4c4',
				'transport'            => 'postMessage', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
			)
		);
		// Control: Name.
		$wp_customize->add_control(
			'footer_widget_link_hover_active_color',
			array(
				'label'       => __( 'Footer Widget Link Hover & Active Color', 'construc' ),
				'section'     => 'footer_style',
				'type'        => 'color',
			)
		);

		$wp_customize->add_section(
			'construc_page_settings',
			array(
				'priority'       => 1,
				'panel'          => 'general_settings',
				'title'          => __( 'Page Settings', 'construc' ),
				'capability'     => 'edit_theme_options',
				'active_callback' => 'construc_page_settings'
			)
		);
		$wp_customize->add_setting(
			'frontpage_header_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => true,
			)
		);

		$wp_customize->add_control(
			'frontpage_header_on_off',
			array(
				'label'       => __( 'FrontPage Template Header ON//OFF', 'construc' ),
				'section'     => 'construc_page_settings',
				'type'        => 'checkbox',
				'active_callback' => 'construc_fron_page_template'
			)
		);

		$wp_customize->add_setting(
			'blogpage_template_header_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => true,
			)
		);

		$wp_customize->add_control(
			'blogpage_template_header_on_off',
			array(
				'label'       => __( 'Blog Page Header ON//OFF', 'construc' ),
				'section'     => 'construc_page_settings',
				'type'        => 'checkbox',
				'active_callback' => 'is_home'
			)
		);

		$wp_customize->add_setting(
			'blogpage_title',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_filter_nohtml_kses',
				'default'     => __( 'Our Blog', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'blogpage_title',
			array(
				'label'       => __( 'Blog Page Title', 'construc' ),
				'section'     => 'construc_page_settings',
				'type'        => 'text',
				'active_callback' => 'construc_blog_header_on_off',
				'active_callback' => 'is_home'
			)
		);

		$wp_customize->add_setting(
			'blogpage_sidebar',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_filter_nohtml_kses',
				'default'     => 'right',
			)
		);

		$wp_customize->add_control(
			'blogpage_sidebar',
			array(
				'label'       => __( 'Blog Sidebar', 'construc' ),
				'section'     => 'construc_page_settings',
				'type'        => 'radio',
				'active_callback' => 'is_home',
				'choices'  => array(
					'left'  => __( 'Left Sidebar', 'construc' ),
					'right' => __( 'Right Sidebar', 'construc' ),
					'nosidebar' => __( 'No Sidebar', 'construc' ),
				),
			)
		);
		$wp_customize->add_setting(
			'blogpage_layout',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
				'default'     => 'list',
			)
		);

		$wp_customize->add_control(
			'blogpage_layout',
				array(
					'label'       => __( 'Blog Layout', 'construc' ),
					'section'     => 'construc_page_settings',
					'type'        => 'radio',
					'active_callback' => 'is_home',
					'choices'  => array(
						'grid'  => __( 'Grid Layout', 'construc' ),
						'list' => __( 'List Layout', 'construc' ),
					),
				)
		);

		$wp_customize->add_setting(
			'blogpage_grid_column',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
				'default'     => 2,
			)
		);

		$wp_customize->add_control(
			'blogpage_grid_column',
				array(
					'label'       => __( 'Grid Column', 'construc' ),
					'section'     => 'construc_page_settings',
					'type'        => 'radio',
					'active_callback' => 'construc_blog_grid',
					'choices'  => array(
						'2'  => __( '2 Column', 'construc' ),
						'3' => __( '3 Column', 'construc' ),
						'4' => __( '4 Column', 'construc' ),
					),
				)
		);


		/**
		 * Front Page Panel
		 */
		$wp_customize->add_panel(
			'front_page',
			array(
				'priority'       => 60,
				'title'          => __( 'Construc Front Page', 'construc' ),
				'description'    => __( 'Customize Website Front Page Area', 'construc' ),
				'capability'     => 'edit_theme_options',
				'active_callback' => 'construc_fron_page_template',
			)
		);

		/**
		 * Slider Options
		 */
		$wp_customize->add_section(
			'home_slider',
			array(
				'priority'       => 1,
				'panel'          => 'front_page',
				'title'          => __( 'Home Slider', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);

		$wp_customize->add_setting(
			'header_slider_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
				'default'     => __( 'disable', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'header_slider_on_off',
			array(
				'label'       => __( 'Header Slider On//Off', 'construc' ),
				'description' => __( 'if you would like to enable Header Slider select enable and for hide select Disable', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'radio',
				'choices'  => array(
					'enable'  => __( 'Enable', 'construc' ),
					'disable' => __( 'Disable', 'construc' ),
				),
			)
		);

		$wp_customize->add_setting(
			'select_slider_one',
			array(

				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',
			)
		);
		$wp_customize->add_control(
			'select_slider_one',
			array(
				'label'       => __( 'Select SLider One', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'dropdown-pages',
			)
		);

		$wp_customize->add_setting(
			'slider_two_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'slider_two_on_off',
			array(
				'label'       => __( 'Slider Two ON//OFF', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'checkbox',
			)
		);
		$wp_customize->add_setting(
			'select_slider_two',
			array(
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',
			)
		);
		$wp_customize->add_control(
			'select_slider_two',
			array(
				'label'       => __( 'Select SLider Two', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_slider_two_on',
			)
		);
		$wp_customize->add_setting(
			'slider_three_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);
		$wp_customize->add_control(
			'slider_three_on_off',
			array(
				'label'       => __( 'Slider three ON//OFF', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'select_slider_three',
			array(
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',
			)
		);
		$wp_customize->add_control(
			'select_slider_three',
			array(
				'label'       => __( 'Select SLider Three', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_slider_three_on',
			)
		);
		$wp_customize->add_setting(
			'slider_read_more_text',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_filter_nohtml_kses',
				'default' => __( 'Read More', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'slider_read_more_text',
			array(
				'label'       => __( 'Read More Text', 'construc' ),
				'section'     => 'home_slider',
				'type'        => 'text',
			)
		);
		/**
		 * Services Section
		 */
		$wp_customize->add_section(
			'services_section',
			array(
				'priority' => 1,
				'panel' => 'front_page',
				'title' => __( 'Services Section', 'construc' ),
				'description'    => __( 'Customize Services Section', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'services_section_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
				'default'     => __( 'disable', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'services_section_on_off',
			array(
				'label'       => __( 'Services Section On Off', 'construc' ),
				'description' => __( 'if you would like to enable services section select enable and for hide select Disable', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'radio',
				'choices'  => array(
					'enable'  => __( 'Enable', 'construc' ),
					'disable' => __( 'Disable', 'construc' ),
				),
			)
		);

		$wp_customize->add_setting(
			'services_section_bg',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
				'default' => '#ffffff',
			)
		);

		$wp_customize->add_control(
			'services_section_bg',
			array(
				'label'       => __( 'Section Background Color', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'color',
			)
		);

		$wp_customize->add_setting(
			'services_section_title_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_section_title_switch',
			array(
				'label'       => __( 'Services Section Title ON/OFF', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'services_section_title',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_filter_nohtml_kses',
				'default' => __( 'The Services', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'services_section_title',
			array(
				'label'       => __( 'Services Section Title', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'text',
				'active_callback' => 'construc_services_section_title_switch',
			)
		);

		$wp_customize->add_setting(
			'services_section_subtitle',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_filter_nohtml_kses',
				'default' => __( 'We Provide', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'services_section_subtitle',
			array(
				'label'       => __( 'Services Section SubTitle', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'textarea',
				'active_callback' => 'construc_services_section_title_switch',
			)
		);
		$wp_customize->add_setting(
			'services_1_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_1_switch',
			array(
				'label'       => __( 'Services One ON//OFF', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);
		$wp_customize->add_setting(
			'services_one',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control(
			'services_one',
			array(
				'label'       => __( 'Services One', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_services_one_switch',
			)
		);
		$wp_customize->add_setting(
			'services_2_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_2_switch',
			array(
				'label'       => __( 'Services Two ON//OFF', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'services_two',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control(
			'services_two',
			array(
				'label'       => __( 'Services Two', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_services_two_switch',
			)
		);
		$wp_customize->add_setting(
			'services_3_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_3_switch',
			array(
				'label'       => __( 'Services Three ON//OFF', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'services_three',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',

			)
		);

		$wp_customize->add_control(
			'services_three',
			array(
				'label'       => __( 'Services Three', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_services_three_switch',
			)
		);

		$wp_customize->add_setting(
			'services_4_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_4_switch',
			array(
				'label'       => __( 'Services Four On//Off', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'services_four',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',

			)
		);

		$wp_customize->add_control(
			'services_four',
			array(
				'label'       => __( 'Services Four', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_services_four_switch',
			)
		);

		$wp_customize->add_setting(
			'services_5_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_5_switch',
			array(
				'label'       => __( 'Services Five ON//OFF', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'services_five',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',

			)
		);

		$wp_customize->add_control(
			'services_five',
			array(
				'label'       => __( 'Services Five', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_services_five_switch',
			)
		);

		$wp_customize->add_setting(
			'services_6_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'services_6_switch',
			array(
				'label'       => __( 'Services six Switch', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'checkbox',
			)
		);

		$wp_customize->add_setting(
			'services_six',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',

			)
		);

		$wp_customize->add_control(
			'services_six',
			array(
				'label'       => __( 'Services Six', 'construc' ),
				'section'     => 'services_section',
				'type'        => 'dropdown-pages',
				'active_callback' => 'construc_services_six_switch',
			)
		);

		/**
		 * About Us Section
		 */
		$wp_customize->add_section(
			'about_section',
			array(
				'priority'       => 1,
				'panel'          => 'front_page',
				'title'          => __( 'About Section', 'construc' ),
				'description'    => __( 'Customize About Section.', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'about_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
				'default'     => __( 'disable', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'about_on_off',
			array(
				'label'       => __( 'About Section On//Off', 'construc' ),
				'description' => __( 'if you would like to enable about section select enable and for hide select Disable', 'construc' ),
				'section'     => 'about_section',
				'type'        => 'radio',
				'choices'  => array(
					'enable'  => __( 'Enable', 'construc' ),
					'disable' => __( 'Disable', 'construc' ),
				),
			)
		);
		$wp_customize->add_setting(
			'about_section_bg',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
				'default' => '#ffffff',
			)
		);

		$wp_customize->add_control(
			'about_section_bg',
			array(
				'label'       => __( 'Section Background Color', 'construc' ),
				'section'     => 'about_section',
				'type'        => 'color',
			)
		);

		$wp_customize->add_setting(
			'select_about_page',
			array(
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_dropdown_pages',
			)
		);

		$wp_customize->add_control(
			'select_about_page',
			array(
				'label'       => __( 'Select About Page', 'construc' ),
				'section'     => 'about_section',
				'type'        => 'dropdown-pages',
			)
		);

		/*
		 * Blog slider
		 */
		$wp_customize->add_section(
			'blog_section',
			array(
				'priority'       => 1,
				'panel'          => 'front_page',
				'title'          => __( 'Blog Section', 'construc' ),
				'capability'     => 'edit_theme_options',
			)
		);
		$wp_customize->add_setting(
			'blog_on_off',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_radio',
				'default'     => __( 'disable', 'construc' ),
			)
		);

		$wp_customize->add_control(
			'blog_on_off',
			array(
				'label'       => __( 'Blog Section On//Off', 'construc' ),
				'description' => __( 'if you would like to enable Blog section select enable and for hide select Disable', 'construc' ),
				'section'     => 'blog_section',
				'type'        => 'radio',
				'choices'  => array(
					'enable'  => __( 'Enable', 'construc' ),
					'disable' => __( 'Disable', 'construc' ),
				),
			)
		);

		$wp_customize->add_setting(
			'blog_section_bg',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'sanitize_hex_color',
				'default' => '#f1f1f1',
			)
		);

		$wp_customize->add_control(
			'blog_section_bg',
			array(
				'label'       => __( 'Section Background Color', 'construc' ),
				'section'     => 'blog_section',
				'type'        => 'color',
			)
		);
		
		$wp_customize->add_setting(
			'blog_section_title_switch',
			array(
				'transport'            => 'refresh',
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'construc_sanitize_checkbox',
				'default'     => false,
			)
		);

		$wp_customize->add_control(
			'blog_section_title_switch',
			array(
				'label'       => __( 'Blog Section Title Enable/Disabel', 'construc' ),
				'section'     => 'blog_section',
				'type'        => 'checkbox',
			)
		);
		$wp_customize->add_setting(
			'blog_main_title',
			array(
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_kses_post',
			)
		);

		$wp_customize->add_control(
			'blog_main_title',
			array(
				'label'       => __( 'Title', 'construc' ),
				'description' => __( 'Type section Title', 'construc' ),
				'section'     => 'blog_section',
				'type'        => 'textarea',
				'active_callback' => 'construc_blog_section_title_switch',
			)
		);

		$wp_customize->add_setting(
			'blog_subtitle',
			array(

				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'wp_kses_post',
			)
		);

		$wp_customize->add_control(
			'blog_subtitle',
			array(
				'label'       => __( 'Subtitle', 'construc' ),
				'description' => __( 'Type Section Subtitle', 'construc' ),
				'section'     => 'blog_section',
				'type'        => 'textarea',
				'active_callback' => 'construc_blog_section_title_switch',
			)
		);

		$wp_customize->add_setting(
			'blog_post_count',
			array(
				'default'              => 5,
				'transport'            => 'refresh', // Options: refresh or postMessage.
				'capability'           => 'edit_theme_options',
				'sanitize_callback'     => 'absint',
			)
		);

		$wp_customize->add_control(
			'blog_post_count',
			array(
				'label'       => __( 'Post Count', 'construc' ),
				'section'     => 'blog_section',
				'type'        => 'number',
			)
		);

	}
}





/**
 * Construc Pro Button
 */
if ( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Construc_Pro_Button' ) ) :
class Construc_Pro_Button extends WP_Customize_Control
	{
		
		public function render_content(){
			?>
			<a style="margin-bottom:20px;margin-left:20px" href="<?php echo esc_url('https://theimran.com/product/construc-construction-and-architecture-wordpress-theme/'); ?>" target="blank" class="btn pro-btn-success btn"><?php esc_html_e('Upgrade to Premium Version','construc'); ?> </a>
				<ul class="features-list">
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Theme Install and Demo Content Setup Free', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Fast Support 24/7', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'lifetime access', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '1 purchase (3 Domain) for limited time.', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '3 header Layout', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Prealoader Image Upload & enable//Disable Option.', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Contact Form', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'WooCommerce Ready', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'access to remove footer checkmark credit.', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '30+ Custom KingComposer Widget', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Filterable Gallery', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '4 column Gallery', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '3 column Gallery', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '2 column Gallery', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Blog Grid Layout', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Blog Left Sidebar', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Blog No Sidebar', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Breadcrumb and Get Qoute Button', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Brand Slider', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Counter Up', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '3 Services Layout', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '3 Services Carousel', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Services Details Page', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Projects Details Page', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Testimonial Slider', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Blog Carousel', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '2 Team Layout', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( '3 Custom Post Types', 'construc' ); ?></li>
					<li><span class="dashicons dashicons-yes"></span><?php esc_html_e( 'Unlimited Banner Slider', 'construc' ); ?></li>
					
				</ul>
				<br>
				<a style="margin-bottom:20px;margin-left:20px" href="<?php echo esc_url('https://theimran.com/product/construc-construction-and-architecture-wordpress-theme/'); ?>" target="blank" class="btn pro-btn-success btn"><?php esc_html_e('Upgrade to Premium Version','construc'); ?> </a>

				<h3 class="padding-left-20"><?php esc_html_e( 'Would you like to extend functionality?', 'construc' ); ?> <a href="<?php echo esc_url('https://theimran.com/contact/');?>" class="button"><?php esc_html_e('hire me', 'construc'); ?></a></h3>
				
			<?php
		}
	}
endif;