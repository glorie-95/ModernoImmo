<?php
/**
 * @package somalite
 */

?>

<footer>
    <?php
        if(is_active_sidebar('footer-column1') || is_active_sidebar('footer-column2') || is_active_sidebar('footer-column3') || is_active_sidebar('footer-column4')){
            ?>
                <div id="soma-footer-section">
                    <div class="container">
                        <div class="row">                
                           <div class="col-md-3 col-sm-6">
                                <div class="section wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo 1/4; ?>s">
                                    <?php
                                        if(is_active_sidebar('footer-column1')){
                                            dynamic_sidebar( 'footer-column1' );
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="section wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo 2/4; ?>s">
                                    <?php
                                        if(is_active_sidebar('footer-column2')){
                                            dynamic_sidebar( 'footer-column2' );
                                        }
                                    ?>
                                </div>
                             </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="section wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo 3/4; ?>s">
                                    <?php
                                        if(is_active_sidebar('footer-column3')){
                                            dynamic_sidebar( 'footer-column3' );
                                        }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="section wow fadeInUp" data-wow-duration="1s" data-wow-delay="<?php echo 4/4; ?>s">
                                    <?php
                                        if(is_active_sidebar('footer-column4')){
                                            dynamic_sidebar( 'footer-column4' );
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php        
        }
    ?>    
    <div id="soma-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <p class="soma-copyright wow flipInX" data-wow-duration="2s" data-wow-delay="1s"><?php echo esc_attr(get_theme_mod( 'sm_copyright_text',__('Copyrights Soma Lite. All Rights Reserved','somalite'))) ; ?><span><?php _e(' | Theme by ','somalite') ?><a href="https://www.spiraclethemes.com/" target="_blank"><?php _e('Spiraclethemes','somalite') ?></a></span></p>
                    </div>
                </div>                
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
