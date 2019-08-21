<?php 
/**
 * Correct Lite functions and definitions
 *
 * @package Correct Lite
 */
 
 global $content_width;
 if ( ! isset( $content_width ) )
	$content_width = 640; /* pixels */ 

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'correct_lite_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
 
function correct_lite_setup() {
	load_theme_textdomain( 'correct-lite', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-logo', array(
		'height'      => 50,
		'width'       => 250,
		'flex-height' => true,
	) );	
 
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Menu', 'correct-lite' ),		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
	add_editor_style();
} 
endif; // correct_lite_setup

add_action( 'after_setup_theme', 'correct_lite_setup' );


function correct_lite_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'correct-lite' ),
		'description'   => esc_html__( 'Appears on blog page sidebar', 'correct-lite' ),
		'id'            => 'sidebar-1',
		'before_widget' => '<div class="widgetbox">',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside></div>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 1', 'correct-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'correct-lite' ),
		'id'            => 'fc-1',
		'before_widget' => '',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 2', 'correct-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'correct-lite' ),
		'id'            => 'fc-2',
		'before_widget' => '',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
	
	register_sidebar( array(
		'name'          => esc_html__( 'Footer Column 3', 'correct-lite' ),
		'description'   => esc_html__( 'Appears on page footer', 'correct-lite' ),
		'id'            => 'fc-3',
		'before_widget' => '',		
		'before_title'  => '<h5>',
		'after_title'   => '</h5><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );		
		
}
add_action( 'widgets_init', 'correct_lite_widgets_init' );


function correct_lite_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Roboto Condensed, trsnalate this to off, do not
		* translate into your own language.
		*/
		$robotocondensed = _x('on','robotocondensed:on or off','correct-lite');		
		
		
		/* Translators: If there has any character that are not supported 
		*  by Scada, translate this to off, do not translate
		*  into your own language.
		*/
		$scada = _x('on','Scada:on or off','correct-lite');	
		$lato = _x('on','Lato:on or off','correct-lite');	
		
		if('off' !== $robotocondensed ){
			$font_family = array();
			
			if('off' !== $robotocondensed){
				$font_family[] = 'Roboto Condensed:300,400,600,700,800,900';
			}
			
			if('off' !== $lato){
				$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';
			}			
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function correct_lite_scripts() {
	wp_enqueue_style('correct-lite-font', correct_lite_font_url(), array());
	wp_enqueue_style( 'correct-lite-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'correct-lite-print-style', get_template_directory_uri()."/print.css" );
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'correct-lite-main-style', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'correct-lite-base-style', get_template_directory_uri()."/css/style_base.css" );
	wp_enqueue_script( 'jquery-nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'correct-lite-custom-js', get_template_directory_uri() . '/js/custom.js' );	
		

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'correct_lite_scripts' );

define('CORRECT_LITE_URL','https://www.pinnaclethemes.net/','correct-lite');
define('CORRECT_LITE_PRO_THEME_URL','https://www.pinnaclethemes.net/product/new-wordpress-theme','correct-lite');
define('CORRECT_LITE_FREE_THEME_URL','https://www.pinnaclethemes.net/product/free-simple-wordpress-theme/','correct-lite');
define('CORRECT_LITE_THEME_DOC','https://pinnaclethemes.net/themedocumentation/correct-documentation/','correct-lite');
define('CORRECT_LITE_LIVE_DEMO','https://www.pinnaclethemes.net/themedemos/correct/','correct-lite');
define('CORRECT_LITE_THEMES','https://www.pinnaclethemes.net/cool-wordpress-themes/','correct-lite');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template for about theme.
 */
require get_template_directory() . '/inc/about-themes.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function correct_lite_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
	}
}
add_action( 'wp_head', 'correct_lite_pingback_header' );

add_filter( 'body_class','correct_lite_body_class' );
function correct_lite_body_class( $classes ) {
	
 	$hideslide = get_theme_mod('hide_slides', 1);
	if (!is_home() && is_front_page()) {
		if( $hideslide == '') {
			$classes[] = 'haveslide';
		}
	}
    return $classes;
     
}



// get slug by id
function correct_lite_get_slug_by_id($id) {
	$post_data = get_post($id, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

require_once get_template_directory() . '/upgrade-pro/example-1/class-customize.php';

function correct_lite_custom_excerpt_more( $more ) {
    return sprintf( '<div class="clear"></div><a class="ReadMore" href="%1$s">%2$s</a>',
        get_permalink( get_the_ID() ),
        __( 'Read More', 'correct-lite' )
    );
}
add_filter( 'excerpt_more', 'correct_lite_custom_excerpt_more');