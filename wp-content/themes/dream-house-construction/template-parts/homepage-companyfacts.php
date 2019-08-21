<?php

$fun_fact_section_status = get_theme_mod( 'fun_fact_section_status' );
if( $fun_fact_section_status == true ){
    return;
}

$show_first = get_theme_mod( 'show_first' );
$show_second = get_theme_mod( 'show_second' );
$show_third = get_theme_mod( 'show_third' );
$show_fourth = get_theme_mod( 'show_fourth' );
$sum = 0;
$classes = '';
$sum = $show_first + $show_second + $show_third + $show_fourth;
switch ( $sum ) {
    case '4':
        $classes = 'col-md-3 col-sm-3';
        break;
    
    case '3':
        $classes = 'col-md-4 col-sm-4';
        break;

    case '2':
        $classes = 'col-md-6 col-sm-6';
        break;
    case '1':
        $classes = 'col-md-12 col-sm-12';
        break;

    default:
        # code...
        break;
}
?>
<section id="fun-fact-section"><!-- fun fact section start -->
    <div class="container">
        <div class="row">

            <div class="fun-fact-contents">

                <?php if( $show_first ): ?>
                <div class="<?php echo esc_attr( $classes ); ?>">
                    <div class="single-fun-fact">
                        <i class="fa fa-<?php echo esc_attr(get_theme_mod( 'fun_fact_icon1' )); ?> "></i>
                        <h6 class="fact_title"><?php echo esc_html(get_theme_mod( 'fun_fact_title1' )); ?></h6>
                        <span class="counter fact_num"><?php echo esc_html(get_theme_mod( 'fun_fact_num1' )); ?></span> 
                    </div>
                    <!-- end single fun fact --> 
                </div>
                <?php endif;?>
                <?php if( $show_second ): ?>
                <div class="<?php echo esc_attr( $classes ); ?>">
                    <div class="single-fun-fact">
                        <i class="fa fa-<?php echo esc_attr(get_theme_mod( 'fun_fact_icon2' )); ?>"></i>
                        <h6 class="fact_title1"><?php echo esc_html(get_theme_mod( 'fun_fact_title2' )); ?></h6>
                        <span class="counter fact_num1"><?php echo esc_html(get_theme_mod( 'fun_fact_num2' )); ?></span>    
                    </div>
                    <!-- end single fun fact --> 
                </div>
                <?php endif;?>
                <?php if( $show_third ): ?>
                <div class="<?php echo esc_attr( $classes ); ?>"> 
                    <div class="single-fun-fact">
                        <i class="fa fa-<?php echo esc_attr(get_theme_mod( 'fun_fact_icon3' )); ?>"></i>
                        <h6 class="fact_title2"><?php echo esc_html(get_theme_mod( 'fun_fact_title3' )); ?></h6>
                        <span class="counter fact_num2"><?php echo esc_html(get_theme_mod( 'fun_fact_num3' )); ?></span>   
                    </div>
                    <!-- end single fun fact --> 
                </div>
                <?php endif;?>
                <?php if( $show_fourth ): ?>
                <div class="<?php echo esc_attr( $classes ); ?>">
                    <div class="single-fun-fact">
                        <i class="fa fa-<?php echo esc_attr(get_theme_mod( 'fun_fact_icon4' )); ?>"></i>
                        <h6 class="fact_title3"><?php echo esc_html(get_theme_mod( 'fun_fact_title4' )); ?></h6>
                        <span class="counter fact_num3"><?php echo esc_html(get_theme_mod( 'fun_fact_num4' )); ?></span>   
                    </div>
                    <!-- end single fun fact --> 
                </div>    
                <?php endif;?>   

            </div>
         <!-- end fun fact contentst -->                      
        </div>
    </div>
    <div class="overlay"></div>
</section><!-- fun fact section end -->