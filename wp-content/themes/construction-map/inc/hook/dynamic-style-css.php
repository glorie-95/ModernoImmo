<?php
/**
 * Dynamic css
 *
 * @package themesmake Themes
 * @subpackage themesmake construction
 *
 * @param null
 * @return void
 *
 */
if ( !function_exists('construction_map_dynamic_css') ):
    function construction_map_dynamic_css(){

        $construction_map_top_header_color = esc_attr( construction_map_get_option('construction_map_top_header_background_color') );

        $construction_map_top_footer_color = esc_attr( construction_map_get_option('construction_map_top_footer_background_color') );


        $construction_map_primary_color = esc_attr( construction_map_get_option('construction_map_primary_color') );
        
        $construction_map_bottom_footer_color = esc_attr( construction_map_get_option('construction_map_bottom_footer_background_color') );




        $custom_css = '';


        /*====================Dynamic Css =====================*/
        $custom_css .= ".top-header{
         background: " . $construction_map_top_header_color . ";}
    ";

        $custom_css .= ".footer-sec{
         background-color: " . $construction_map_top_footer_color . ";}
    ";

            $custom_css .= " .sec-title h1 ,.service-item .inner:hover, .service-icon .fa, .client-comment h2,.service-item .inner:hover,.client-comment p::before, .client-comment p::after,.single-post-text li a i, .widget a:hover::before, .widget li:hover::before, .sidebar ul li a:hover,.main-menu ul li a:hover, li.current-menu-item > a, li.current-menu-parent > a, li.current_page_parent > a, li.current_page_ancestor > a, .sec-title h1, .service-item .inner:hover, .service-icon .fa, .client-comment h2, .service-item .inner:hover, .client-comment p::before, .client-comment p::after, .single-post-text li a i, .widget a:hover, .widget a:hover::before, .widget li:hover::before, .sidebar ul li a:hover, .main-menu ul li a:hover, li.current-menu-item > a, li.current-menu-parent > a, li.current_page_parent > a, li.current_page_ancestor > a,.widget_archive a, .widget_categories a, .widget_recent_entries a, .widget_meta a, .widget_recent_comments li, .widget_rss li, .widget_pages li, .widget_nav_menu li, .widget_product_categories a,.widget_archive a::before, .widget_categories a::before, .widget_recent_entries a::before, .widget_meta a::before, .widget_recent_comments li::before, .widget_rss li:before, .widget_pages li:before, .widget_nav_menu li:before, .widget_product_categories a:before{
    
           color: " . $construction_map_primary_color . ";}
    ";

        $custom_css .= "  a.button.product_type_variable.add_to_cart_button, a.button.product_type_simple.add_to_cart_button.ajax_add_to_cart ,.posts-navigation .nav-previous, .posts-navigation .nav-next
    
 {
    
           background-color: " . $construction_map_primary_color . ";}
           
    ";
        $custom_css .= ".slider-text li:last-child a, .call-to-action-text a.btn,.service i, .why-choose i, .service i,.all-testimonial .owl-controls .owl-prev i, .all-testimonial .owl-controls .owl-next i, .btn.price_btn, .service-item .inner:hover ,.wpcf7 .wpcf7-submit,.posts-navigation .nav-previous,.post-navigation .nav-next,
.post-navigation .nav-previous{
           background: " . $construction_map_primary_color . ";}
           
    ";

	    $custom_css .= ".team-member img,.single-post img,  .all-testimonial .owl-controls .owl-next i,.all-testimonial .owl-controls .owl-prev i, .all-testimonial .owl-controls .owl-next i {
           border-color: " . $construction_map_primary_color . ";}
           
    ";
	    $custom_css .= ".client-comment img{
           border-bottom-color: " . $construction_map_primary_color . ";}

    ";

	    

        $custom_css .= ".error404 .content-area .search-form .search-submit, #scrollUp,#scrollUp:hover{
           background: " . $construction_map_primary_color . ";}
           
    ";


        $custom_css .= ".footer-bottom-sec{
           background: " . $construction_map_bottom_footer_color .'!important' .";}
           
    ";


        /*------------------------------------------------------------------------------------------------- */

        /*custom css*/


        wp_add_inline_style('construction-map-style', $custom_css);

    }
endif;
add_action('wp_enqueue_scripts', 'construction_map_dynamic_css', 99);