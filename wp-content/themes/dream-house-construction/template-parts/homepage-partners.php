<?php 
$company_partners_status = get_theme_mod( 'company_partners_status' );
if( $company_partners_status == true ){
    return;
}
?>
<section class="partner">
    <div class="container">
        <div class="sec-title text-center">
            <?php
            $download_title = get_theme_mod( 'download_title' );
            $download_subtitle = get_theme_mod( 'download_subtitle' );
            ?>
            <h2 class="download_heading"><?php echo esc_html( !empty($download_title) ? $download_title : 'Our Partners' ); ?></h2>
            <p class="download_subheading"><?php echo esc_html( !empty($download_subtitle) ? $download_subtitle : 'Lorem Ipsum available, but the majority have suffered alteration in some form, by injected' ); ?></p>
            <span class="colorborder"></span>
        </div>
        <?php
        $partner_cat = get_theme_mod( 'partner_cat' );
        $argument = array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => -1,
            'cat' => $partner_cat,
            'ignore_sticky_posts' => 1,
        );
        $partner_post = new WP_Query( $argument );
        if( $partner_post->have_posts() ): ?>
        <div class="row slider partners">
            <?php
            while( $partner_post->have_posts() ): $partner_post->the_post();                
                if( has_post_thumbnail() ){
                    echo '<div class="col-sm-2">';
                    the_post_thumbnail();
                    echo '</div>';
                } 
            endwhile;?>
        </div>
        <?php endif; ?>
    </div> 
</section>  