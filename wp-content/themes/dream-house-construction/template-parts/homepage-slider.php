<?php
$slider_cat = get_theme_mod( 'cons_slider_cat' );
$count = 0;
$arg = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => apply_filters( 'dream_house_construction_wedding_slider_limit', 2 ),
    'cat' => $slider_cat,
);
$slider = new WP_Query( $arg );
if( $slider->have_posts() ): ?>

    <section class="slider-section">

        <div class="slider weds-multiple-items">

        	<?php

            while( $slider->have_posts() ): $slider->the_post();
                $post_cat = wp_get_post_terms( $post->ID, 'category' ); ?>

                <div class="carousel-item active">

                    <?php
                    if(has_post_thumbnail()){
                        the_post_thumbnail( 'fire_blog_wedding_slider' );
                    }              
                    ?>
                    <div class="carousel-caption d-none d-md-block">
                        <div class="container">
                            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                            <p><?php echo esc_html(wp_trim_words( get_the_content(), 50, '...' )); ?></p>
                            <div class="blog-bottom">
                            </div><!-- end bottom -->
                        </div>
                    </div>
                    <div class="overlay"></div>
                </div><!-- end carousel-item -->
                <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>
    </section><!-- end slider section -->
    <?php 
endif;?>