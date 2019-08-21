<?php
//about theme info
add_action( 'admin_menu', 'correct_lite_abouttheme' );
function correct_lite_abouttheme() {    	
	add_theme_page( esc_html__('Theme Info', 'correct-lite'), esc_html__('Theme Info', 'correct-lite'), 'edit_theme_options', 'correct_lite_guide', 'correct_lite_mostrar_guide');   
} 

//guidline for about theme
function correct_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>

<style type="text/css">
@media screen and (min-width: 800px) {
.col-left {float:left; width: 99%; text-align:center;}
}
</style>
<div class="wrapper-info">
	<div class="col-left">
   		   <div style="font-size:16px; font-weight:bold; padding-bottom:10px; border-bottom:1px solid #ccc; margin-bottom:15px; margin-top:10px;">
			  <?php esc_html_e('Theme Info', 'correct-lite'); ?>
		   </div>
           <div style="text-align:center; font-weight:bold;">
				<a href="<?php echo esc_url(CORRECT_LITE_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'correct-lite'); ?></a> | 
				<a href="<?php echo esc_url(CORRECT_LITE_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'correct-lite'); ?></a> | 
				<a href="<?php echo esc_url(CORRECT_LITE_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'correct-lite'); ?></a>
                <div style="height:5px"></div>
			</div>
          <p><?php esc_html_e('Correct Lite is a free simple WordPress theme which is multipurpose, responsive, mobile friendly, flexible, scalable and can be used with WooCommerce for eCommerce shops, gallery plugins for portfolio, photography and can be used as a minimalistic styled website for usages like corporate, real estate, bakery, photography, personal, blog, travel, journal, medical, hotel, spa, interior design and commercial websites. Translation ready and multilingual plugins ready and easy to use.','correct-lite'); ?></p>
		  <a href="<?php echo esc_url(CORRECT_LITE_FREE_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.jpg" alt="" /></a>
	</div><!-- .col-left -->
	<!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>