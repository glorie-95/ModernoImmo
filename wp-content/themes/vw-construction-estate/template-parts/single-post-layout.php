<?php
/**
 * The template part for displaying single post
 *
 * @package VW Construction Estate
 * @subpackage vw-construction-estate
 * @since VW Construction Estate 1.0
 */
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
    <div id="content-vw">
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
        <h1><?php the_title(); ?></h1>
        <?php if(has_post_thumbnail()) { ?>
                <div class="feature-box">   
                    <img src="<?php the_post_thumbnail_url('full'); ?>">
                </div>                 
            <?php } the_content();
            the_tags(); ?>
            <?php
            // If comments are open or we have at least one comment, load up the comment template
            if ( comments_open() || '0' != get_comments_number() )
            comments_template();

            if ( is_singular( 'attachment' ) ) {
                // Parent post navigation.
                the_post_navigation( array(
                    'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'vw-construction-estate' ),
                ) );
            } elseif ( is_singular( 'post' ) ) {
                // Previous/next post navigation.
                the_post_navigation( array(
                    'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'vw-construction-estate' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Next post:', 'vw-construction-estate' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                    'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'vw-construction-estate' ) . '</span> ' .
                        '<span class="screen-reader-text">' . __( 'Previous post:', 'vw-construction-estate' ) . '</span> ' .
                        '<span class="post-title">%title</span>',
                ) );
            }
        ?>
    </div>
</div>