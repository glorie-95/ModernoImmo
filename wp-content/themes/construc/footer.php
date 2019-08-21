<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package construc
 */

?>



<?php get_sidebar( 'bottom' ); ?>
	<!-- end of footer section -->
	<!-- start copyright section -->
	<div class="copyright-section">
		<?php
			if (!function_exists('construc_credit_remove')) {
				construc_credit_dont_remove();
			}
		?>
		<div class="container">
			<div class="row">
				<div class="col-md-6 text-left">
					<div class="site-info">
						<p>
						<?php
						$getcopyrighttext = get_theme_mod('copyright_text');
						if (!empty($getcopyrighttext)) {
							echo wp_kses_post($getcopyrighttext);
						}else{
						 esc_html_e( 'Developed Using', 'construc' ); ?>
							<a href="<?php echo esc_url( 'http://theimran.com/construc-construction-wordpress-theme/' ); ?>" class="imprint">
								<?php esc_html_e( 'Construc WordPress Theme', 'construc' ); ?>
							</a>
						<?php } ?>
						</p>
					</div><!-- .site-info -->
				</div>
				<div class="col-md-6 text-right">
					<div class="footer-social">
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
</div><!-- #page -->
<div class="scrooltotop">
	<a href="#" class="fa fa-angle-up"></a>
</div>
<?php wp_footer(); ?>

</body>
</html>
