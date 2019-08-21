<?php 
// Hide about us service
$service_status = get_theme_mod( 'service_status' );
if( $service_status == true ){
    return;
}
?>

<section class="tg-main-section">
    <div class="container">
        <div class="sec-title text-center">
            <?php 
            $features_title = get_theme_mod( 'features_title' );
            $features_subtitle = get_theme_mod( 'features_subtitle' );
            echo '<h2 class="features_title">'.esc_html( !empty($features_title) ? $features_title : 'Our Best Services' ).'</h2>'; 
            echo '<p class="features_subtitle">'.esc_html( !empty($features_subtitle) ? $features_subtitle : 'Sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat' ).'</p>'; 
            ?>
            <span class="colorborder"></span>
        </div>
        <?php
        $service_icon = get_theme_mod( 'blog_features' );
        if( !empty($service_icon) ): ?>
            <div class="row">
                <?php
                foreach ($service_icon as $key => $value):
                    ?>
                    <div class="col-sm-4 tg-service services-content tg-haslayout">
                        <div class="tg-border-topleft tg-haslayout">
                            <div class="tg-displaytable">
                                <div class="tg-displaytablecell">
                                    <span class="fa fa-<?php echo esc_attr( $value['service_icon'] ); ?>"></span>
                                    <h3><?php echo esc_html( $value['service_title'] ); ?></h3>
                                    <div class="tg-description">
                                        <p><?php echo esc_html( $value['service_desc'] ); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php 
                endforeach; ?>
            </div>
        <?php endif;?>
    </div>
</section>