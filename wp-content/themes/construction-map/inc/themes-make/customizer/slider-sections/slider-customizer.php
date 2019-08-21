<?php
/**
 * HomePage Settings Panel on customizer
 */
$wp_customize->add_panel(
	'construction_map_homepage_settings_panel',
	array(
		'priority' => 5,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => esc_html__('HomePage Slider Settings', 'construction-map'),
	)
);

/*-------------------------------------------------------------------------------------------------*/
/**
 * Slider Section
 *
 */
$wp_customize->add_section(
	'construction_map_slider_section',
	array(
		'title' => esc_html__('Slider Section', 'construction-map'),
		'panel' => 'construction_map_homepage_settings_panel',
		'priority' => 6,
	)
);

/**
 * Show/Hide option for Homepage Slider Section
 *
 */

$wp_customize->add_setting(
	'construction_map_homepage_slider_option',
	array(
		'default' => $default['construction_map_homepage_slider_option'],
		'sanitize_callback' => 'construction_map_sanitize_select',
	)
);
$hide_show_option = construction_map_slider_option();
$wp_customize->add_control(
	'construction_map_homepage_slider_option',
	array(
		'type' => 'radio',
		'label' => esc_html__('Slider Option', 'construction-map'),
		'description' => esc_html__('Show/hide option for homepage Slider Section.', 'construction-map'),
		'section' => 'construction_map_slider_section',
		'choices' => $hide_show_option,
		'priority' => 7
	)
);


/**
 * List All Pages
 */
$slider_pages = array();
$slider_pages_obj = get_pages();
$slider_pages[''] = esc_html__('Select Page','construction-map');
foreach ($slider_pages_obj as $page) {
    $slider_pages[$page->ID] = $page->post_title;
}


/*repeter call */
$wp_customize->add_setting('construction_map_banner_all_sliders', array(
    'sanitize_callback' => 'construction_map_sanitize_repeater',
    'default' => json_encode(array(
        array(
            'selectpage' => '',//field
            'button_text' => '',
            'button_url' => ''
        )
    ))
));

$wp_customize->add_control(new Construction_Map_Repeater_Controler($wp_customize, 'construction_map_banner_all_sliders', array(
        'label' =>esc_html__('Slider Settings Area', 'construction-map'),
        'section' => 'construction_map_slider_section',
        'settings' => 'construction_map_banner_all_sliders',
        'construction_map_box_label' =>esc_html__('Slider Settings Options', 'construction-map'),
        'construction_map_box_add_control' =>esc_html__('Add New Slider', 'construction-map'),
    ),
        array(
            'selectpage' => array(
                'type' => 'select',
                'label' =>esc_html__('Select Slider Page', 'construction-map'),
                'options' => $slider_pages//array
            ),
            'button_text' => array(
                'type' => 'text',
                'label' =>esc_html__('Enter Button Text', 'construction-map'),
                'default' => ''
            ),
            'button_url' => array(
                'type' => 'text',
                'label' => esc_html__('Enter Button Url', 'construction-map'),
                'default' => ''
            ),

        )
    )
);


