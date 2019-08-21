<?php

add_action( 'init', 'dream_house_construction_child_customizer', 999 );

function dream_house_construction_child_customizer(){

	if ( class_exists('Kirki') ) {
		
		Kirki::add_config( 'dream-house-construction', array(
			'capability'    => 'edit_theme_options',
			'option_type'   => 'theme_mod',
		) );

		Kirki::add_panel( 'construction_theme_option', array(
		    'priority'    => 10,
		    'title'       => esc_html__( 'Construction Homepage Option', 'dream-house-construction' ),
		) );

		Kirki::add_section( 'construction_home', array(
		    'title'          => esc_html__( 'Homepage' ,'dream-house-construction'),
		    'panel' => 'construction_theme_option',
		    'capability'     => 'edit_theme_options',
		) );

		Kirki::add_section( 'slider_settings' ,
            array(
                'title'          => esc_html__( 'Slider' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'about_us' ,
            array(
                'title'          => esc_html__( 'About Company' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'company_features' ,
            array(
                'title'          => esc_html__( 'Our Services' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'call_to_action' ,
            array(
                'title'          => esc_html__( 'About US Extra' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'our_portfolio' ,
            array(
                'title'          => esc_html__( 'Our Projects' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'call_action_sec' ,
            array(
                'title'          => esc_html__( 'Call to action' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'our_team' ,
            array(
                'title'          => esc_html__( 'Our Team' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'fun_fact_section' ,
            array(
                'title'          => esc_html__( 'Company Facts' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'testimonials' ,
            array(
                'title'          => esc_html__( 'Testimonials' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );


        Kirki::add_section( 'latest_blog' ,
            array(
                'title'          => esc_html__( 'Latest News Section' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'          => 'construction_home',
            ) 
        );

        Kirki::add_section( 'company_partners' ,
            array(
                'title'          => esc_html__( 'Our Partners' , 'dream-house-construction' ),
                'priority'       => 1,
                'capability'     => 'edit_theme_options',
                'section'        => 'construction_home',
            ) 
        );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'cons_slider_cat',
			'label'       => esc_attr__( 'Select a slider category' ,'dream-house-construction' ),
			'section'     => 'slider_settings',
			'default'     => 10,
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => fire_blog_all_categories(),
			'description' =>  '<div class="alert alert-warning">' . sprintf( __( 'In free version only two slides will be displayed. %s', 'dream-house-construction' ) , '<a href="https://cyclonethemes.com/downloads/dream-house-construction-pro/" target="_blank">Upgrade to PRO ( $49 )</a>' ) . '</div>',
		));

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'about_us_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'about_us',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'about_us_page',
			'label'       => esc_attr__( 'Select about us page' ,'dream-house-construction' ),
			'section'     => 'about_us',
			'default'     => '',
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => fire_blog_all_pages(),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'number',
			'settings'    => 'about_us_no_of_words',
			'label'       => esc_attr__( 'No. of words to display' ,'dream-house-construction' ),
			'section'     => 'about_us',
			'default'     => '100',
			'priority'    => 10,
			'choices'     => array(
				'min'  => 5,
				'max'  => 200,
				'step' => 10,
			),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'button_label',
			'label'    => esc_html__( 'Enter button label' ,'dream-house-construction' ),
			'section'  => 'about_us',
			'default'  => 'Read More',
			'partial_refresh' => array(
		      	'button_label_about_me' => array(
		          	'selector'        => '.page_link',
		          	'render_callback' => 'dream_house_construction_about_us_button_label',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'checkbox',
			'settings' => 'service_status',
			'label'    => esc_html__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'  => 'company_features'
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'features_title',
			'label'    => esc_html__( 'Title' ,'dream-house-construction' ),
			'section'  => 'company_features',
			'default'  => 'Our Best Services',
			'partial_refresh' => array(
		      	'features_title' => array(
		          	'selector'        => '.features_title',
		          	'render_callback' => 'dream_house_construction_features_title',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'textarea',
			'settings' => 'features_subtitle',
			'label'    => esc_html__( 'Enter features subtitle' ,'dream-house-construction' ),
			'section'  => 'company_features',
			'default'  => 'Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.',
			'partial_refresh' => array(
		      	'features_subtitle' => array(
		          	'selector'        => '.features_subtitle',
		          	'render_callback' => 'dream_house_construction_features_subtitle',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'repeater',
			'label'       => esc_attr__( 'Company Services Icons' ,'dream-house-construction' ),
			'section'     => 'company_features',
			'row_label' => array(
				'type' => 'text',
				'value' => esc_attr__('Service Details' ,'dream-house-construction' ),
			),
			'settings'    => 'blog_features',
			'description' =>  '<div class="alert alert-warning">' . sprintf( __( 'In free version only three services can be added. %s', 'dream-house-construction' ) , '<a href="https://cyclonethemes.com/downloads/dream-house-construction-pro/" target="_blank">Upgrade to PRO ( $49 )</a>' ) . '</div>',
			'default'     => array(
				array(
					'service_icon' => 'cubes',
					'service_title' => esc_attr__( 'BUILDING', 'dream-house-construction' ),
					'service_desc'  => 'emporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates ',
					
				),
			),
			'fields' => array(
				'service_icon'   => array(
		            'type'       => 'text',
		            'label'      => esc_attr__( 'Service Icon', 'dream-house-construction' ),
		            'default'    => 'cubes',
		            'description' => 'You can get icons names from <a href="' . esc_url( 'https://fontawesome.com/v4.7.0/icons/' ) . '" target="_blank">here</a>. eg. facebook'
		        ),
				'service_title' => array(
					'type'        => 'text',
					'label'       => esc_attr__( 'Title' ,'dream-house-construction' ),
					'default'     => '',
				),
				'service_desc' => array(
					'type'        => 'textarea',
					'label'       => esc_attr__( 'Short Description ' ,'dream-house-construction' ),
					'description' => esc_attr__( 'This will be stort description' ,'dream-house-construction' ),
					'default'     => '',
				),
			),
			'choices' => array(
			    'limit' => apply_filters( 'dream_house_construction_edu_feature_services', 3 )
			),
			
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'action_page_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'call_to_action',
			'default'     => false,
			'priority'    => 10
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'action_page',
			'label'       => esc_attr__( 'Select Page' ,'dream-house-construction' ),
			'section'     => 'call_to_action',
			'default'     => '',
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => fire_blog_all_pages(),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'number',
			'settings'    => 'no_of_words_about_us_extra',
			'label'       => esc_attr__( 'No of words to display' ,'dream-house-construction' ),
			'section'     => 'call_to_action',
			'default'     => 100,
			'priority'    => 10,
			'choices'     => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 10,
			),
		) );

		Kirki::add_field( 'dream-house-construction', array(
		    'type'        => 'image',
		    'settings'    => 'bg_image',
		    'label'       => esc_attr__( 'Upload image' ,'dream-house-construction'),
		    'description' => esc_html__( 'Upload image for action page', 'dream-house-construction' ),
		    'section'     => 'call_to_action',
		    'default'     => '',
		    'output'   => array(
			    array(
			      'element'  => '.portfolio.construction section.new-step-section',
			      'property' => 'background-image',
			    ),
			  ),
		  ) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'button_link',
			'label'    => esc_html__( 'Enter first page link' ,'dream-house-construction' ),
			'section'  => 'call_to_action',
			'default'  => '#',
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'button_link_label',
			'label'    => esc_html__( 'Enter first button label' ,'dream-house-construction' ),
			'section'  => 'call_to_action',
			'default'  => 'Build Now',
			'partial_refresh' => array(
		      	'button_link_label' => array(
		          	'selector'        => '.button_link_label',
		          	'render_callback' => 'dream_house_construction_button_page_link',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'button_label2',
			'label'    => esc_html__( 'Enter second button label' ,'dream-house-construction' ),
			'description' => esc_html__( 'The link will be taken from the selected page above.' ,'dream-house-construction' ),
			'section'  => 'call_to_action',
			'default'  => 'Read More',
			'partial_refresh' => array(
		      	'button_label' => array(
		          	'selector'        => '.page_link2',
		          	'render_callback' => 'dream_house_construction_about_us_button_label2',
		      	),
		  	),
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'our_portfolio_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'our_portfolio',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'port_sec_title1',
			'label'    => esc_html__( 'Title' ,'dream-house-construction' ),
			'section'  => 'our_portfolio',
			'default'  => 'Our Featured Projects',
			'partial_refresh' => array(
		      	'port_sec_title1' => array(
		          	'selector'        => '.portfo_heading1',
		          	'render_callback' => 'dream_house_construction_wedding_heading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'port_sec_title1',
			'label'    => esc_html__( 'Title' ,'dream-house-construction' ),
			'section'  => 'our_portfolio',
			'default'  => 'Our Featured Projects',
			'partial_refresh' => array(
		      	'port_sec_title1' => array(
		          	'selector'        => '.portfo_heading1',
		          	'render_callback' => 'dream_house_construction_wedding_heading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'textarea',
			'settings' => 'port_sec_subtitle1',
			'label'    => esc_html__( 'Subtitle' ,'dream-house-construction' ),
			'section'  => 'our_portfolio',
			'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
			'partial_refresh' => array(
		      	'port_sec_subtitle1' => array(
		          	'selector'        => '.portfo_subheading1',
		          	'render_callback' => 'dream_house_construction_wedding_subheading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'portfo_cat1',
			'label'       => esc_attr__( 'Select portfolio categories' ,'dream-house-construction' ),
			'section'     => 'our_portfolio',
			'default'     => 1,
			'priority'    => 10,
			'multiple'    => apply_filters( 'dream_house_construction_portfolio_limit', 2),
			'choices'     => fire_blog_all_categories(),
			'description' =>  '<div class="alert alert-warning">' . sprintf( __( 'In free version only two categories will be displayed. %s', 'dream-house-construction' ) , '<a href="https://cyclonethemes.com/downloads/dream-house-construction-pro/" target="_blank">Upgrade to PRO ( $49 )</a>' ) . '</div>',
		) );

	    Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'our_team_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'our_team',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'team_title',
			'label'    => esc_html__( 'Team Title' ,'dream-house-construction' ),
			'section'  => 'our_team',
			'default'  => 'OUR TEAM',
			'partial_refresh' => array(
		      	'team_title' => array(
		          	'selector'        => '.team_heading',
		          	'render_callback' => 'dream_house_construction_team_heading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'textarea',
			'settings' => 'team_subtitle',
			'label'    => esc_html__( 'Team Subtitle' ,'dream-house-construction' ),
			'section'  => 'our_team',
			'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
			'partial_refresh' => array(
		      	'team_subtitle' => array(
		          	'selector'        => '.team_subheading',
		          	'render_callback' => 'dream_house_construction_team_subheading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'our_team_cat',
			'label'       => esc_attr__( 'Select Our Team Category' ,'dream-house-construction' ),
			'section'     => 'our_team',
			'default'     => 10,
			'priority'    => 10,
			// 'multiple'    => 999,
			'choices'     => fire_blog_all_categories(),
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'fun_fact_section_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'fun_fact_section',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
		    'type'        => 'image',
		    'settings'    => 'facts_bg_image',
		    'label'       => esc_attr__( 'Upload background image' ,'dream-house-construction'),
		    'description' => esc_html__( 'Upload image for background', 'dream-house-construction' ),
		    'section'     => 'fun_fact_section',
		    'default'     => '',
		    'output'   => array(
			    array(
			      'element'  => '.construction #fun-fact-section',
			      'property' => 'background-image',
			    ),
			  ),
		  ) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'show_first',
			'label'       => esc_attr__( 'Show first fact details', 'dream-house-construction' ),
			'section'     => 'fun_fact_section',
			'default'     => false,
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_icon1',
			'label'    => esc_html__( 'Enter icon code' ,'dream-house-construction' ),
			'description' => 'You can get icons from <a target="_blank" href="' . esc_url( 'https://fontawesome.com/v4.7.0/icons/' ) . '">here</a>. eg. user',
			'section'  => 'fun_fact_section',
			'default'  => 'user',
			'active_callback'    => array(
			    array(
			        'setting'  => 'show_first',
			        'operator' => '==',
			        'value'    => true,
			    ),
			),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_title1',
			'label'    => esc_html__( 'Enter title' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'default'  => 'CLIENTS',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_first',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_title1' => array(
		          	'selector'        => '.fact_title',
		          	'render_callback' => 'dream_house_construction_fact_title',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'number',
			'choices'     => array(
				'min'  => 0,
				'step' => 1,
			),
			'settings' => 'fun_fact_num1',
			'label'    => esc_html__( 'Enter number' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'default'  => '10',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_first',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_num1' => array(
		          	'selector'        => '.fact_num',
		          	'render_callback' => 'dream_house_construction_fact_num',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'show_second',
			'label'       => esc_attr__( 'Show second fact details', 'dream-house-construction' ),
			'section'     => 'fun_fact_section',
			'default'     => false,
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_icon2',
			'label'    => esc_html__( 'Enter icon code' ,'dream-house-construction' ),
			'description' => 'You can get icons from <a target="_blank" href="' . esc_url( 'https://fontawesome.com/v4.7.0/icons/' ) . '">here</a>. eg. file',
			'section'  => 'fun_fact_section',
			'default'  => 'file',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_second',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_title2',
			'label'    => esc_html__( 'Enter title' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'default'  => 'TOTAL PROJECTS',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_second',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_title2' => array(
		          	'selector'        => '.fact_title1',
		          	'render_callback' => 'dream_house_construction_fact_title1',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'number',
			'settings' => 'fun_fact_num2',
			'label'    => esc_html__( 'Enter number' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'default'  => '550',
			'choices'     => array(
				'min'  => 0,
				'step' => 1,
			),
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_second',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_num2' => array(
		          	'selector'        => '.fact_num1',
		          	'render_callback' => 'dream_house_construction_fact_num1',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'show_third',
			'label'       => esc_attr__( 'Show third fact details', 'dream-house-construction' ),
			'section'     => 'fun_fact_section',
			'default'     => false,
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_icon3',
			'label'    => esc_html__( 'Enter icon code' ,'dream-house-construction' ),
			'description' => 'You can get icons from <a target="_blank" href="' . esc_url( 'https://fontawesome.com/v4.7.0/icons/' ) . '">here</a>. eg. file',
			'section'  => 'fun_fact_section',
			'default'  => 'clock-o',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_third',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
		) );
		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_title3',
			'label'    => esc_html__( 'Enter title' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'default'  => 'HAPPY HOURS',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_third',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_title3' => array(
		          	'selector'        => '.fact_title2',
		          	'render_callback' => 'dream_house_construction_fact_title2',
		      	),
		  	),
		) );
		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'number',
			'settings' => 'fun_fact_num3',
			'label'    => esc_html__( 'Enter number' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'choices'     => array(
				'min'  => 0,
				'step' => 1,
			),
			'default'  =>5000,
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_third',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_num3' => array(
		          	'selector'        => '.fact_num2',
		          	'render_callback' => 'dream_house_construction_fact_num3',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'show_fourth',
			'label'       => esc_attr__( 'Show fourth fact details', 'dream-house-construction' ),
			'section'     => 'fun_fact_section',
			'default'     => false,
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_icon4',
			'label'    => esc_html__( 'Enter icon code' ,'dream-house-construction' ),
			'description' => 'You can get icons from <a target="_blank" href="' . esc_url( 'https://fontawesome.com/v4.7.0/icons/' ) . '">here</a>. eg. file',
			'section'  => 'fun_fact_section',
			'default'  => 'trophy',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_fourth',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'fun_fact_title4',
			'label'    => esc_html__( 'Enter title' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'default'  => 'AWARDS',
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_fourth',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_title4' => array(
		          	'selector'        => '.fact_title3',
		          	'render_callback' => 'dream_house_construction_fact_title3',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'number',
			'settings' => 'fun_fact_num4',
			'label'    => esc_html__( 'Enter number' ,'dream-house-construction' ),
			'section'  => 'fun_fact_section',
			'choices'     => array(
				'min'  => 0,
				'step' => 1,
			),
			'default'  => 21,
			'active_callback'    => array(
			          array(
			                  'setting'  => 'show_fourth',
			                  'operator' => '==',
			                  'value'    => true,
			          ),
			  ),
			'partial_refresh' => array(
		      	'fun_fact_num4' => array(
		          	'selector'        => '.fact_num3',
		          	'render_callback' => 'dream_house_construction_fact_num4',
		      	),
		  	),
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'latest_blog_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'latest_blog',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'blog_title',
			'label'    => esc_html__( 'Enter blog section title' ,'dream-house-construction' ),
			'section'  => 'latest_blog',
			'default'  => 'Latest News',
			'partial_refresh' => array(
		      	'blog_title' => array(
		          	'selector'        => '.blog_heading',
		          	'render_callback' => 'dream_house_construction_latest_posts_heading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'textarea',
			'settings' => 'blog_subtitle',
			'label'    => esc_html__( 'Enter blog section subtitle' ,'dream-house-construction' ),
			'section'  => 'latest_blog',
			'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
			'partial_refresh' => array(
		      	'blog_subtitle' => array(
		          	'selector'        => '.blog_subheading',
		          	'render_callback' => 'dream_house_construction_latest_posts_subheading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'blog_cat',
			'label'       => esc_attr__( 'Select a blog category' ,'dream-house-construction' ),
			'section'     => 'latest_blog',
			'default'     => 1,
			'priority'    => 10,
			// 'multiple'    => 999,
			'choices'     => fire_blog_all_categories(),
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'testimonials_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'testimonials',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'blog_title1',
			'label'    => esc_html__( 'Enter Title' ,'dream-house-construction' ),
			'section'  => 'testimonials',
			'default'  => 'What Our Clients Say',
			'partial_refresh' => array(
		      	'blog_title1' => array(
		          	'selector'        => '.blog_heading1',
		          	'render_callback' => 'dream_house_construction_latest_posts_heading1',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'textarea',
			'settings' => 'blog_subtitle1',
			'label'    => esc_html__( 'Enter Subtitle' ,'dream-house-construction' ),
			'section'  => 'testimonials',
			'default'  => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
			'partial_refresh' => array(
		      	'blog_subtitle1' => array(
		          	'selector'        => '.blog_subheading1',
		          	'render_callback' => 'dream_house_construction_latest_posts_subheading1',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'blog_cat1',
			'label'       => esc_attr__( 'Select testimonial category' ,'dream-house-construction' ),
			'section'     => 'testimonials',
			'default'     => 1,
			'priority'    => 10,
			'choices'     => fire_blog_all_categories(),
		) );

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'action_page2_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'call_action_sec',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'action_page2',
			'label'       => esc_attr__( 'Select call to action page' ,'dream-house-construction' ),
			'section'     => 'call_action_sec',
			'default'     => 1,
			'priority'    => 10,
			'multiple'    => 1,
			'choices'     => fire_blog_all_pages(),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'number',
			'settings'    => 'action_no_of_words',
			'label'       => esc_attr__( 'Select no. of words to display' ,'dream-house-construction' ),
			'section'     => 'call_action_sec',
			'default'     => 30,
			'priority'    => 10,
			'choices'     => array(
				'min'  => 10,
				'max'  => 200,
				'step' => 10,
			),
		) );

		Kirki::add_field( 'dream-house-construction', array(
		    'type'        => 'image',
		    'settings'    => 'backg_image2',
		    'label'       => esc_attr__( 'Upload image' ,'dream-house-construction'),
		    'description' => esc_html__( 'Upload image for action section', 'dream-house-construction' ),
		    'section'     => 'call_action_sec',
		    'default'     => '',
		    'output'   => array(
			    array(
			      'element'  => '.info-section',
			      'property' => 'background-image',
			    ),
			  ),
		  ) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'button_label22',
			'label'    => esc_html__( 'Enter button label' ,'dream-house-construction' ),
			'section'  => 'call_action_sec',
			'default'  => 'Read More',
			'partial_refresh' => array(
		      	'button_label2' => array(
		          	'selector'        => '.page_link22',
		          	'render_callback' => 'dream_house_construction_about_us_button_label22',
		      	),
		  	),
		) );	

        Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'checkbox',
			'settings'    => 'company_partners_status',
			'label'       => esc_attr__( 'Hide this section ?' ,'dream-house-construction' ),
			'section'     => 'company_partners',
			'default'     => false,
			'priority'    => 10
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'text',
			'settings' => 'download_title',
			'label'    => esc_html__( 'Enter Title' ,'dream-house-construction' ),
			'section'  => 'company_partners',
			'default'  => 'Our Partners',
			'partial_refresh' => array(
		      	'download_title' => array(
		          	'selector'        => '.download_heading',
		          	'render_callback' => 'dream_house_construction_download_posts_heading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'     => 'textarea',
			'settings' => 'download_subtitle',
			'label'    => esc_html__( 'Enter Subtitle' ,'dream-house-construction' ),
			'section'  => 'company_partners',
			'default'  => 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected',
			'partial_refresh' => array(
		      	'download_subtitle' => array(
		          	'selector'        => '.download_subheading',
		          	'render_callback' => 'dream_house_construction_download_posts_subheading',
		      	),
		  	),
		) );

		Kirki::add_field( 'dream-house-construction', array(
			'type'        => 'select',
			'settings'    => 'partner_cat',
			'label'       => esc_attr__( 'Select a partner category' ,'dream-house-construction' ),
			'section'     => 'company_partners',
			'default'     => 1,
			'priority'    => 10,
			// 'multiple'    => 999,
			'choices'     => fire_blog_all_categories(),
		) );	

		// if you are using nested panels or sections then a blank field is needed
	    Kirki::add_field( 'dream-house-construction', array(
	        'type'     => 'notice',
	        'section'  => 'construction_home',
	    ));
	}
}

add_action( 'customize_register', 'dream_house_construction_construction_custom_control_type' );
function dream_house_construction_construction_custom_control_type( $wp_customize ){

        class Dream_House_Construction_blank_content extends WP_Customize_Control {
            public $type = 'notice';
            public function render_content() { 
                    echo '';
            }
        }

        // Register our custom control with Kirki
        add_filter( 'kirki/control_types', 'dream_house_construction_kirki_notice_content' );

}

function dream_house_construction_kirki_notice_content( $controls ){
    $controls['notice'] = 'Dream_House_Construction_blank_content';
    return $controls;
}

