<?php
/**
 * Breadcrumb  display option options
 * @param null
 * @return array $construction_map_show_breadcrumb_option
 *
 */
if (!function_exists('construction_map_show_breadcrumb_option')) :
    function construction_map_show_breadcrumb_option()
    {
        $construction_map_show_breadcrumb_option = array(
            'enable' => esc_html__('Enable', 'construction-map'),
            'disable' => esc_html__('Disable', 'construction-map')
        );
        return apply_filters('construction_map_show_breadcrumb_option', $construction_map_show_breadcrumb_option);
    }
endif;


/**
 * Reset Option
 *
 *
 * @param null
 * @return array $construction_map_reset_option
 *
 */
if (!function_exists('construction_map_reset_option')) :
    function construction_map_reset_option()
    {
        $construction_map_reset_option = array(
            'do-not-reset' => esc_html__('Do Not Reset', 'construction-map'),
            'reset-all' => esc_html__('Reset All', 'construction-map'),
        );
        return apply_filters('construction_map_reset_option', $construction_map_reset_option);
    }
endif;



/**
 * Sanitize Multiple Category
 * =====================================
 */

if ( !function_exists('construction_map_sanitize_multiple_category') ) :

    function construction_map_sanitize_multiple_category( $values )
    {

        $multi_values = !is_array( $values ) ? explode( ',', $values ) : $values;

        return !empty( $multi_values ) ? array_map( 'sanitize_text_field', $multi_values ) : array();
    }

endif;
