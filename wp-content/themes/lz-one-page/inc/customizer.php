<?php
/**
 * lz-one-page: Customizer
 *
 * @package WordPress
 * @subpackage lz-one-page
 * @since 1.0
 */

function lz_one_page_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'lz_one_page_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'lz-one-page' ),
	    'description' => __( 'Description of what this panel does.', 'lz-one-page' ),
	) );

	$wp_customize->add_section( 'lz_one_page_theme_options_section', array(
    	'title'      => __( 'General Settings', 'lz-one-page' ),
		'priority'   => 30,
		'panel' => 'lz_one_page_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('lz_one_page_theme_options',array(
        'default' => __('Right Sidebar','lz-one-page'),
        'sanitize_callback' => 'lz_one_page_sanitize_choices'	        
	));

	$wp_customize->add_control('lz_one_page_theme_options',array(
        'type' => 'radio',
        'label' => __('Do you want this section','lz-one-page'),
        'section' => 'lz_one_page_theme_options_section',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','lz-one-page'),
            'Right Sidebar' => __('Right Sidebar','lz-one-page'),
            'One Column' => __('One Column','lz-one-page'),
            'Three Columns' => __('Three Columns','lz-one-page'),
            'Four Columns' => __('Four Columns','lz-one-page'),
            'Grid Layout' => __('Grid Layout','lz-one-page')
        ),
	));

	// Top Bar
	$wp_customize->add_section( 'lz_one_page_contact_details', array(
    	'title'      => __( 'Top Bar', 'lz-one-page' ),
		'priority'   => null,
		'panel' => 'lz_one_page_panel_id'
	) );


	$wp_customize->add_setting('lz_one_page_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_call',array(
		'label'	=> __('Phone text','lz-one-page'),
		'section'=> 'lz_one_page_contact_details',
		'setting'=> 'lz_one_page_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_one_page_call1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_call1',array(
		'label'	=> __('Phone Number','lz-one-page'),
		'section'=> 'lz_one_page_contact_details',
		'setting'=> 'lz_one_page_call1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_one_page_address',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_address',array(
		'label'	=> __('Address Text','lz-one-page'),
		'section'=> 'lz_one_page_contact_details',
		'setting'=> 'lz_one_page_address',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_one_page_address1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_address1',array(
		'label'	=> __('Address','lz-one-page'),
		'section'=> 'lz_one_page_contact_details',
		'setting'=> 'lz_one_page_address1',
		'type'=> 'text'
	));

	$wp_customize->add_setting('lz_one_page_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_mail',array(
		'label'	=> __('Email text','lz-one-page'),
		'section'=> 'lz_one_page_contact_details',
		'setting'=> 'lz_one_page_mail',
		'type'=> 'text'
	));	

	$wp_customize->add_setting('lz_one_page_mail1',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_mail1',array(
		'label'	=> __('Email Address','lz-one-page'),
		'section'=> 'lz_one_page_contact_details',
		'setting'=> 'lz_one_page_mail1',
		'type'=> 'text'
	));	
	

	//home page slider
	$wp_customize->add_section( 'lz_one_page_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'lz-one-page' ),
		'priority'   => null,
		'panel' => 'lz_one_page_panel_id'
	) );

	$wp_customize->add_setting('lz_one_page_slider_hide_show',array(
       	'default' => 'true',
       	'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('lz_one_page_slider_hide_show',array(
	   	'type' => 'checkbox',
	   	'label' => __('Show / Hide slider','lz-one-page'),
	   	'section' => 'lz_one_page_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'lz_one_page_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'lz_one_page_sanitize_dropdown_pages'
		) );

		$wp_customize->add_control( 'lz_one_page_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'lz-one-page' ),
			'section'  => 'lz_one_page_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	//About Us
	$wp_customize->add_section('lz_one_page_about',array(
		'title'	=> __('About Us','lz-one-page'),
		'description'	=> __('Add About Us below.','lz-one-page'),
		'panel' => 'lz_one_page_panel_id',
	));

	$wp_customize->add_setting('lz_one_page_about_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_about_title',array(
		'label'	=> __('Section Title','lz-one-page'),
		'section'	=> 'lz_one_page_about',
		'setting'	=> 'lz_one_page_about_title',
		'type'		=> 'text'
	));

	$post_list = get_posts();
	$i = 0;
	$psts[]='Select';  
	foreach($post_list as $post){
		$psts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('lz_one_page_post',array(
		'sanitize_callback' => 'lz_one_page_sanitize_choices',
	));
	$wp_customize->add_control('lz_one_page_post',array(
		'type'    => 'select',
		'choices' => $psts,
		'label' => __('Select post','lz-one-page'),
		'section' => 'lz_one_page_about',
	));

	//Footer
    $wp_customize->add_section( 'lz_one_page_footer', array(
    	'title'      => __( 'Footer Text', 'lz-one-page' ),
		'priority'   => null,
		'panel' => 'lz_one_page_panel_id'
	) );

    $wp_customize->add_setting('lz_one_page_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('lz_one_page_footer_copy',array(
		'label'	=> __('Footer Text','lz-one-page'),
		'section'	=> 'lz_one_page_footer',
		'setting'	=> 'lz_one_page_footer_copy',
		'type'		=> 'text'
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'lz_one_page_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'lz_one_page_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'lz_one_page_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'lz_one_page_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'lz-one-page' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'lz-one-page' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'lz_one_page_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'lz_one_page_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'lz_one_page_customize_register' );

function lz_one_page_customize_partial_blogname() {
	bloginfo( 'name' );
}

function lz_one_page_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function lz_one_page_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function lz_one_page_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class LZ_One_Page_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'LZ_One_Page_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new LZ_One_Page_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'One Page Pro Theme', 'lz-one-page' ),
					'pro_text' => esc_html__( 'Go Pro','lz-one-page' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/themes/one-page-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'lz-one-page-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'lz-one-page-customize-controls', trailingslashit( get_template_directory_uri() ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
LZ_One_Page_Customize::get_instance();