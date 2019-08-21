<div class="col-md-8">
	<?php
	$getbloglayout = get_theme_mod( 'blogpage_layout', 'list' );
			if ($getbloglayout == 'grid') {
				echo '<div class="row">';
			}
	if ( have_posts() ) :
		if ( is_home() && ! is_front_page() ) :
			?>
			<header>
				<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
			</header>
			<?php
		endif;
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			/*
			 * Include the Post-Type-specific template for the content.
			 * If you want to override this in a child theme, then include a file
			 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
			 */
			$getgrid = get_theme_mod('blogpage_grid_column', 2);
			$grid = 'col-md-6';
			if ($getgrid == 2) {
				$grid = 'col-md-6';
			}elseif ($getgrid == 3) {
				$grid = 'col-lg-4 col-sm-6';
			}elseif ($getgrid == 4) {
				$grid = 'col-lg-3 col-sm-6';
			}
			if ($getbloglayout == 'grid') {
				echo '<div class="'.$grid.'">';
			}
			get_template_part( 'template-parts/content', get_post_type() );
			if ($getbloglayout == 'grid') {
				echo '</div>';
			}

		endwhile; wp_reset_postdata();
		if ($getbloglayout == 'grid') {
				echo '</div>';
			}
		construc_pagination();
	else :
		get_template_part( 'template-parts/content', 'none' );
	endif;
	?>
</div>
<div class="col-md-4">
	<div class="widget-area">
		<?php get_sidebar(); ?>
	</div>
</div>