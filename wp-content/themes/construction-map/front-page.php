<?php
get_header();
$construction_map_hide_front_page_content = construction_map_get_option('construction_map_front_page_hide_option');
if(!is_home()) {
    $construction_map_slider_section_option = construction_map_get_option('construction_map_homepage_slider_option');
    if ($construction_map_slider_section_option != 'hide') {

       ?>

                <div class="slider ">
                    <div class="all-slide owl-item  owl-carousel">

        <?php
        $all_slider = wp_kses_post(get_theme_mod('construction_map_banner_all_sliders'));
        if (!empty($all_slider)) {
            $banner_slider = json_decode($all_slider);
            foreach ($banner_slider as $slider) {
                $slider_page_id = $slider->selectpage;
                if (!empty($slider_page_id)) {
                    $slider_page = new WP_Query('page_id=' . $slider_page_id);
                    if ($slider_page->have_posts()) {
                        while ($slider_page->have_posts()) {
                            $slider_page->the_post();

                            ?>

                                    <div class="single-slide">
			                            <?php if ( has_post_thumbnail() ) {
				                            $image_id  = get_post_thumbnail_id();
				                            $image_url = wp_get_attachment_image_src( $image_id, 'full', true ); ?>
                                            <img src="<?php echo esc_url( $image_url[0] ); ?>" class="img-responsive"
                                                 alt="<?php the_title_attribute(); ?>">
			                            <?php } ?>
                                       <div class="slider-overlay"></div>
                                        <div class="slider-text">
                                            <h1><?php the_title() ?></h1>
                                            <p> <?php
					                            if ( has_excerpt() ) {
						                            the_excerpt();
					                            }
					                            else{
					                            ?>
                                            <p> <?php echo esc_html( wp_trim_words( get_the_content(), 15 ) ); ?></p>
				                            <?php
				                            } ?>

                                            <ul>
                                                <li>
                                                    <a href="<?php the_permalink() ?>"><?php esc_html_e( 'Know More', 'construction-map' ); ?></a>
                                                </li>

                                                <li>
                                                    <?php
                                                    if (!empty($slider->button_text)) { ?>
                                                    <a href="<?php echo esc_url($slider->button_url); ?>"><?php echo esc_html($slider->button_text); ?>
                                                        </a>
                                                        <?php } ?> </li>
                                            </ul>
                                        </div>
                                    </div>


                        <?php }
                        wp_reset_postdata();
                    }
                }
            }
        } ?>


                    </div>
                </div>
                <?php
            }




    ?>
    <!-- End Featured Slider -->

    <!-- Start Home Page widget Area -->
    <div id="home-page-widget-area" class="widget">

        <?php dynamic_sidebar('homepage_widgets'); ?>

    </div>
    <!-- End Home Page widget Area -->


    <?php
   }

    if ('posts' == get_option('show_on_front')) {

      include(get_home_template());
   } else {
     if (1 != $construction_map_hide_front_page_content) {
        include(get_page_template());


    }
    }
get_footer();
?>

