<div id="post-<?php the_ID(); ?>" <?php post_class('clearfix postsloop'); ?> itemscope itemtype="http://schema.org/CreativeWork">
	<div class="content-first">
			
		<div class="content-second">
			<h3 class="the-title" itemprop="headline"><a class="entry-title" rel="bookmark" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" ><?php the_title(); ?></a></h3>
		</div>
			
		<div class="content-third">
		
			<?php
			if( get_theme_mod( 'seopress_posts_meta_disply', '1' ) == 1 ) {
				seopress_entry_meta();
			}
			?>
			
			<div class="entry-content" itemprop="text">

				<?php
				if( get_theme_mod( 'seopress_archive_post_thumbnail', '1' ) == '1' )
				{
					seopress_post_thumbnail();
				}
				?>

				<?php
				if( get_theme_mod( 'excerpt_or_content', 'excerpt' ) == 'content' )
				{
					the_content();
				}
				else
				{
					the_excerpt();
				}
				?>

			</div>
					
		</div>

	</div>
</div>
