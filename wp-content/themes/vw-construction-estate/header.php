<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content-vw">
 *
 * @package VW Construction Estate
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width">
  <link rel="profile" href="<?php echo esc_url( __( 'http://gmpg.org/xfn/11', 'vw-construction-estate' ) ); ?>">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
  $vw_construction_estate_search_hide_show = get_theme_mod( 'vw_construction_estate_search_hide_show' );

    if ( 'Disable' == $vw_construction_estate_search_hide_show ) {
      $colmd = 'col-lg-12 col-md-12';
    } else { 
      $colmd = 'col-lg-9 col-md-9';
    } 
?>

  <div id="header">
    <div class="row m-0">
      <div class="col-lg-3 col-md-3  socialicons">
        <?php dynamic_sidebar( 'social-icon' ); ?>
      </div>
      <div class="col-lg-9 col-md-9 top-header">
        <div class="row m-0">
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_location','' ) != '') { ?>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_location','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_location1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_call','' ) != '') { ?>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <i class="fas fa-tty"></i>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_call','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_call1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_mail','' ) != '') { ?>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <i class="far fa-envelope-open"></i>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_mail','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_mail1','') ); ?></p>
                </div>
              </div>
            <?php }?>        
          </div>
          <div class="col-lg-3 col-md-3">
            <?php if( get_theme_mod( 'vw_construction_estate_time','' ) != '') { ?>
              <div class="row">
                <div class="col-lg-2 col-md-3">
                  <i class="far fa-clock"></i>
                </div>
                <div class="col-lg-10 col-md-9">
                  <p class="diff-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_time','') ); ?></p>
                  <p class="same-lay"><?php echo esc_html( get_theme_mod('vw_construction_estate_time1','') ); ?></p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
    <div class="row m-0">
      <div class=" col-lg-3 col-md-3">
        <div class="logo">
          <?php if( has_custom_logo() ){ vw_construction_estate_the_custom_logo();
             }else{ ?>
            <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php $description = get_bloginfo( 'description', 'display' );
            if ( $description || is_customize_preview() ) : ?> 
              <p class="site-description"><?php echo esc_html($description); ?></p>  
          <?php endif; }?>
        </div>
      </div>
      <div class="col-lg-9 col-md-9 menu-searh">
        <div class="toggle"><a class="toggleMenu" href="#"><?php esc_html_e('Menu','vw-construction-estate'); ?></a></div>
        <div class="row m-0">
          <div class="<?php echo esc_html( $colmd ); ?>">
            <div class="menu">
              <div class="nav">
                <?php wp_nav_menu( array('theme_location'  => 'primary') ); ?>
              </div>
            </div>
          </div>
          <?php if ( 'Disable' != $vw_construction_estate_search_hide_show ) {?>
            <div class="search-box col-lg-3 col-md-3">
              <?php get_search_form(); ?>
            </div>
          <?php } ?>
       </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>