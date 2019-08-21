<?php
/**
 * Functions for get_theme_mod()
 *
 
 */
if (!function_exists('construction_map_get_option')) :

    /**
     * Get theme option.
     *
     * @since 1.0.0
     *
     * @param string $key Option key.
     * @return mixed Option value.
     */
    function construction_map_get_option($key = '')
    {
        if (empty($key)) {
            return;
        }
        $construction_map_default_options = construction_map_get_default_theme_options();

        $default = (isset($construction_map_default_options[$key])) ? $construction_map_default_options[$key] : '';

        $theme_option = get_theme_mod($key, $default);

        return $theme_option;

    }

endif;

