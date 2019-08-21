<?php get_header(); ?>

<?php
if( get_theme_mod( 'seopress_breadcrumbx_setting', '1' ) == '1' )
{
	seopress_press_breadcrumbs();
}

$single_layout = esc_attr( get_theme_mod( 'seopress_blog_single_layout', 'rights' ) );
?>

<div class="<?php if( $single_layout == 'rights' ) { echo 'col-md-8'; } elseif( $single_layout == 'lefts' ) { echo 'col-md-8 layoutleftsidebar'; } else { echo 'col-md-12'; } ?>">
	<div class="left-content" >
		
		<?php
		while( have_posts() ) : the_post();
		
			get_template_part( 'content', get_post_format() );
			
			comments_template();

			seopress_post_pagination();
		
		endwhile;
		?>
		
	</div>
</div>
<?php if( $single_layout == 'rights' || $single_layout == 'lefts' ) { get_sidebar(); } ?>
<?php get_footer(); ?>