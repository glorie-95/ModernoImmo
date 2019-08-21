<?php 
$testimonials_status = get_theme_mod( 'testimonials_status' );
if( $testimonials_status == true ){
    return;
}
?>
<section class="c-testimonial">
    <div class="container">
        <!-- text-title starts here --> 
        <div class="sec-title text-center">
            <?php 
            $blog_title1 = get_theme_mod( 'blog_title1' );
            $blog_subtitle1 = get_theme_mod( 'blog_subtitle1' );
            echo '<h2 class="blog_heading1">'.esc_html( !empty($blog_title1) ? $blog_title1 : 'What Our Clients Say' ).'</h2>'; 
            echo '<p class="blog_subheading1">'.esc_html( !empty($blog_subtitle1) ? $blog_subtitle1 : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ).'</p>'; 
            ?>
            <span class="colorborder"></span>
        </div>
        <!-- text-title ends here -->
        <?php
        $blog_cat1 = get_theme_mod( 'blog_cat1' );
        $args11 = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'cat' => $blog_cat1,
            'ignore_sticky_posts' => 1,
        );
        $latest_posts1 = new WP_Query( $args11 );
        if( $latest_posts1->have_posts() ): ?>
            <div class="row slider testimonials">
                 <?php
                while( $latest_posts1->have_posts() ): $latest_posts1->the_post(); 
                    $client_rating = get_post_meta( $post->ID, 'client_rating', true );
                    ?>
                    <div class="col-sm-4">
                        <div class="testi-item">
                            <div class="image">
                                <?php 
                                if( has_post_thumbnail() ){
                                    the_post_thumbnail('thumbnail');
                                } else { ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/150x150_placeholder.png' ); ?>">
                                    <?php
                                }                          
                                ?>
                            </div>
                            <p class="description"><?php echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) ); ?></p>
                            <div class="testimonial-content">
                                <div class="testimonial-profile">
                                    <h3 class="name"><?php the_title(); ?></h3>
                                </div>
                                <ul class="rating">
                                    <?php
                                    if( !empty($client_rating) ){

                                        for ($i=0; $i < $client_rating ; $i++) { 
                                            echo '<li class="fa fa-star" aria-hidden="true"></li>';
                                        }
                                        
                                        if( $client_rating < 5 ){

                                            $rate = 5 - $client_rating;
                                            for ($j=0; $j < $rate ; $j++) { 
                                                echo '<li class="fa fa-star-o" aria-hidden="true"></li>';
                                            }
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif;?>
    </div>
</section>