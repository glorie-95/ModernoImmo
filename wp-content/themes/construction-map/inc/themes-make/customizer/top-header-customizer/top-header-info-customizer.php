<?php
/**
 *themesmake ConstructionHeader Info Section
 *
 */
$wp_customize->add_section(
    'construction_map_top_header_info_section',
    array(
        'priority' => 6,
        'capability' => 'edit_theme_options',
        'title' => esc_html__('Top Header Info', 'construction-map'),
    )
);

$wp_customize->add_setting(
    'construction_map_top_header_section',
    array(
        'default' => $default['construction_map_top_header_section'],
        'sanitize_callback' => 'construction_map_sanitize_select',
    )
);

$hide_show_top_header_option = construction_map_slider_option();
$wp_customize->add_control(
    'construction_map_top_header_section',
    array(
        'type' => 'radio',
        'label' => esc_html__('Top Header Info Option', 'construction-map'),
        'description' => esc_html__('Show/hide Option for Top Header Info Section.', 'construction-map'),
        'section' => 'construction_map_top_header_info_section',
        'choices' => $hide_show_top_header_option,
        'priority' => 5
    )
);

/**
 * Field for Font Awesome Icon
 *
 */
$wp_customize->add_setting(
    'construction_map_top_header_section_phone_number_icon',
    array(
        'default' => $default['construction_map_top_header_section_phone_number_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'construction_map_top_header_section_phone_number_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Class Name', 'construction-map'),
        'section' => 'construction_map_top_header_info_section',
        'priority' => 6
    )
);

/**
 * Field for Top Header Phone Number
 *
 */
$wp_customize->add_setting(
    'construction_map_top_header_phone_no',
    array(
        'default' => $default['construction_map_top_header_phone_no'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);
$wp_customize->add_control(
    'construction_map_top_header_phone_no',
    array(
        'type' => 'text',
        'label' => esc_html__('Phone Number', 'construction-map'),
        'section' => 'construction_map_top_header_info_section',
        'priority' => 8
    )
);

/**
 * Field for Fonsome Icon
 *
 */
$wp_customize->add_setting(
    'construction_map_email_icon',
    array(
        'default' => $default['construction_map_email_icon'],
        'sanitize_callback' => 'sanitize_text_field',
    )
);

$wp_customize->add_control(
    'construction_map_email_icon',
    array(
        'type' => 'text',
        'description' => esc_html__('Insert Font Awesome Class Name', 'construction-map'),
        'section' => 'construction_map_top_header_info_section',
        'priority' => 8
    )
);

/**
 * Field for Top Header Email Address
 *
 */
$wp_customize->add_setting(
    'construction_map_top_header_email',
    array(
        'default' => $default['construction_map_top_header_email'],
        'sanitize_callback' => 'sanitize_email',
    )
);
$wp_customize->add_control(
    'construction_map_top_header_email',
    array(
        'type' => 'email',
        'label' => esc_html__('Email Address', 'construction-map'),
        'section' => 'construction_map_top_header_info_section',
        'priority' => 8
    )
);


/**
 *   Show/Hide Social Link
 */
$wp_customize->add_setting(
    'construction_map_social_link_hide_option',
    array(
        'default' => $default['construction_map_social_link_hide_option'],
        'sanitize_callback' => 'construction_map_sanitize_checkbox',
    )
);
$wp_customize->add_control('construction_map_social_link_hide_option',
    array(
        'label' => esc_html__('Hide/Show Social Menu', 'construction-map'),
        'section' => 'construction_map_top_header_info_section',
        'type' => 'checkbox',
        'priority' => 10,
    )
);



/**
 * Field for Fonsome Icon
 *
 */
$wp_customize->add_setting(
	'construction_map_facebook',
	array(
		'default' => $default['construction_map_email_icon'],
		'sanitize_callback' => 'sanitize_text_field',
	)
);

$wp_customize->add_control(
	'construction_map_email_icon',
	array(
		'type' => 'text',
		'description' => esc_html__('Insert Font Awesome Class Name', 'construction-map'),
		'section' => 'construction_map_top_header_info_section',
		'priority' => 8
	)
);


/**
 * Field for Get Started facebook Link
 *
 */
$wp_customize->add_setting(
	'construction_map_facebook_url',
	array(
		'default' => $default['construction_map_facebook_url'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'construction_map_facebook_url',
	array(
		'type' => 'url',
		'label' => esc_html__('Facebook Url Link', 'construction-map'),
		'description' => esc_html__('Use full url link', 'construction-map'),
		'section' => 'construction_map_top_header_info_section',
		'priority' => 9
	)
);

/**
 * Field for Get Started facebook Link
 *
 */
$wp_customize->add_setting(
	'construction_map_facebook_url',
	array(
		'default' => $default['construction_map_facebook_url'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'construction_map_facebook_url',
	array(
		'type' => 'url',
		'label' => esc_html__('Facebook Url Link', 'construction-map'),
		'description' => esc_html__('Use full url link', 'construction-map'),
		'section' => 'construction_map_top_header_info_section',
		'priority' => 11
	)
);

$wp_customize->add_setting(
	'construction_map_youtube_url',
	array(
		'default' => $default['construction_map_youtube_url'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'construction_map_youtube_url',
	array(
		'type' => 'url',
		'label' => esc_html__('Youtube Url Link', 'construction-map'),
		'description' => esc_html__('Use full url link', 'construction-map'),
		'section' => 'construction_map_top_header_info_section',
		'priority' => 12
	)
);


$wp_customize->add_setting(
	'construction_map_linkedin_url',
	array(
		'default' => $default['construction_map_linkedin_url'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'construction_map_linkedin_url',
	array(
		'type' => 'url',
		'label' => esc_html__('linkedin Url Link', 'construction-map'),
		'description' => esc_html__('Use full url link', 'construction-map'),
		'section' => 'construction_map_top_header_info_section',
		'priority' => 13
	)
);



$wp_customize->add_setting(
	'construction_map_twitter_url',
	array(
		'default' => $default['construction_map_twitter_url'],
		'sanitize_callback' => 'esc_url_raw',
	)
);
$wp_customize->add_control(
	'construction_map_twitter_url',
	array(
		'type' => 'url',
		'label' => esc_html__('twitter Url Link', 'construction-map'),
		'description' => esc_html__('Use full url link', 'construction-map'),
		'section' => 'construction_map_top_header_info_section',
		'priority' => 14
	)
);