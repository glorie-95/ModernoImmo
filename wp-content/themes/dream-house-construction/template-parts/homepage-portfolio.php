<?php 
$our_portfolio_status = get_theme_mod( 'our_portfolio_status' );
if( $our_portfolio_status == true ){
    return;
}
?>
<section id="portfolio-section">
    <div class="container">
        <div class="row">
             <!-- text-title starts here --> 
            <div class="sec-title text-center">
                <?php 
                $port_sec_title1 = get_theme_mod( 'port_sec_title1' );
                $port_sec_subtitle1 = get_theme_mod( 'port_sec_subtitle1' );
                echo '<h2 class="portfo_heading1">'.esc_html( !empty($port_sec_title1) ? $port_sec_title1 : 'Our Featured Projects' ).'</h2>'; 
                echo '<p class="portfo_subheading1">'.esc_html( !empty($port_sec_subtitle1) ? $port_sec_subtitle1 : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ).'</p>'; 
                ?>
                <span class="colorborder"></span>
            </div>
            <!-- text-title ends here -->
            <div class="porfolio-contents">
                <div class="portfolio-filter">
                    <ul class="filters">
                        <li class="filter active" data-filter="*"><a href="#">All</a></li>
                        <?php
                        $all_cat = get_theme_mod( 'portfo_cat1' );
                        if( !empty($all_cat) ):
                            foreach ($all_cat as $key => $value) {
                                $cat_name = get_term_by( 'id', $value, 'category' );
                                echo !empty($cat_name) ? '<li class="filter" data-filter=".'.esc_html($cat_name->slug).'"><a href="#">'.esc_html($cat_name->name).'</a></li>' : '';
                            }
                        endif;
                        ?>
                    </ul>
                </div>    
                <div id="isotope-grid" class="grid" style="position: relative; height: 256px;">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'cat' => $all_cat,
                        'ignore_sticky_posts' => 1,
                    );
                    $all_posts = new WP_Query( $args );
                    if( $all_posts->have_posts() ): ?>
                    <?php
                    while( $all_posts->have_posts() ): $all_posts->the_post(); 
                        global $post;
                        $post_cat = wp_get_post_terms( $post->ID, 'category' );
                        ?>
                        <div class="grid-item col-md-4 col-sm-4 col-xs-12 <?php echo esc_attr( $post_cat[0]->slug ); ?>" style="position: absolute; left: 0px; top: 0px;">
                            <div class="single-grid-item">
                                <?php 
                                if( has_post_thumbnail() ){
                                    the_post_thumbnail('fire_blog_wed_content');
                                }
                                ?>
                                <div class="item-hover">
                                    <h6><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h6>
                                    <a href="<?php echo esc_url(get_term_link( $post_cat[0]->term_id ));?>"><?php echo esc_html( $post_cat[0]->name );?></a>
                                </div>                                
                            </div>
                        </div>  
                        <?php 
                    endwhile;
                    wp_reset_postdata();
                    endif;
                    ?> 
                </div>                              
            </div>
        <!-- porfolio-contents ends here -->    
        </div>
    </div>
</section><!--  end portfolio section -->