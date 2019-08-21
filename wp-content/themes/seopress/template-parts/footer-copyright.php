<div class="container-fluid footer-copyright pdt10 pdb10 clearfix">
	<div class="container">
		<div class="row mrt10">
		
			<div class="col-md-4 cprtlft_ctmzr">
				<?php echo wp_kses_post( get_theme_mod( 'seopress_left_footer_setting', '<p>' . __( 'All right reserved.', 'seopress' ) . '</p>' ) ); ?>
			</div>
				
			<div class="col-md-4 alignc-spsl cprtcntr_ctmzr">
				<?php echo wp_kses_post( get_theme_mod( 'seopress_center_footer_setting', '<p><a href="#">' . __( 'Terms of Use - Privacy Policy', 'seopress' ) . '</a></p>' ) ); ?>
			</div>
				
			<div class="col-md-4 alignr-spsl">
				<p><?php _e( 'WordPress', 'seopress' ); ?> <a target="_blank" href="http://ewptheme.com/product/seopress-pro-wordpress-theme/"><span class="fa fa-thumbs-o-up"></span> <?php _e( 'SEOPress Pro', 'seopress' ); ?></a> <?php _e( 'Theme', 'seopress' ); ?></p>
			</div>
			
		</div>
	</div>
</div>