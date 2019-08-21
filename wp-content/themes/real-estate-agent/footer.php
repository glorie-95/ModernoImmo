<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package real_estate_agent
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
	<div class="grid">
	<div class="footer-widget col-3-12"><?php dynamic_sidebar( 'footer-1' ); ?></div>
	<div class="footer-widget col-3-12"><?php dynamic_sidebar( 'footer-2' ); ?></div>
	<div class="footer-widget col-3-12"><?php dynamic_sidebar( 'footer-3' ); ?></div>
	<div class="footer-widget col-3-12"><?php dynamic_sidebar( 'footer-4' ); ?></div>

		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'real-estate-agent' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'real-estate-agent' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'real-estate-agent' ), 'real-estate-agent', '<a href="https://thepixeltribe.com/" rel="designer">pixel tribe</a>' ); ?>
		</div><!-- .site-info -->
	</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
