<header id="header" class="header-area header-two">
		<?php
		if ( true == construc_topbar_on_off() ) :
			?>
		<div class="logo-topbar-area">
			<div class="container">
				<div class="row justify-content-between">
					<div class="col-md-3">
						<div class="site-logo">
							<?php
							if ( has_custom_logo() ) :
								the_custom_logo();
							else :
								if ( is_front_page() && is_home() ) :
									?>
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
									<?php
							else :
								?>
								<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
								<?php
							endif;
							$construc_description = get_bloginfo( 'description', 'display' );
							if ( $construc_description || is_customize_preview() ) :
								?>
								<p class="site-description"><?php echo esc_html( $construc_description ); /* WPCS: xss ok. */ ?></p>
								<?php
								endif;
							endif;
							?>
						</div>
					</div>
					<div class="col-md-9 text-right">
						<div class="topbar-list">
							<?php
							$address = get_theme_mod( 'short_address' );
							$emailaddress = get_theme_mod( 'email_address' );
							if ( $address ) :
								?>
								<div class="single-topbar">
									<p> <span class="fa fa-map-marker"></span> 
										<strong class="short_address"><?php echo esc_html( $address ); ?></strong></p>
								</div>
								<?php
							endif;
							if ( $emailaddress ) :
								?>
							<div class="single-topbar">
								<p> <span class="fa fa-envelope"></span> 
									<strong class="email_address"><?php echo esc_html( $emailaddress ); ?></strong></p>
							</div>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		<div class="menu-area">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 col-lg-8 text-left">
						<div class="cssmenu" id="cssmenu">
							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'menu-1',
									'container'       => 'ul',
								)
							);
							?>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 text-right">
						<div class="topbar-social">
							<?php 
							$facebook = get_theme_mod( 'facebook' );
							$twitter = get_theme_mod('twitter');
							$googleplus = get_theme_mod('googleplus');
							$pinterest = get_theme_mod('pinterest');
							$youtube = get_theme_mod('youtube');
							if(!empty($facebook)) : ?>
							<a href="<?php echo esc_url( $facebook ); ?>" class="fa fa-facebook"></a>
							<?php endif; if(!empty($twitter)):
								?>
							<a href="<?php echo esc_url( $twitter ); ?>" class="fa fa-twitter"></a>
							<?php endif; if(!empty($googleplus)) :?>
							<a href="<?php echo esc_url( $googleplus ); ?>" class="fa fa-google-plus"></a>
							<?php endif; if(!empty($pinterest)) : ?>
							<a href="<?php echo esc_url( $pinterest ); ?>" class="fa fa-pinterest"></a>
							<?php endif; if(!empty($youtube)) :?>
							<a href="<?php echo esc_url( $youtube ); ?>" class="fa fa-youtube"></a>
							<?php endif;?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
