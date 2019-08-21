<?php
get_header();
$archive_layout = esc_attr( get_theme_mod( 'seopress_blog_archive_layout', 'rights' ) );
?>
<div class="<?php if( $archive_layout == 'rights' ) { echo 'col-md-8'; } elseif( $archive_layout == 'lefts' ) { echo 'col-md-8 layoutleftsidebar'; } else { echo 'col-md-12'; } ?>">
	<div class="left-content" >
		
		<?php if( is_category() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Category Archives: %s', 'seopress' ), single_cat_title( '', false ) ); ?></h1>
			</div>
				
			<?php
			// Show an optional term description.
			if( term_description() )
			{
				printf( '<div class="content-third">%s</div>', term_description() );
			}
			?>
				
		</div>
		<?php } ?>
		
		
		<?php if( is_tag() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Tag Archives: %s', 'seopress' ), single_tag_title( '', false ) ); ?></h1>
			</div>
				
			<?php
			// Show an optional term description.
			if( term_description() )
			{
				printf( '<div class="content-third">%s</div>', term_description() );
			}
			?>
				
		</div>
		<?php } ?>
		
		
		<?php if( is_author() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Author Archives: %s', 'seopress' ), get_the_author() ); ?></h1>
			</div>
				
			<?php
			// Show an optional term description.
			if( get_the_author_meta( 'description' ) )
			{
			?>
				<div class="content-third"><p><?php the_author_meta( 'description' ); ?></p></div>
			<?php
			}
			?>
				
		</div>
		<?php } ?>
		
		
		<?php if( is_search() ) { ?>
		<div class="content-first">
			
			<div class="content-second">
				<h1 class="the-title"><?php printf( __( 'Search Results for: %s', 'seopress' ), get_search_query() ); ?></h1>
			</div>
				
		</div>
		<?php } ?>
		
		
		<?php
		if( have_posts() )
		{
			while( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'loop' );
				
			endwhile;

			seopress_posts_pagination();
		}
		else
		{
			get_template_part( 'template-parts/content', 'none' );
		}
		?>
	</div>
</div>
<?php if( $archive_layout == 'rights' || $archive_layout == 'lefts' ) { get_sidebar(); } ?>
<?php get_footer(); ?>