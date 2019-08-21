<?php
/**
 * Township Lite Theme Customizer
 *
 * @package Township Lite
 */

/**
 * Add post Message support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function township_lite_customize_register( $wp_customize ) {

	/* Custom panel type - used for multiple levels of panels */
	if ( class_exists( 'WP_Customize_Panel' ) ) {

		/**
		 * Class Township_Lite_WP_Customize_Panel
		 */
		class Township_Lite_WP_Customize_Panel extends WP_Customize_Panel {

			/**
			 * Panel
			 *
			 * @var $panel string Panel
			 */
			public $panel;

			/**
			 * Panel type
			 *
			 * @var $type string Panel type.
			 */
			public $type = 'township_lite_panel';

			/**
			 * Form the json
			 */
			public function json() {

				$array                   = wp_array_slice_assoc(
					(array) $this, array(
						'id',
						'description',
						'priority',
						'type',
						'panel',
					)
				);
				$array['title']          = html_entity_decode( $this->title, ENT_QUOTES, get_bloginfo( 'charset' ) );
				$array['content']        = $this->get_content();
				$array['active']         = $this->active();
				$array['instanceNumber'] = $this->instance_number;

				return $array;

			}

		}

	}

	$wp_customize->register_panel_type( 'Township_Lite_WP_Customize_Panel' );

	/**
	 * Upsells
	 */
	load_template( trailingslashit( get_template_directory() ) . 'inc/class-customizer-theme-info-control.php' );

	$wp_customize->add_section(
		'township_lite_theme_info_main_section', array(
			'title'    => __( 'View PRO version', 'township-lite' ),
			'priority' => 1,
		)
	);
	$wp_customize->add_setting(
		'township_lite_theme_info_main_control', array(
			'sanitize_callback' => 'esc_html',
		)
	);

	$wp_customize->add_control(
		new Township_Lite_Theme_Info(
			$wp_customize, 'township_lite_theme_info_main_control', array(
				'section'     => 'township_lite_theme_info_main_section',
				'priority'    => 100,
				'options'     => array(
					esc_html__( 'Enable-Disable options on every section', 'township-lite' ),
					esc_html__( 'Background Color & Image Option', 'township-lite' ),
					esc_html__( '100+ Font Family Options', 'township-lite' ),
					esc_html__( 'Advanced Color options', 'township-lite' ),
					esc_html__( 'Translation ready', 'township-lite' ),
					esc_html__( 'Gallery, Banner, Post Type Plugin Functionality', 'township-lite' ),
					esc_html__( 'Integrated Google map', 'township-lite' ),
					esc_html__( '1 Year Free Support', 'township-lite' ),
				),
				'button_url'  => esc_url( 'https://www.themescaliber.com/premium/wp-township-construction-wordpress-theme' ),
				'button_text' => esc_html__( 'View PRO version', 'township-lite' ),
			)
		)
	);

    $font_array = array(
        '' =>'No Fonts',
        'Abril Fatface' => 'Abril Fatface',
        'Acme' =>'Acme', 
        'Anton' => 'Anton', 
        'Architects Daughter' =>'Architects Daughter',
        'Arimo' => 'Arimo', 
        'Arsenal' =>'Arsenal',
        'Arvo' =>'Arvo',
        'Alegreya' =>'Alegreya',
        'Alfa Slab One' =>'Alfa Slab One',
        'Averia Serif Libre' =>'Averia Serif Libre', 
        'Bangers' =>'Bangers', 
        'Boogaloo' =>'Boogaloo', 
        'Bad Script' =>'Bad Script',
        'Bitter' =>'Bitter', 
        'Bree Serif' =>'Bree Serif', 
        'BenchNine' =>'BenchNine',
        'Cabin' =>'Cabin',
        'Cardo' =>'Cardo', 
        'Courgette' =>'Courgette', 
        'Cherry Swash' =>'Cherry Swash',
        'Cormorant Garamond' =>'Cormorant Garamond', 
        'Crimson Text' =>'Crimson Text',
        'Cuprum' =>'Cuprum', 
        'Cookie' =>'Cookie',
        'Chewy' =>'Chewy',
        'Days One' =>'Days One',
        'Dosis' =>'Dosis',
        'Droid Sans' =>'Droid Sans', 
        'Economica' =>'Economica', 
        'Fredoka One' =>'Fredoka One',
        'Fjalla One' =>'Fjalla One',
        'Francois One' =>'Francois One', 
        'Frank Ruhl Libre' => 'Frank Ruhl Libre', 
        'Gloria Hallelujah' =>'Gloria Hallelujah',
        'Great Vibes' =>'Great Vibes', 
        'Handlee' =>'Handlee', 
        'Hammersmith One' =>'Hammersmith One',
        'Inconsolata' =>'Inconsolata',
        'Indie Flower' =>'Indie Flower', 
        'IM Fell English SC' =>'IM Fell English SC',
        'Julius Sans One' =>'Julius Sans One',
        'Josefin Slab' =>'Josefin Slab',
        'Josefin Sans' =>'Josefin Sans',
        'Kanit' =>'Kanit',
        'Lobster' =>'Lobster',
        'Lato' => 'Lato',
        'Lora' =>'Lora', 
        'Libre Baskerville' =>'Libre Baskerville',
        'Lobster Two' => 'Lobster Two',
        'Merriweather' =>'Merriweather',
        'Monda' =>'Monda',
        'Montserrat' =>'Montserrat',
        'Muli' =>'Muli',
        'Marck Script' =>'Marck Script',
        'Noto Serif' =>'Noto Serif',
        'Open Sans' =>'Open Sans',
        'Overpass' => 'Overpass', 
        'Overpass Mono' =>'Overpass Mono',
        'Oxygen' =>'Oxygen',
        'Orbitron' =>'Orbitron',
        'Patua One' =>'Patua One',
        'Pacifico' =>'Pacifico',
        'Padauk' =>'Padauk',
        'Playball' =>'Playball',
        'Playfair Display' =>'Playfair Display',
        'PT Sans' =>'PT Sans',
        'Philosopher' =>'Philosopher',
        'Permanent Marker' =>'Permanent Marker',
        'Poiret One' =>'Poiret One',
        'Quicksand' =>'Quicksand',
        'Quattrocento Sans' =>'Quattrocento Sans',
        'Raleway' =>'Raleway',
        'Rubik' =>'Rubik',
        'Rokkitt' =>'Rokkitt',
        'Russo One' => 'Russo One', 
        'Righteous' =>'Righteous', 
        'Slabo' =>'Slabo', 
        'Source Sans Pro' =>'Source Sans Pro',
        'Shadows Into Light Two' =>'Shadows Into Light Two',
        'Shadows Into Light' =>  'Shadows Into Light',
        'Sacramento' =>'Sacramento',
        'Shrikhand' =>'Shrikhand',
        'Tangerine' => 'Tangerine',
        'Ubuntu' =>'Ubuntu',
        'VT323' =>'VT323',
        'Varela Round' =>'Varela Round',
        'Vampiro One' =>'Vampiro One',
        'Vollkorn' => 'Vollkorn',
        'Volkhov' =>'Volkhov',
        'Kavoon' =>'Kavoon',
        'Poppins' => 'Poppins',
        'Yanone Kaffeesatz' =>'Yanone Kaffeesatz'
    );
    
	//add home page setting pannel
	$wp_customize->add_panel( 'township_lite_panel_id', array(
	    'priority' => 10,
	    'capability' => 'edit_theme_options',
	    'theme_supports' => '',
	    'title' => __( 'Theme Settings', 'township-lite' ),
	    'description' => __( 'Description of what this panel does.', 'township-lite' )
	) );

	//Color / Font Pallete
	$wp_customize->add_section( 'township_lite_typography', array(
    	'title'      => __( 'Color / Font Pallete', 'township-lite' ),
		'priority'   => 30,
		'panel' => 'township_lite_panel_id'
	) );
	
	// This is Paragraph Color picker setting
	$wp_customize->add_setting( 'township_lite_paragraph_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_paragraph_color', array(
		'label' => __('Paragraph Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_paragraph_color',
	)));

	//This is Paragraph FontFamily picker setting
	$wp_customize->add_setting('township_lite_paragraph_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_paragraph_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'Paragraph Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	$wp_customize->add_setting('township_lite_paragraph_font_size',array(
		'default'	=> '12px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_paragraph_font_size',array(
		'label'	=> __('Paragraph Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_paragraph_font_size',
		'type'	=> 'text'
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'township_lite_atag_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_atag_color', array(
		'label' => __('"a" Tag Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_atag_color',
	)));

	//This is "a" Tag FontFamily picker setting
	$wp_customize->add_setting('township_lite_atag_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_atag_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( '"a" Tag Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is "a" Tag Color picker setting
	$wp_customize->add_setting( 'township_lite_li_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_li_color', array(
		'label' => __('"li" Tag Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_li_color',
	)));

	//This is "li" Tag FontFamily picker setting
	$wp_customize->add_setting('township_lite_li_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_li_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( '"li" Tag Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	// This is H1 Color picker setting
	$wp_customize->add_setting( 'township_lite_h1_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_h1_color', array(
		'label' => __('H1 Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_h1_color',
	)));

	//This is H1 FontFamily picker setting
	$wp_customize->add_setting('township_lite_h1_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_h1_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'H1 Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H1 FontSize setting
	$wp_customize->add_setting('township_lite_h1_font_size',array(
		'default'	=> '50px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_h1_font_size',array(
		'label'	=> __('H1 Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_h1_font_size',
		'type'	=> 'text'
	));

	// This is H2 Color picker setting
	$wp_customize->add_setting( 'township_lite_h2_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_h2_color', array(
		'label' => __('h2 Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_h2_color',
	)));

	//This is H2 FontFamily picker setting
	$wp_customize->add_setting('township_lite_h2_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_h2_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'h2 Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H2 FontSize setting
	$wp_customize->add_setting('township_lite_h2_font_size',array(
		'default'	=> '45px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_h2_font_size',array(
		'label'	=> __('h2 Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_h2_font_size',
		'type'	=> 'text'
	));

	// This is H3 Color picker setting
	$wp_customize->add_setting( 'township_lite_h3_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_h3_color', array(
		'label' => __('h3 Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_h3_color',
	)));

	//This is H3 FontFamily picker setting
	$wp_customize->add_setting('township_lite_h3_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_h3_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'h3 Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H3 FontSize setting
	$wp_customize->add_setting('township_lite_h3_font_size',array(
		'default'	=> '36px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_h3_font_size',array(
		'label'	=> __('h3 Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_h3_font_size',
		'type'	=> 'text'
	));

	// This is H4 Color picker setting
	$wp_customize->add_setting( 'township_lite_h4_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_h4_color', array(
		'label' => __('h4 Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_h4_color',
	)));

	//This is H4 FontFamily picker setting
	$wp_customize->add_setting('township_lite_h4_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_h4_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'h4 Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H4 FontSize setting
	$wp_customize->add_setting('township_lite_h4_font_size',array(
		'default'	=> '30px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_h4_font_size',array(
		'label'	=> __('h4 Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_h4_font_size',
		'type'	=> 'text'
	));

	// This is H5 Color picker setting
	$wp_customize->add_setting( 'township_lite_h5_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_h5_color', array(
		'label' => __('h5 Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_h5_color',
	)));

	//This is H5 FontFamily picker setting
	$wp_customize->add_setting('township_lite_h5_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_h5_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'h5 Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H5 FontSize setting
	$wp_customize->add_setting('township_lite_h5_font_size',array(
		'default'	=> '25px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_h5_font_size',array(
		'label'	=> __('h5 Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_h5_font_size',
		'type'	=> 'text'
	));

	// This is H6 Color picker setting
	$wp_customize->add_setting( 'township_lite_h6_color', array(
		'default' => '',
		'sanitize_callback'	=> 'sanitize_hex_color'
	));
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'township_lite_h6_color', array(
		'label' => __('h6 Color', 'township-lite'),
		'section' => 'township_lite_typography',
		'settings' => 'township_lite_h6_color',
	)));

	//This is H6 FontFamily picker setting
	$wp_customize->add_setting('township_lite_h6_font_family',array(
	  'default' => '',
	  'capability' => 'edit_theme_options',
	  'sanitize_callback' => 'township_lite_sanitize_choices'
	));
	$wp_customize->add_control(
	    'township_lite_h6_font_family', array(
	    'section'  => 'township_lite_typography',
	    'label'    => __( 'h6 Fonts','township-lite'),
	    'type'     => 'select',
	    'choices'  => $font_array,
	));

	//This is H6 FontSize setting
	$wp_customize->add_setting('township_lite_h6_font_size',array(
		'default'	=> '18px',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_h6_font_size',array(
		'label'	=> __('h6 Font Size','township-lite'),
		'section'	=> 'township_lite_typography',
		'setting'	=> 'township_lite_h6_font_size',
		'type'	=> 'text'
	));

	//Layouts
	$wp_customize->add_section( 'township_lite_left_right', array(
    	'title'      => __( 'Theme Layout Settings', 'township-lite' ),
		'priority'   => 30,
		'panel' => 'township_lite_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('township_lite_theme_options',array(
	        'default' => __('Right Sidebar','township-lite'),
	        'sanitize_callback' => 'township_lite_sanitize_choices'
	) );
	$wp_customize->add_control('township_lite_theme_options',
	    array(
	        'type' => 'radio',
	        'label' => __('Do you want this section','township-lite'),
	        'section' => 'township_lite_left_right',
	        'choices' => array(
	            'Left Sidebar' => __('Left Sidebar','township-lite'),
	            'Right Sidebar' => __('Right Sidebar','township-lite'),
	            'One Column' => __('One Column','township-lite'),
	            'Three Columns' => __('Three Columns','township-lite'),
	            'Four Columns' => __('Four Columns','township-lite'),
	            'Grid Layout' => __('Grid Layout','township-lite')
	        ),
	) );

	//Topbar section
	$wp_customize->add_section('township_lite_topbar_icon',array(
		'title'	=> __('Topbar Section','township-lite'),
		'description'	=> __('Add Header Content here','township-lite'),
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	) );

	$wp_customize->add_setting('township_lite_contact',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_contact',array(
		'label'	=> __('Add Phone Number','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_contact',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('township_lite_email',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	
	$wp_customize->add_control('township_lite_email',array(
		'label'	=> __('Add Email','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_email',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('township_lite_youtube_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_youtube_url',array(
		'label'	=> __('Add Youtube link','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_youtube_url',
		'type'		=> 'url'
	));

	$wp_customize->add_setting('township_lite_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_facebook_url',array(
		'label'	=> __('Add Facebook link','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('township_lite_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_twitter_url',array(
		'label'	=> __('Add Twitter link','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_twitter_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('township_lite_rss_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	
	$wp_customize->add_control('township_lite_rss_url',array(
		'label'	=> __('Add RSS link','township-lite'),
		'section'	=> 'township_lite_topbar_icon',
		'setting'	=> 'township_lite_rss_url',
		'type'	=> 'url'
	));	

	//Slider Section
	$wp_customize->add_section( 'township_lite_slidersettings' , array(
    	'title'      => __( 'Slider Settings', 'township-lite' ),
		'priority'   => null,
		'panel' => 'township_lite_panel_id'
	) );

	$wp_customize->add_setting('township_lite_slider_arrows',array(
      'default' => 'false',
      'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('township_lite_slider_arrows',array(
	      'type' => 'checkbox',
	      'label' => __('Show / Hide slider','township-lite'),
	      'section' => 'township_lite_slidersettings',
	));

	for ( $count = 1; $count <= 4; $count++ ) {

		// Add color scheme setting and control.
		$wp_customize->add_setting( 'township_lite_slider_page' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'township_lite_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'township_lite_slider_page' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'township-lite' ),
			'section'  => 'township_lite_slidersettings',
			'type'     => 'dropdown-pages'
		) );

	}

	//Our Amenities
	$wp_customize->add_section('township_lite_amenities_section',array(
		'title'	=> __('Our Amenties','township-lite'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	));
	
	$wp_customize->add_setting('township_lite_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field',
	));

	$wp_customize->add_control('township_lite_main_title',array(
		'label'	=> __('Title','township-lite'),
		'section'	=> 'township_lite_amenities_section',
		'type'	=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]='Select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('township_lite_blogcategory_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'township_lite_sanitize_choices',
	));

	$wp_customize->add_control('township_lite_blogcategory_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => __('Select Category to display Latest Post','township-lite'),
		'section' => 'township_lite_amenities_section',
	));

	//Footer
	$wp_customize->add_section('township_lite_copyright',array(
		'title'	=> __('Copyright Text','township-lite'),
		'description'	=> '',
		'priority'	=> null,
		'panel' => 'township_lite_panel_id',
	));
	
	$wp_customize->add_setting('township_lite_footer_copy',array(
		'default'	=> 'This section will appear in the Footer.',
		'sanitize_callback'	=> 'sanitize_text_field',
	));

	$wp_customize->add_control('township_lite_footer_copy',array(
		'label'	=> __('Text','township-lite'),
		'section'	=> 'township_lite_copyright',
		'type'	=> 'text'
	));

}
add_action( 'customize_register', 'township_lite_customize_register' );


/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Township_Lite_Customizer_Upsell {

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
	 * @param  object $manager Customizer manager.
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . 'inc/township-customize-theme-info-main.php' );
		load_template( trailingslashit( get_template_directory() ) . 'inc/township-customize-upsell-section.php' );

		// Register custom section types.
		$manager->register_section_type( 'township_lite_Customizer_Theme_Info_Main' );

		// Main Documentation Link In Customizer Root.
		$manager->add_section(
			new Township_Lite_Customizer_Theme_Info_Main(
				$manager, 'township-lite-theme-info', array(
					'theme_info_title' => __( 'Township Docs', 'township-lite' ),
					'label_url'        => esc_url( 'https://themescaliber.com/demo/doc/free-tc-township/' ),
					'label_text'       => __( 'Documentation', 'township-lite' ),
				)
			)
		);

		// Frontpage Sections Upsell.
		$manager->add_section(
			new Township_Lite_Customizer_Upsell_Section(
				$manager, 'township-lite-upsell-frontpage-sections', array(
					'panel'       => 'township_lite_panel_id',
					'priority'    => 500,
					'options'     => array(
						esc_html__( 'About us Section', 'township-lite' ),
						esc_html__( 'Best architect Design section', 'township-lite' ),
						esc_html__( 'Gallery section', 'township-lite' ),
						esc_html__( 'Contact Section', 'township-lite' ),
					),
					'button_url'  => esc_url( 'https://www.themescaliber.com/premium/wp-township-construction-wordpress-theme' ),
					'button_text' => esc_html__( 'View PRO version', 'township-lite' ),
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

		wp_enqueue_script( 'township-lite-upsell-js', trailingslashit( get_template_directory_uri() ) . 'inc/js/township-customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'township-lite-theme-info-style', trailingslashit( get_template_directory_uri() ) . 'inc/css/township-style.css' );
	}
}

Township_Lite_Customizer_Upsell::get_instance();