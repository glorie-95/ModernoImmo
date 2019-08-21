<?php 
$latest_blog_status = get_theme_mod( 'latest_blog_status' );
if( $latest_blog_status == true ){
    return;
}
?>
<section class="blog-home sec-padding">
    <div class="container">
        <div class="sec-title text-center">
            <?php 
            $blog_title = get_theme_mod( 'blog_title' );
            $blog_subtitle = get_theme_mod( 'blog_subtitle' );
            echo '<h2 class="blog_heading">'.esc_html( !empty($blog_title) ? $blog_title : 'Latest News' ).'</h2>'; 
            echo '<p class="blog_subheading">'.esc_html( !empty($blog_subtitle) ? $blog_subtitle : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ).'</p>'; 
            ?>
            <span class="colorborder"></span>
        </div>
        <?php
        $blog_cat = get_theme_mod( 'blog_cat' );
        $args1 = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'cat' => $blog_cat,
            'ignore_sticky_posts' => 1,
        );
        $latest_posts = new WP_Query( $args1 );
        if( $latest_posts->have_posts() ): ?>
        <div class="row">
            <!-- News 1 -->
             <?php
            while( $latest_posts->have_posts() ): $latest_posts->the_post(); 
                ?>
                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="single-blog-post">
                        <div class="img-box">
                            <?php 
                            if( has_post_thumbnail() ){
                                the_post_thumbnail('fire_blog_edu_popular_courses');
                            } else { ?>
                                <img src="<?php echo esc_url( get_template_directory_uri() . '/images/348x232_placeholder.png' ); ?>">
                                <?php
                            }                          
                            ?>
                           
                            <div class="overlay">
                                <div class="box">
                                    <div class="content">
                                        <ul>
                                            <li><a href="<?php the_permalink(); ?>"><i class="fa fa-link"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="date">
                                <b><?php echo esc_html( get_the_date('d') );?></b> <?php echo esc_html( get_the_date('M') );?>
                            </div>
                        </div>
                        <div class="content-box">

                            <div class="content">
                                <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
                                <p><?php echo esc_html( wp_trim_words( get_the_content(), 25, '...' ) ); ?></p>
                            </div>

                        </div>
                    </div>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <?php endif;?>
    </div>
</section>