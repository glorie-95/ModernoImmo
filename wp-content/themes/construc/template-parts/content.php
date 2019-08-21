<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package construc
 */
$getbloglayout = get_theme_mod( 'blogpage_layout', 'list' );
$girdcol = ($getbloglayout == 'grid' ? ' col-lg-4 col-md-4 col-sm-6' : '');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php 
	

if ($getbloglayout == 'list') :
 ?>
	<div class="single-blog list-blog-item">
		<?php if ( has_post_thumbnail() ) { ?>
		<div class="blog-lrg-thumb">
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
		</div>
		<?php } ?>
		<div class="blog-title">
			<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
			 <div class="news-meta">
				 <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>"><span class="fa fa-user"></span><?php the_author(); ?></a>
					<?php construc_comment_popup_link(); ?>
				<a href="javascript:void(0)"><span class="fa fa-clock-o"></span><?php construc_posted_on(); ?></a>
			</div>
		</div>
	   
		<div class="blog-excerpt">
			<p><?php the_excerpt(); ?></p>
		</div>
		<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'construc' ); ?></a>
	   
	</div>
<?php else: ?>
	
	<div class="gridblog single-blog">
		<div class="blog-thumb">
			<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
			
		</div>
		<div class="blog-title">
			<div class="blog-desc">
				<a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
				<p class="postdate"><?php construc_posted_on(); ?></p>
				<p><?php echo esc_html(construc_get_excerpt( 150 )); ?></p>
			</div>
		</div>
		<a href="<?php the_permalink(); ?>" class="read-more"><?php esc_html_e( 'Read More', 'construc' ); ?><i class="icofont-arrow-right"></i></a>
	</div>
	
<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->

