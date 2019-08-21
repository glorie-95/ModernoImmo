<?php
/**
 * The template part for displaying single post
 *
 * @package VW Corporate Lite 
 * @subpackage vw_corporate_lite
 * @since VW Corporate Lite 1.0
 */
?>

<div class="single-post">
	<h2><?php the_title();?></h2>
	<div class="metabox">
		<?php if(get_theme_mod('vw_corporate_lite_toggle_postdate',true)==1){ ?>
	      <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo get_the_date(); ?></span>
	    <?php } ?>

	    <?php if(get_theme_mod('vw_corporate_lite_toggle_author',true)==1){ ?>
	      <i class="far fa-user"></i><span class="entry-author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?></a></span>
	    <?php } ?>

	    <?php if(get_theme_mod('vw_corporate_lite_toggle_comments',true)==1){ ?>
	      <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-corporate-lite'), __('0 Comments','vw-corporate-lite'), __('% Comments','vw-corporate-lite')); ?></span>
	    <?php } ?>
    </div>
	<?php if(has_post_thumbnail()) { ?>
		<hr>
		<div class="feature-box">	
			<img src="<?php the_post_thumbnail_url('full'); ?>">
		</div>
		<hr>
	<?php } 
	the_content('Read More');

	wp_link_pages( array(
		'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'vw-corporate-lite' ) . '</span>',
		'after'       => '</div>',
		'link_before' => '<span>',
		'link_after'  => '</span>',
		'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'vw-corporate-lite' ) . ' </span>%',
		'separator'   => '<span class="screen-reader-text">, </span>',
	) );
		
	if ( is_singular( 'attachment' ) ) {
		// Parent post navigation.
		the_post_navigation( array(
			'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-corporate-lite' ),
		) );
	} elseif ( is_singular( 'post' ) ) {
		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next page', 'vw-corporate-lite' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Next post:', 'vw-corporate-lite' ) . '</span> ' .
				'<span class="post-title">%title</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous page', 'vw-corporate-lite' ) . '</span> ' .
				'<span class="screen-reader-text">' . __( 'Previous post:', 'vw-corporate-lite' ) . '</span> ' .
				'<span class="post-title">%title</span>',
		) );
	}
    
    echo '<div class="clearfix"></div>';
    
	the_tags(); 

    // If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}?>
</div>