<?php if ( has_nav_menu( 'footer_menu' ) ) : ?>
	<div class="row rsrc-footer-menu">
		<div class="container">
			<nav id="footer-navigation" class="navbar navbar-inverse" role="navigation">
				<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?></a>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only"><?php _e( 'Toggle navigation', 'eleganto' ); ?></span>
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					</button>
				</div>

				<?php
				wp_nav_menu( array(
					'theme_location'	 => 'footer_menu',
					'depth'				 => 1,
					'container'			 => 'div',
					'container_class'	 => 'collapse navbar-collapse navbar-3-collapse navbar-right',
					'container_id'		 => 'footer-navbar',
					'menu_class'		 => 'nav navbar-nav',
					'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
					'walker'			 => new wp_bootstrap_navwalker() )
				);
				?>
			</nav>
		</div>    
	</div>
<?php 
endif;
