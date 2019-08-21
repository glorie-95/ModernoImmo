<?php
/**
 * VW Construction Estate Theme Customizer
 *
 * @package VW Construction Estate
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function vw_construction_estate_custom_controls() {

    load_template( trailingslashit( get_template_directory() ) . '/inc/custom-controls.php' );
}
add_action( 'customize_register', 'vw_construction_estate_custom_controls' );

function vw_construction_estate_customize_register( $wp_customize ) {

	load_template( trailingslashit( get_template_directory() ) . 'inc/customize-homepage/class-customize-homepage.php' );

	//add home page setting pannel
	$wp_customize->add_panel( 'vw_construction_estate_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'VW Settings', 'vw-construction-estate' ),
	    'description' => __( 'Description of what this panel does.', 'vw-construction-estate' ),
	) );

	$wp_customize->add_section( 'vw_construction_estate_left_right', array(
    	'title'      => __( 'General Settings', 'vw-construction-estate' ),
		'priority'   => 30,
		'panel' => 'vw_construction_estate_panel_id'
	) );

	$wp_customize->add_setting('vw_construction_estate_width_option',array(
        'default' => __('Full Width','vw-construction-estate'),
        'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Construction_Estate_Image_Radio_Control($wp_customize, 'vw_construction_estate_width_option', array(
        'type' => 'select',
        'label' => __('Width Layouts','vw-construction-estate'),
        'description' => __('Here you can change the width layout of Website.','vw-construction-estate'),
        'section' => 'vw_construction_estate_left_right',
        'choices' => array(
            'Full Width' => get_template_directory_uri().'/images/full-width.png',
            'Wide Width' => get_template_directory_uri().'/images/wide-width.png',
            'Boxed' => get_template_directory_uri().'/images/boxed-width.png',
    ))));

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('vw_construction_estate_theme_options',array(
        'default' => __('Right Sidebar','vw-construction-estate'),
        'sanitize_callback' => 'vw_construction_estate_sanitize_choices'	        
	) );
	$wp_customize->add_control('vw_construction_estate_theme_options', array(
        'type' => 'select',
        'label' => __('Post Sidebar Layout','vw-construction-estate'),
        'description' => __('Here you can change the sidebar layout for posts. ','vw-construction-estate'),
        'section' => 'vw_construction_estate_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-construction-estate'),
            'Right Sidebar' => __('Right Sidebar','vw-construction-estate'),
            'One Column' => __('One Column','vw-construction-estate'),
            'Three Columns' => __('Three Columns','vw-construction-estate'),
            'Four Columns' => __('Four Columns','vw-construction-estate'),
            'Grid Layout' => __('Grid Layout','vw-construction-estate')
        ),
	));

	$wp_customize->add_setting('vw_construction_estate_page_layout',array(
        'default' => __('One Column','vw-construction-estate'),
        'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control('vw_construction_estate_page_layout',array(
        'type' => 'select',
        'label' => __('Page Sidebar Layout','vw-construction-estate'),
        'description' => __('Here you can change the sidebar layout for pages. ','vw-construction-estate'),
        'section' => 'vw_construction_estate_left_right',
        'choices' => array(
            'Left Sidebar' => __('Left Sidebar','vw-construction-estate'),
            'Right Sidebar' => __('Right Sidebar','vw-construction-estate'),
            'One Column' => __('One Column','vw-construction-estate')
        ),
	) );

	//Top Bar
	$wp_customize->add_section('vw_construction_estate_contact',array(
		'title'	=> __('Contact Us','vw-construction-estate'),
		'description'	=> __('Add contact us here','vw-construction-estate'),
		'priority'	=> null,
		'panel' => 'vw_construction_estate_panel_id',
	));

	$wp_customize->add_setting('vw_construction_estate_location',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_location',array(
		'label'	=> __('Location','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_location1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_location1',array(
		'label'	=> __('Other Location','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_call',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_call',array(
		'label'	=> __('Phone Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_call1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_call1',array(
		'label'	=> __('Phone Number','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_mail',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_mail',array(
		'label'	=> __('Email Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_mail1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_mail1',array(
		'label'	=> __('Mail Address','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_time',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_time',array(
		'label'	=> __('Contact Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_time1',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_time1',array(
		'label'	=> __('Working Time','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting( 'vw_construction_estate_search_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_construction_estate_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Construction_Estate_Toggle_Switch_Custom_control( $wp_customize, 'vw_construction_estate_search_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Search','vw-construction-estate' ),
          'section' => 'vw_construction_estate_contact'
    )));

	//home page slider
    $wp_customize->add_section( 'vw_construction_estate_slidersettings' , array(
      'title'      => __( 'Slider Settings', 'vw-construction-estate' ),
      'priority'   => null,
      'panel' => 'vw_construction_estate_panel_id'
    ) );

    $wp_customize->add_setting( 'vw_construction_estate_slider_hide_show',
       array(
          'default' => 1,
          'transport' => 'refresh',
          'sanitize_callback' => 'vw_construction_estate_switch_sanitization'
    ));  
    $wp_customize->add_control( new VW_Construction_Estate_Toggle_Switch_Custom_control( $wp_customize, 'vw_construction_estate_slider_hide_show',
       array(
          'label' => esc_html__( 'Show / Hide Slider','vw-construction-estate' ),
          'section' => 'vw_construction_estate_slidersettings'
    )));

    for ( $count = 1; $count <= 4; $count++ ) {

	    // Add color scheme setting and control.
	    $wp_customize->add_setting( 'vw_construction_estate_slider_page' . $count, array(
	      'default'           => '',
	      'sanitize_callback' => 'vw_construction_estate_sanitize_dropdown_pages'
	    ) );
	    $wp_customize->add_control( 'vw_construction_estate_slider_page' . $count, array(
	      'label'    => __( 'Select Slide Image Page', 'vw-construction-estate' ),
	      'description' => __( 'Slider image size (1500 x 765)', 'vw-construction-estate' ),
	      'section'  => 'vw_construction_estate_slidersettings',
	      'type'     => 'dropdown-pages'
	    ) );
    
    }

    //content layout
	$wp_customize->add_setting('vw_construction_estate_slider_content_option',array(
        'default' => __('Right','vw-construction-estate'),
        'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Construction_Estate_Image_Radio_Control($wp_customize, 'vw_construction_estate_slider_content_option', array(
        'type' => 'select',
        'label' => __('Slider Content Layouts','vw-construction-estate'),
        'section' => 'vw_construction_estate_slidersettings',
        'choices' => array(
            'Left' => get_template_directory_uri().'/images/slider-content1.png',
            'Center' => get_template_directory_uri().'/images/slider-content2.png',
            'Right' => get_template_directory_uri().'/images/slider-content3.png',
    ))));

    //Slider excerpt
	$wp_customize->add_setting( 'vw_construction_estate_slider_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_construction_estate_slider_excerpt_number', array(
		'label'       => esc_html__( 'Slider Excerpt length','vw-construction-estate' ),
		'section'     => 'vw_construction_estate_slidersettings',
		'type'        => 'range',
		'settings'    => 'vw_construction_estate_slider_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Opacity
	$wp_customize->add_setting('vw_construction_estate_slider_opacity_color',array(
      'default'              => 0.5,
      'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));

	$wp_customize->add_control( 'vw_construction_estate_slider_opacity_color', array(
	'label'       => esc_html__( 'Slider Image Opacity','vw-construction-estate' ),
	'section'     => 'vw_construction_estate_slidersettings',
	'type'        => 'select',
	'settings'    => 'vw_construction_estate_slider_opacity_color',
	'choices' => array(
      '0' =>  esc_attr('0','vw-construction-estate'),
      '0.1' =>  esc_attr('0.1','vw-construction-estate'),
      '0.2' =>  esc_attr('0.2','vw-construction-estate'),
      '0.3' =>  esc_attr('0.3','vw-construction-estate'),
      '0.4' =>  esc_attr('0.4','vw-construction-estate'),
      '0.5' =>  esc_attr('0.5','vw-construction-estate'),
      '0.6' =>  esc_attr('0.6','vw-construction-estate'),
      '0.7' =>  esc_attr('0.7','vw-construction-estate'),
      '0.8' =>  esc_attr('0.8','vw-construction-estate'),
      '0.9' =>  esc_attr('0.9','vw-construction-estate')
	),
	));

	//Consultant
	$wp_customize->add_section('vw_construction_estate_consultant',array(
		'title'	=> __('Consultant Section','vw-construction-estate'),
		'description'	=> __('Add Consultant sections below.','vw-construction-estate'),
		'panel' => 'vw_construction_estate_panel_id',
	));

	$wp_customize->add_setting('vw_construction_estate_contact_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_number',array(
		'label'	=> __('Contact Number','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_title',array(
		'label'	=> __('Contact Title','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_content',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_content',array(
		'label'	=> __('Contact content','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_link',array(
		'label'	=> __('Button Url','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('vw_construction_estate_contact_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('vw_construction_estate_contact_text',array(
		'label'	=> __('Button Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_consultant',
		'type'		=> 'text'
	));
	
	//About
	$wp_customize->add_section('vw_construction_estate_about',array(
		'title'	=> __('About Section','vw-construction-estate'),
		'description'	=> __('Add About sections below.','vw-construction-estate'),
		'panel' => 'vw_construction_estate_panel_id',
	));

	$post_list = get_posts();
	$i = 0;
	$posts[]='Select';	
	foreach($post_list as $post){
		$posts[$post->post_title] = $post->post_title;
	}

	$wp_customize->add_setting('vw_construction_estate_about_setting',array(
		'sanitize_callback' => 'vw_construction_estate_sanitize_choices',
	));
	$wp_customize->add_control('vw_construction_estate_about_setting',array(
		'type'    => 'select',
		'choices' => $posts,
		'label' => __('Select post','vw-construction-estate'),
		'section' => 'vw_construction_estate_about',
	));

	//About excerpt
	$wp_customize->add_setting( 'vw_construction_estate_about_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_construction_estate_about_excerpt_number', array(
		'label'       => esc_html__( 'About Excerpt length','vw-construction-estate' ),
		'section'     => 'vw_construction_estate_about',
		'type'        => 'range',
		'settings'    => 'vw_construction_estate_about_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Blog Post
	$wp_customize->add_section('vw_construction_estate_blog_post',array(
		'title'	=> __('Blog Post Settings','vw-construction-estate'),
		'panel' => 'vw_construction_estate_panel_id',
	));	

	$wp_customize->add_setting( 'vw_construction_estate_toggle_postdate',array(
        'default' => 1,
        'transport' => 'refresh',
        'sanitize_callback' => 'vw_construction_estate_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Construction_Estate_Toggle_Switch_Custom_control( $wp_customize, 'vw_construction_estate_toggle_postdate',array(
        'label' => esc_html__( 'Post Date','vw-construction-estate' ),
        'section' => 'vw_construction_estate_blog_post'
    )));

    $wp_customize->add_setting( 'vw_construction_estate_toggle_author',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_construction_estate_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Construction_Estate_Toggle_Switch_Custom_control( $wp_customize, 'vw_construction_estate_toggle_author',array(
		'label' => esc_html__( 'Author','vw-construction-estate' ),
		'section' => 'vw_construction_estate_blog_post'
    )));

    $wp_customize->add_setting( 'vw_construction_estate_toggle_comments',array(
		'default' => 1,
		'transport' => 'refresh',
		'sanitize_callback' => 'vw_construction_estate_switch_sanitization'
    ) );
    $wp_customize->add_control( new VW_Construction_Estate_Toggle_Switch_Custom_control( $wp_customize, 'vw_construction_estate_toggle_comments',array(
		'label' => esc_html__( 'Comments','vw-construction-estate' ),
		'section' => 'vw_construction_estate_blog_post'
    )));

    $wp_customize->add_setting( 'vw_construction_estate_excerpt_number', array(
		'default'              => 30,
		'type'                 => 'theme_mod',
		'transport' 		   => 'refresh',
		'sanitize_callback'    => 'absint',
		'sanitize_js_callback' => 'absint',
	) );
	$wp_customize->add_control( 'vw_construction_estate_excerpt_number', array(
		'label'       => esc_html__( 'Excerpt length','vw-construction-estate' ),
		'section'     => 'vw_construction_estate_blog_post',
		'type'        => 'range',
		'settings'    => 'vw_construction_estate_excerpt_number',
		'input_attrs' => array(
			'step'             => 5,
			'min'              => 0,
			'max'              => 50,
		),
	) );

	//Content Creation
	$wp_customize->add_section( 'vw_construction_estate_content_section' , array(
    	'title' => __( 'Customize Home Page Settings', 'vw-construction-estate' ),
		'priority' => null,
		'panel' => 'vw_construction_estate_panel_id'
	) );

	$wp_customize->add_setting('vw_construction_estate_content_creation_main_control', array(
		'sanitize_callback' => 'esc_html',
	) );

	$homepage= get_option( 'page_on_front' );

	$wp_customize->add_control(	new VW_Construction_Estate_Content_Creation( $wp_customize, 'vw_construction_estate_content_creation_main_control', array(
		'options' => array(
			esc_html__( 'First select static page in homepage setting for front page.Below given edit button is to customize Home Page. Just click on the edit option, add whatever elements you want to include in the homepage, save the changes and you are good to go.','vw-construction-estate' ),
		),
		'section' => 'vw_construction_estate_content_section',
		'button_url'  => admin_url( 'post.php?post='.$homepage.'&action=edit'),
		'button_text' => esc_html__( 'Edit', 'vw-construction-estate' ),
	) ) );

	//footer
	$wp_customize->add_section('vw_construction_estate_footer_section',array(
		'title'	=> __('Footer Text','vw-construction-estate'),
		'description'	=> __('Add some text for footer like copyright etc.','vw-construction-estate'),
		'priority'	=> null,
		'panel' => 'vw_construction_estate_panel_id',
	));
	
	$wp_customize->add_setting('vw_construction_estate_footer_copy',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));
	
	$wp_customize->add_control('vw_construction_estate_footer_copy',array(
		'label'	=> __('Copyright Text','vw-construction-estate'),
		'section'	=> 'vw_construction_estate_footer_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('vw_construction_estate_scroll_top_alignment',array(
        'default' => __('Right','vw-construction-estate'),
        'sanitize_callback' => 'vw_construction_estate_sanitize_choices'
	));
	$wp_customize->add_control(new VW_Construction_Estate_Image_Radio_Control($wp_customize, 'vw_construction_estate_scroll_top_alignment', array(
        'type' => 'select',
        'label' => __('Scroll To Top','vw-construction-estate'),
        'section' => 'vw_construction_estate_footer_section',
        'settings' => 'vw_construction_estate_scroll_top_alignment',
        'choices' => array(
            'Left' => get_template_directory_uri().'/images/layout1.png',
            'Center' => get_template_directory_uri().'/images/layout2.png',
            'Right' => get_template_directory_uri().'/images/layout3.png'
    ))));
	/** home page setions end here**/	
}
add_action( 'customize_register', 'vw_construction_estate_customize_register' );

load_template( trailingslashit( get_template_directory() ) . '/inc/logo-resizer.php' );

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class VW_Construction_Estate_Customize {

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
		$manager->register_section_type( 'VW_Construction_Estate_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new VW_Construction_Estate_Customize_Section_Pro(
				$manager,
				'example_1',
				array(
					'priority'   => 1,
					'title'    => esc_html__( 'VW Construction Pro', 'vw-construction-estate' ),
					'pro_text' => esc_html__( 'Upgarde Pro',         'vw-construction-estate' ),
					'pro_url'  => esc_url('https://www.vwthemes.com/themes/premium-construction-wordpress-theme/')
				)
			)
		);

		// Register sections.
		$manager->add_section(
			new VW_Construction_Estate_Customize_Section_Pro(
				$manager,
				'example_2',
				array(
					'priority'   => 1,
					'title'    => esc_html__( 'Documentation', 'vw-construction-estate' ),
					'pro_text' => esc_html__( 'Docs', 'vw-construction-estate' ),
					'pro_url'  => esc_url( 'themes.php?page=vw_construction_estate_guide' )
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

		wp_enqueue_script( 'vw-construction-estate-customize-controls', trailingslashit( get_template_directory_uri() ) . '/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'vw-construction-estate-customize-controls', trailingslashit( get_template_directory_uri() ) . '/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
VW_Construction_Estate_Customize::get_instance();