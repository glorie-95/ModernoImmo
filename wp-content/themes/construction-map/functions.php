<?php
/**
 * themesmake Construction functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package themesmake Construction
 */

if ( ! function_exists( 'construction_map_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function construction_map_setup() {
		/*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on themesmake Construction, use a find and replace
         * to change 'construction_map' to the name of your theme in all the template files.
         */
		load_theme_textdomain( 'construction-map' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'primary' => esc_html__( 'Primary', 'construction-map' ),

			
		) );

		/*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		/*add excert on page*/
        add_post_type_support( 'page', 'excerpt' );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'construction_map_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
		/*for header image */

		$construction_map_args = array(
			'flex-width'    => true,
			'width'         => 980,
			'flex-height'    => true,
			'height'        => 200,
			'default-image' => get_template_directory_uri() . '/assets/images/header.png',
		);
		add_theme_support( 'custom-header', $construction_map_args );

		add_theme_support( 'woocommerce' );

// woocommerce images popup code
		add_theme_support( 'wc-product-gallery-zoom' );
		add_theme_support( 'wc-product-gallery-lightbox' );

	}
endif;;
add_action( 'after_setup_theme', 'construction_map_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */


function construction_map_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'construction_map_content_width', 640 );
}
add_action( 'after_setup_theme', 'construction_map_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function construction_map_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'construction-map' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'construction-map' ),
		'before_widget' => '<section id="%1$s" class="widget  %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar(array(
		'name' => esc_html__('HomePage Widgets Area ', 'construction-map'),
		'id' => 'homepage_widgets',
		'description' => esc_html__('Add widgets here.', 'construction-map'),
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));

	register_sidebar(array(
		'name' => esc_html__('Footer1 ', 'construction-map'),
		'id' => 'footer1',
		'description' => esc_html__('Add widgets here.', 'construction-map'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title footer-bottom-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer2 ', 'construction-map'),
		'id' => 'footer2',
		'description' => esc_html__('Add widgets here.', 'construction-map'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title footer-bottom-title">',
		'after_title' => '</h2>',
	));
	register_sidebar(array(
		'name' => esc_html__('Footer3 ', 'construction-map'),
		'id' => 'footer3',
		'description' => esc_html__('Add widgets here.', 'construction-map'),
		'before_widget' => '<section id="%1$s">',
		'after_widget' => '</section>',
		'before_title' => '<h2 class="widget-title footer-bottom-title">',
		'after_title' => '</h2>',
	));

}
add_action( 'widgets_init', 'construction_map_widgets_init' );





/**
 * Enqueue scripts and styles.
 */
function construction_map_scripts() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.min.css' );
	wp_enqueue_style( 'magnific-popup',get_template_directory_uri().'/assets/css/magnific-popup.min.css' );
	wp_enqueue_style( 'animate', get_template_directory_uri().'/assets/css/animate.min.css' );
	wp_enqueue_style( 'owl.carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css' );
	wp_enqueue_style( 'construction-map-style', get_stylesheet_uri() );

	wp_enqueue_style( 'construction-map-responsive', get_template_directory_uri().'/assets/css/responsive.min.css' );

	wp_enqueue_script( 'carousel.min', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'counterup', get_template_directory_uri().'/assets/js/jquery.counterup.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array('jquery'), '20151215', true );
	wp_enqueue_script( 'owl.animate', get_template_directory_uri().'/assets/js/owl.animate.min.js', array('jquery'), '20151215', true );

	wp_enqueue_script( 'construction-map-custom', get_template_directory_uri().'/assets/js/custom.js', array('jquery'), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'construction_map_scripts' );


/**
 * define size of logo.
 */

if (!function_exists('construction_map_custom_logo_setup')) :
	function construction_map_custom_logo_setup()
	{
		add_theme_support('custom-logo', array(
			'height' => 90,
			'width' => 300,
			'flex-width' => true,
		));
	}

	add_action('after_setup_theme', 'construction_map_custom_logo_setup');
endif;


if (!function_exists('construction_map_widgets_backend_enqueue')) :
	function construction_map_widgets_backend_enqueue($hook)
	{
		if ('widgets.php' != $hook) {
			return;
		}

		wp_register_script('construction-map-custom-widgets', get_template_directory_uri() . '/assets/js/widgets.js', array('jquery'), true);
		wp_enqueue_media();
		wp_enqueue_script('construction-map-custom-widgets');
		wp_enqueue_style( 'font-awesome', get_template_directory_uri().'/assets/css/font-awesome.css' );
		wp_enqueue_style( 'repeater-admin', get_template_directory_uri() . '/assets/css/repeater-admin.css');
	}

	add_action('admin_enqueue_scripts', 'construction_map_widgets_backend_enqueue');
endif;




if (!function_exists('construction_map_admin_css_enqueue_new_post')) :
	function construction_map_admin_css_enqueue_new_post($hook)
	{
		if ('post-new.php' != $hook) {
			return;
		}
		wp_enqueue_style('construction-map-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '2.0.0');
	}
	add_action('admin_enqueue_scripts', 'construction_map_admin_css_enqueue_new_post');
endif;



if (!function_exists('construction_map_admin_css_enqueue')) :
	function construction_map_admin_css_enqueue($hook)
	{
		if ('post.php' != $hook) {
			return;
		}
		wp_enqueue_style('construction-map-admin', get_template_directory_uri() . '/assets/css/admin.css', array(), '2.0.0');
	}
	add_action('admin_enqueue_scripts', 'construction_map_admin_css_enqueue');
endif;

/**
 * Admin Enqueue scripts
 */
if ( ! function_exists( 'construction_map_admin_scripts' ) ) {
    function construction_map_admin_scripts($hook) {
		if ('widgets.php' != $hook) {
			return;
		}
       
        wp_enqueue_script('construction-map-media-repeater', get_template_directory_uri() . '/assets/js/construction-map-repeater-admin.js', array( 'jquery', 'customize-controls' ) );
    }
}
add_action('admin_enqueue_scripts', 'construction_map_admin_scripts');



/*woo commerce */
function construction_map_get_image_size( $name ) {
	global $_wp_additional_image_sizes;

	if ( isset( $_wp_additional_image_sizes[$name] ) )
		return $_wp_additional_image_sizes[$name];

	return false;
}

function construction_map_woocommerce_placeholder_img_src( $image_size = '' )
{

	if ($image_size == '') {
		return apply_filters('woocommerce_placeholder_img_src', get_template_directory_uri() . '/assest/imgages/placeholder.png');
	} else {

		$size = construction_map_get_image_size($image_size);
		$size['width'] = isset($size['width']) ? $size['width'] : '';
		$size['height'] = isset($size['height']) ? $size['height'] : '';


		return apply_filters('woocommerce_placeholder_img_src', get_template_directory_uri() . '/assest/img/placeholder.-' . $size['width'] . 'x' . $size['height'] . '.png');
	}
}



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
require get_template_directory() . '/inc/fileloader.php';

require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
require get_template_directory() . '/library/breadcrumbs/breadcrumbs.php';



/*add custom body class for sidebar section*/




/*for sidebar adding options**/

function construction_map_names( $classes ) {
	// add 'class-name' to the $classes array
	$sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'construction_map_sidebar_layout', true) );
	if (is_singular() && $sidebardesignlayout != "default-sidebar")
	{
		 $sidebardesignlayout = esc_attr( get_post_meta(get_the_ID(), 'construction_map_sidebar_layout', true) );


	} else
	{
		$sidebardesignlayout = esc_attr(construction_map_get_option('construction_map_sidebar_layout_option' ));
	}

	$classes[] = $sidebardesignlayout;
	return $classes;

}
add_filter( 'body_class', 'construction_map_names' );

/**
 * Load Dynamic css.
 */
$construction_map_dynamic_css_options = construction_map_get_option('construction_map_color_reset_option');

if ($construction_map_dynamic_css_options== "do-not-reset" || $construction_map_dynamic_css_options == "") {

	include get_template_directory() . '/inc/hook/dynamic-style-css.php';

} elseif ($construction_map_dynamic_css_options == "reset-all") {
	do_action('construction_map_colors_reset');
}




/**
 * Utility function to check if a gravatar exists for a given email or id
 * @param int|string|object $id_or_email A user ID,  email address, or comment object
 * @return bool if the gravatar exists or not
 * https://gist.github.com/justinph/5197810#file-validate_gravatar-php
 */

function construction_map_validate_gravatar($id_or_email) {
	//id or email code borrowed from wp-includes/pluggable.php
	$email = '';
	if ( is_numeric($id_or_email) ) {
		$id = (int) $id_or_email;
		$user = get_userdata($id);
		if ( $user )
			$email = $user->user_email;
	} elseif ( is_object($id_or_email) ) {
		// No avatar for pingbacks or trackbacks
		$allowed_comment_types = apply_filters( 'get_avatar_comment_types', array( 'comment' ) );
		if ( ! empty( $id_or_email->comment_type ) && ! in_array( $id_or_email->comment_type, (array) $allowed_comment_types ) )
			return false;

		if ( !empty($id_or_email->user_id) ) {
			$id = (int) $id_or_email->user_id;
			$user = get_userdata($id);
			if ( $user)
				$email = $user->user_email;
		} elseif ( !empty($id_or_email->comment_author_email) ) {
			$email = $id_or_email->comment_author_email;
		}
	} else {
		$email = $id_or_email;
	}

	$hashkey = md5(strtolower(trim($email)));
	$uri = 'http://www.gravatar.com/avatar/' . $hashkey . '?d=404';

	$data = wp_cache_get($hashkey);
	if (false === $data) {
		$response = wp_remote_head($uri);
		if( is_wp_error($response) ) {
			$data = 'not200';
		} else {
			$data = $response['response']['code'];
		}
		wp_cache_set($hashkey, $data, $group = '', $expire = 60*5);

	}
	if ($data == '200'){
		return true;
	} else {
		return false;
	}
}

