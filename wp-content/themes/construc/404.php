<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package construc
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="error-404 not-found">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center">
							<div class="content-404">
								<div>
								<h1><?php esc_html_e( '404 Not Found', 'construc' ); ?></h1>
							
								<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'construc' ); ?></p>
								<div class="widget-area">
									<div class="widget">
										<?php
										get_search_form();
										?>
									</div>
								</div>
								<a class="btn btn-default button-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to Home', 'construc' ); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
