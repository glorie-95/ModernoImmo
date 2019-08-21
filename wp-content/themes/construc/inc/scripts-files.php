<?php
/**
 * Enqueue scripts and styles.
 *
 * @package Construc
 */
function construc_scripts() {
	wp_enqueue_style( 'construc-fonts', construc_fonts_url() );
	wp_enqueue_style( 'construc-style', get_theme_file_uri( 'style.css' ), array(), filemtime( get_theme_file_path( 'style.css' ) ) );
	wp_enqueue_style( 'animate', get_theme_file_uri( 'asset/css/animate.css' ), array(), '3.7.0' );
	wp_enqueue_style( 'bootstrap', get_theme_file_uri( 'asset/css/bootstrap.css' ), array(), '4.1.3' );
	wp_enqueue_style( 'icofont', get_theme_file_uri( 'asset/css/icofont.css' ), array(), '1.0.1' );
	wp_enqueue_style( 'fontawesome', get_theme_file_uri( 'asset/css/font-awesome.css' ), array(), '4.7.0' );
	wp_enqueue_style( 'owl-carousel', get_theme_file_uri( 'asset/css/owl.carousel.css' ), array(), '2.3.4' );
	wp_enqueue_style( 'construc-menu', get_theme_file_uri( 'asset/css/menu.css' ), array(), filemtime( get_theme_file_path( 'asset/css/menu.css' ) ) );
	wp_enqueue_style( 'construc-reset', get_theme_file_uri( 'asset/css/reset.css' ), array(), filemtime( get_theme_file_path( 'asset/css/reset.css' ) ) );
	wp_enqueue_style( 'construc-slider', get_theme_file_uri( 'asset/css/slider.css' ), array(), filemtime( get_theme_file_path( 'asset/css/slider.css' ) ) );
	wp_enqueue_style( 'construc-main', get_theme_file_uri( 'asset/css/style.css' ), array(), filemtime( get_theme_file_path( 'asset/css/style.css' ) ) );
	$getwidgecolor = get_theme_mod( 'footer_widget_text_color' );
	$getservicebg = get_theme_mod( 'services_section_bg' );
	$getaboutbg = get_theme_mod( 'about_section_bg' );
	$getblogbg = get_theme_mod( 'blog_section_bg' );

	$widgetcolor = ( ! empty( $getwidgecolor ) ? $getwidgecolor : '#c4c4c4' );
	$servicesbg = ( ! empty( $getservicebg ) ? $getservicebg : '#ffffff' );
	$aboutbg = ( ! empty( $getaboutbg ) ? $getaboutbg : '#ffffff' );
	$blogbg = ( ! empty( $getblogbg ) ? $getblogbg : '#f1f1f1' );
	$data = '
	.dont-remove-this-link a {
	    font-size: 8px;
	    width: 15px;
	    height: 15px;
	    display: inline-block;
	    position: relative;
	    background: #ffa100;
	    z-index: 2;
	    left: 10px;
	    bottom: 10px;
	    color: #fff;
	    text-align: center;
	    line-height: 15px;
	    border-radius: 50%;
	    display: block !important;
	    opacity: 1 !important;
	    visibility: visible !important;
	}
	section.services-section{
		background-color: ' . esc_attr( $servicesbg ) . ';
	}
	section.about-us-section{
		background-color: ' . esc_attr( $aboutbg ) . ';
	}
	section.blog-slider-area{
		background-color: ' . esc_attr( $blogbg ) . ';
	}
	.topbar-area{
		background-color: ' . esc_attr( get_theme_mod( 'topbar_background_color' ) ) . ';
		color: ' . esc_attr( get_theme_mod( 'topbar_text_color' ) ) . ';
	}
	.single-topbar p span, .topbar-social a{
		color: ' . esc_attr( get_theme_mod( 'topbar_icon_color' ) ) . ';
	}
	.menu-area{
		background-color: ' . esc_attr( get_theme_mod( 'logo_menu_background_color' ) ) . ';
	}
	#cssmenu>ul>li>a{
		color: ' . esc_attr( get_theme_mod( 'menu_link_color' ) ) . ';
	}
	#cssmenu>ul>li.has-sub>a:before, #cssmenu>ul>li.has-sub>a:after{
	background-color: ' . esc_attr( get_theme_mod( 'menu_link_color' ) ) . ';
	}

	#cssmenu>ul>li>a:hover, #cssmenu>ul>li.current_page_item>a{
		color: ' . esc_attr( get_theme_mod( 'menu_active_hover_color' ) ) . ';
	}
	
	section.footer-area{
		background-color: ' . esc_attr( get_theme_mod( 'footer_background_color' ) ) . ';
	}
	h2.widget-title{
		color: ' . esc_attr( get_theme_mod( 'footer_widget_title_color' ) ) . ';
	}
	section.footer-area .widget p, section.footer-area .textwidget *, section.footer-area .business-hour ul li, section.footer-area .widget .addressh-office li p, section.footer-area .widget .addressh-office .addres-icon strong, section.footer-area .widget_nav_menu ul li a, section.footer-area .widget .recent-content p span{
		color: ' . esc_attr( $widgetcolor ) . ' ;
		border-color: ' . esc_attr( $widgetcolor ) . ';
	}
	
	section.footer-area ul li a{
		color: ' . esc_attr( get_theme_mod( 'footer_widget_link_color' ) ) . ';
	}
	section.footer-area ul li a:hover, section.footer-area ul li.current-menu-item a{
		color: ' . esc_attr( get_theme_mod( 'footer_widget_link_hover_active_color' ) ) . ';
	}
	';

	wp_add_inline_style( 'construc-main', $data );
	wp_enqueue_style( 'construc-responsive', get_theme_file_uri( 'asset/css/responsive.css' ), array(), filemtime( get_theme_file_path( 'asset/css/responsive.css' ) ) );
	wp_enqueue_script( 'bootstrap', get_theme_file_uri( 'asset/js/bootstrap.js' ), array( 'jquery' ), '4.1.3', true );
	wp_enqueue_script( 'owl-carousel', get_theme_file_uri( 'asset/js/owl.carousel.js' ), array( 'jquery' ), '2.3.4', true );
	wp_enqueue_script( 'construc-menu', get_theme_file_uri( 'asset/js/menu.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'asset/js/menu.js' ) ), true );
	wp_enqueue_script( 'construc-slider', get_theme_file_uri( 'asset/js/slider.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'asset/js/slider.js' ) ), true );
	wp_enqueue_script( 'construc-main', get_theme_file_uri( 'asset/js/active.js' ), array( 'jquery' ), filemtime( get_theme_file_path( 'asset/js/active.js' ) ), true );
	wp_enqueue_script( 'construc-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );
	wp_enqueue_script( 'construc-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'construc_scripts' );
