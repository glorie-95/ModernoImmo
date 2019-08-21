<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class( dream_house_construction_body_class() ); ?>>
    <div id="wrapper" class="<?php echo esc_attr( is_front_page() ? 'portfolio construction' : '' ); ?>">
        <div class="main-header">

            <?php
            if( !is_front_page() ): ?>
                <div class="header-upper"><!-- header upper start -->
                    <div class="container">
                        <div class="social pull-left">
                            <?php
                            $social_links = get_theme_mod( 'add_social_media_buttons' );
                            if(!empty($social_links)):
                                foreach ($social_links as $social):
                                    ?>
                                    <a href="<?php echo esc_url($social['link_url']);?>" data-toggle="tooltip" data-placement="bottom" title="<?php echo esc_attr($social['link_text']);?>"><i class="fa fa-<?php echo esc_attr($social['link_text']);?>"></i></a> 
                                    <?php 
                                endforeach;
                            endif; ?>
                        </div>
                        <?php
                        $search_name = !empty( $_GET['s'] ) ? sanitize_text_field( wp_unslash($_GET['s']) ): '';
                        ?>
                        <div class="Search-Icon pull-right">
                            <div class="Block-Search">
                                <form action="<?php echo esc_url(home_url());?>">
                                    <a href="#"><i class="fa fa-search"></i></a>                        
                                    <input id="m_search" name="s" type="text" placeholder="Type and hit enter...">
                                </form>
                            </div>
                        </div>
                    </div>
                </div><!-- header upper end -->
                <?php
            endif;
            ?>

            <!-- navbar start -->
            <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

                <div class="container">

                    <div class="logo pull-left">
                        <?php fire_blog_get_logo(); ?>
                    </div>
                    
                    <div id="navbar" class="navbar-nav-wrapper pull-right">
                    
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'container' => 'ul',
                            'menu_class' => 'nav navbar-nav',
                            'menu_id' => 'responsive-menu'
                        ) );
                        
                        ?>
                
                    </div><!--/.nav-collapse -->
                </div>
                
                <div id="slicknav-mobile"></div>
            </nav>
            <!-- navbar end -->
        </div><!--  end main header -->

        <?php 
        // $contact_map = get_theme_mod( 'map_style', 'box' );
        if( !is_home() && !is_page_template( 'page-template/construction-homepage.php' ) ): ?>
            <div class="breadcrumb-wrapper">
                <div class="container">
                    <h1><?php fire_blog_breadcumbs_title(); ?></h1>
                    <ol class="breadcrumb">
                        <?php fire_blog_custom_breadcrumbs(); ?>
                    </ol>
                </div>
            </div><!--  end breadcrumb -->
        <?php endif; ?>
