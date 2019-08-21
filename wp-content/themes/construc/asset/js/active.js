(function($) {
    'use strict';
    if ($.fn.menumaker) {
        $("#cssmenu").menumaker({
            title: "Menu",
            breakpoint: 991,
            format: "multitoggle"
        });
    }

    $('.blog-slider-active').owlCarousel({
        items: 3,
        nav: true,
        autoplay: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        smartSpeed: 1000,
        margin: 30,
        rewind: true,
        responsive : {
                
                0 : {
                    items: 1,
                },
                // breakpoint from 480 up
                480 : {
                   items: 1,
                   margin: 15
                },
                // breakpoint from 768 up
                768 : {
                   items: 2,
                },
                992 : {
                   items: 3,
                }
            }

    });

    // 3. Style a DIV and chage cursor color:
    jQuery(window).on('scroll', function() {
        var topspace = $(this).scrollTop();
        if (topspace > 1) {
            $('.menu-area').addClass("sticky-menu");
        } else {
            $('.menu-area').removeClass("sticky-menu");
        }
        if (topspace > 300) {
            $('.scrooltotop').css('display', 'block');
        }else{
            $('.scrooltotop').css('display', 'none');
        }
    });
    // jQuery('.testimonial-section ').append('<div class="foroverlay"></div>');
    jQuery(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() {
            $(this).remove();
        });
        $('.scrooltotop').css('display', 'none');

    });
    $('.scrooltotop').click(function(){ 
        $('html,body').animate({ scrollTop: 0 }, 'slow');
        return false; 
    });

  $('.searchbtn').on('click', function(){
    $('.popup-search-form').addClass('searchopen');
  });
  $('.closebtn').on('click', function(){
    $('.popup-search-form').removeClass('searchopen');
  });


})(jQuery);