<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage lz-one-page
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'lz-one-page' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	
<div id="header">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-3">
				<div class="logo">
			        <?php if( has_custom_logo() ){ lz_one_page_the_custom_logo();
			           }else{ ?>
			          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			          <?php $description = get_bloginfo( 'description', 'display' );
			          if ( $description || is_customize_preview() ) : ?> 
			            <p class="site-description"><?php echo esc_html($description); ?></p>
			        <?php endif; }?>
			    </div>
			</div>
			<div class="col-lg-8 col-md-9">
				<div class="row">
					<div class="col-lg-4 col-md-4">
						<?php if( get_theme_mod( 'lz_one_page_call') != '' || get_theme_mod( 'lz_one_page_call1' )) { ?>
							<div class="contact-details">
								<div class="row">
									<div class="col-lg-2 col-md-3">
										<i class="fas fa-mobile-alt"></i>
									</div>
									<div class="col-lg-10 col-md-9">
										<p class="para-color"><?php echo esc_html( get_theme_mod('lz_one_page_call','') ); ?></p>
										<p class="col-org"><?php echo esc_html( get_theme_mod('lz_one_page_call1','') ); ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="col-lg-4 col-md-4">
						<?php if( get_theme_mod( 'lz_one_page_address') != '' || get_theme_mod( 'lz_one_page_address1' )) { ?>
							<div class="contact-details">
								<div class="row">
									<div class="col-lg-2 col-md-3">
										<i class="fas fa-map-marker-alt"></i>
									</div>
									<div class="col-lg-10 col-md-9">
										<p class="para-color"><?php echo esc_html( get_theme_mod('lz_one_page_address','') ); ?></p>
										<p class="col-org"><?php echo esc_html( get_theme_mod('lz_one_page_address1','') ); ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="col-lg-4 col-md-4">
						<?php if( get_theme_mod( 'lz_one_page_mail') != '' || get_theme_mod( 'lz_one_page_mail1' )) { ?>
							<div class="contact-details">
								<div class="row">
									<div class="col-lg-2 col-md-3">
										<i class="far fa-envelope"></i>
									</div>
									<div class="col-lg-10 col-md-9">
										<p class="para-color"><?php echo esc_html( get_theme_mod('lz_one_page_mail','') ); ?></p>
										<p class="col-org"><?php echo esc_html( get_theme_mod('lz_one_page_mail1','') ); ?></p>
									</div>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','lz-one-page'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="nav">
				<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
			</div>
		</div>
	</div>
</div>