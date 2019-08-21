<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package themesmake Construction
 */
$copyright = construction_map_get_option('construction_map_copyright');

	?>

    <footer>
        <?php
        if( is_active_sidebar('footer1') || is_active_sidebar('footer2') || is_active_sidebar('footer3') || is_active_sidebar('footer4')|| is_active_sidebar('footerinfo'))
        {
        ?>

        <!-- Footer Top Section Start -->
        <div class="footer-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-wedget-one">
	                        <?php dynamic_sidebar('footer1'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-wedget-newsletter">
	                        <?php dynamic_sidebar('footer2'); ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="footer-wedget-two">
	                        <?php dynamic_sidebar('footer3'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
        <!-- Footer Top Section End -->
        <!-- Footer Bottom Section Start -->
        <div class="footer-bottom-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copy-right">

                            <p><?php echo wp_kses_post($copyright); ?><a href="" target="_blank" style="color: #F88C00;"><?php //printf( esc_html__( 'themesmake Themes %s', 'construction-map' ));?></a> |
                                <a href="<?php echo esc_url( __( 'https://www.themesmake.com/', 'construction-map' ) ); ?>"
                                ><?php
			                        /* translators: %s: CMS name, i.e. WordPress. */
			                        printf( esc_html__( ' Power by themesmake %s', 'construction-map' ), '' );
			                        ?></a>	</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer Bottom Section End -->
    </footer>


<?php wp_footer(); ?>
</body>
</html>
