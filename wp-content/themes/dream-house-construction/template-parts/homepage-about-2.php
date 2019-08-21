<?php

$action_page_status = get_theme_mod( 'action_page_status' );
if( $action_page_status == true ){
    return;
}

$action_page_id = get_theme_mod( 'action_page' );
$page2 = get_post( $action_page_id );
$page_title2 = !empty($page2) ? $page2->post_title : '';
$page_content2 = !empty($page2) ? $page2->post_content : '';
$page_link2 = !empty($page2) ? $page2->ID : '';
$page_thumb_url2 = !empty($page2) ? get_the_post_thumbnail_url( $page2->ID, 'fire_blog_call_to_action' ) : '';
$button_label2 = get_theme_mod( 'button_label2', 'Read More' );
$button_link_label = get_theme_mod( 'button_link_label' );
$button_link = get_theme_mod( 'button_link' );
$no_of_words = get_theme_mod( 'no_of_words_about_us_extra' , 100 );
?>
<section class="new-step-section"><!-- new-step-section start -->
    <div class="container">
        <div class="row">
            <?php if( !empty($page_thumb_url2) ): ?>
            <div class="<?php echo esc_attr( !empty($page_thumb_url2) ? 'col-sm-6' : 'col-sm-12' ); ?>">
                <div class="tg-virtual-img tg-haslayout">
                    <img src="<?php echo esc_url( $page_thumb_url2 ); ?>">
                </div>
            </div>
            <?php endif;?>
            <div class="col-sm-6">
                <div class="tg-virtuallybuild">
                    <h2><?php echo esc_html( dream_house_construction_homepage_title($page_title2) ); ?></h2>
                    <p><?php echo esc_html( wp_trim_words( $page_content2, $no_of_words, '...' ) ); ?></p>
                    <div class="tg-btn-box">

                        <a class="btn btn-primary button_link_label" href="<?php echo esc_url( !empty($button_link) ? $button_link : '#'); ?>"><?php echo esc_html( !empty($button_link_label) ? $button_link_label : 'Build Now'); ?></a>

                        <a class="btn btn-primary page_link2" href="<?php echo esc_url( get_permalink( $page_link2 ) ); ?>"><?php echo esc_html( !empty($button_label2) ? $button_label2 : 'Read More' ); ?></a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="overlay"></div>
</section>