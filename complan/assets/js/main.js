var $ = jQuery.noConflict();
$(document).ready(function(){
    $('#white_overlay,.mobilemenu-icon').click(function () {
        $('.mobilemenu-icon').toggleClass('open');
        $('#white_overlay,#menu').toggleClass('m_menu_active');
    });
    $('.vit-banner-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    $('.happy-clild-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 2000,
    });
    $('.hm-blog-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    $('.happy-child-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000
    });
    $('.testimonials-slider').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        prevArrow: $("#prvarrow"),
        nextArrow: $("#nxtarrow"),
    });
    $(document).on('click', '.blog-tab-header li a', function () {
        $('.blog-tab-header li a').removeClass('active');
        $(this).addClass('active');
        $('.blog-tab-panel').hide();
        $('#' + $(this).data('ref')).fadeIn(800);
    });
});

$(window).scroll(function () {
    if ($(window).scrollTop() >= 50) {
        $('body').addClass('fixed');
    } else {
        $('body').removeClass('fixed');
    }
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
        if (window.innerWidth <= 1200) {
            $('.mobilemenu-icon').removeClass('open');
        } else if (window.innerWidth >= 1200){
            $('#menu').css('display','inline-block');
            $('.mobilemenu-icon').addClass('open');
        }
        cachedWidth = newWidth1;
    }
});