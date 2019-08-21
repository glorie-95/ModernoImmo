<?php
global $post;
$fire_blog_post_id = $post->ID;
$image = get_the_post_thumbnail_url();
$post_cat = wp_get_post_terms( $fire_blog_post_id, 'category' );
$comments_count = wp_count_comments($fire_blog_post_id);
$total_comments = $comments_count->total_comments;
$category = get_the_category();
?>

<div class="blog-post blog-large blog-listing <?php echo ( is_sticky() ? 'sticky_post' : '' ); ?>">

    <article>

        <?php 

        if( has_post_thumbnail() ){ ?>

            <header class="entry-header">
            
                <div class="entry-thumbnail">

                    <?php

                    the_post_thumbnail( 'fire_blog_new_list_view' ); ?>                       
                    <span class="post-format post-format-video">
                        <i class="fa fa-<?php echo esc_attr( fire_blog_get_post_icon( $post->ID ) ); ?>"></i>
                    </span>

                </div>
            
            </header>

            <?php 
        } ?>

        <div class="entry-content">
            <div class="entry-date">
                <a href="<?php echo esc_url( home_url() ); ?>/<?php echo date( 'Y/m' , strtotime( get_the_date() ) ); ?>">
                    <?php echo esc_html( get_the_date() );?>
                </a>
            </div>
            <h4 class="entry-title">
                <a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>       
                </a>
            </h4>

            <p><?php the_excerpt(); ?></p>

            <!-- button -->
            <div class="red-btn">
                <a class="btn btn-primary" href="<?php the_permalink(); ?>">
                    <?php esc_html_e( 'Read More', 'fire-blog' ); ?>
                </a>
            </div>
        </div>

        <footer class="entry-meta">

            <span class="entry-author">
                <i class="fa fa-user"></i> 
                <a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) )); ?>">
                    <?php the_author_meta( 'user_login' , $post->post_author ); ?>
                </a>
            </span>

            <?php 
            if ( !empty( $category[0] ) ) { ?>
                <span class="entry-category">
                    <i class="fa fa-folder"></i> 
                    <a href="<?php echo esc_url( get_category_link( $category[0]->term_id ) ); ?>">
                        <?php echo esc_html( $category[0]->cat_name ); ?>
                    </a>                    
                </span>
                <?php 
            } ?>

            <span class="entry-comments">                    
                <a href="<?php the_permalink(); ?>#respond"><i class="fa fa-comments-o"></i>
                    <?php echo absint( $total_comments ); ?>
                </a>                
            </span>
        </footer>
    </article>

</div>