<?php
if (!function_exists('construction_map_sidebar_layout')) :
    function construction_map_sidebar_layout()
    {
        $construction_map_sidebar_layout = array(
            'right-sidebar' => esc_html__('Right Sidebar', 'construction-map'),
            'left-sidebar' => esc_html__('Left Sidebar', 'construction-map'),
            'no-sidebar' => esc_html__('No Sidebar', 'construction-map'),
        );
        return apply_filters('construction_map_sidebar_layout', $construction_map_sidebar_layout);
    }
endif;

/**
 * Blog/Archive Description Option
 *
 * @since themesmake Construction 1.0.0
 *
 *
 * 
 * @param null
 * @return array $construction_map_blog_excerpt
 *
 */
if (!function_exists('construction_map_blog_excerpt')) :
    function construction_map_blog_excerpt()
    {
        $construction_map_blog_excerpt = array(
            'excerpt' => esc_html__('Excerpt', 'construction-map'),
            'content' => esc_html__('Content', 'construction-map'),

        );
        return apply_filters('construction_map_blog_excerpt', $construction_map_blog_excerpt);
    }
endif;

/**
 * Show/Hide Feature Image  options
 *
 * @since themesmake Construction 1.0.0
 *
 * @param null
 * @return array $construction_map_show_feature_image_option
 *
 */
if (!function_exists('construction_map_show_feature_image_option')) :
    function construction_map_show_feature_image_option()
    {
        $construction_map_show_feature_image_option = array(
            'show' => esc_html__('Show', 'construction-map'),
            'hide' => esc_html__('Hide', 'construction-map')
        );
        return apply_filters('construction_map_show_feature_image_option', $construction_map_show_feature_image_option);
    }
endif;
