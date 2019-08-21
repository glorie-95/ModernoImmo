<?php

/*
* Blog section
*/

if ( true == get_theme_mod( 'blog-switch', true ) ) :

$title =  get_theme_mod('blog_title');
$subtitle = get_theme_mod('blog_sub_title');
$nposts = esc_html( get_theme_mod('real-estate-agent-blog-number'));
?>
<div class="section blog">
	<div class="grid">
	<h2 class="section-title"> <?php echo esc_html( $title) ; ?></h2>
	<?php if(!empty($subtitle)) : ?>
	<h4 class="section-title"> <?php echo esc_html( $subtitle) ; ?></h4>
<?php endif; ?>
	<?php
	$args = array(
		'post_type' => 'post',
		'posts_per_page'  => absint( $nposts),
		);
	$wp_query = new WP_Query( $args);
		if ( $wp_query->have_posts() ) :


			/* Start the Loop */
			while ( $wp_query->have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */?>
				<div class="col-4-12 post-item"> 
				<?php get_template_part( 'template-parts/content-preview', get_post_format() ); ?>
				</div>
				<?php

			endwhile;

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; 
		wp_reset_postdata()
		?>

	</div>
</div>
<?php else: endif; ?>