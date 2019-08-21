<?php

$action_page2_status = get_theme_mod( 'action_page2_status' );
if( $action_page2_status == true ){
    return;
}

$action_page_id2 = get_theme_mod( 'action_page2' );
$page22 = get_post( $action_page_id2 );
$page_title22 = !empty($page22) ? $page22->post_title : '';
$page_content22 = !empty($page22) ? $page22->post_content : '';
$page_link22 = !empty($page22) ? $page22->ID : '';
$button_label22 = get_theme_mod( 'button_label22' );

$action_no_of_words = get_theme_mod( 'action_no_of_words' , 30 );
?>
<section class="info-section"><!-- info section start -->
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <h3><?php echo esc_html( $page_title22 ); ?></h3>
            </div>
            <div class="col-sm-7">
                <p><?php echo esc_html( wp_trim_words( $page_content22, $action_no_of_words, '...' ) ); ?>
                </p>
                <a class="btn btn-primary page_link22" href="<?php echo esc_url( get_permalink( $page_link22 ) ); ?>"><?php echo esc_html( !empty( $button_label22 ) ? $button_label22 : 'Read More' ); ?></a>
            </div>
        </div>
    </div>
</section><!-- info section end -->