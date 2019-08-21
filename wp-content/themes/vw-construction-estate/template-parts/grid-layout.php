<?php
/**
 * The template part for displaying grid layout
 *
 * @package VW Construction Estate
 * @subpackage vw-construction-estate
 * @since VW Construction Estate 1.0
 */
?>
<div class="col-lg-6 col-md-6">
	<div class="postbox smallpostimage">
      <?php 
        if(has_post_thumbnail()) { ?>
        <div class="padd-box">
            <div class="box-image">
              <?php the_post_thumbnail();  ?>
              <div class="overlay">
                <div class="text"><i class="fas fa-camera"></i></div>
              </div>
            </div>
        </div>
      <?php } ?>
      <div class="new-text">                  
          <div class="box-content">
            <h4><?php the_title();?></h4>
            <div class="metabox">
              <?php if(get_theme_mod('vw_construction_estate_toggle_postdate',true)==1){ ?>
                <i class="far fa-calendar-alt"></i><span class="entry-date"><?php the_date(); ?></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_construction_estate_toggle_author',true)==1){ ?>
                <i class="fas fa-user"></i><span class="entry-author"><?php the_author(); ?></span>
              <?php } ?>

              <?php if(get_theme_mod('vw_construction_estate_toggle_comments',true)==1){ ?>
                <i class="fas fa-comments"></i><span class="entry-comments"><?php comments_number( __('0 Comments','vw-construction-estate'), __('0 Comments','vw-construction-estate'), __('% Comments','vw-construction-estate') ); ?></span>
              <?php } ?>
            </div>
            <hr class="big">
            <hr class="small">
             <p><?php $excerpt = get_the_excerpt(); echo esc_html( vw_construction_estate_string_limit_words( $excerpt, esc_attr(get_theme_mod('vw_construction_estate_excerpt_number','30')))); ?></p>
            <div class="col-lg-4 col-md-4">
                <div class="read_full">
                  <a href="<?php echo esc_url( get_permalink() );?>" class="blogbutton-small" title="<?php esc_attr_e( 'Read Full', 'vw-construction-estate' ); ?>"><?php esc_html_e('Read Full','vw-construction-estate'); ?></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-8">
                <div class="blog-icon">
                  <a href="https://www.facebook.com/sharer/sharer.php?u=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                  <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
                  <a href="https://plus.google.com/share?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                  <a href="https://twitter.com/share?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                  <a href="http://www.instagram.com/submit?url=<?php  the_permalink(); ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                </div> 
            </div>
          </div>
      </div>
      <div class="clearfix"></div> 
  </div>
</div>