<?php if ( has_nav_menu( 'top_menu' ) || get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
	<div class="rsrc-top-menu ">
		<div class="container">
	        <nav id="site-navigation" class="navbar navbar-inverse" role="navigation">    
				<?php if ( has_nav_menu( 'top_menu' ) ) : ?>
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar" aria-expanded="false" aria-controls="navbar">
							<span class="sr-only"><?php esc_html_e( 'Toggle navigation', 'eleganto' ); ?></span>
							<span class="icon-bar top-bar"></span>
							<span class="icon-bar middle-bar"></span>
							<span class="icon-bar bottom-bar"></span>
						</button>
						<div class="visible-xs navbar-brand"><?php esc_html_e( 'Menu', 'eleganto' ); ?></div>
					</div>
				<?php endif; ?>
				<?php if ( get_theme_mod( 'eleganto_socials', 0 ) == 1 ) : ?>
					<div class="top-section nav navbar-nav navbar-right">
						<?php eleganto_social_links();  ?>                 
					</div>
				<?php endif; ?>
				<?php
				wp_nav_menu( array(
					'theme_location'	 => 'top_menu',
					'depth'				 => 3,
					'container'			 => 'div',
					'container_class'	 => 'collapse navbar-collapse navbar-1-collapse',
					'container_id'		 => 'top-navbar',
					'menu_class'		 => 'nav navbar-nav',
					'fallback_cb'		 => 'wp_bootstrap_navwalker::fallback',
					'walker'			 => new wp_bootstrap_navwalker() )
				);
				?>
	        </nav>
		</div>
	</div>
<?php endif; ?>
