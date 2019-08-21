<?php
/**
 * The Template for displaying all single posts.
 *
 * @package Township Lite
 */
?>

<div class="metabox">
	<span class="entry-date"><i class="fa fa-calendar" aria-hidden="true"></i><?php the_date(); ?></span>
	<span class="entry-author"><i class="fa fa-user" aria-hidden="true"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
	<span class="entry-comments"><i class="fa fa-comments" aria-hidden="true"></i><?php comments_number( __('0 Comments','township-lite'), __('0 Comments','township-lite'), __('% Comments','township-lite') ); ?> </span>
</div>
<hr>
<div class="feature-box">	
	<img src="<?php the_post_thumbnail_url('full'); ?>">
</div>
<hr>
<?php the_content();
the_tags(); ?>
<div class="clearfix"></div> 
			             
<?php
 wp_link_pages( array(
    'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'township-lite' ) . '</span>',
    'after'       => '</div>',
    'link_before' => '<span>',
    'link_after'  => '</span>',
    'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'township-lite' ) . ' </span>%',
    'separator'   => '<span class="screen-reader-text">, </span>',
) );
// If comments are open or we have at least one comment, load up the comment template
if ( comments_open() || '0' != get_comments_number() )
    comments_template();

if ( is_singular( 'attachment' ) ) {
	// Parent post navigation.
	the_post_navigation( array(
		'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'township-lite' ),
	) );
} elseif ( is_singular( 'post' ) ) {
	// Previous/next post navigation.
	the_post_navigation( array(
		'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'township-lite' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Next post:', 'township-lite' ) . '</span> ' .
			'<span class="post-title">%title</span>',
		'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'township-lite' ) . '</span> ' .
			'<span class="screen-reader-text">' . __( 'Previous post:', 'township-lite' ) . '</span> ' .
			'<span class="post-title">%title</span>',
	) );
} ?>