<?php
/**
 *
 * Display About Section
 *
 * @package Construc
 */

$aboutpage_id = get_theme_mod('select_about_page');

if (empty($aboutpage_id)) {
	return;
}
$aboutpost = get_post($aboutpage_id);
?>

<section class="about-us-section section-padding">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="experience-content">
				<h1><?php echo esc_html($aboutpost->post_title);?></h1>
					<?php echo wp_kses_post($aboutpost->post_content); ?>
				</div>
			</div>
			<div class="col-md-6">
				<div class="about-img">
					<?php echo get_the_post_thumbnail($aboutpost->ID); ?>
				</div>
			</div>
		</div>
	</div>
</section>
