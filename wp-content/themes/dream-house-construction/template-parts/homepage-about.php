<?php

// Hide about us section
$hide_about_us = get_theme_mod( 'about_us_status' );
if( $hide_about_us == true ){
    return;
}

$about_page_id = get_theme_mod( 'about_us_page' );
$button_label = get_theme_mod( 'button_label', 'Read More' );
$page = get_post( $about_page_id );
$page_title = !empty($page) ? $page->post_title : '';
$page_content = !empty($page) ? sanitize_text_field( $page->post_content ) : '';
$page_link = !empty($page) ? get_permalink( $page->ID ) : '';
$page_thumb_url = !empty($page) ? get_the_post_thumbnail_url( $page->ID, 'fire_blog_contact_section' ) : '';

$no_of_words = get_theme_mod( 'about_us_no_of_words' , 90 );

?>
<section id="about-section">
    <div class="container">
        <div class="about-section-contents">
            <?php if( !empty($page_thumb_url) ): ?>
            <div class="col-md-6">  
                <div class="about-us-contents-img">
                    <img src="<?php echo esc_url( $page_thumb_url ); ?>">
                </div>
            <!-- end about-us-contents -->                
            </div>
            <?php endif;?>
            <div class="<?php echo esc_attr( !empty($page_thumb_url) ? 'col-md-6' : 'col-md-12' ); ?>">   
                <div class="about-us-contents wow fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">
                    <h2><?php echo esc_html( $page_title ); ?></h2>
                    <p><?php 
                    echo esc_html( 
                    	wp_trim_words( 
                    		$page_content, 
                    		absint( $no_of_words ), 
                    		'...'
                    	) 
                    ); ?></p>
                    <a class="btn btn-primary page_link" href="<?php echo esc_url( $page_link ); ?>"><?php echo esc_html( $button_label ? $button_label : 'Read More' ); ?></a>
                </div>
            <!-- end about-us-contents -->                            
            </div>
        </div>
        <!-- end about-section-contents -->
     </div>   
</section><!-- end about section -->