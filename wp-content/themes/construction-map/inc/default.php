<?php
/**
 * themesmake Construction default theme options.
 *
 * 
 * @subpackage themesmake Construction
 */

if ( !function_exists('construction_map_get_default_theme_options' ) ) :

    /**
     * Get default theme options.
     *
     * @since 1.0.0
     *
     * @return array Default theme options.
     */
    function construction_map_get_default_theme_options()
    {

        $default = array();

        // Homepage Slider Section
        $default['construction_map_homepage_slider_option'] = 'hide';
        $default['construction_map_slider_cat_id'] = 0;
        $default['construction_map_no_of_slider'] = 3;
        $default['construction_map_slider_get_started_txt'] = esc_html__('Get Started!', 'construction-map');
        $default['construction_map_slider_get_started_link'] = '#';

        // footer copyright.
        $default['construction_map_copyright'] = esc_html__('Copyright All Rights Reserved', 'construction-map');

        // Home Page Top header Info.
        $default['construction_map_top_header_section'] = 'hide';
        $default['construction_map_top_header_section_phone_number_icon'] = 'fa-phone';
        $default['construction_map_top_header_phone_no'] = '';
        $default['construction_map_email_icon'] = 'fa-envelope-o';
        $default['construction_map_top_header_email'] = '';
        $default['construction_map_social_link_hide_option'] = 1;
	    $default['construction_map_facebook_url']='';
	    $default['construction_map_youtube_url']='';
	    $default['construction_map_linkedin_url']='';
	    $default['construction_map_twitter_url']='';

        // Blog.
        $default['construction_map_sidebar_layout_option'] = 'right-sidebar';
        $default['construction_map_blog_title_option'] = esc_html__('Latest Blog', 'construction-map');
        $default['construction_map_blog_excerpt_option'] = 'excerpt';
        $default['construction_map_description_length_option'] = 40;
        $default['construction_map_exclude_cat_blog_archive_option'] = '';
        

        // Details page.
        $default['construction_map_show_feature_image_single_option'] = 'show';

        // Color Option.
        $default['construction_map_primary_color'] = '#fab702';
        $default['construction_map_top_header_background_color'] = '#fab702';
        $default['construction_map_top_footer_background_color'] = '#444444';
        $default['construction_map_bottom_footer_background_color'] = '#fab702';
        $default['construction_map_front_page_hide_option'] = 0;
        $default['construction_map_breadcrumb_setting_option'] = 'enable';
        $default['construction_map_post_search_placeholder_option'] = esc_html__('Search', 'construction-map');
        $default['construction_map_hide_breadcrumb_front_page_option'] = 1;
        $default['construction_map_color_reset_option'] = 'do-not-reset';

        // Pass through filter.
        $default = apply_filters( 'construction_map_get_default_theme_options', $default );
        return $default;
    }
endif;
