var $ = jQuery.noConflict();
$(document).ready(function(){
    $('.aqa-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots:true,
        arrows:false
    });
    $('.trq-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots:true,
        arrows:false
    });
    $(document).on('click', '.fgb-tab-header li a.tabanch', function () {
        $('.fgb-tab-header li a.tabanch').removeClass('active');
        $(this).addClass('active');
        $('.fgb-tab-panel').hide();
        $('#' + $(this).data('ref')).fadeIn(800, function(){
            eq_height_setup();
        });
        $('body').attr('class', '');
        $('body').addClass($(this).data('bodyclass'));
    });
    if ($(".prof-tb .prof-heading").length && window.innerWidth < 767) {
        $(document).on("click", ".prof-tb .prof-heading", function () {
            if ($(this).siblings(".ca-info-box").is(":visible")) {
                $(this).siblings(".ca-info-box").slideUp(300);
                $(this).removeClass("active");
            } else {
                $(".ca-info-box").slideUp(300);
                $(".prof-tb .prof-heading").removeClass("active");
                $(this).siblings(".ca-info-box").slideDown(300);
                $(this).addClass("active");
            }
        });
    }
    // $('.social-media a.plus-icon').click(function(){
    //     $('.social-media').toggleClass('active');
    // });
});

$(window).load(function(){
    $('#searchform').submit(function(){
        if($('#s').val() == ''){
            return false;
        }
    }); 
    eq_height_setup();
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

function eq_height_setup(){
    if(window.innerWidth > 380){
      if($('.eq_height_1').length){
        //$('.eq_height_1').css('height', 'auto');
        $('.eq_height_1').equalHeights();
      }
    }
    if(window.innerWidth > 767){
        if($('.eq_height_2').length){
            $('.eq_height_2').css('height', 'auto');
            $('.eq_height_2').equalHeights();
        }
      }
      if(window.innerWidth > 1024){
        if($('.eq_height_3').length){
            $('.eq_height_3').css('height', 'auto');
            $('.eq_height_3').equalHeights();
        }
      }
  }
  

var cachedWidth = $(window).width();
$(window).resize(function(){
    var newWidth1 = $(window).width();
    if(newWidth1 !== cachedWidth){
        if (window.innerWidth <= 1024) {
            $('.mobilemenu-icon').removeClass('open');
        } else if (window.innerWidth >= 1024){
            $('#menu').css('display','block');
        }
        eq_height_setup();
        cachedWidth = newWidth1;
    }
});
