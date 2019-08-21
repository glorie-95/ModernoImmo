<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Township Lite
 */

get_header(); ?>
<div id="content-aa">
	<div class="container">
        <div class="page-content">		
			<h1><?php the_title();?></h1>
			<h3><?php esc_html_e( '404 Not Found', 'township-lite' ); ?></h3>
			<p class="text-404"><?php esc_html_e( 'Looks like you have taken a wrong turn&hellip;', 'township-lite' ); ?></p>
			<p class="text-404"><?php esc_html_e( 'Dont worry&hellip it happens to the best of us.', 'township-lite' ); ?></p>
			<div class="read-moresec">
        		<a href="<?php echo esc_url( home_url() ); ?>" class="button hvr-sweep-to-right"><?php esc_html_e( 'Back to Home Page', 'township-lite' ); ?></a>
			</div>				
        </div>
	</div>
	<div class="clearfix"></div>
</div>
<?php get_footer(); ?>