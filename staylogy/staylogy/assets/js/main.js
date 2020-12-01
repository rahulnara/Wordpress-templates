var $ = jQuery.noConflict();
$(document).ready(function(){
    /*if($('.key-features-slideshow').length){
        $('.key-features-slideshow').slick({
            dots:false,
            arrows:true,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 4000,
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 4,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 3,
                        dots: true,
                        arrows: false
                    }
                }
            ]
        });
    };*/

    $('#usps-slider').slick({
        dots: true,
        infinite: false,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
        arrows:false,
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 5,
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 3
            }
          },
          {
            breakpoint: 599,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
      $('#stl-feat-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        prevArrow: '#prevarrow',
        nextArrow: '#nextarrow',
        responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
      $('.stl-fam-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
      $('.stl-perf-hm-data-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        fade: true,
        asNavFor: '.stl-perf-hm-img-slider',
        prevArrow: '#prevarrow1',
        nextArrow: '#nextarrow1',
      });
      $('.stl-perf-hm-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.stl-perf-hm-data-slider',
        dots: false,
        fade: true,
      });
      $(window).scroll(function () {
        if ($(window).scrollTop() >= 50) {
            $('body').addClass('fixed');
        } else {
            $('body').removeClass('fixed');
        }   
    });

    $('.mobilemenu-icon, #white-overlay').click(function () {
        $('.mobilemenu-icon').toggleClass('open');
        $('#white-overlay,#menu').toggleClass('m-menu-active');
    });

    $(document).on("mouseover",'.wpcf7-not-valid-tip', function(){
        $(this).fadeOut(100);
    });
    $('.inputbox').on("focus", function(){
        $(this).siblings('.wpcf7-not-valid-tip').fadeOut(100);
    });

    $(document).on("keypress", ".numonly", function(event) {
        if (event.which > 31 && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });

});

$(window).load(function(){

});

$(window).resize(function(){

});

$.fn.equalHeights = function(){
    var max_height = 0;
    $(this).each(function(){
        max_height = Math.max($(this).height(), max_height);
    });
    $(this).each(function(){
        $(this).height(max_height);
    });
 };

function eqHeightElements(){
    if($('.eqHeight1').length &&  window.innerWidth > 899){
        $('.eqHeight1').equalHeights();
    }
}