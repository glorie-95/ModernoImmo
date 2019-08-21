<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package construc
 */

get_header();
?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="blog-list-area section-padding">
				<div class="container">
					<div class="row">
					<?php if ( have_posts() ) { ?>
						<div class="col-md-8">
							<?php
							while ( have_posts() ) :
								the_post();
								get_template_part( 'template-parts/content', 'search' );
								endwhile;
								construc_pagination();
							?>
						</div>
						<div class="col-md-4">
							   <div class="widget-area">
								<?php get_sidebar(); ?>
							</div>
						</div>
					<?php } else { ?>
						<div class="col-md-12 text-center">
							<?php get_template_part( 'template-parts/content', 'none' ); ?>
						</div>
					<?php } ?>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php
get_footer();
