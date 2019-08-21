<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-aa">
 *
 * @package Township Lite
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'township-lite' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> class="main-bodybox">
  <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','township-lite'); ?></a></div>
  <div id="header">
    <div class="container">
      <div class="row">
        <div class="logo col-lg-6 col-md-6">
          <?php township_lite_the_custom_logo(); ?>
          <?php if ( is_front_page() && is_home() ) : ?>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
          <?php else : ?>
            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
          <?php endif;

          $description = get_bloginfo( 'description', 'display' );
          if ( $description || is_customize_preview() ) : ?>
            <p class="site-description"><?php echo esc_html( $description ); ?></p>
          <?php endif; ?>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="top-contact">
            <?php if( get_theme_mod( 'township_lite_contact','' ) != '') { ?>
              <span class="call"><i class="fa fa-phone" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('township_lite_contact','' )); ?></span>
             <?php } ?>
             <?php if( get_theme_mod( 'township_lite_email','' ) != '') { ?>
              <span class="email_corporate"><i class="fa fa-envelope" aria-hidden="true"></i><?php echo esc_html( get_theme_mod('township_lite_email',__('example@123.com','township-lite')) ); ?></span>
            <?php } ?>
          </div>
          <div class="social-media">
            <?php if( get_theme_mod( 'township_lite_youtube_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'township_lite_youtube_url','' ) ); ?>"><i class="fab fa-youtube" aria-hidden="true"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'township_lite_facebook_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'township_lite_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'township_lite_twitter_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'township_lite_twitter_url','' ) ); ?>"><i class="fab fa-twitter" aria-hidden="true"></i></a>
            <?php } ?>
            <?php if( get_theme_mod( 'township_lite_rss_url' ) != '') { ?>
              <a href="<?php echo esc_url( get_theme_mod( 'township_lite_rss_url','' ) ); ?>"><i class="fas fa-rss" aria-hidden="true"></i></a>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
    <div class="menubox nav">
      <div class="container">
        <div class="mainmenu">
		      <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
        </div>
      </div>
    </div>
    <div class="clear"></div>
  </div>
</body>
</html>