<?php




//=============================================================
// Color reset
//=============================================================
if ( ! function_exists( 'construction_map_reset_colors' ) ) :

    function construction_map_reset_colors($data) {

        $default=construction_map_get_default_theme_options();


        set_theme_mod('construction_map_top_header_background_color',$default['construction_map_top_header_background_color']);

        set_theme_mod('construction_map_top_footer_background_color', $default['construction_map_top_footer_background_color']);

        set_theme_mod('construction_map_bottom_footer_background_color',$default['construction_map_bottom_footer_background_color']);

        set_theme_mod('construction_map_primary_color', $default['construction_map_primary_color']);

        set_theme_mod('construction_map_color_reset_option','do-not-reset');


    }

endif;
add_action( 'construction_map_colors_reset','construction_map_reset_colors', 10 );

