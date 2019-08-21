<?php

/**
 * Loads parent and child themes' style.css
 */

add_action( 'wp_enqueue_scripts', 'dream_house_construction_child_theme_enqueue_styles',999 );
function dream_house_construction_child_theme_enqueue_styles() {

    $parent_style = 'dream_house_construction_fireblog_child_parent_style';
    $parent_base_dir = 'dream-house-construction';

    wp_enqueue_style( $parent_style,
        get_template_directory_uri() . '/style.css',
        array(),
        wp_get_theme( $parent_base_dir ) ? wp_get_theme( $parent_base_dir )->get('Version') : ''
    );

    wp_enqueue_style( $parent_style . '_child_style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style( $parent_style . '-google-fonts-Roboto', 'https://fonts.googleapis.com/css?family=Roboto+Condensed', false ); 
    wp_enqueue_style( $parent_style . '-google-fonts-Oswald', 'https://fonts.googleapis.com/css?family=Oswald', false ); 
    wp_enqueue_style( $parent_style . '-google-fonts-Open-Sans', 'https://fonts.googleapis.com/css?family=Open+Sans', false ); 

}

/**
 * Customizer additions.
 */
require plugin_dir_path( __FILE__ ) . '/customizer.php';

function dream_house_construction_about_us_button_label(){
    return esc_html( get_theme_mod('button_label' ) ? get_theme_mod('button_label' ) : 'Read More' );
}

function dream_house_construction_about_us_button_label2(){
    return esc_html( get_theme_mod('button_label2' ) );
}

function dream_house_construction_button_page_link(){
    return esc_html( get_theme_mod('button_link_label' ) );
}

function dream_house_construction_about_us_button_label22(){
    return esc_html( get_theme_mod('button_label22' ) );
}

function dream_house_construction_features_title(){
    return esc_html( get_theme_mod('features_title' ) );
}

function dream_house_construction_features_subtitle(){
    return esc_html( get_theme_mod('features_subtitle' ) );
}

function dream_house_construction_wedding_heading(){
    return esc_html( get_theme_mod('port_sec_title1') );
}

function dream_house_construction_wedding_subheading(){
    return esc_html( get_theme_mod('port_sec_subtitle1') );
}

function dream_house_construction_team_heading(){
    return esc_html( get_theme_mod('team_title') );
}

function dream_house_construction_team_subheading(){
    return esc_html( get_theme_mod('team_subtitle') );
}

function dream_house_construction_fact_title(){
    return esc_html( get_theme_mod('fun_fact_title1') );
}

function dream_house_construction_fact_num(){
    return esc_html( get_theme_mod('fun_fact_num1') );
}

function dream_house_construction_fact_title1(){
    return esc_html( get_theme_mod('fun_fact_title2') );
}

function dream_house_construction_fact_num1(){
    return esc_html( get_theme_mod('fun_fact_num2') );
}

function dream_house_construction_fact_title2(){
    return esc_html( get_theme_mod('fun_fact_title3') );
}

function dream_house_construction_fact_num3(){
    return esc_html( get_theme_mod('fun_fact_num3') );
}

function dream_house_construction_fact_title3(){
    return esc_html( get_theme_mod('fun_fact_title4') );
}

function dream_house_construction_fact_num4(){
    return esc_html( get_theme_mod('fun_fact_num4') );
}

function dream_house_construction_latest_posts_heading(){
    return esc_html( get_theme_mod('blog_title') );
}

function dream_house_construction_latest_posts_subheading(){
    return esc_html( get_theme_mod('blog_subtitle') );
}

function dream_house_construction_latest_posts_heading1(){
    return esc_html( get_theme_mod('blog_title1') );
}

function dream_house_construction_latest_posts_subheading1(){
    return esc_html( get_theme_mod('blog_subtitle1') );
}

function dream_house_construction_download_posts_heading(){
    return esc_html( get_theme_mod('download_title') );
}

function dream_house_construction_download_posts_subheading(){
    return esc_html( get_theme_mod('download_subtitle') );
}

function dream_house_construction_homepage_title( $title = '' ){

    $full_title = explode(' ', $title);
    $last_word = end( $full_title );
    for ($i=0; $i < count($full_title); $i++) { 
        
        if( $i < count($full_title)-1 ){
            echo esc_html($full_title[$i] . ' ');
        } else {
            echo '<span>'.esc_html($last_word).'</span>';
        }

    }
}

function dream_house_construction_body_class(){
    
    if( !is_home() && !is_single() && !is_archive() && !is_search() && !is_page() && !is_404() )
        return 'dream-house-construction';
    else
        return 'dream-house-construction dream-house-construction-not-home';

}

if ( is_admin() && is_child_theme() ) {

    // Load about.
    require_once trailingslashit( get_stylesheet_directory() ) . '/inc/theme-info/class-about.php';
    require_once trailingslashit( get_stylesheet_directory() ) . '/inc/theme-info/about.php';

    // Load demo.
    require_once trailingslashit( get_stylesheet_directory() ) . '/inc/demo/class-demo.php';
    require_once trailingslashit( get_stylesheet_directory() ) . '/inc/demo/demo.php';
}