var $ = jQuery.noConflict();
$(document).ready(function(){
    $('.mobilemenu-icon, #white-overlay').click(function () {
        $('.mobilemenu-icon').toggleClass('open');
        $('#white-overlay,#menu').toggleClass('m-menu-active');
    });
    $(document).on("keypress", ".numonly", function(event) {
        if (event.which > 31 && (event.which < 48 || event.which > 57)) {
            event.preventDefault();
        }
    });
    $('.slideshow').slick({
      dots: false,
      arrows:false,
      slidesToShow: 1,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $('.proj-hght-slideshow').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: $("#prvarrow"),
        nextArrow: $("#nxtarrow"),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3
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
      $('.proj-hg-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
        prevArrow: $("#prvarrow1"),
        nextArrow: $("#nxtarrow1"),
        responsive: [
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
      if($('.gall-slider').length){
        $('.gall-slider').slick({
            dots: false,
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            arrows: true,
            // autoplay: true,
            // autoplaySpeed: 2000,
            prevArrow: $("#prvarrow2"),
            nextArrow: $("#nxtarrow2"),
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    };
   // $('form.filter select').on('change', function() {
       $(document).on('click', '.proj-filter ul li a', function(){
        var filterClass = '.' + $(this).data('filter');
        $('.proj-filter ul li a').removeClass('active');
        $(this).toggleClass('active');
        //$('.filter-class').text(filterClass);
        $('.gall-slider').slick('slickUnfilter');
        $('.gall-slider').slick('slickFilter', filterClass);
      });
      $('.enquirynow-btn a').click(function(){
        $('.popup-enquirynow-block').toggleClass('active');
      });
      $('#close_in_popup').click(function(){
        $('.popup-enquirynow-block').removeClass('active');
      });
      // $('.tel-block').click(function(){
      //   $(this).toggleClass('active');
      // });
      $(document).on('click', '.call-holder', function(){
        if($('.call-holder').hasClass('active')){
            $('.call-holder').removeClass('active');
        }else{
            $('.call-holder').addClass('active');
        }
    });
      $(document).on('click', '.app-btn, #close-app-popup, #overlay_frm', function(){
        if($('body').hasClass('prc_active')){
            $('body').removeClass('prc_active');
            $('.price_frm_popup').fadeOut(300);
        }else{
            $('body').addClass('prc_active');
            $('.price_frm_popup').fadeIn(300);
        }
    });
      $('#menu ul li a.scrolllink').on('click', function (e) {
        // e.preventDefault();
        var target = this.hash,
            $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top - 0
        }, 900, 'swing', function () {
        });
        return false;
    });
    $("#mobile,#phone1,#phone2").CcPicker({
      dataUrl:"data.json",
      countryCode:"in"
    });
});

$(window).load(function(){
    $('#searchform').submit(function(){
        if($('#s').val() == ''){
            return false;
        }
    }); 
});

var cachedWidth = $(window).width();
$(window).resize(function(){
    var newWidth1 = $(window).width();
    if(newWidth1 !== cachedWidth){
        if (window.innerWidth <= 1024) {
            $('.mobilemenu-icon').removeClass('open');
            $('#white-overlay').removeClass('m-menu-active');
        } else if (window.innerWidth >= 1024){
            $('#menu').css('display','block');
            $('#white-overlay').removeClass('m-menu-active');
        }
        cachedWidth = newWidth1;
    }
});
