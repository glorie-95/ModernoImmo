<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real_estate_agent
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site container">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'real-estate-agent' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
	<div class="grid">
		<div class="col-3-12 branding">

			<?php
			    
                $output = null;

                if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ) {
                    $output .= get_custom_logo();
                } else {
                    $output .= '<h1 class="site-title"><a href="'. esc_url( trailingslashit( home_url() ) ).'" title="'.esc_attr( get_bloginfo( 'name' ) ).'" rel="home">';
                    $output .= get_bloginfo( 'name' );
                    $output .= '</a></h1>';
                }
                echo $output;           
            ?>							
			<?php
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
		</div><!-- .site-branding -->
		
	<div class="main-nav col-8-12 pull-right">


    	
		<?php
		 wp_nav_menu(array(
        'container_id' => 'cssmenu',
        'theme_location' => 'primary',
        'fallback_cb'       => 'Real_Estate_Agent_Menu_Walker::fallback',
        'walker' => new Real_Estate_Agent_Menu_Walker()
    	));	?>
		</div>

	</header><!-- #masthead -->
<?php if (is_front_page() && get_header_image() ) { ?>
	<div class="home-image">
	<div class="banner-inner"></div>
	
		<img src="<?php header_image(); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="">

			<?php 
				$title = esc_html(get_theme_mod('header_text'));
				$sub_title = esc_html(get_theme_mod('header_text2')); 
			?>
 			
 		

	<div id="header-title">
	<div class="header_text_area">
		<h1><?php echo $title; ?></h2>
		<h4><?php echo $sub_title; ?></h4>
	</div>
	</div><!--end of grid for welcome -->

	<?php } ?>

	</div>
	<div id="content" class="site-content">
