<?php

	$tameer_construction_theme_color = get_theme_mod('tameer_construction_theme_color');

	$custom_css = '';

	if($tameer_construction_theme_color != false){
		$custom_css .='.search-box span i, .readbutton a:hover, #about .about-text, .post-link a, #sidebox h2, .search-form button.search-submit, .widget .tagcloud a:hover,
			.widget .tagcloud a:focus,.widget.widget_tag_cloud a:hover,.widget.widget_tag_cloud a:focus,.wp_widget_tag_cloud a:hover,.wp_widget_tag_cloud a:focus, .main-navigation a:hover,.woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button,.woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, nav.woocommerce-MyAccount-navigation ul li, button.search-submit:hover, .copyright, .main-navigation li li:hover,.main-navigation li li.focus, .woocommerce span.onsale, .prev.page-numbers:focus,.prev.page-numbers:hover,.next.page-numbers:focus,.next.page-numbers:hover, button,input[type="button"],input[type="submit"], .logo{';
			$custom_css .='background-color: '.esc_html($tameer_construction_theme_color).';';
		$custom_css .='}';
	}
	if($tameer_construction_theme_color != false){
		$custom_css .='a, .mail i, .call i, .time i, .social-media i:hover, .post-info i, .navigation-top a, .main-navigation ul ul li a{';
			$custom_css .='color: '.esc_html($tameer_construction_theme_color).';';
		$custom_css .='}';
	}
	if($tameer_construction_theme_color != false){
		$custom_css .='.main-navigation ul ul li a, .main-navigation ul ul{';
			$custom_css .='border-color: '.esc_html($tameer_construction_theme_color).';';
		$custom_css .='}';
	}