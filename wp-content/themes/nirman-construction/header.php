<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage nirman-construction
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'nirman-construction' ) ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="top-header">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="contact-details">
					<?php if( get_theme_mod('nirman_construction_call1') != ''){ ?>
						<span class="col-org"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('nirman_construction_call1','') ); ?></span>
					<?php } ?>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<div class="social-icons">
						<?php if( get_theme_mod( 'nirman_construction_facebook_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nirman_construction_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'nirman_construction_twitter_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nirman_construction_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
					    <?php } ?>
					    <?php if( get_theme_mod( 'nirman_construction_linkedin_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nirman_construction_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
					    <?php } ?>	
					    <?php if( get_theme_mod( 'nirman_construction_insta_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nirman_construction_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
					    <?php } ?>	
					    <?php if( get_theme_mod( 'nirman_construction_pintrest_url') != '') { ?>
					      <a href="<?php echo esc_url( get_theme_mod( 'nirman_construction_pintrest_url','' ) ); ?>"><i class="fab fa-pinterest-p"></i></a>
					    <?php } ?>		            
					</div>	
				</div>
			</div>
		</div>
	</div>
	<div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','nirman-construction'); ?></a></div>
	<div class="menu-section">
		<div class="container">
			<div class="row m-0">
				<div class="col-lg-3 col-md-3 p-0">
					<div class="logo">
				        <?php if( has_custom_logo() ){ nirman_construction_the_custom_logo();
				           }else{ ?>
				          <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				          <?php $description = get_bloginfo( 'description', 'display' );
				          if ( $description || is_customize_preview() ) : ?> 
				            <p class="site-description"><?php echo esc_html($description); ?></p>
				        <?php endif; }?>
				    </div>
				</div>
				<div class="col-lg-7 col-md-7 top-menu">
					<div class="nav">
						<?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
					</div>
				</div>
				<?php if ( get_theme_mod('nirman_construction_btn_text','') != "" ) {?>
					<div class="col-lg-2 col-md-2 p-0"> 
					   	<div class="quote-btn">            
					     <a href="<?php echo esc_html( get_theme_mod('nirman_construction_btn_link','') ); ?>"><?php echo esc_html( get_theme_mod('nirman_construction_btn_text','') ); ?></a>    
					    </div>          
					</div>
				<?php }?>
			</div>
		</div>
	</div>
</div>