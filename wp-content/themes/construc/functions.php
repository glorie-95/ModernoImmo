<?php
/**
 * Construc functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package construc
 */

if ( ! function_exists( 'construc_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function construc_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on construc, use a find and replace
		 * to change 'construc' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'construc', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );
		add_theme_support('woocommerce');
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		add_image_size( 'construc-recent-thumn', 100, 100, true );
		add_image_size( 'construc-thumbnail', 370, 230, true );
		add_image_size( 'construc-project', 380, 280, true );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'construc' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		$html5args = array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		);
		add_theme_support( 'html5', $html5args );

		// Set up the WordPress core custom background feature.
		$custombgargs = apply_filters(
			'construc_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		);
		add_theme_support( 'custom-background', $custombgargs );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_editor_style( 'asset/css/bootstrap.css' );
		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$customlogo = array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		);
		add_theme_support( 'custom-logo', $customlogo );
		add_post_type_support( 'page', 'excerpt' );
	}
endif;
add_action( 'after_setup_theme', 'construc_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function construc_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'construc_content_width', 640 );
}
add_action( 'after_setup_theme', 'construc_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/register-sidebar.php';

/**
 * All css and js files
 */
require get_template_directory() . '/inc/scripts-files.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Comment Form Templtae
 */
require get_template_directory() . '/inc/comment-form.php';
/**
 * Comment Form Templtae
 */


/**
 * Latest Post Widget
 */
require get_template_directory() . '/inc/widget/class-construc-latest-post.php';

require get_template_directory() . '/inc/checkout-fields.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


if ( ! function_exists( 'construc_fonts_url' ) ) :
	/**
	 *
	 * Fonts Function URL
	 */
	function construc_fonts_url() {
		$fonts_url = '';
		$fonts     = array();
		$subsets   = 'latin';
		if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'construc' ) ) {
			$fonts[] = 'Open+Sans:300,400,600,700';
		}
		if ( 'off' !== _x( 'on', 'Oxygen font: on or off', 'construc' ) ) {
			$fonts[] = 'Oxygen:300,400,700';
		}
		if ( 'off' !== _x( 'on', 'Ubuntu font: on or off', 'construc' ) ) {
			$fonts[] = 'Ubuntu:400,500,700';
		}
		if ( $fonts ) {
			$fonts_url = add_query_arg(
				array(
					'family' => urlencode( implode( '|', $fonts ) ),
					'subset' => urlencode( $subsets ),
				),
				'https://fonts.googleapis.com/css'
			);
		}
		$fonts_url = str_replace( 'Open%2BSans', 'Open+Sans', $fonts_url );
		return $fonts_url;
	}
endif;

function construc_sanitize_checkbox( $checked ) {
		// returns true if checkbox is checked
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
}
function construc_services_one_switch() {
	if ( true == get_theme_mod( 'services_1_switch' ) ) {
		return true;
	}
	return false;
}
function construc_services_two_switch() {
	if ( true == get_theme_mod( 'services_2_switch' ) ) {
		return true;
	}
	return false;
}
function construc_services_three_switch() {
	if ( true == get_theme_mod( 'services_3_switch' ) ) {
		return true;
	}
	return false;
}
function construc_services_four_switch() {
	if ( true == get_theme_mod( 'services_4_switch' ) ) {
		return true;
	}
	return false;
}
function construc_services_five_switch() {
	if ( true == get_theme_mod( 'services_5_switch' ) ) {
		return true;
	}
	return false;
}
function construc_services_six_switch() {
	if ( true == get_theme_mod( 'services_6_switch' ) ) {
		return true;
	}
	return false;
}
function construc_services_section_title_switch() {
	if ( true == get_theme_mod( 'services_section_title_switch' ) ) {
		return true;
	}
	return false;
}
function construc_blog_section_title_switch() {
	if ( true == get_theme_mod( 'blog_section_title_switch' ) ) {
		return true;
	}
	return false;
}
function construc_slider_two_on() {
	if ( true == get_theme_mod( 'slider_two_on_off' ) ) {
		return true;
	}
	return false;
}
function construc_slider_three_on() {
	if ( true == get_theme_mod( 'slider_three_on_off' ) ) {
		return true;
	}
	return false;
}
function construc_topbar_on_off() {
	if ( true == get_theme_mod( 'topbar_on_off' ) ) {
		return true;
	}
	return false;
}
function construc_blog_header_on_off() {
	if ( true == get_theme_mod( 'blogpage_template_header_on_off' ) ) {
		return true;
	}
	return false;
}
function construc_blog_grid() {
	if ( 'grid' == get_theme_mod( 'blogpage_layout' ) ) {
		return true;
	}
	return false;
}
function construc_sanitize_radio( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
}

function construc_sanitize_select( $input, $setting ) {
	$input = sanitize_key( $input );
	$choices = $setting->manager->get_control( $setting->id )->choices;
	return ( array_key_exists( $input, $choices ) ? $input : $setting->default );

}

function construc_is_blog() {
	return ( is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag() ) && 'post' == get_post_type();
}
function construc_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );

  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function construc_fron_page_template(){
	if (is_page_template( 'frontpage.php' )) {
		return true;
	}
	return false;
}


function construc_page_settings(){
	if (is_page_template('frontpage.php') || is_home()) {
		return true;
	}
	return false;
}




function construc_general_admin_notice(){
    global $pagenow;   
	if($pagenow == 'index.php' || $pagenow == 'themes.php'){
         $msg = sprintf('<div data-dismissible="disable-done-notice-forever" class="notice notice-info is-dismissible" >
             	<p> %1$s %2$s <span style="color:#ffa100">&#9733;</span><span style="color:#ffa100">&#9733;</span><span style="color:#ffa100">&#9733;</span><span style="color:#ffa100">&#9733;</span><span style="color:#ffa100">&#9733;</span> %3$s <span style="color:red">&hearts;</span>  %4$s <a href=%5$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary"> %6$s </a>
			 	<a href=%7$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary">%8$s</a>
			 	<a href=%9$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary">%10$s</a>
			 	<a href=%11$s target="_blank"  style="text-decoration: none; margin-left:10px;" class="button button-primary">%12$s</a> %13$s
			 	<a href="?construc_notice_dismissed" target="_self"  style="text-decoration: none; margin-left:10px;" class="button button-secondary">%14$s</a>
			 	</p></div>',
				esc_html__(' If you like construc ','construc'),
				esc_html__(' theme, please leave us a ','construc'),
				esc_html__(' Rating ','construc'),
				esc_html__(' Huge thanks in advance. ','construc'),
				esc_url('https://wordpress.org/themes/construc/'),
				esc_html__('Rate','construc'),				
				esc_url('https://theimran.com/themes/wordpress-theme/construc-construction-and-architecture-wordpress-theme/'),
				esc_html__('Get Pro Verion','construc'),
				esc_url('https://theimran.com/doc/construc-documentation/'),	
				esc_html__('Quick Setup Guide','construc'),
				esc_url('https://theimran.com/contact'),
				esc_html__('Hire Me','construc'),
				esc_html__('For Any kind of WordPress Related Job.','construc'),
				esc_html__('Dismiss','construc') );
		 echo wp_kses_post($msg);
	}    
}


//show, hide notice, update_option('construc_notice',1);
if ( isset( $_GET['construc_notice_dismissed'] ) ){
	update_option('construc_notice',0);
}


$construc_notice = get_option('construc_notice',1);
if (!function_exists('construc_custom_post_template')) :
	if($construc_notice){
		add_action('admin_notices', 'construc_general_admin_notice');
	}
endif;
add_action( 'admin_enqueue_scripts', 'construc_customizer_css' );

function construc_customizer_css(){
	wp_enqueue_style( 'construc-customizer-style', get_theme_file_uri('asset/admin/style.css') );
	if (!function_exists('construc_credit_remove')) {
		wp_enqueue_style( 'construc-notallowed-style', get_theme_file_uri('asset/admin/notallowed.css') );
	}
}


function construc_sanitize_image( $image, $setting ) {
	/*
	 * Array of valid image file types.
	 *
	 * The array includes image mime types that are included in wp_get_mime_types()
	 */
    $mimes = array(
        'jpg|jpeg|jpe' => 'image/jpeg',
        'gif'          => 'image/gif',
        'png'          => 'image/png',
        'bmp'          => 'image/bmp',
        'tif|tiff'     => 'image/tiff',
        'ico'          => 'image/x-icon'
    );
	// Return an array with file extension and mime_type.
    $file = wp_check_filetype( $image, $mimes );
	// If $image has a valid mime_type, return it; otherwise, return the default.
    return ( $file['ext'] ? $image : $setting->default );
}