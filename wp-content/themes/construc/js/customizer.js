/**
 * File customizer.js.
 *
 * Theme Customizer enhancements for a better user experience.
 *
 * Contains handlers to make Theme Customizer preview reload changes asynchronously.
 */

(function ($) {

    // Site title and description.
    wp.customize('blogname', function (value) {
        value.bind(function (to) {
            $('.site-title a').text(to);
        });
    });

    wp.customize('blogdescription', function (value) {
        value.bind(function (to) {
            $('.site-description').text(to);
        });
    });


    wp.customize('topbar_background_color', function (value) {
        value.bind(function (to) {
            $('body .site .topbar-area').css('background-color', to);
        });
    });
    wp.customize('topbar_icon_color', function (value) {
        value.bind(function (to) {
            $('body .site .single-topbar p span, body .site .topbar-social a').css('color', to);
        });
    });
    wp.customize('topbar_text_color', function (value) {
        value.bind(function (to) {
            $('body .site .topbar-area').css('color', to);
        });
    });
    wp.customize('logo_menu_background_color', function (value) {
        value.bind(function (to) {
            $('body .site .menu-area').css('background-color', to);
        });
    });
    wp.customize('menu_link_color', function (value) {
        value.bind(function (to) {
            $('body .site #cssmenu>ul>li>a').css('color', to);
        });
    });

    wp.customize('menu_active_hover_color', function (value) {
        value.bind(function (to) {
            $('body .site #cssmenu>ul>li>a:hover, #cssmenu>ul>li.current_page_item>a').css('color', to);
        });
    });
    wp.customize('footer_background_color', function (value) {
        value.bind(function (to) {
            $('body .site .footer-area').css('background-color', to);
        });
    });
    wp.customize('footer_widget_title_color', function (value) {
        value.bind(function (to) {
            $('body .site h2.widget-title').css('color', to);
        });
    }); 
    wp.customize('footer_widget_text_color', function (value) {
        value.bind(function (to) {
            $('body .site .widget p, body .site .textwidget *').css('color', to);
            $('body .site .business-hour ul li').css('border-color', to);
        });
    });

    wp.customize('footer_widget_icon_color', function (value) {
        value.bind(function (to) {
            $('body .site .widget ul li .addres-icon').css('color', to);
        });
    });

    wp.customize('footer_widget_link_color', function (value) {
        value.bind(function (to) {
            $('body .site .footer-area ul li a').css('color', to);
        });
    });

    wp.customize('footer_widget_link_hover_active_color', function (value) {
        value.bind(function (to) {
            $('body .site .footer-area ul li a:hover, .footer-area ul li.current-menu-item a').css('color', to);
        });
    });



    // Header text color.
    wp.customize('header_textcolor', function (value) {
        value.bind(function (to) {
            if ('blank' === to) {
                $('.site-title, .site-description').css({
                    'clip': 'rect(1px, 1px, 1px, 1px)',
                    'position': 'absolute'
                });
            } else {
                $('.site-title, .site-description').css({
                    'clip': 'auto',
                    'position': 'relative'
                });
                $('.site-title a, .site-description').css({
                    'color': to
                });
            }
        });
    });



})(jQuery);