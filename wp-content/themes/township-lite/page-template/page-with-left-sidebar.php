<?php
/**
 * Template Name:Page with Left Sidebar
 */

get_header(); ?>

<?php do_action( 'township_lite_pageleft_header' ); ?>

<div class="container">
    <div class="middle-align row">               
		<div class="col-lg-4 col-md-4" id="sidebar">
			<?php dynamic_sidebar('sidebar-2'); ?>
		</div>		 
		<div class="col-lg-8 col-md-8" id="content-aa" >
			<?php while ( have_posts() ) : the_post(); ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>">
                <h1><?php the_title(); ?></h1>
                <?php the_content();
                wp_link_pages( array(
                    'before' => '<div class="page-links">' . __( 'Pages:', 'township-lite' ),
                    'after'  => '</div>',
                ) );
                ?>
                <?php
                    //If comments are open or we have at least one comment, load up the comment template
                	if ( comments_open() || '0' != get_comments_number() )
                    	comments_template();
                ?>
            <?php endwhile; // end of the loop. ?>
            <div class="clear"></div> 
        </div>         
    </div>
</div>

<?php do_action( 'township_lite_pageleft_footer' ); ?>

<?php get_footer(); ?>