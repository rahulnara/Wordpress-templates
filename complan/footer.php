    <div class="social-media">
        <?php if(get_field('twitter_url', 'option')){ ?>
            <a href="<?php the_field('twitter_url', 'option'); ?>" class="tw-icon tran" target="_blank"></a>
        <?php } ?>
        <?php if(get_field('instagram_url', 'option')){ ?>
            <a href="<?php the_field('instagram_url', 'option'); ?>" class="insta-icon tran" target="_blank"></a>
        <?php } ?>
        <?php if(get_field('facebook_url', 'option')){ ?>
            <a href="<?php the_field('facebook_url', 'option'); ?>" class="fb-icon tran" target="_blank"></a>
        <?php } ?>
    </div>
    <footer class="footer">
        <div class="footer-links">
            <?php wp_nav_menu( array('menu' => 'Footer menu' )); ?>
        </div>
    </footer>
    <script src="<?php bloginfo('template_url')?>/assets/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url')?>/assets/js/slick.min.js"></script>
    <?php if(is_page_template('template-product.php')){ ?>
        <script src="<?php bloginfo('template_url')?>/assets/js/spritespin.js"></script>
        <script src="<?php bloginfo('template_url')?>/assets/js/fullpage.js"></script>
    <?php } ?>
    <script src="<?php bloginfo('template_url')?>/assets/js/main.js"></script>
    <?php if(is_page_template('template-product.php')){ ?>
        <script type="text/javascript">
            var nut_element;
            $(document).ready(function(){
                $(document).on('click', '.close_nut_popup', function(){
                    $('.nut_popup').fadeOut(300);
                    $('.moving_cup').removeClass('popup_visible');
                });
                $(document).on('click','.nut_popup_cta', function(){
                    $('.moving_cup').addClass('popup_visible');
                    nut_element = $(this).data('ref');
                    $('.nut_popup_panel').hide();
                    $('#'+nut_element).show();
                    $('.nut_popup').fadeIn(300);
                });
            });
            if($(window).width() > 1024){
                var myFullpage = new fullpage('#comp-page-scroll', { 
                    scrollBar: true, 
                    scrollingSpeed: 1000, 
                    responsiveHeight: true,
                    fixedElements: 'fixedfooter',
                    responsive: 1,
                    onLeave: function(origin, destination, direction){
                        var leavingSection = this;

                        /*if(origin.index == 0 && direction =='down'){
                            $('.moving_cup').addClass('moving_cup_moved');
                            setTimeout(function(){
                                step2Movements(direction);
                            }, 500);
                        }else if(origin.index == 1 && direction =='down'){
                            setTimeout(function(){
                                step3Movements(direction);
                            }, 500);
                        }else */

                        if(origin.index == 0 && direction =='down'){
                            $('.moving_cup').addClass('moving_cup_moved');
                        }else if(origin.index == 2 && direction =='down'){
                            $('.plus-icon-common').removeClass('active');
                            $('.moving_cup').addClass('in_hand');
                        }else if(origin.index == 1 && direction =='up'){
                            $('.moving_cup').removeClass('moving_cup_moved');
                        }else if(origin.index == 3 && direction =='up'){
                            $('.footer').removeClass('fixedfooter');
                            $('.moving_cup').removeClass('in_hand');
                        }

                        if(origin.index == 2){
                            $('.plus-icon-common').removeClass('active');
                            if($('.nut_popup').is(':visible')){
                                $('.close_nut_popup').trigger('click');
                            }
                        }

                    },
                    afterLoad: function(origin, destination, direction){
                        if(destination.index == 1){
                            $('.moving_cup').addClass('moving_cup_moved');
                            step2Movements(direction);
                            /*setTimeout(function(){
                                step2Movements(direction);
                            }, 500);*/
                        }else if(destination.index == 2){
                            if($('#fav-cup-step-5').hasClass('bounceInLeft')){
                                $('.plus-icon-common').addClass('active');
                            }else{
                                step3Movements(direction);
                            }
                            /*setTimeout(function(){
                                step3Movements(direction);
                            }, 500);*/
                        }/*else if(destination.index == 2){
                            //$('.moving_cup').addClass('active');
                            if($('#fav-cup-step-5').hasClass('bounceInLeft')){
                                $('.moving_cup').addClass('active');
                            }else{
                                setTimeout(function(){$('.moving_cup').addClass('active');}, 2500);
                            }
                            
                        }*/else{
                            $('.moving_cup').removeClass('active');
                            if($('.nut_popup').is(':visible')){
                                $('.close_nut_popup').trigger('click');
                            }
                        }

                        if(destination.index == 3 && direction =='down'){
                            $('.footer').addClass('fixedfooter');
                        }
                    }
                });
            }
            function step2Movements(direction){
                if(direction == 'down'){
                    $('#fav-cup-step-1').addClass('active');
                    setTimeout(function(){
                        $('#fav-cup-step-1 .fav-cup-step-in').addClass('bounceInLeft');
                    }, 300);
                    setTimeout(function(){
                        $('#fav-cup-step-3').addClass('active');
                        $('#fav-cup-step-3 .fav-cup-step-in').delay(300).addClass('bounceInRight');
                    }, 1300);
                    setTimeout(function(){
                        $('#fav-cup-step-2').addClass('active');
                        $('#fav-cup-step-2 .fav-cup-step-in').delay(300).addClass('bounceInLeft');
                    }, 2300);
                    setTimeout(function(){
                        $('#fav-cup-step-4').addClass('active');
                        $('#fav-cup-step-4 .fav-cup-step-in').delay(300).addClass('bounceInRight');
                    }, 3300);
                }
            }
            function step3Movements(direction){
                if(direction == 'down'){
                    //$('#fav-cup-step-5').addClass('active');
                    $('.plus-icon-1').addClass('active');
                    setTimeout(function(){
                        $('#fav-cup-step-5').addClass('bounceInLeft');
                    }, 300);
                    setTimeout(function(){
                        $('.plus-icon-2').addClass('active');
                        $('#fav-cup-step-7').delay(300).addClass('bounceInRight');
                    }, 1300);
                    setTimeout(function(){
                        $('.plus-icon-3').addClass('active');
                        $('#fav-cup-step-6').delay(300).addClass('bounceInLeft');
                    }, 2300);
                    setTimeout(function(){
                        $('.plus-icon-4').addClass('active');
                        $('#fav-cup-step-8').delay(300).addClass('bounceInRight');
                    }, 3300);
                    //setTimeout(function(){$('.plus-icon-common').addClass('active');}, 2500);
                }
            }
        </script>
    <?php } ?>
    <?php if(is_page_template('home-page.php')){ ?>
        <script type="text/javascript">
            var curr_scroll_amt = 0, video_in_view = 0;
            var complanVideo = document.getElementById("complan_video");
            $(window).scroll(function(){
                curr_scroll_amt = $(window).scrollTop();
                if(curr_scroll_amt >= $(complanVideo).offset().top - $(complanVideo).outerHeight() + 200 && curr_scroll_amt <= $(complanVideo).offset().top + $(complanVideo).outerHeight() - 200){
                    if(video_in_view == 0){
                        video_in_view = 1;
                        complanVideo.play();
                    }
                }else{
                    complanVideo.pause();
                    video_in_view = 0;
                }
            });
        </script>
    <?php } ?>
	<?php wp_footer(); ?>
	</body>
</html>