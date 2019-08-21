<?php
/*
* Template Section for the intro section
*/


if ( true == get_theme_mod( 'about-switch', true ) ) :

$first = esc_html(get_theme_mod('first_about'));



?>
<div class="section about">
	<div class="grid">

		<?php 
	
		// The Query
		$args = array(
			'post_type' => 'page',
			'post__in' => array($first),
			);
		$feature = new WP_Query( $args );

	// The Loop
		if ( $feature->have_posts() ) {
			
				while ( $feature->have_posts() ) {
					
					$feature->the_post();

	if ( has_post_thumbnail() ): ?>
	<div class="col-2-12">
		<div class='page-thumb'>
				
				<?php the_post_thumbnail('real_estate_agent_property_slide'); ?>
				
				
		</div>
		
		<h4 class="section-title"> <?php the_title(); ?></h4>
		</div>
		<?php endif; ?>

		
		<?php if ( has_post_thumbnail() ): ?>
		<div class="col-7-12 about-content">

		<?php else: ?>

		<div class="col-9-12 about-content">
			
		<?php endif;

		echo '<div class="about-excerpt">';
		the_content();
		echo '</div>';

 	  echo "</div>";
 	  } } else { 
		}  ?>
	
	<?php 
		
		/* Restore original Post Data */
		wp_reset_postdata();
		?>
	<div class="col-3-12 about-contact">
		<ul>
			 <?php if ( get_theme_mod( 'telephone' ) ) { ?>
 				<li><?php esc_html_e('Telephone:','real-estate-agent');?> <span><h2><?php echo esc_html( get_theme_mod( 'telephone' ) ); ?></h2><span></li>
 			 <?php }?>

 <?php if ( get_theme_mod( 'email' ) ) { ?>
 	<li><?php esc_html_e('Email:','real-estate-agent');?> <span><?php echo esc_html( get_theme_mod( 'email' ) ); ?><span></li>
 <?php }?> 			 
			
			 <?php if ( get_theme_mod( 'contact_link' ) ) { ?>
 	<li class="btn"><a class="btn" href="<?php echo esc_url( get_theme_mod( 'contact_link' ) ); ?>"> <?php esc_html_e('CONTACT ME','real-estate-agent'); ?></a></li>
 <?php }?>
			
		</ul>



	</div>	</div>
	</div>
	</div>
<?php else: endif; ?>