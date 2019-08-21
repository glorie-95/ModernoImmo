<?php
/**
 * Copyright Info Section
 *
 * @since 1.0.0
 */
$wp_customize->add_section(
    'construction_map_copyright_info_section',
    array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => esc_html__('Footer Option', 'construction-map'),
    )
);

/**
 * Field for Copyright
 *
 * @since 1.0.0
 */
$wp_customize->add_setting(
    'construction_map_copyright',
    array(
        'default' => $default['construction_map_copyright'],
        'sanitize_callback' => 'wp_kses_post',
    )
);
$wp_customize->add_control(
    'construction_map_copyright',
    array(
        'type' => 'text',
        'label' => esc_html__('Copyright', 'construction-map'),
        'section' => 'construction_map_copyright_info_section',
        'priority' => 8
    )
);

