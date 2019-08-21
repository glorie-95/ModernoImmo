<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package fire-blog
 */

$insta = get_theme_mod( 'insta_shortcode' );

if( !empty( $insta ) ){
	echo wp_kses_post( do_shortcode($insta) );
} 

/**
* Check active widgets
*/

$footer_widgets = false;
if( ( is_active_sidebar( 'footer_1' ) || 
	is_active_sidebar( 'footer_2' ) || 
	is_active_sidebar( 'footer_3' ) ) || 
	current_user_can( 'administrator' ) ){
	$footer_widgets = true;
} ?>

	<footer class="footer" style="<?php echo esc_attr( $footer_widgets ? '' : 'padding-top:0px' ); ?>">

		<?php 
		if( $footer_widgets ){ ?>
		    <div class="container">
		        <div class="row">
		            <div class="col-lg-5 col-md-12">
		                <div class="widget">
		                    <?php
							if( is_active_sidebar( 'footer_1' ) ){
								dynamic_sidebar( 'footer_1' );
							} else {

								if( current_user_can( 'administrator' ) ){

									printf(
										'<p class="footer_widget_help_text">' . esc_html__( '%s to add widget here.' , 'fire-blog' ) . '</p>',
										'<a href="' . esc_url( admin_url( '/customize.php?autofocus[section]=sidebar-widgets-footer_1' ) ) . '">' . esc_attr__( 'Click here' , 'fire-blog' ) . '</a>'
									);

								}

							}
							?>
		                </div><!-- end widget -->
		            </div><!-- end col -->

		            <div class="col-lg-3 col-md-12">
		                <div class="widget clearfix">
		                	<div class="footer2_widget">
			                    <?php
								if( is_active_sidebar( 'footer_2' ) ){
									dynamic_sidebar( 'footer_2' );
								} else {
									if( current_user_can( 'administrator' ) ){
										printf(
											'<p class="footer_widget_help_text">' . esc_html__( '%s to add widget here.' , 'fire-blog' ) . '</p>',
											'<a href="' . esc_url( admin_url( '/customize.php?autofocus[section]=sidebar-widgets-footer_2' ) ) . '">' . esc_attr__( 'Click here' , 'fire-blog' ) . '</a>'
										);
									}
								}
								?>
							</div>
		                </div><!-- end widget -->
		            </div><!-- end col -->

		            <div class="col-lg-4 col-md-12">
		                <div class="widget clearfix">
		                     <?php
							if( is_active_sidebar( 'footer_3' ) ){
								dynamic_sidebar( 'footer_3' );
							} else {
								if( current_user_can( 'administrator' ) ){
									printf(
										'<p class="footer_widget_help_text">' . esc_html__( '%s to add widget here.' , 'fire-blog' ) . '</p>',
										'<a href="' . esc_url( admin_url( '/customize.php?autofocus[section]=sidebar-widgets-footer_3' ) ) . '">' . esc_attr__( 'Click here' , 'fire-blog' ) . '</a>'
									);
								}
							}
							?>
		                </div><!-- end widget -->
		            </div><!-- end col -->
		        </div><!-- end row -->
		    </div>
	    	<?php 
		}?>

	    <div class="copyright">
	        <div class="container">
	        	<p class="copyright_text"><?php
	        	fire_blog_footer_copyright();
	        	?></p>            
	        </div>
	    </div><!-- end copyright -->
	</footer><!-- end footer -->
</div><!-- end wrapper -->

<?php wp_footer(); ?>

</body>
</html>
