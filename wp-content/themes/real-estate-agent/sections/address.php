<?php 
/*
* Home Page contact form
*/

if ( get_theme_mod( 'cform' ) ) { ?>
<div class="section address">
	<div class="grid padded">

		<?php $title = esc_html(get_theme_mod('contact_title')); ?>

		
		<h2 class="section-title"><?php echo $title; ?></h2>

		<div class="col-6-12 address-form">
		<?php 
			$cf7_id = esc_attr( get_theme_mod('cform'));

			$cf7 = sprintf(
						'[contact-form-7 ID="%1$s"]',
   						 $cf7_id
						);
			echo do_shortcode( $cf7 );
			 ?>
		</div>
	</div>
</div>
<?php } ?>