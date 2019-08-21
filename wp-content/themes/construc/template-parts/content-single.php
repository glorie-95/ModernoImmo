<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package construc
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="single-blog blog-details-page list-blog-item">
	<?php if ( has_post_thumbnail() ) { ?>
		<div class="blog-lrg-thumb">
			<a href="<?php the_permalink(); ?>">
				<?php the_post_thumbnail(); ?>
			</a>
		</div>
		<?php } ?>
	<div class="blog-title">
	   <div class="news-meta">
			<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><span class="fa fa-user"></span><?php the_author(); ?></a>
				<?php construc_comment_popup_link(); ?>
			<a href="javascript:void(0)"><span class="fa fa-clock-o"></span><?php construc_posted_on(); ?></a>
		</div>
	</div>
	<div class="blog-content">
		<?php
		the_content();
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'construc' ),
				'after'  => '</div>',
			)
		);
		?>
	</div>

	<div class="post-share-link">
		<div class="tag posttag">
			<?php if ( has_tag() ) : ?>
				<strong><?php esc_html_e( 'Tags:', 'construc' ); ?></strong>
				<?php the_tags( '' ); ?>
			<?php endif; ?>
		</div>
	</div>
	<div class="author-details clearfix">
		<div class="author-img">
			<img src="<?php echo esc_url( get_avatar_url( get_the_author_meta( 'ID' ), 100 ) ); ?>" alt="">
		</div>
		<div class="about-author">
			<h4><?php the_author(); ?></h4>
			<p><?php the_author_meta( 'description' ); ?></p>
			<?php 
			if (function_exists('construc_author_social_link')) {
				echo wp_kses_post(construc_author_social_link());
			}
			 ?>
		</div>
	</div>
	
	
</div>
</article><!-- #post-<?php the_ID(); ?> -->
