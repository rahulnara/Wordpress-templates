var $ = jQuery.noConflict();
$(document).ready(function(){

  var open_menu_item;
  $(document).on('click', '#menu ul li.has_child > .hc_cta', function(e){
    if($(window).width() < 1200){
      e.preventDefault();
      open_menu_item = $(this).parent('li');
      if(open_menu_item.hasClass('open')){
          open_menu_item.removeClass('open');
          open_menu_item.find('ul').slideUp(200);
      }else{
          open_menu_item.addClass('open');
          open_menu_item.find('ul').slideDown(200);
      }
    }
  });

  $(document).on('click', '.partner_cta', function(){
      $('.pip_imgbox img').attr('src', $(this).data('image'))
      $('.pip_title').text($(this).data('name'));
      $('.pip_desc').html($(this).data('description'));
      $('.partner_info_popup').fadeIn(200);
  });

  $(document).on('click', '.pip_close', function(){
      $('.partner_info_popup').fadeOut(200);
  });

  /* Completed project slider starts here */
  if($('.comp_proj_slideshow').length && $('.comp_proj_slide').length > 1){
    $('.comp_proj_slideshow').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      infinite: true,
      speed: 700,
      slidesToShow: 1,
      arrows:true
    });
  };
  /* Completed project slider ends here */

  /* page_slider starts here */
  if($('.page_slider').length && $('.page_slide').length > 1){
    $('.page_slider').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      infinite: true,
      speed: 700,
      slidesToShow: 1,
      arrows:false
    });
  };
  /* page_slider ends here */

  /* floor_plan_slider starts here */
  if($('.floor_plan_slider').length && $('.floor_plan_slide').length > 1){
    $('.floor_plan_slider').slick({
      dots: false,
      autoplay: true,
      autoplaySpeed: 5000,
      infinite: true,
      speed: 700,
      slidesToShow: 1,
      arrows:false
    });
  };
  /* floor_plan_slider ends here */

  if($('.ret-hero-slideshow').length){
    $('.ret-hero-slideshow').slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      speed: 700,
      autoplay: true,
      autoplaySpeed: 5000,
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
    greenSlider01();
    //greenSlider1();
    if($('.news-slider').length){
      $('.news-slider').slick({
        dots: false,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700,
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
        speed: 700,
        autoplay: true,
        autoplaySpeed: 5000,
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
        speed: 700,
        autoplay: true,
        autoplaySpeed: 5000,
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
        autoplaySpeed: 5000,
        infinite: true,
        speed: 700,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows:true,
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
        autoplaySpeed: 5000,
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
        speed: 700,
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
    if($('.thoug-img-slider').length && $(window).width() > 600){
      $('.thoug-img-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
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
        verticalSwiping: true/*,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              vertical: false,
              verticalSwiping: false,
            }
          }
        ]*/
      });
    };
    if($('.gt-commu-slider').length){
      $('.gt-commu-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700,
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
            arrows:false
          }
        }
      ]
      });
      $('.gt-com-slider').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          //fade: true,
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
            dots: true
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
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700,
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
        //console.log(i);
      });

      $slickElement.on('afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        //$status.html("<span class='active-num'>" + i + '</span><span class="dash">&#124;</span><span>' + slick.slideCount + "</span>");
        $('#pagingInfo5 .active-num').text(i);
        //console.log(i);
      });

      $('.infra-doc-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700,
        infinite: false,
        dots:false,
        arrows:true,
        prevArrow: $("#prvarrow4"),
        nextArrow: $("#nxtarrow4"),
        responsive: [
          {
            breakpoint: 600,
            settings: {
              dots:true,
            }
          }
        ]
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
          autoplay: true,
          autoplaySpeed: 5000,
          speed: 700,
          //fade: true,
          asNavFor: '.journ-nav-slider'
        });
        $('.journ-nav-slider').slick({
          slidesToShow: 8,
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
                slidesToShow: 6
              }
            },
            {
              breakpoint: 767,
              settings: {
                slidesToShow: 4
              }
            },
            {
              breakpoint: 560,
              settings: {
                slidesToShow: 3
              }
            }
          ]
        });
      };
      if($('.ament-slider').length){
        $('.ament-slider').slick({
          dots: false,
          infinite: true,
          speed: 700,
          slidesToShow: 3,
          slidesToScroll: 1,
          centerMode: true,
          centerPadding: '100px',
          arrows:false,
          autoplay: true,
          autoplaySpeed: 5000,
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
        $('.gallery_tab_panel').each(function(){
            var $status = $(this).find('.pagingInfo3');
            var $mainParent = $(this);
            var $slickElement = $(this).find('.gallery-thumb-slider');

            $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
              var i = (currentSlide ? currentSlide : 0) + 1;
              $status.html("<span>0" + i + '</span><span class="dash">&#8212;</span><span>' + "0" + slick.slideCount + "</span>");
            });
            $slickElement.slick({
              dots: false,
              infinite: true,
              autoplay: true,
              autoplaySpeed: 5000,
              speed: 700,
              slidesToShow: 3,
              slidesToScroll: 1,
              prevArrow: $mainParent.find(".prvarrow2"),
              nextArrow: $mainParent.find(".nxtarrow2"),
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
        });
        
      };

    if($('.rlts_blog_item_slider').length){
      $('.rlts_blog_item_slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        speed: 700,
        autoplay: true,
        autoplaySpeed: 5000,
        dots:false,
        arrows:false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                arrows:true,
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

    if($('.rg-thoug-wrap-slider').length){
      $('.rg-thoug-wrap-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        speed: 700,
        autoplay: true,
        autoplaySpeed: 5000,
        dots:false,
        arrows:false,
        responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 2,
                arrows:true,
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

    if($('.img_content_slider').length){
      var $status = $('#pagingInfo6');
      var $slickElement = $('.img_content_slider');
      $slickElement.on('init reInit', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        $status.html("<span class='active-num'>01</span><span class='dash'>&#8212;</span><span>0" + slick.slideCount + "</span>");
        //$('#pagingInfo5 .active-num').text(i);
        //console.log(i);
      });

      $slickElement.on('afterChange', function (event, slick, currentSlide, nextSlide) {
        var i = (currentSlide ? currentSlide : 0) + 1;
        //$status.html("<span class='active-num'>" + i + '</span><span class="dash">&#124;</span><span>' + slick.slideCount + "</span>");
        $('#pagingInfo6 .active-num').text('0'+i);
        //console.log(i);
      });

      $('.img_content_slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700,
        infinite: true,
        dots:false,
        arrows:true,
        prevArrow: $("#prvarrow5"),
        nextArrow: $("#nxtarrow5"),
      });
    };
    $('.wyrt_cryst_main_header ul li a.scrolllink').on('click', function (e) {
      // e.preventDefault();
      var target = this.hash,
          $target = $(target);
      $('html, body').stop().animate({
          'scrollTop': $target.offset().top-0
      }, 900, 'swing', function () {
      });
      return false;
  });
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
    $(document).on('click', '.property_details_cta', function(){
        if($('.property_details_toggle').hasClass('active')){
            $('.property_details_toggle').removeClass('active');
            $(this).text('Read more');
        }else{
            $('.property_details_toggle').addClass('active');
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

    $(document).on('click', '.open_cta_popup', function(e){
        if($(window).width() < 767){
            e.preventDefault();
            $('.yellow_cta_popup').fadeIn(200);
        }
    });

    $(document).on('click', '.ytp_close', function(){
        $('.yellow_cta_popup').fadeOut(200);
    });

    /*$(document).on('click', '.project_nav a', function(){
        $('.project_nav a').removeClass('active');
        $(this).addClass('active');
        $('html,body').animate({scrollTop: $('#' + $(this).data('ref')).offset().top - 83}, 1000);
    });*/
    var lastId,
     topMenu = $("#project_nav"),
     topMenuHeight = $('.header').height() + 80,
     // All list items
     menuItems = topMenu.find("a"),
     // Anchors corresponding to menu items
     scrollItems = menuItems.map(function(){
       var item = $($(this).attr("href"));
        if (item.length) { return item; }
     });

    // Bind click handler to menu items
    // so we can get a fancy scroll animation
    menuItems.click(function(e){
      var href = $(this).attr("href"),
          offsetTop = href === "#" ? 0 : $(href).offset().top-topMenuHeight+1;
      $('html, body').stop().animate({ 
          scrollTop: offsetTop
      }, 850);
      e.preventDefault();
    });

    // Bind to scroll
    $(window).scroll(function(){
        /*if($(window).scrollTop() > 10){
            $('body').addClass('sticky_body');
        }else{
            $('body').removeClass('sticky_body');
        }*/
       // Get container scroll position
       var fromTop = $(this).scrollTop()+topMenuHeight;
       
       // Get id of current scroll item
       var cur = scrollItems.map(function(){
         if ($(this).offset().top < fromTop)
           return this;
       });
       // Get the id of the current element
       cur = cur[cur.length-1];
       var id = cur && cur.length ? cur[0].id : "";
       
       if (lastId !== id) {
           lastId = id;
           // Set/remove active class
           menuItems
             .parent().removeClass("active")
             .end().filter("[href=#"+id+"]").parent().addClass("active");
       }                   
    });

    $(document).on('click', '.close_popup, .popup_overlay', function(){
        $('.popup').fadeOut(200, function(){
            $('.popup_overlay').fadeOut(200);
        });
    });

    $(document).on('change', '#inventory_status', function(){
        $('.wing-item').hide();
        $('#'+$(this).val()).show();
    });

    $(document).on('change', '#gallery_type', function(){
      //console.log($(this).val());
        $('.gallery_tab_panel').hide();
        $('#'+$(this).val()).show();
        $('#'+$(this).val()).find('.gallery-thumb-slider').slick('refresh');

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
            $this.trigger('change');
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

    if($('.project_menu_point').length > 0){
        if($(window).scrollTop() >= $('.project_menu_point').offset().top - $('.header').height()){
            $('body').addClass('project_sticky');
        }else{
            $('body').removeClass('project_sticky');
        }
    }

    if($('.wyrt_menu_point').length > 0){
        if($(window).scrollTop() >= $('.wyrt_menu_point').offset().top - $('.header').height()){
            $('body').addClass('project_sticky');
        }else{
            $('body').removeClass('project_sticky');
        }
    }

    if($('.search-form').length > 0){
        if($(window).scrollTop() >= 200){
            $('body').addClass('showsearch');
        }else{
            $('body').removeClass('showsearch');
        }
    }
        

    if($(window).scrollTop() > 10){
        $('body').addClass('header_sticky');
    }else{
        $('body').removeClass('header_sticky');
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
    //if (window.innerWidth > 767) {
    if($('.our-prop-slider').length && $('.our-prop-block').length > 3 && $(window).width() > 767){
        if (!$slickGreen) {
            var $status = $('#pagingInfo2');
            var $slickElement = $('.our-prop-slider');

            $slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
                var i = (currentSlide ? currentSlide : 0) + 1;
                $status.html("<span>0" + i + '</span><span class="dash">&#8212;</span><span>' + "0" + slick.slideCount + "</span>");
            });
            $(".our-prop-slider").slick({
                dots: false,
                infinite: true,
                autoplay: true,
                autoplaySpeed: 5000,
                speed: 700,
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
    }
    /*} else if (window.innerWidth > 767) {
        if ($slickGreen) {
            $('.our-prop-slider').slick('unslick');
            $slickGreen = false;
        };
    }*/
};

$slickGreen01 = false;
function greenSlider01() {
    if (window.innerWidth > 767) {
        if (!$slickGreen01) {
          $('.dreamz_our_services_slider').slick({
            slidesToShow: 5,
            slidesToScroll: 1,
            infinite: false,
            autoplay: true,
            autoplaySpeed: 5000,
            speed: 700,
            dots:false,
            arrows:true,
            responsive: [
                {
                  breakpoint: 1480,
                  settings: {
                    slidesToShow: 4
                  }
                },
                {
                  breakpoint: 1200,
                  settings: {
                    slidesToShow: 3
                  }
                },
                {
                  breakpoint: 1024,
                  settings: {
                    slidesToShow: 4
                  }
                }
              ]
          });
            $slickGreen01 = true;
        }
    } else if (window.innerWidth > 767) {
        if ($slickGreen01) {
            $('.dreamz_our_services_slider').slick('unslick');
            $slickGreen01 = false;
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
    if($('.val_eq').length &&  window.innerWidth > 1024){
        $('.val_eq').equalHeights();
    }
    if($('.near_loc_block').length &&  window.innerWidth > 1024){
        $('.near_loc_block').equalHeights();
    }
    if($('.commute_col').length &&  window.innerWidth > 1024){
        $('.commute_col').equalHeights();
    }
    if($('.eq_row').length &&  window.innerWidth > 1024){
        $('.eq_row').each(function(){
            $(this).find('.eq_col').equalHeights();
        });
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