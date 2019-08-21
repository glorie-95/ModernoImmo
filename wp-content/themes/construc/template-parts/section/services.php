<?php
/**
 *
 * Display Blog Grid
 *
 * @package Construc
 */

?>
<section class="services-section section-padding">
	<div class="container">
		<?php if (true == construc_services_section_title_switch()) :?>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="section-title  text-center">
				    <h2><?php echo esc_html(get_theme_mod('services_section_title')); ?></h2>
				    <p><?php echo wp_kses_post( get_theme_mod('services_section_subtitle') ); ?></p>
				</div>
			</div>
		</div>
	<?php endif; ?>
		<div class="row justify-content-center">
			<?php
			$services_id = array();
			$services_one = get_theme_mod('services_one');
			$services_two = get_theme_mod('services_two');
			$services_three = get_theme_mod('services_three');
			$services_four = get_theme_mod('services_four');
			$services_five = get_theme_mod('services_five');
			$services_five = get_theme_mod('services_five');
			$services_six = get_theme_mod('services_six');
			if (true == construc_services_one_switch() && !empty($services_one)) {
				$services_id[] = $services_one;
			}if (true == construc_services_two_switch() && !empty($services_two)) {
				$services_id[] = $services_two;
			}if (true == construc_services_three_switch() && !empty($services_three)) {
				$services_id[] = $services_three;
			}if (true == construc_services_four_switch() && !empty($services_four)) {
				$services_id[] = $services_four;
			}if (true == construc_services_five_switch() && !empty($services_five)) {
				$services_id[] = $services_five;
			}if (true == construc_services_six_switch() && !empty($services_six)) {
				$services_id[] = $services_six;
			}
	
			$services_length = count($services_id);
			if (0 == $services_length) {
				?>
		</div>
	</div>
</section>

				<?php 
				return;
			}
			$services = new WP_Query( array(
				'post__in' => $services_id,
				'post_type' => 'page',
			) );
			while ($services->have_posts()) :
				$services->the_post();
			?>
			<div class="col-md-5 col-lg-4">
				<div class="single-services fv-services-image">
					<a class="services-block" href="<?php the_permalink();?>">
						<?php 
						if (has_post_thumbnail()):
						 ?>
						<div class="icon">
							<?php the_post_thumbnail(); ?>
						</div>
						<?php endif; ?>
						<div class="content">
							<h4><?php the_title(); ?></h4>
							<p>
							<?php
								the_excerpt();
							?>
							</p>
						</div>
					</a>
				</div>
			</div>
		<?php endwhile; wp_reset_postdata(); ?>
		</div>
	</div>
</section>

