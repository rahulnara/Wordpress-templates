var $ = jQuery.noConflict();
$(document).ready(function(){
  if($('.ret-hero-slideshow').length){
    $('.ret-hero-slideshow').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 300,
      autoplay: true,
      autoplaySpeed: 3000,
      dots:false,
      arrows:false,
      responsive: [
          {
            breakpoint: 1024,
            settings: {
              arrows:true,
            }
          }
        ]
    });
  };
    greenSlider();
    //greenSlider1();
    if($('.news-slider').length){
      $('.news-slider').slick({
        dots: false,
        infinite: false,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows:false,
        responsive: [
            {
                breakpoint: 1100,
                settings: {
                  slidesToShow: 2
                }
              },
              {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 1
            }
          },
          {
            breakpoint: 599,
            settings: {
              slidesToShow: 1,
              arrows:true,
            }
          }
        ]
      });
    };

    if($('.partner-slider').length && $('.partner-slider .logoimg-bx').length > 1){
      $('.partner-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:true,
        responsive: [
              {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 599,
            settings: {
              slidesToShow: 2
            }
          },
          /*{
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
            }
          }*/
        ]
      });
    };
    if($('.bnk-slider').length && $('.bnk-slider .logoimg-bx').length > 1){
      $('.bnk-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        autoplay: true,
        autoplaySpeed: 3000,
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows:true,
        responsive: [
              {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 599,
            settings: {
              slidesToShow: 2
            }
          },
          /*{
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
            }
          }*/
        ]
      });
    };
    if($('.cnsp-slider').length){
      $('.cnsp-slider').slick({
        dots: false,
        autoplay: true,
        autoplaySpeed: 3000,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:false,
        responsive: [
              {
            breakpoint: 1024,
            settings: {
              arrows:true,
            }
          }
        ]
      });
    };
    if($('.ret-seas-slider').length){
      $('.ret-seas-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots:false,
        arrows:true,
        vertical: true,
        verticalSwiping: true,
        asNavFor: '.cp-ov-slider',
        responsive: [
            {
          breakpoint: 1024,
          settings: {
            vertical: false,
             verticalSwiping: false,
          }
        }
      ]
      });
      $('.cp-ov-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.ret-seas-slider',
        dots: false,
        arrows:false,
        centerMode: false,
        focusOnSelect: true,
        fade: true,
          cssEase: 'linear',
        // vertical: true,
        // verticalSwiping: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              vertical: false,
              verticalSwiping: false,
            }
          }
        ]
      });
    };
    if($('.thoug-img-slider').length){
      $('.thoug-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
        dots:false,
        arrows:false,
        vertical: true,
        verticalSwiping: true,
        asNavFor: '.tho-slider',
        responsive: [
            {
          breakpoint: 1024,
          settings: {
            vertical: false,
             verticalSwiping: false,
          }
        }
      ]
      });
      $('.tho-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.thoug-img-slider',
        dots: false,
        arrows:false,
        centerMode: false,
        focusOnSelect: true,
        vertical: true,
        verticalSwiping: true,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              vertical: false,
              verticalSwiping: false,
            }
          }
        ]
      });
    };
    if($('.gt-commu-slider').length){
      $('.gt-commu-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3000,
        dots:false,
        arrows:true,
        vertical: true,
        verticalSwiping: true,
        asNavFor: '.gt-com-slider',
        responsive: [
            {
          breakpoint: 1024,
          settings: {
            vertical: false,
            verticalSwiping: false,
            arrows:false,
          }
        }
      ]
      });
      $('.gt-com-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          fade: true,
          cssEase: 'linear',
          // autoplay: true,
          // autoplaySpeed: 3000,
          dots:false,
          arrows:false,
          /*vertical: true,
          verticalSwiping: true,*/
          asNavFor: '.gt-commu-slider',
          responsive: [
            {
          breakpoint: 1024,
          settings: {
            vertical: false,
            verticalSwiping: false,
            arrows:false,
          }
        }
      ]
      });
    };
    if($('.testm-slider').length){
      var $status = $('#pagingInfo4');
      var $slickElement = $('.testm-slider');

      $slickElement.on('init reInit', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.html('<span class="active-num">1</span><span class="dash">&#124;</span><span>' + slick.slideCount + '</span>');
      });
      $slickElement.on('afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $('#pagingInfo4 .active-num').text(i);
      });

      
      $('.testm-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3000,
        infinite: true,
        dots:false,
        arrows:true,
        asNavFor: '.rt-slider',
        prevArrow: $("#prvarrow3"),
        nextArrow: $("#nxtarrow3"),
        // vertical: true,
        // verticalSwiping: true,
        responsive: [
            {
          breakpoint: 1024,
          settings: {
            vertical: false,
            verticalSwiping: false,
            arrows:false,
          }
        }
      ]
      });
      $('.rt-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.testm-slider',
        dots: false,
        infinite: true,
        arrows:false,
        centerMode: false,
        focusOnSelect: true,
        fade: true,
          cssEase: 'linear',
        /*vertical: true,
        verticalSwiping: true,*/
        responsive: [
            {
          breakpoint: 1024,
          settings: {
            vertical: false,
            verticalSwiping: false,
            arrows:false,
          }
        }
      ]
      });
    };
    if($('.infra-doc-slider').length){
      var $status = $('#pagingInfo5');
      var $slickElement = $('.infra-doc-slider');
      $slickElement.on('init reInit', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.html("<span class='active-num'>1</span><span class='dash'>&#124;</span><span>" + slick.slideCount + "</span>");
        //$('#pagingInfo5 .active-num').text(i);
        console.log(i);
      });

      $slickElement.on('afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        //$status.html("<span class='active-num'>" + i + '</span><span class="dash">&#124;</span><span>' + slick.slideCount + "</span>");
        $('#pagingInfo5 .active-num').text(i);
        console.log(i);
      });

      $('.infra-doc-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        // autoplay: true,
        // autoplaySpeed: 3000,
        infinite: false,
        dots:false,
        arrows:true,
        prevArrow: $("#prvarrow4"),
        nextArrow: $("#nxtarrow4"),
      });
    };
    if($('.journ-lnc-slider').length){
      var $status = $('#pagingInfo1');
      var $slickElement = $('.journ-lnc-slider');

      $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      var i = (currentSlide ? currentSlide : 0) + 1;
      $status.html("<span>0" + i + '</span><span class="dash">&#8212;</span><span>' + "0" + slick.slideCount + "</span>");
      });
      $('.journ-lnc-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: false,
          infinite: false,
          //fade: true,
          asNavFor: '.journ-nav-slider'
        });
        $('.journ-nav-slider').slick({
          slidesToShow: 6,
          slidesToScroll: 1,
          infinite: false,
          asNavFor: '.journ-lnc-slider',
          dots: false,
          arrows: true,
          focusOnSelect: true,
          prevArrow: $("#prvarrow1"),
          nextArrow: $("#nxtarrow1"),
          responsive: [
                {
              breakpoint: 1024,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 3
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 2
              }
            }
          ]
        });
      };
      if($('.ament-slider').length){
        $('.ament-slider').slick({
          dots: false,
          infinite: true,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: '100px',
          arrows:false,
          autoplay: true,
          autoplaySpeed: 3000,
          responsive: [
                {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 1
              }
            },
            {
              breakpoint: 599,
              settings: {
                slidesToShow: 1,
                centerPadding: '0px',
                arrows:true,
              }
            }
          ]
        });
      };
      if($('.gallery-thumb-slider').length){
      var $status = $('#pagingInfo3');
      var $slickElement = $('.gallery-thumb-slider');

      $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
      var i = (currentSlide ? currentSlide : 0) + 1;
      $status.html("<span>0" + i + '</span><span class="dash">&#8212;</span><span>' + "0" + slick.slideCount + "</span>");
      });
      $('.gallery-thumb-slider').slick({
        dots: false,
        infinite: true,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $("#prvarrow2"),
        nextArrow: $("#nxtarrow2"),
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
            }
          },
          {
            breakpoint: 599,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });
    };
    $('.search-icon').click(function(){
        $(this).toggleClass('search-active');
        $('.search-form').slideToggle('slow');
        $('.search-form').toggleClass('active');
        if($('.search-form').hasClass('active')){
            $('.search-input').focus();
        } else {
            $('.search-input').blur();
        }
        if(window.innerWidth <= 1200){
            $('#menu').slideUp('slow');
            $('.close-icon').hide();
        }
    });
    $('.mobilemenu-icon').click(function(){
        $('body').addClass('menuactive');
        $('.close-icon').fadeIn(300);
        if(window.innerWidth >= 767){
            $('.search-form').slideUp('slow');
            $('.search-icon').removeClass('search-active');
        }
    });
    $('.close-icon').click(function(){
        $('body').removeClass('menuactive');
        $('.close-icon').fadeOut(300);
    });
    $('.more-btn a').click(function(){
        $('.more-btn').toggleClass('active');
        $(this).text($(this).text() == 'More' ? 'Less' : 'More' );
        $('.footer-wrap').slideToggle('slow');
    });

    $(document).on('click', '.disclaimer_cta', function(){
        if($('.disclaimer_toggle').hasClass('active')){
            $('.disclaimer_toggle').removeClass('active');
            $(this).text('Read more');
        }else{
            $('.disclaimer_toggle').addClass('active');
            $(this).text('Read less');
        }
    });

    $(document).on('click', '.c_overview_cta', function(){
        if($('#c_overview_text').hasClass('active')){
            $('#c_overview_text').removeClass('active');
            $(this).text('Read more');
        }else{
            $('#c_overview_text').addClass('active');
            $(this).text('Read less');
        }
    });

    $(document).on('click', '.project_nav a', function(){
        console.log('test');
        $('.project_nav a').removeClass('active');
        $(this).addClass('active');
        $('html,body').animate({scrollTop: $('#' + $(this).data('ref')).offset().top - 83}, 1000);
    });

    $(document).on('click', '.close_popup, .popup_overlay', function(){
        $('.popup').fadeOut(200, function(){
            $('.popup_overlay').fadeOut(200);
        });
    });

    $('select').each(function () {

        // Cache the number of options
        var $this = $(this),
            numberOfOptions = $(this).children('option').length;

        // Hides the select element
        $this.addClass('s-hidden');

        // Wrap the select element in a div
        $this.wrap('<div class="select"></div>');

        // Insert a styled div to sit over the top of the hidden select element
        $this.after('<div class="styledSelect"></div>');

        // Cache the styled div
        var $styledSelect = $this.next('div.styledSelect');

        // Show the first select option in the styled div
        $styledSelect.text($this.children('option').eq(0).text());

        // Insert an unordered list after the styled div and also cache the list
        var $list = $('<ul />', {
            'class': 'options'
        }).insertAfter($styledSelect);

        // Insert a list item into the unordered list for each select option
        for (var i = 0; i < numberOfOptions; i++) {
            $('<li />', {
                text: $this.children('option').eq(i).text(),
                rel: $this.children('option').eq(i).val()
            }).appendTo($list);
        }

        // Cache the list items
        var $listItems = $list.children('li');

        // Show the unordered list when the styled div is clicked (also hides it if the div is clicked again)
        $styledSelect.click(function (e) {
            e.stopPropagation();
            /*$('div.styledSelect.active').each(function () {
                $(this).removeClass('active').next('ul.options').hide();
            });*/
            if($(this).hasClass('active')){
                $(this).removeClass('active').next('ul.options').slideUp();
            }else{
                $('div.styledSelect.active').removeClass('active').next('ul.options').hide();
                $(this).addClass('active').next('ul.options').show();
            }
            
            
        });

        // Hides the unordered list when a list item is clicked and updates the styled div to show the selected list item
        // Updates the select element to have the value of the equivalent option
        $listItems.click(function (e) {
            e.stopPropagation();
            $styledSelect.text($(this).text()).removeClass('active');
            $this.val($(this).attr('rel'));
            $list.hide();
            /* alert($this.val()); Uncomment this for demonstration! */
        });

        // Hides the unordered list when clicking outside of it
        $(document).click(function () {
            $styledSelect.removeClass('active');
            $list.hide();
        });

  });

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

 var a = 0;
 $(window).scroll(function () {

    if($('.project_menu_point').length > 0 && $(window).scrollTop() >= $('.project_menu_point').offset().top){
        $('body').addClass('project_sticky');
    }else{
        $('body').removeClass('project_sticky');
    }

    if($('.est-value-top-wrap').length){
        var oTop = $('.est-value-top-wrap').offset().top - window.innerHeight;
        if (a == 0 && $(window).scrollTop() > oTop) {
            $('.counter-value').each(function () {
                var $this = $(this),
                    countTo = $this.attr('data-count');
                $({
                    countNum: $this.text()
                }).animate({
                    countNum: countTo
                },
                    {
                        duration: 2000,
                        easing: 'swing',
                        step: function () {
                            $this.text(Math.floor(this.countNum));
                        },
                        complete: function () {
                            $this.text(this.countNum);
                        }
                    });
            });
            a = 1;
        }
    }
});

$slickGreen = false;
function greenSlider() {
    if (window.innerWidth > 767) {
        if (!$slickGreen) {
            var $status = $('#pagingInfo2');
            var $slickElement = $('.our-prop-slider');

            $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                var i = (currentSlide ? currentSlide : 0) + 1;
                $status.html("<span>0" + i + '</span><span class="dash">&#8212;</span><span>' + "0" + slick.slideCount + "</span>");
            });
            $(".our-prop-slider").slick({
                dots: true,
                infinite: false,
                speed: 300,
                slidesToShow: 3,
                slidesToScroll: 1,
                prevArrow: $("#prvarrow"),
                nextArrow: $("#nxtarrow"),
                responsive: [
                    {
                        breakpoint: 1200,
                        settings: {
                        slidesToShow: 2
                        }
                    },
                    {
                    breakpoint: 1024,
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
            $slickGreen = true;
        }
    } else if (window.innerWidth > 767) {
        if ($slickGreen) {
            $('.our-prop-slider').slick('unslick');
            $slickGreen = false;
        };
    }
};

/*$slickGreen1 = false;
function greenSlider1() {
    if (window.innerWidth > 767) {
        if (!$slickGreen1) {
          $('.corp-overly-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            // autoplay: true,
            // autoplaySpeed: 3000,
            dots:false,
            arrows:true,
            vertical: true,
            verticalSwiping: true,
            responsive: [
                {
              breakpoint: 1024,
              settings: {
                vertical: false,
                 verticalSwiping: false,
              }
            },
                {
              breakpoint: 767,
              settings: {
                arrows:false,
                vertical: false,
                 verticalSwiping: false,
              }
            }
          ]
          });
            $slickGreen1 = true;
        }
    } else if (window.innerWidth > 767) {
        if ($slickGreen1) {
            $('.corp-overly-slider').slick('unslick');
            $slickGreen1 = false;
        };
    }
};*/

$(window).load(function(){
    $('#searchform').submit(function(){
        if($('#s').val() == ''){
            return false;
        }
    }); 
    if($('.val_eq').length &&  window.innerWidth >= 1024){
        $('.val_eq').equalHeights();
    }
    if($('.near_loc_block').length &&  window.innerWidth >= 1024){
        $('.near_loc_block').equalHeights();
    }
    if($('.commute_col').length &&  window.innerWidth >= 1024){
        $('.commute_col').equalHeights();
    }
});

var cachedWidth = $(window).width();
$(window).resize(function(){
    var newWidth1 = $(window).width();
    if(newWidth1 !== cachedWidth){
        if (window.innerWidth <= 1200) {
            $('body').removeClass('menuactive');
            $('.close-icon').hide();
        } else if (window.innerWidth >= 1200){
            $('body').addClass('menuactive');
        }
        if(window.innerWidth >= 767){
            $('.search-form').slideUp('slow');
            $('.search-icon').removeClass('search-active');
        }
        if($('.val_eq').length &&  window.innerWidth >= 1024){
            $('.val_eq').equalHeights();
        }
        greenSlider();
        cachedWidth = newWidth1;
    }
});

function openPopup(popupID){
    $('.popup_overlay').fadeIn(200, function(){
        $('#'+popupID).fadeIn(200);
    });
}