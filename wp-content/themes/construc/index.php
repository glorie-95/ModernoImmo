<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package construc
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<section class="blog-list-area section-padding">
				<div class="container">
					<div class="row">
						<?php
						$getblogsidebar = get_theme_mod( 'blogpage_sidebar', 'right' );
						$blogsidebar = 'rightsidebar';
						if ($getblogsidebar == 'right') {
							$blogsidebar = 'rightsidebar';
						}elseif ($getblogsidebar == 'left') {
							$blogsidebar = 'leftsidebar';
						}elseif ($getblogsidebar == 'nosidebar') {
							$blogsidebar = 'nosidebar';
						}else{
							$blogsidebar = 'rightsidebar';
						}
						if (!isset($getblogsidebar)) {
							$blogsidebar = 'rightsidebar';
						}
						get_template_part( 'template-parts/blog', $blogsidebar );
						?>
					</div>
				</div>
			</section>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
