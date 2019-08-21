<?php

add_action( 'admin_menu', 'tameer_construction_gettingstarted' );
function tameer_construction_gettingstarted() {
	add_theme_page( esc_html__('About Theme', 'tameer-construction'), esc_html__('About Theme', 'tameer-construction'), 'edit_theme_options', 'tameer-construction-guide-page', 'tameer_construction_guide');   
}

function tameer_construction_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/dashboard/get_started_info.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/dashboard/js/tab.js');
}
add_action('admin_enqueue_scripts', 'tameer_construction_admin_theme_style');

function tameer_construction_notice(){
    global $pagenow;
    if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {?>
    <div class="notice notice-success is-dismissible getting_started">
		<div class="notice-content">
			<p><img src="<?php echo esc_url( get_template_directory_uri() .'/inc/dashboard/media/logo.png' ); ?>" width="200"></p>
			<h2><?php esc_html_e( 'Thanks for installing Tameer Construction Lite Theme', 'tameer-construction' ) ?> </h2>
			<p><?php esc_html_e( "Please Click on the link below to know the theme setup information", 'tameer-construction' ) ?></p>
			<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=tameer-construction-guide-page' ) ); ?>" class="button button-primary"><?php esc_html_e( 'Get Started ', 'tameer-construction' ); ?></a></p>
		</div>
	</div>
	<?php }
}
add_action('admin_notices', 'tameer_construction_notice');


/**
 * Theme Info Page
 */
function tameer_construction_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'tameer-construction' ); ?>

	<div class="wrap getting-started">
		<div class="getting-started__header">
				<div class="intro">
					<div class="pad-box">
						<h2 align="center"><?php esc_html_e( 'Welcome to Tameer Construction Theme', 'tameer-construction' ); ?>
						<span class="version" align="center">Version: <?php echo esc_html($theme['Version']);?></span></h2>	
						</span>
						<div class="powered-by">
							<p align="center"><strong><?php esc_html_e( 'Theme created by ThemesEye', 'tameer-construction' ); ?></strong></p>
							<p align="center">
								<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/logo.png'); ?>"/>
							</p>
						</div>
					</div>
				</div>

			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'lite_theme')">Getting Started</button>		  
			  <button class="tablinks" onclick="openCity(event, 'pro_theme')">Get Premium</button>
			</div>

			<!-- Tab content -->
			<div id="lite_theme" class="tabcontent open">
				<h2 class="tg-docs-section intruction-title" id="section-4" align="center"><?php esc_html_e( '1). Tameer Construction Lite Theme', 'tameer-construction' ); ?></h2>
				<div class="row">
					<div class="col-md-5">
						<div class="pad-box">
	              			<img class="logo" src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/screenshot.png'); ?>"/>
	              		 </div> 
					</div>
					<div class="theme-instruction-block col-md-7">
						<div class="pad-box">
		                    <p><?php esc_html_e( 'Tameer Construction is a powerful, bold, attention grabbing and performance focused construction WordPress theme for builders, construction companies, infrastructure companies, construction equipment traders, contractors and similar businesses. By customizing it a bit, it can be used by real estate agents, property dealers, brokers, property owners, architectures, renovation and repairing service providers, plumbers and other relevant businesses. It is fully responsive and all browsers compatible which give it a great look on any device and browsing platform you load it on. Three layout options are provided: boxed, full-width and full screen with various header and footer formats that open a wide scope of design options. This construction WP theme is embedded with social media icons so you can promote your services on larger platforms. It has very well used call to action (CTA) buttons; SEO is taken care of to get a good rank in search engines. It is integrated with WooCommerce plugin so you can set up your online store for selling construction material through the current website only. Get the professional look for your website and make it mirror your services through this theme. ', 'tameer-construction' ); ?></p>
							<ol>
								<li><?php esc_html_e( 'Start','tameer-construction'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tameer-construction'); ?></a> <?php esc_html_e( 'your website.','tameer-construction'); ?> </li>
								<li><?php esc_html_e( 'Tameer Construction','tameer-construction'); ?> <a target="_blank" href="<?php echo esc_url( TAMEER_CONSTRUCTION_FREE_DOC ); ?>"><?php esc_html_e( 'Documentation','tameer-construction'); ?></a> </li>
							</ol>
	                    </div>
	                </div>
				</div><br><br>
				
	        </div>
	        <div id="pro_theme" class="tabcontent">
				<h2 class="dashboard-install-title" align="center"><?php esc_html_e( '2.) Premium Theme Information.','tameer-construction'); ?></h2>
            	<div class="row">
					<div class="col-md-7">
						<img src="<?php echo esc_url(get_template_directory_uri() . '/inc/dashboard/media/responsive.png'); ?>" alt="">
						<div class="pro-links" >
					    	<a href="<?php echo esc_url( TAMEER_CONSTRUCTION_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'tameer-construction'); ?></a>
							<a href="<?php echo esc_url( TAMEER_CONSTRUCTION_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tameer-construction'); ?></a>
							<a href="<?php echo esc_url( TAMEER_CONSTRUCTION_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'tameer-construction'); ?></a>
						</div>
						<div class="pad-box">
							<h3><?php esc_html_e( 'Pro Theme Description','tameer-construction'); ?></h3>
                    		<p class="pad-box-p"><?php esc_html_e( 'This theme well serves the construction businesses with its intuitive design structure and plenty of shortcodes to include functionalities like multi-column layout, video section, gallery, calendar etc. It is bundled with Font Awesome pack so you can include construction specific icons in your website. If you have large menu, then you can divide it into submenu using the mega menu option. This construction WordPress theme has various sections like gallery, testimonial, subscription form, recent blogs, pricing table, team introduction etc. and each of this section can be hidden as per your needs.', 'tameer-construction' ); ?><p>
                    	</div>
					</div>
					<div class="col-md-5 install-plugin-right">
						<div class="pad-box">								
							<h3><?php esc_html_e( 'Pro Theme Features','tameer-construction'); ?></h3>
							<div class="dashboard-install-benefit">
								<ul>
									<li><?php esc_html_e( 'Easy install 10 minute setup Themes','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Multiplue Domain Usage','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Premium Technical Support','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'FREE Shortcodes','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Multiple page templates','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Google Font Integration','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Customizable Colors','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Theme customizer ','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Documention','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Unlimited Color Option','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Plugin Compatible','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Social Media Integration','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Incredible Support','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Eye Appealing Design','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Simple To Install','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Fully Responsive ','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Translation Ready','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'Custom Page Templates ','tameer-construction'); ?></li>
									<li><?php esc_html_e( 'WooCommerce Integration','tameer-construction'); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
          	<div class="dashboard__blocks">
				<div class="row">
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Get Support','tameer-construction'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TAMEER_CONSTRUCTION_FREE_SUPPORT ); ?>"><?php esc_html_e( 'Free Theme Support','tameer-construction'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( TAMEER_CONSTRUCTION_PRO_SUPPORT ); ?>"><?php esc_html_e( 'Premium Theme Support','tameer-construction'); ?></a></li>
						</ol>
					</div>

					<div class="col-md-3">
						<h3><?php esc_html_e( 'Getting Started','tameer-construction'); ?></h3>
						<ol>
							<li><?php esc_html_e( 'Start','tameer-construction'); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizing','tameer-construction'); ?></a> <?php esc_html_e( 'your website.','tameer-construction'); ?> </li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Help Docs','tameer-construction'); ?></h3>
						<ol>
							<li><a target="_blank" href="<?php echo esc_url( TAMEER_CONSTRUCTION_FREE_DOC ); ?>"><?php esc_html_e( 'Free Theme Documentation','tameer-construction'); ?></a></li>
							<li><a target="_blank" href="<?php echo esc_url( TAMEER_CONSTRUCTION_PRO_DOC ); ?>"><?php esc_html_e( 'Premium Theme Documentation','tameer-construction'); ?></a></li>
						</ol>
					</div>
					<div class="col-md-3">
						<h3><?php esc_html_e( 'Buy Premium','tameer-construction'); ?></h3>
						<ol>
							<a href="<?php echo esc_url( TAMEER_CONSTRUCTION_BUY_PRO ); ?>"><?php esc_html_e('Buy Pro', 'tameer-construction'); ?></a>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
	</div>

<?php
}?>