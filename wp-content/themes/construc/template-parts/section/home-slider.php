<?php
/**
 *
 * Display Main Home Slider
 *
 * @package Construc
 */

$sliderone = get_theme_mod( 'select_slider_one' );
$slidertwo = get_theme_mod( 'select_slider_two' );
$sliderthree = get_theme_mod( 'select_slider_three' );
$sliderid = array();
if ( $sliderone != null ) {
	$sliderid[] = $sliderone;
}
if ( true == construc_slider_two_on() && $slidertwo != null ) {
	$sliderid[] = $slidertwo;
}
if ( true == construc_slider_three_on() && $sliderthree != null ) {
	$sliderid[] = $sliderthree;
}
$sliderlength = count( $sliderid );
if ( 0 == $sliderlength ) {
	return;
}

?>
<section class="main-slider-area">
	<div class="active-main-slider owl-carousel">
		
		<?php

		$sliders = new WP_Query(
			array(
				'post_type' => 'page',
				'post__in' => $sliderid,
			)
		);
		while ( $sliders->have_posts() ):
			$sliders->the_post();
			?>
		<div class="main-slider-item" style="background-image: url(<?php echo esc_url(get_the_post_thumbnail_url());?>);">
			<div class="slider-one-content">
				<div class="container">
					<div class="row">
						<div class="col-md-8 text-left">
							<div class="main-slider-welcome-text">
								<div class="slider-cell">
									<h2 class="main-title" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut"><?php echo esc_html( get_the_title() ); ?></h2>
									<h2 class="sub-title" data-animation-in="fadeIn" data-animation-out="animate-out fadeOutRight">
										<?php
											echo esc_html(get_the_excerpt());
										?>
									</h2>
									<div class="welcome-button" data-animation-in="fadeIn" data-animation-out="animate-out fadeOut">
										<a href="<?php the_permalink(); ?>" class="btn btn-default button-primary"><?php echo esc_html(get_theme_mod('slider_read_more_text', 'Read More'), 'Read More'); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

			<?php
		endwhile;
		wp_reset_postdata();
		?>

	</div>
</section>
