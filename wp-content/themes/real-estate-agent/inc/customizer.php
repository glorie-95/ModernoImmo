<?php

Real_Estate_Agent::add_config( 'real-estate-agent', array(
    'capability'    => 'edit_theme_options',
    'option_type'   => 'theme_mod',
) );


/*SECTIONS */

//Home Page
Real_Estate_Agent::add_panel( 'section', array(
    'priority'    => 2,
    'title'       => __( 'Front Page Sections', 'real-estate-agent' ),
    'description' => __( 'Front Page Sections', 'real-estate-agent' ),
) );


Real_Estate_Agent::add_section( 'about_section', array(
    'title'          => __( 'About Us', 'real-estate-agent' ),
    'description'    => __( 'Main Agent Welcome Information', 'real-estate-agent' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'panel' 		 => 'section',
) );

Real_Estate_Agent::add_section( 'blog_section', array(
    'title'          => __( 'Blog Section', 'real-estate-agent' ),
    'description'    => __( 'Blog Posts', 'real-estate-agent' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 4,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'panel'          => 'section',
) );

Real_Estate_Agent::add_section( 'address_section', array(
    'title'          => __( 'Contact Form', 'real-estate-agent' ),
    'description'    => __( 'Contact Information', 'real-estate-agent' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'panel' 		 => 'section',
) );








//about section title


//First Column
Real_Estate_Agent::add_field( 'real-estate-agent', array(
    'type'        => 'switch',
    'settings'    => 'about-switch',
    'label'       => __( 'Toggle Section On/Off', 'real-estate-agent' ),
    'section'     => 'about_section',
    'default'     => '0',
    'priority'    => 1,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'real-estate-agent' ),
        'off' => esc_attr__( 'Disable', 'real-estate-agent' ),
    ),
) );
Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'first_about',
	'label'       => __( 'Select About page', 'real-estate-agent' ),
	'section'     => 'about_section',
	'default'     => 42,
	'priority'    => 1,
) );

//Main Agent Contact Section
Real_Estate_Agent::add_section( 'contact_information', array(
    'title'          => __( 'Contact Information', 'real-estate-agent' ),
    'description'    => __( 'Site Wide Contact Information', 'real-estate-agent' ),
    'panel'          => '', // Not typically needed.
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'telephone',
	'label'    => __( 'Primary Telephone Number', 'real-estate-agent' ),
	'section'  => 'about_section',
	'priority' => 1,
) );

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'email',
	'label'    => __( 'Email', 'real-estate-agent' ),
	'section'  => 'about_section',
	'priority' => 1,
) );

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'contact_link',
	'label'    => __( 'contact button link', 'real-estate-agent' ),
	'section'  => 'about_section',
	'priority' => 1,
) );
//Address page

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'contact_title',
	'label'    => __( 'contact Section Title', 'real-estate-agent' ),
	'section'  => 'address_section',
	'priority' => 1,
) );

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'cform',
	'label'    => __( 'contact form shortcode(leave blank to disable)', 'real-estate-agent' ),
	'section'  => 'address_section',
	'priority' => 1,
	'sanitize_callback' => 'esc_attr',
) );



/*
* Custom Header Image Text
*/

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'header_text',
	'label'    => __( 'Intro Text', 'real-estate-agent' ),
	'section'  => 'header_image',
	'priority' => 11,
) );

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'header_text2',
	'label'    => __( 'Sub Intro Text', 'real-estate-agent' ),
	'section'  => 'header_image',
	'priority' => 11,
) );

/*
* Colors
*/

Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'        => 'color',
	'settings'    => 'real_estate_agent_accent',
	'label'       => __( 'Main Accent Color', 'real-estate-agent' ),
	'section'     => 'colors',
	'default'     => '#1abc9c',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
    'output' => array(
        array(
            'element'  => 'a, #cssmenu ul li ul li:hover>a, #cssmenu ul li ul li.active>a a,.slider-info .fa, .widget .widget-title:after,.widget .widget-title span,	.property-box-price, #secondary .widget ul li a:hover,
						ul.double li:before,h3.price,.flex-direction-nav a,	.agent-widget span,	.property-widget h3.entry-title ,.slider .price, .widget .widget-title:after,.hentry .entry-title:after, .hentry .entry-title:after,ul.properties .property-info span.location-marker, ul.property-widget li .price',
            'property' => 'color',
        ),
        array(
            'element'  => 'button,input[type="button"],input[type="reset"],input[type="submit"],.form-group button, .slider-info ul.property-info-price li.price span a.pricee, .home-image .intro-header a.button-a, ul.properties .price,.alizarin,.address-content',
            'property' => 'background-color',
        ),
        array(
        	'element' => '.home-image .intro-header a.button-a, a.read-more',
        	'property'=> 'border-color',
        	),

     )
));

//blog section title
Real_Estate_Agent::add_field( 'real-estate-agent', array(
    'type'        => 'switch',
    'settings'    => 'blog-switch',
    'label'       => __( 'Toggle Section On/Off', 'real-estate-agent' ),
    'section'     => 'blog_section',
    'default'     => '0',
    'priority'    => 1,
    'choices'     => array(
        'on'  => esc_attr__( 'Enable', 'real-estate-agent' ),
        'off' => esc_attr__( 'Disable', 'real-estate-agent' ),
    ),
) );
Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'blog_title',
	'label'    => __( 'Section title', 'real-estate-agent' ),
	'section'  => 'blog_section',
	'default'  => esc_attr__( 'Latest News', 'real-estate-agent' ),
	'priority' => 2,
) );

//sub heading
Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'text',
	'settings' => 'blog_sub_title',
	'label'    => __( 'Section Sub heading', 'real-estate-agent' ),
	'section'  => 'blog_section',
	'priority' => 3,
) );
Real_Estate_Agent::add_field( 'real-estate-agent', array(
	'type'     => 'number',
	'settings' => 'real-estate-agent-blog-number',
	'label'    => __( 'Number of Posts', 'real-estate-agent' ),
	'section'  => 'blog_section',
	'default'  => 6,
	'priority' => 2,
) );

/*SECTIONS */
Real_Estate_Agent::add_panel( 'fonts', array(
    'priority'    => 20,
    'title'       => __( 'Google Fonts', 'real-estate-agent' ),
    'description' => __( 'Choose your Fonts', 'real-estate-agent' ),
) );

Real_Estate_Agent::add_section( 'heading_font', array(
    'title'          => __( 'Header Font', 'real-estate-agent' ),
    'description'    => __( 'h1,h2,h3,h4,h5 fonts', 'real-estate-agent' ),
    'priority'       => 1,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'panel'          => 'fonts',
) );
Real_Estate_Agent::add_section( 'body_font', array(
    'title'          => __( 'Body Font', 'real-estate-agent' ),
    'description'    => __( 'Site typography', 'real-estate-agent' ),
    'priority'       => 2,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
    'panel'          => 'fonts',
) );

/**
 * Add the header typography control
 */
Real_Estate_Agent::add_field( 'real-estate-agent', array(
    'type'        => 'typography',
    'settings'    => 'headers_typography',
    'label'       => esc_attr__( 'Headers Typography', 'real-estate-agent' ),
    'description' => esc_attr__( 'Select the typography options for your headers.', 'real-estate-agent' ),
    'help'        => esc_attr__( 'The typography options you set here will override the heading Typography options for all headers on your site (post titles, widget titles etc).', 'real-estate-agent' ),
    'section'     => 'heading_font',
    'priority'    => 10,
    'default'     => array(
        'font-family'    => 'Lato',
        'variant'        => '400',
    ),
    'output' => array(
        array(
            'element' => array( 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', '.h1', '.h2', '.h3', '.h4', '.h5', '.h6', '.header-meta b','#cssmenu a', ),
        ),
    ),
) );

/**
 * Add the header typography control
 */
Real_Estate_Agent::add_field( 'real-estate-agent', array(
    'type'        => 'typography',
    'settings'    => 'body_typography',
    'label'       => esc_attr__( 'Body Font', 'real-estate-agent' ),
    'description' => esc_attr__( 'Select the typography options for body text.', 'real-estate-agent' ),
    'help'        => esc_attr__( 'The typography options you set here will override the Body Typography options for all texts on your site except headers.', 'real-estate-agent' ),
    'section'     => 'body_font',
    'priority'    => 10,
    'default'     => array(
        'font-family'    => 'Open Sans',
        'variant'        => '400',
    ),
    'output' => array(
        array(
            'element' => array( 'body' ),
        ),
    ),
) );


/**
 * photopress Theme Customizer.
 *
 * @package photopress
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function real_estate_agent_customize_register( $wp_customize ) {
    $wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
    $wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
    $wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';


    // View PRO Version
    $wp_customize->add_section( 'real_estate_agent_style_view_pro', array(
        'title'       => '' . esc_html__( 'PRO ADDON', 'real-estate-agent' ),
        'priority'    => 1,
        'description' => sprintf(
            __( '<div class="upsell-container">
                    <h2>Go PRO Today!</h2>
                    <p>Get the full Real Estate Features: </p>
                    <ul class="upsell-features">

                            <li>
                                <h4>Real Estate PRO Plugin</h4>
                                <div class="description">Add, manage and display properties as you wish. Add propoerty slider showcase & many more features</div>
                            </li>

                            <li>
                                <h4>Agents</h4>
                                <div class="description">Create & assign agents to properties</div>
                            </li>
                            
                            <li>
                                <h4>Testimonials & Teams</h4>
                                <div class="description">Add Testimonials & Teams to your site today</div>
                            </li>

                            <li>
                                <h4>One On One Email Support</h4>
                                <div class="description">Get one on one email support from our experienced support stuff, we can also help you modify the theme to your liking. 
                                </br></br> <b>Get 10&#37 OFF using the code wprocks</b></div>
                            </li>

                            
                    </ul> %s </div>', 'real-estate-agent' ),
            sprintf( '<a href="%1$s" target="_blank" class="button button-primary">%2$s</a>', esc_url( real_estate_agent_get_pro_link() ), esc_html__( 'Upgrade to PRO', 'real-estate-agent' ) )
        ),
    ) );

    $wp_customize->add_setting( 'real_estate_agent_pro_desc', array(
        'default'           => '',
        'sanitize_callback' => 'real_estate_agent_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'real_estate_agent_pro_desc', array(
        'section' => 'real_estate_agent_style_view_pro',
        'type'    => 'hidden',
    ) );
}
add_action( 'customize_register', 'real_estate_agent_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function real_estate_agent_customize_preview_js() {
    wp_enqueue_script( 'real_estate_agent_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'real_estate_agent_customize_preview_js' );

/**
 * Admin CSS
 */
function real_estate_agent_customizer_assets() {
    wp_enqueue_style( 'real_estate_agent_customizer_style', get_template_directory_uri() . '/css/admin.css', null, '1.0.1', false );
}
add_action( 'customize_controls_enqueue_scripts', 'real_estate_agent_customizer_assets' );
/**
 * Generate a link to the Noah Lite info page.
 */
function real_estate_agent_get_pro_link() {
    return 'https://thepixeltribe.com/template/neptune-real-estate/';
}


