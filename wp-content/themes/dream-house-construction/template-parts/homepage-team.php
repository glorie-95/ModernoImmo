<?php
$our_team_status = get_theme_mod( 'our_team_status' );
if( $our_team_status == true ){
    return;
}
?>
<section class="team-member"><!-- team member start -->
    <div class="container">
        <!-- text-title starts here --> 
        <div class="sec-title text-center">
            <?php 
            $team_title = get_theme_mod( 'team_title' );
            $team_subtitle = get_theme_mod( 'team_subtitle' );
            echo '<h2 class="team_heading">'.esc_html( !empty($team_title) ? $team_title : 'OUR TEAM' ).'</h2>'; 
            echo '<p class="team_subheading">'.esc_html( !empty($team_subtitle) ? $team_subtitle : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' ).'</p>'; 
            ?>
            <span class="colorborder"></span>
        </div>
        <?php
        $team_cat = get_theme_mod( 'our_team_cat' );
        $aug = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            // 'ignore_sticky_posts' => 1,
            'posts_per_page' => 3,
            'cat' => !empty( $team_cat ) ? absint( $team_cat ) : 1,
        );
        $team1 = new WP_Query( $aug );
        if( $team1->have_posts() ):
            ?>
            <!-- text-title ends here -->
            <div class="row">
                <?php
                while( $team1->have_posts() ): $team1->the_post();
                    $employee_post = get_post_meta( $post->ID, 'company_position', true );
                    ?>
                    <div class="col-sm-4">
                        <div class="team-item">
                            <div class="team-img">
                                <?php 
                                if( has_post_thumbnail() ){
                                    the_post_thumbnail( 'fire_blog_our_team' ); 
                                } else { ?>
                                    <img src="<?php echo esc_url( get_template_directory_uri() . '/images/350x350_placeholder.png' ); ?>">
                                    <?php
                                } ?>
                                <div class="normal-text">
                                    <h3 class="team-name"><?php the_title(); ?></h3>
                                    <?php 
                                    echo !empty( $employee_post ) ? '<span class="subtitle">' . esc_html( $employee_post ) . '</span>' : ''; ?>
                                </div>
                            </div>
                            <div class="team-content">
                                <div class="overly-border"></div>
                                <div class="display-table">
                                    <div class="display-table-cell">
                                        <h3 class="team-name">
                                            <a href="javascript:void(0)" style="pointer-events: none;">
                                                <?php the_title(); ?>       
                                            </a>
                                        </h3>
                                        <span class="team-title">
                                            <?php echo esc_html( $employee_post ); ?>
                                        </span>
                                        <p class="team-desc">
                                            <?php 
                                            echo esc_html( wp_trim_words( get_the_content(), 20, '...' ) ); ?>
                                        </p>
                                    </div>
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
</section><!-- team member end -->