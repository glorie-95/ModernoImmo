<?php
	
	/*---------------------------First highlight color-------------------*/

	$vw_construction_estate_first_color = get_theme_mod('vw_construction_estate_first_color');

	$custom_css = '';

	if($vw_construction_estate_first_color != false){
		$custom_css .='#header .socialicons, .menu-searh, .slider .carousel-control-prev-icon i, .slider .carousel-control-next-icon i, .contact-btn a, .about-btn a, .footer, .sidebar input[type="submit"], .footer input[type="submit"], .footer-2, .scrollup i, .sidebar h3, .read_full a, h1.entry-title, h1.page-title{';
			$custom_css .='background-color: '.esc_html($vw_construction_estate_first_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$custom_css .='p.diff-lay, .contact-no span, .contact-btn a:hover, .about-section h3{';
			$custom_css .='color: '.esc_html($vw_construction_estate_first_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$custom_css .='.contact-btn a{';
			$custom_css .='border-color: '.esc_html($vw_construction_estate_first_color).'!important;';
		$custom_css .='}';
	}
	if($vw_construction_estate_first_color != false){
		$custom_css .='.sidebar h3:after{';
			$custom_css .='border-top-color: '.esc_html($vw_construction_estate_first_color).'!important;';
		$custom_css .='}';
	}

	/*---------------------------Second highlight color-------------------*/

	$vw_construction_estate_second_color = get_theme_mod('vw_construction_estate_second_color');

	if($vw_construction_estate_second_color != false){
		$custom_css .='.slider .more-btn a:hover, .contact-btn a:hover, .about-btn a:hover, .woocommerce span.onsale, .woocommerce #respond input#submit, .woocommerce a.button, .woocommerce button.button, .woocommerce input.button, .woocommerce #respond input#submit.alt, .woocommerce a.button.alt, .woocommerce button.button.alt, .woocommerce input.button.alt, .read_full a:hover, nav.woocommerce-MyAccount-navigation ul li, .entry-audio audio, .pagination .current, .pagination a:hover, #header .custom-social-icons i:hover, .footer .custom-social-icons i:hover, .sidebar .custom-social-icons i:hover{';
			$custom_css .='background-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='#comments input[type="submit"].submit{';
			$custom_css .='background-color: '.esc_html($vw_construction_estate_second_color).'!important;';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='a, .logo h1 a, .logo p, .top-header i, .contact-no i, .footer h3, .footer .custom-social-icons i, .sidebar .custom-social-icons i, .scrollup i, .postbox:hover h4, .postbox:hover i, .post-navigation a:hover .post-title, .post-navigation a:focus .post-title{';
			$custom_css .='color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.slider .more-btn a:hover, .contact-btn a:hover, .scrollup i{';
			$custom_css .='border-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.footer-2, hr.big{';
			$custom_css .='border-top-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='#header .nav ul li:hover > ul li, .footer h3{';
			$custom_css .='border-bottom-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.slider .inner_carousel h2{';
			$custom_css .='border-right-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	if($vw_construction_estate_second_color != false){
		$custom_css .='.about-section h3{';
			$custom_css .='border-left-color: '.esc_html($vw_construction_estate_second_color).';';
		$custom_css .='}';
	}
	/*---------------------------Width Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_width_option','Full Width');
    if($theme_lay == 'Boxed'){
		$custom_css .='body{';
			$custom_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Wide Width'){
		$custom_css .='body{';
			$custom_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$custom_css .='}';
	}else if($theme_lay == 'Full Width'){
		$custom_css .='body{';
			$custom_css .='max-width: 100%;';
		$custom_css .='}';
	}

	/*--------------------------- Slider Opacity -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_slider_opacity_color','0.5');
	if($theme_lay == '0'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0';
		$custom_css .='}';
		}else if($theme_lay == '0.1'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.1';
		$custom_css .='}';
		}else if($theme_lay == '0.2'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.2';
		$custom_css .='}';
		}else if($theme_lay == '0.3'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.3';
		$custom_css .='}';
		}else if($theme_lay == '0.4'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.4';
		$custom_css .='}';
		}else if($theme_lay == '0.5'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.5';
		$custom_css .='}';
		}else if($theme_lay == '0.6'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.6';
		$custom_css .='}';
		}else if($theme_lay == '0.7'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.7';
		$custom_css .='}';
		}else if($theme_lay == '0.8'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.8';
		$custom_css .='}';
		}else if($theme_lay == '0.9'){
		$custom_css .='.slider img{';
			$custom_css .='opacity:0.9';
		$custom_css .='}';
		}

	/*---------------------------Slider Content Layout -------------------*/

	$theme_lay = get_theme_mod( 'vw_construction_estate_slider_content_option','Right');
    if($theme_lay == 'Left'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h2{';
			$custom_css .='text-align:left; left:15%; right:45%;';
		$custom_css .='}';
		$custom_css .='.slider .inner_carousel h2{';
			$custom_css .='border-left: 2px solid #f68021; border-right:none;';
		$custom_css .='}';
	}else if($theme_lay == 'Center'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h2{';
			$custom_css .='text-align:center; left:20%; right:20%; border-right:none;';
		$custom_css .='}';
	}else if($theme_lay == 'Right'){
		$custom_css .='.slider .carousel-caption, .slider .inner_carousel, .slider .inner_carousel h2{';
			$custom_css .='text-align:right; left:45%; right:15%;';
		$custom_css .='}';
	}