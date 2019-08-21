<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package Township Lite
 */

get_header(); ?>

<?php do_action( 'township_lite_page_header' ); ?>

<div class="container">
    <div id="content-aa" class="middle-align"> 
        <?php while ( have_posts() ) : the_post(); ?>
            <?php the_post_thumbnail(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content();
            wp_link_pages( array(
                'before' => '<div class="page-links">' . __( 'Pages:', 'township-lite' ),
                'after'  => '</div>',
            ) );
            
            //If comments are open or we have at least one comment, load up the comment template
                if ( comments_open() || '0' != get_comments_number() )
                    comments_template();
            ?>
        <?php endwhile; // end of the loop. ?>
        <div class="clearfix"></div>              
    </div>
</div>

<?php do_action( 'township_lite_page_footer' ); ?>

<?php get_footer(); ?>