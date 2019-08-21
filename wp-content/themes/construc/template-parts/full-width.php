<?php
/**
 *
 * Display Full width Page
 *
 * @package Construc
 */

if ( function_exists( 'kc_is_using' ) && kc_is_using() ) :
		echo '<section class="page-wrapper container-full">';
else :
	echo '<section class="page-area section-padding"><div class="container"><div class="row"><div class="col-md-12">';
endif;
while ( have_posts() ) :
	the_post();
	get_template_part( 'template-parts/content', 'page' );
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) :
		comments_template();
		endif;
	endwhile; // End of the loop.
if ( function_exists( 'kc_is_using' ) && kc_is_using() ) :
	echo '</section>';
else :
	echo '</div></div></div></section>';
endif;

