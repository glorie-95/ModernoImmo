<?php

/**
 * Slider  options
 * @param null
 * @return array $construction_map_slider_option
 *
 */
if (!function_exists('construction_map_slider_option')) :
    function construction_map_slider_option()
    {
        $construction_map_slider_option = array(
            'show' => esc_html__('Show', 'construction-map'),
            'hide' => esc_html__('Hide', 'construction-map')
        );
        return apply_filters('construction_map_slider_option', $construction_map_slider_option);
    }
endif;