/**
 * Conica Theme Custom Functionality
 *
 */
( function( $ ) {
    
    jQuery( document ).ready( function() {
        
        // Add button to sub-menu item to show nested pages / Only used on mobile
        $( '.main-navigation li.page_item_has_children, .main-navigation li.menu-item-has-children' ).prepend( '<span class="menu-dropdown-btn"><i class="fa fa-angle-down"></i></span>' );
        // Mobile nav button functionality
        $( '.menu-dropdown-btn' ).bind( 'click', function() {
            $(this).parent().toggleClass( 'open-page-item' );
        });
        // The menu button
        $( '.header-menu-button' ).click( function(e){
            $( 'body' ).toggleClass( 'show-main-menu' );
        });
        $( '.main-menu-close' ).click( function(e){
            $( '.header-menu-button' ).click();
        });
        
        // Search Show / Hide
        $(".search-btn").toggle(function(){
            $(".search-block").animate( { bottom: '-=70' }, 150 );
            $(".search-block .search-field").focus();
        },function(){
            $(".search-block").animate( { bottom: '+=70' }, 150 );
        });
        
        // Scroll To Top Button Functionality
        $('.scroll-to-top').bind('click', function() {
            $('html, body').animate( { scrollTop: 0 }, 800 );
        });
        $(window).scroll(function(){
            if ($(this).scrollTop() > 400) {
                $('.scroll-to-top').fadeIn();
            } else {
                $('.scroll-to-top').fadeOut();
            }
        });
		
    });
    
    $(window).resize(function () {
        
        
        
    }).resize();
    
    $(window).load(function() {
        
        dustlandexpress_home_slider();
        dustlandexpress_blog_list_carousel();
        
    });
    
    function dustlandexpress_blog_list_carousel() {
        $('.post-loop-images-carousel-wrapper').each(function(c) {
            var this_blog_carousel = $(this);
            var this_blog_carousel_id = 'post-loop-images-carousel-id-'+c;
            this_blog_carousel.attr('id', this_blog_carousel_id);
            $('#'+this_blog_carousel_id+' .post-loop-images-carousel').carouFredSel({
                responsive: true,
                circular: false,
                width: 580,
                height: "variable",
                items: {
                    visible: 1,
                    width: 580,
                    height: 'variable'
                },
                onCreate: function(items) {
                    $('#'+this_blog_carousel_id).removeClass('post-loop-images-carousel-wrapper-remove');
                    $('#'+this_blog_carousel_id+' .post-loop-images-carousel').removeClass('post-loop-images-carousel-remove');
                },
                scroll: 500,
                auto: false,
                prev: '#'+this_blog_carousel_id+' .post-loop-images-prev',
                next: '#'+this_blog_carousel_id+' .post-loop-images-next'
            });
        });
    }
    
    function dustlandexpress_home_slider() {
        // var home_slider_auto = $('.home-slider-wrap').data('auto');
        // var home_slider_effect = $('.home-slider-wrap').data('slideffect');
        // var home_slider_circular = $('.home-slider-wrap').data('circular');
        // var home_slider_infinite = $('.home-slider-wrap').data('infinite');
        
        $(".home-slider").carouFredSel({
            responsive: true,
            circular: true,
            infinite: false,
            width: 1200,
            height: 'variable',
            items: {
                visible: 1,
                width: 1200,
                height: 'variable'
            },
            onCreate: function(items) {
                $(".home-slider-wrap").removeClass("home-slider-remove");
            },
            scroll: {
                fx: 'uncover-fade',
                duration: 450
            },
            auto: 4500,
            pagination: '.home-slider-pager',
            prev: ".home-slider-prev",
            next: ".home-slider-next"
        });
    }
    
} )( jQuery );