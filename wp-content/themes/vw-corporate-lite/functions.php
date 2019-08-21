<?php
/**
 * VW Corporate Lite functions and definitions
 *
 * @package VW Corporate Lite
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

function vw_corporate_lite_the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo esc_url(home_url());
		echo '">';
		bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			the_category(',');
			if (is_single()) {
				echo "<span> ";
				the_title();
				echo "</span> ";
			}
		} elseif (is_page()) {
			the_title();
		}
	}
}

/* Theme Setup */
if (!function_exists('vw_corporate_lite_setup')):

function vw_corporate_lite_setup() {

	$GLOBALS['content_width'] = apply_filters('vw_corporate_lite_content_width', 640);

	load_theme_textdomain('vw-corporate-lite', get_template_directory().'/languages');
	add_theme_support('automatic-feed-links');
	add_theme_support('post-thumbnails');
	add_theme_support('woocommerce');
	add_theme_support('title-tag');
	add_theme_support('custom-logo', array(
			'height'      => 240,
			'width'       => 240,
			'flex-height' => true,
		));
	add_image_size('vw-corporate-lite-homepage-thumb', 240, 145, true);
	register_nav_menus(array(
			'primary' => __('Primary Menu', 'vw-corporate-lite'),
		));
	add_theme_support('custom-background', array(
			'default-color' => 'ffffff',
		));

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, icons, and column width.
	 */
	add_editor_style(array('css/editor-style.css', vw_corporate_lite_font_url()));

	/*
	 * Enable support for Post Formats.
	 *
	 * See: https://codex.wordpress.org/Post_Formats
	 */
	add_theme_support('post-formats', array('image', 'video', 'gallery', 'audio', ));

	// Theme Activation Notice
	global $pagenow;

	if (is_admin() && ('themes.php' == $pagenow) && isset($_GET['activated'])) {
		add_action('admin_notices', 'vw_corporate_lite_activation_notice');
	}
}
endif;// vw_corporate_lite_setup
add_action('after_setup_theme', 'vw_corporate_lite_setup');

// Notice after Theme Activation
function vw_corporate_lite_activation_notice() {
	echo '<div class="notice notice-success is-dismissible welcome-notice">';
	echo '<h3>'. esc_html__( 'Warm Greetings to you!!', 'vw-corporate-lite' ) .'</h3>';
	echo '<p>'.esc_html__('Thank you for choosing VW Corporate theme. Would like to have you on our Welcome page so that you can reap all the benefits of our VW Corporate theme.', 'vw-corporate-lite').'</p>';
	echo '<p><a href="'.esc_url(admin_url('themes.php?page=vw_corporate_lite_guide')).'" class="button button-primary">'.esc_html__('Welcome Page', 'vw-corporate-lite').'</a></p>';
	echo '</div>';
}

/* Theme Widgets Setup */
function vw_corporate_lite_widgets_init() {
	register_sidebar(array(
		'name'          => __('Blog Sidebar', 'vw-corporate-lite'),
		'description'   => __('Appears on blog page sidebar', 'vw-corporate-lite'),
		'id'            => 'sidebar-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Posts and Pages Sidebar', 'vw-corporate-lite'),
		'description'   => __('Appears on posts and pages', 'vw-corporate-lite'),
		'id'            => 'sidebar-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Third Column Sidebar', 'vw-corporate-lite'),
		'description'   => __('Appears on posts and pages', 'vw-corporate-lite'),
		'id'            => 'sidebar-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Footer 1', 'vw-corporate-lite'),
		'description'   => __('Appears in footer', 'vw-corporate-lite'),
		'id'            => 'footer-1',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Footer 2', 'vw-corporate-lite'),
		'description'   => __('Appears in footer', 'vw-corporate-lite'),
		'id'            => 'footer-2',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Footer 3', 'vw-corporate-lite'),
		'description'   => __('Appears in footer', 'vw-corporate-lite'),
		'id'            => 'footer-3',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar(array(
		'name'          => __('Footer 4', 'vw-corporate-lite'),
		'description'   => __('Appears in footer', 'vw-corporate-lite'),
		'id'            => 'footer-4',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	));

	register_sidebar( array(
		'name'          => __( 'Social Icon', 'vw-corporate-lite' ),
		'description'   => __( 'Appears on topbar', 'vw-corporate-lite' ),
		'id'            => 'social-icon',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
}
add_action('widgets_init', 'vw_corporate_lite_widgets_init');

/* Theme Font URL */
function vw_corporate_lite_font_url() {
	$font_url      = '';
	$font_family   = array();
	$font_family[] = 'PT Sans:300,400,600,700,800,900';
	$font_family[] = 'Roboto:400,700';
	$font_family[] = 'Roboto Condensed:400,700';
	$font_family[] = 'Open Sans';
	$font_family[] = 'Overpass';
	$font_family[] = 'Montserrat:300,400,600,700,800,900';
	$font_family[] = 'Playball:300,400,600,700,800,900';
	$font_family[] = 'Alegreya:300,400,600,700,800,900';
	$font_family[] = 'Julius Sans One';
	$font_family[] = 'Arsenal';
	$font_family[] = 'Slabo';
	$font_family[] = 'Lato';
	$font_family[] = 'Overpass Mono';
	$font_family[] = 'Source Sans Pro';
	$font_family[] = 'Raleway';
	$font_family[] = 'Merriweather';
	$font_family[] = 'Droid Sans';
	$font_family[] = 'Rubik';
	$font_family[] = 'Lora';
	$font_family[] = 'Ubuntu';
	$font_family[] = 'Cabin';
	$font_family[] = 'Arimo';
	$font_family[] = 'Playfair Display';
	$font_family[] = 'Quicksand';
	$font_family[] = 'Padauk';
	$font_family[] = 'Muli';
	$font_family[] = 'Inconsolata';
	$font_family[] = 'Bitter';
	$font_family[] = 'Pacifico';
	$font_family[] = 'Indie Flower';
	$font_family[] = 'VT323';
	$font_family[] = 'Dosis';
	$font_family[] = 'Frank Ruhl Libre';
	$font_family[] = 'Fjalla One';
	$font_family[] = 'Oxygen';
	$font_family[] = 'Arvo';
	$font_family[] = 'Noto Serif';
	$font_family[] = 'Lobster';
	$font_family[] = 'Crimson Text';
	$font_family[] = 'Yanone Kaffeesatz';
	$font_family[] = 'Anton';
	$font_family[] = 'Libre Baskerville';
	$font_family[] = 'Bree Serif';
	$font_family[] = 'Gloria Hallelujah';
	$font_family[] = 'Josefin Sans';
	$font_family[] = 'Abril Fatface';
	$font_family[] = 'Varela Round';
	$font_family[] = 'Vampiro One';
	$font_family[] = 'Shadows Into Light';
	$font_family[] = 'Cuprum';
	$font_family[] = 'Rokkitt';
	$font_family[] = 'Vollkorn';
	$font_family[] = 'Francois One';
	$font_family[] = 'Orbitron';
	$font_family[] = 'Patua One';
	$font_family[] = 'Acme';
	$font_family[] = 'Satisfy';
	$font_family[] = 'Josefin Slab';
	$font_family[] = 'Quattrocento Sans';
	$font_family[] = 'Architects Daughter';
	$font_family[] = 'Russo One';
	$font_family[] = 'Monda';
	$font_family[] = 'Righteous';
	$font_family[] = 'Lobster Two';
	$font_family[] = 'Hammersmith One';
	$font_family[] = 'Courgette';
	$font_family[] = 'Permanent Marker';
	$font_family[] = 'Cherry Swash';
	$font_family[] = 'Cormorant Garamond';
	$font_family[] = 'Poiret One';
	$font_family[] = 'BenchNine';
	$font_family[] = 'Economica';
	$font_family[] = 'Handlee';
	$font_family[] = 'Cardo';
	$font_family[] = 'Alfa Slab One';
	$font_family[] = 'Averia Serif Libre';
	$font_family[] = 'Cookie';
	$font_family[] = 'Chewy';
	$font_family[] = 'Great Vibes';
	$font_family[] = 'Coming Soon';
	$font_family[] = 'Philosopher';
	$font_family[] = 'Days One';
	$font_family[] = 'Kanit';
	$font_family[] = 'Shrikhand';
	$font_family[] = 'Tangerine';
	$font_family[] = 'IM Fell English SC';
	$font_family[] = 'Boogaloo';
	$font_family[] = 'Bangers';
	$font_family[] = 'Fredoka One';
	$font_family[] = 'Bad Script';
	$font_family[] = 'Volkhov';
	$font_family[] = 'Shadows Into Light Two';
	$font_family[] = 'Marck Script';
	$font_family[] = 'Sacramento';
	$font_family[] = 'Unica One';

	$query_args = array(
		'family' => rawurlencode(implode('|', $font_family)),
	);
	$font_url = add_query_arg($query_args, '//fonts.googleapis.com/css');
	return $font_url;
}

/* Theme enqueue scripts */
function vw_corporate_lite_scripts() {
	wp_enqueue_style('vw-corporate-lite-font', vw_corporate_lite_font_url(), array());
	wp_enqueue_style('vw-corporate-lite-basic-style', get_stylesheet_uri());
	require get_parent_theme_file_path( '/inline-style.php' );
	wp_add_inline_style( 'vw-corporate-lite-basic-style',$custom_css );
	wp_style_add_data('vw-corporate-lite-style', 'rtl', 'replace');
	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('font-awesome', get_template_directory_uri().'/css/fontawesome-all.css');
	wp_enqueue_script('vw-corporate-lite-customscripts', get_template_directory_uri().'/js/custom.js', array('jquery'));
	wp_enqueue_script('bootstrap', get_template_directory_uri().'/js/bootstrap.js', array('jquery'));
	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'vw_corporate_lite_scripts');

function vw_corporate_lite_ie_stylesheet() {
	wp_enqueue_style('vw-corporate-lite-ie', get_template_directory_uri().'/css/ie.css', array('vw-corporate-lite-basic-style'));
	wp_style_add_data('vw-corporate-lite-ie', 'conditional', 'IE');
}
add_action('wp_enqueue_scripts', 'vw_corporate_lite_ie_stylesheet');

define('VW_CORPORATE_LITE_FREE_THEME_DOC', 'https://www.vwthemesdemo.com/docs/free-vw-corporate-lite/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_REVIEW', 'https://wordpress.org/support/theme/vw-corporate-lite/reviews/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_BUY_NOW', 'https://www.vwthemes.com/premium/corporate-wordpress-theme/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_LIVE_DEMO', 'https://www.vwthemes.net/vw-corporate-theme/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_PRO_DOC', 'https://www.vwthemesdemo.com/docs/vw-corporate-pro/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_FAQ', 'https://www.vwthemes.com/faqs/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_CHILD_THEME', 'https://developer.wordpress.org/themes/advanced-topics/child-themes/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_CONTACT', 'https://www.vwthemes.com/contact/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_SUPPORT', 'https://wordpress.org/support/theme/vw-corporate-lite/', 'vw-corporate-lite');
define('VW_CORPORATE_LITE_CREDIT', 'https://www.vwthemes.com/free/wp-corporate-wordpress-theme/', 'vw-corporate-lite');

if (!function_exists('vw_corporate_lite_credit')) {
	function vw_corporate_lite_credit() {
		echo "<a href=".esc_url(VW_CORPORATE_LITE_CREDIT)." target='_blank'>".esc_html__('Corporate WordPress Theme', 'vw-corporate-lite')."</a>";
	}
}

/* Excerpt Limit Begin */
function vw_corporate_lite_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit+1));
	if (count($words) > $word_limit) {
		array_pop($words);
	}

	return implode(' ', $words);
}

/*radio button sanitization*/
function vw_corporate_lite_sanitize_choices($input, $setting) {
	global $wp_customize;
	$control = $wp_customize->get_control($setting->id);
	if (array_key_exists($input, $control->choices)) {
		return $input;
	} else {
		return $setting->default;
	}
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'vw_corporate_lite_loop_columns');
if (!function_exists('vw_corporate_lite_loop_columns')) {
function vw_corporate_lite_loop_columns() {
return 3; // 3 products per row
}
}

function vw_corporate_lite_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

/* Custom template tags for this theme. */
require get_template_directory().'/inc/template-tags.php';

/* Implement the Custom Header feature. */
require get_template_directory().'/inc/custom-header.php';

/* Load Jetpack compatibility file. */
require get_template_directory().'/inc/customizer.php';

/* Implement the About theme page */
require get_template_directory().'/inc/getting-started/getting-started.php';

/* Social Social Widgets */
require get_template_directory() . '/inc/social-widgets/social-icon.php';

/* typography */
require get_template_directory() . '/inc/typography/ctypo.php';