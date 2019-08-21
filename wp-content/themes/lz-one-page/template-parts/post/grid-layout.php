<?php
/**
 * Template part for displaying posts
 * @package WordPress
 * @subpackage lz-one-page
 * @since 1.0
 * @version 1.4
 */
?>

<div class="col-lg-4 col-md-4">
	<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div class="article_content"> 
      <div class="box-image">
        <img src="<?php the_post_thumbnail_url('full'); ?>"/>
      </div>  
      <div class="article-text">
        <h4><?php the_title();?></h4>
        <div class="metabox"> 
          <span class="entry-date"><i class="fas fa-calendar-alt"></i><?php echo esc_html( get_the_date()); ?></span>  
          <span class="entry-author"><a href="<?php echo esc_url( get_permalink() );?>"><i class="fas fa-user"></i><?php the_author(); ?></a></span>
          <span class="entry-comments"><a href="<?php echo esc_url( get_permalink() );?>"><i class="fas fa-comments"></i><?php comments_number( __('0 Comments','lz-one-page'), __('0 Comments','lz-one-page'), __('% Comments','lz-one-page') ); ?></a></span>
        </div>
        <p><?php the_excerpt();?></p>
        <div class="read-btn">
          <a href="<?php the_permalink();?>" class="blogbutton-small" title="<?php esc_attr_e( 'READ MORE', 'lz-one-page' ); ?>"><?php esc_html_e('READ MORE','lz-one-page'); ?>
          </a>
        </div>
      </div>
      <div class="clearfix"></div> 
    </div>
  </div>
</div>