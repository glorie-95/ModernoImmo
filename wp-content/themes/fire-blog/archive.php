<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package fire-blog
 */

get_header(); 
$archive_style = get_theme_mod( 'archive_style', 'list' );
?>
<section class="archive_page site-section main-category <?php echo esc_attr( $archive_style == 'grid' ? 'blog-grid' : 'new_list_view' ); ?>">
    <div class="container">
        <div class="row">
            <div class="content <?php echo esc_attr( $archive_style == 'list' ? 'blog-cats' : '' ); ?> col-lg-8">

            	<?php 
                echo wp_kses_post( $archive_style == 'grid' ? '<div class="row">' : '' );

            	if( have_posts() ):
                	while( have_posts() ): the_post();
    					fire_blog_archive_listing_style();
                	endwhile;
                endif;

                echo wp_kses_post( $archive_style == 'grid' ? '</div>' : '' );
                
            	fire_blog_wp_custom_pagination(
                    array(
                        'prev_text' => esc_html__( '>>', 'fire-blog' ), 
                        'next_text' => esc_html__( '<<', 'fire-blog' )
                    )
                ); ?>

            </div><!-- end content -->

            <div class="sidebar col-lg-4">

                <?php get_sidebar(); ?>

            </div><!-- end sidebar -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->
<?php

get_footer();
