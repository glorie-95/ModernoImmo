<?php
/**
 * Theme Option
 *
 * @since 1.0.0
 */
$wp_customize->add_panel(
    'construction_map_theme_options',
    array(
        'priority' => 7,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Theme Option', 'construction-map'),
    )
);


/*----------------------------------------------------------------------------------------------*/
/**
 * Color Options
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'construction_map_primary_color_option',
    array(
        'title' => esc_html__('Color Options', 'construction-map'),
        'panel' => 'construction_map_theme_options',
        'priority' => 6,
    )
);

$wp_customize->add_setting(
    'construction_map_primary_color',
    array(
        'default' => $default['construction_map_primary_color'],
        'sanitize_callback' => 'sanitize_hex_color',
    )
);

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'construction_map_primary_color', array(
    'label' => esc_html__('Primary Color', 'construction-map'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'construction-map'),
    'section' => 'construction_map_primary_color_option',
    'priority' => 14,

)));

/*-----------------------------------------------------------------------------*/
/**
 * Top Header Background Color
 *
 * @since 1.0.0
 */

$wp_customize-> add_setting(
    'construction_map_top_header_background_color',
    array(
        'default' => $default['construction_map_top_header_background_color'],
        'sanitize_callback' => 'sanitize_hex_color',

    )
);

$wp_customize-> add_control( new WP_Customize_Color_Control( $wp_customize, 'construction_map_top_header_background_color', array(
    'label' => esc_html__('Top Header Background Color', 'construction-map'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'construction-map'),
    'section' => 'construction_map_primary_color_option',
    'priority' => 14,

)));

/*-----------------------------------------------------------------------------*/
/**
 * Top Footer Background Color
 *
 * @since 1.0.0
 */

$wp_customize->add_setting(
    'construction_map_top_footer_background_color',
    array(
        'default' => $default['construction_map_top_footer_background_color'],
        'sanitize_callback' => 'sanitize_hex_color',

    )
);

$wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'construction_map_top_footer_background_color', array(
    'label' => esc_html__('Top Footer Background Color', 'construction-map'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'construction-map'),
    'section' => 'construction_map_primary_color_option',
    'priority' => 14,

)));

/*-----------------------------------------------------------------------------*/
/**
 * Bottom Footer Background Color
 *
 * @since 1.0.0
 */

$wp_customize->add_setting(
    'construction_map_bottom_footer_background_color',
    array(
        'default' => $default['construction_map_bottom_footer_background_color'],
        'sanitize_callback' => 'sanitize_hex_color',

    )
);

$wp_customize->add_control(new WP_Customize_Color_Control( $wp_customize, 'construction_map_bottom_footer_background_color', array(
    'label' => esc_html__('Bottom Footer Background Color', 'construction-map'),
    'description' => esc_html__('We recommend choose  different  background color but not to choose similar to font color', 'construction-map'),
    'section' => 'construction_map_primary_color_option',
    'priority' => 14,

)));


/*-------------------------------------------------------------------------------------------*/
/**
 * Hide Static page in Home page
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'construction_map_front_page_option',
    array(
        'title' => esc_html__('Front Page Options', 'construction-map'),
        'panel' => 'construction_map_theme_options',
        'priority' => 6,
    )
);

/**
 *   Show/Hide Static page/Posts in Home page
 */
$wp_customize->add_setting(
    'construction_map_front_page_hide_option',
    array(
        'default' => $default['construction_map_front_page_hide_option'],
        'sanitize_callback' => 'construction_map_sanitize_checkbox',
    )
);
$wp_customize->add_control('construction_map_front_page_hide_option',
    array(
        'label' => esc_html__('Hide Blog Posts or Static Page on Front Page', 'construction-map'),
        'section' => 'construction_map_front_page_option',
        'type' => 'checkbox',
        'priority' => 10
    )
);


/*-------------------------------------------------------------------------------------------*/
/**
 * Breadcrumb Options
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'construction_map_breadcrumb_option',
    array(
        'title' => esc_html__('Breadcrumb Options', 'construction-map'),
        'panel' => 'construction_map_theme_options',
        'priority' => 6,
    )
);

/**
 * Breadcrumb Option
 */
$wp_customize->add_setting(
    'construction_map_breadcrumb_setting_option',
    array(
        'default' => $default['construction_map_breadcrumb_setting_option'],
        'sanitize_callback' => 'construction_map_sanitize_select',

    )
);
$hide_show_breadcrumb_option = construction_map_show_breadcrumb_option();
$wp_customize->add_control('construction_map_breadcrumb_setting_option',
    array(
        'label' => esc_html__('Breadcrumb Options', 'construction-map'),
        'section' => 'construction_map_breadcrumb_option',
        'choices' => $hide_show_breadcrumb_option,
        'type' => 'select',
        'priority' => 10
    )
);


  /**
   *   Show/Hide Breadcrumb in Home page
   */
    $wp_customize->add_setting(
        'construction_map_hide_breadcrumb_front_page_option',
        array(
            'default' => $default['construction_map_hide_breadcrumb_front_page_option'],
            'sanitize_callback' => 'construction_map_sanitize_checkbox',
        )
    );
    $wp_customize->add_control('construction_map_hide_breadcrumb_front_page_option',
        array(
            'label' => esc_html__('Show/Hide Breadcrumb in Home page', 'construction-map'),
            'section' => 'construction_map_breadcrumb_option',
            'type' => 'checkbox',
            'priority' => 10
        )
    );

/*-------------------------------------------------------------------------------------------*/

/**
 * Reset Options
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'construction_map_reset_option',
    array(
        'title' => esc_html__('Color Reset Options', 'construction-map'),
        'panel' => 'construction_map_theme_options',
        'priority' => 14,
    )
);

/**
 * Reset Option
 */
$wp_customize->add_setting(
    'construction_map_color_reset_option',
    array(
        'default' => $default['construction_map_color_reset_option'],
        'sanitize_callback' => 'construction_map_sanitize_select',
        'transport' => 'postMessage'
    )
);
$reset_option = construction_map_reset_option();
$wp_customize->add_control('construction_map_color_reset_option',
    array(
        'label' => esc_html__('Reset Options', 'construction-map'),
        'description' => sprintf( esc_html__('Caution: Reset theme settings according to the given options. Refresh the page after saving to view the effects', 'construction-map')),
        'section' => 'construction_map_reset_option',
        'type' => 'select',
        'choices' => $reset_option,
        'priority' => 20
    )
);