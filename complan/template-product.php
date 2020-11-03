<?php
/**
Template Name: Product Template
 */
get_header();
?>
<?php if (have_posts()) : the_post(); ?>
	<div class="moving_cup">
		<div class="moving_cup_in">
			<img src="<?php bloginfo('template_url')?>/assets/img/complan-cup-top.png" alt="Compan Mug" class="complan-mug-1" />
			<a href="javascript:void(0)" class="plus-icon-1 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_1"></a>
		    <a href="javascript:void(0)" class="plus-icon-2 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_2"></a>
		    <a href="javascript:void(0)" class="plus-icon-3 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_3"></a>
		    <a href="javascript:void(0)" class="plus-icon-4 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_4"></a>
		</div>
	    <img src="<?php bloginfo('template_url')?>/assets/img/cup-shadow-bottom.png" alt="" class="cup-shadow-bottom" />
	</div>
   	<section id="comp-page-scroll">
        <section class="ks-banner-sec clearfix section">
            <div class="ks-banner-wrap">
            	<?php masterslider(get_field('main_slideshow')); ?>
                <!-- <div class="ks-banner-slider">
                    <div class="ks-banner-block">
        
                    </div>
                </div> -->
            </div>
        </section>
        <?php $section_2 = get_field('product_section_2_details'); ?>
        <section class="fav-cup-sec clearfix section" id="fv-sec">
        	<div class="middle_adjusted">
	            <h2><?php echo $section_2['section_title']; ?></h2>
	            <div class="fav-cup-wrap clearfix">
	                <div class="fav-cup-lft">
	                    <div class="fav-cup-step " id="fav-cup-step-1">
	                        <span class="num">1</span>
	                        <div class="fav-cup-step-in magictime">
		                        <div class="step-icon">
		                            <img src="<?php echo $section_2['step_1_icon']; ?>" alt="<?php echo $section_2['step_1_title']; ?>" class="img-responsive">
		                        </div>
		                        <p><?php echo $section_2['step_1_title']; ?></p>
		                    </div>
	                    </div>
	                    <div class="fav-cup-step " id="fav-cup-step-2">
	                        <span class="num">3</span>
	                        <div class="fav-cup-step-in magictime">
		                        <div class="step-icon">
		                            <img src="<?php echo $section_2['step_3_icon']; ?>" alt="<?php echo $section_2['step_3_title']; ?>" class="img-responsive">
		                        </div>
		                        <p><?php echo $section_2['step_3_title']; ?></p>
		                    </div>
	                    </div>
	                </div>
	                <div class="scroll-cup-img">
	                    <div class="mob-cup-img-1"><img src="<?php bloginfo('template_url')?>/assets/img/complan-cup-top.png" alt="" /></div>
	                </div>
	                <div class="fav-cup-rht">
	                    <div class="fav-cup-step " id="fav-cup-step-3">
	                        <span class="num">2</span>
	                        <div class="fav-cup-step-in magictime">
		                        <div class="step-icon">
		                            <img src="<?php echo $section_2['step_2_icon']; ?>" alt="<?php echo $section_2['step_2_title']; ?>" class="img-responsive">
		                        </div>
		                        <p><?php echo $section_2['step_2_title']; ?></p>
		                    </div>
	                    </div>
	                    <div class="fav-cup-step " id="fav-cup-step-4">
	                        <span class="num">4</span>
	                        <div class="fav-cup-step-in magictime">
		                        <div class="step-icon">
		                            <img src="<?php echo $section_2['step_4_icon']; ?>" alt="<?php echo $section_2['step_4_title']; ?>" class="img-responsive">
		                        </div>
		                        <p><?php echo $section_2['step_4_title']; ?></p>
		                    </div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </section>
        <?php $section_3 = get_field('product_section_3_details'); ?>
        <section class="wh-nut-sec clearfix section" id="wh-sec">
        	<div class="middle_adjusted">
	            <h2><?php echo $section_3['section_title']; ?></h2>
	            <div class="fav-cup-wrap clearfix">
	                <div class="fav-cup-lft">
	                    <div class="fav-cup-step fav-cup-step-nut magictime" id="fav-cup-step-5">
	                        <p><?php echo $section_3['point_1_title']; ?></p>
	                    </div>
	                    <div class="fav-cup-step fav-cup-step-nut magictime" id="fav-cup-step-6">
	                        <p><?php echo $section_3['point_3_title']; ?></p>
	                    </div>
	                </div>
	                <!--  -->
	                <div class="scroll-cup-img" id="scroll-cup-img-2">
	                    <div class="mob-cup-img-1">
	                    	<img src="<?php bloginfo('template_url')?>/assets/img/complan-cup-top.png" alt="" />
	                    	<a href="javascript:void(0)" class="plus-icon-1 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_1"></a>
			                <a href="javascript:void(0)" class="plus-icon-2 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_2"></a>
			                <a href="javascript:void(0)" class="plus-icon-3 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_3"></a>
			                <a href="javascript:void(0)" class="plus-icon-4 plus-icon-common nut_popup_cta" data-ref="nut_popup_panel_4"></a>
	                    </div>
	                </div>
	                <div class="fav-cup-rht">
	                    <div class="fav-cup-step fav-cup-step-nut magictime" id="fav-cup-step-7">
	                        <p><?php echo $section_3['point_2_title']; ?></p>
	                    </div>
	                    <div class="fav-cup-step fav-cup-step-nut magictime" id="fav-cup-step-8">
	                        <p><?php echo $section_3['point_4_title']; ?></p>
	                    </div>
	                </div>

	                
	            </div>
	            <!-- Nutrition popup starts here -->
                <div class="nut_popup">
                	<a href="javascript:void(0)" class="close_nut_popup"></a>
                	<div class="nut_popup_inner clearfix">
                		<div class="nut_popup_panel" id="nut_popup_panel_1">
	                		<h3><?php echo $section_3['point_1_popup_title']; ?></h3>
	                		<div class="clearfix"></div>
	                		<div class="imgbox">
	                			<img src="<?php echo $section_3['point_1_popup_image']; ?>" alt="<?php echo $section_3['point_1_popup_title']; ?>" />
	                		</div>
	                		<div class="nut_content">
	                			<?php echo $section_3['point_1_popup_description']; ?>
	                			<a href="<?php echo $section_3['point_1_popup_explore_url']; ?>" class="explore_btn_red">Explore More</a>
	                		</div>
	                	</div>
	                	<div class="nut_popup_panel" id="nut_popup_panel_2">
	                		<h3><?php echo $section_3['point_2_popup_title']; ?></h3>
	                		<div class="clearfix"></div>
	                		<div class="imgbox">
	                			<img src="<?php echo $section_3['point_2_popup_image']; ?>" alt="<?php echo $section_3['point_2_popup_title']; ?>" />
	                		</div>
	                		<div class="nut_content">
	                			<?php echo $section_3['point_2_popup_description']; ?>
	                			<a href="<?php echo $section_3['point_2_popup_explore_url']; ?>" class="explore_btn_red">Explore More</a>
	                		</div>
	                	</div>
	                	<div class="nut_popup_panel" id="nut_popup_panel_3">
	                		<h3><?php echo $section_3['point_3_popup_title']; ?></h3>
	                		<div class="clearfix"></div>
	                		<div class="imgbox">
	                			<img src="<?php echo $section_3['point_3_popup_image']; ?>" alt="<?php echo $section_3['point_3_popup_title']; ?>" />
	                		</div>
	                		<div class="nut_content">
	                			<?php echo $section_3['point_3_popup_description']; ?>
	                			<a href="<?php echo $section_3['point_3_popup_explore_url']; ?>" class="explore_btn_red">Explore More</a>
	                		</div>
	                	</div>
	                	<div class="nut_popup_panel" id="nut_popup_panel_4">
	                		<h3><?php echo $section_3['point_4_popup_title']; ?></h3>
	                		<div class="clearfix"></div>
	                		<div class="imgbox">
	                			<img src="<?php echo $section_3['point_4_popup_image']; ?>" alt="<?php echo $section_3['point_4_popup_title']; ?>" />
	                		</div>
	                		<div class="nut_content">
	                			<?php echo $section_3['point_4_popup_description']; ?>
	                			<a href="<?php echo $section_3['point_4_popup_explore_url']; ?>" class="explore_btn_red">Explore More</a>
	                		</div>
	                	</div>
                	</div>
                </div>
                <!-- Nutrition popup ends here -->
	        </div>
        </section>
        <section class="happy-clild-sec clearfix section">
            <div class="happy-clild-slider">
                <div class="happy-clild-block" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/bg-1.jpg);">
                    <div class="happy-head">
                        <h2>Give your child Complan, a nutritionally balanced health food drink for happy and heathy children.
                        </h2>
                    </div>
                    <div class="happy-clild-1" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-1.png);"></div>
                    <div class="happy-clild-2" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-2.png);"></div>
                    <div class="happy-clild-3" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-3.png);"></div>
                    <div class="happy-clild-4" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-4.png);"></div>
                </div>
                <div class="happy-clild-block" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/bg-1.jpg);">
                    <div class="happy-head">
                        <h2>Give your child Complan, a nutritionally balanced health food drink for happy and heathy children.
                        </h2>
                    </div>
                    <div class="happy-clild-1" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-1.png);"></div>
                    <div class="happy-clild-2" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-2.png);"></div>
                    <div class="happy-clild-3" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-3.png);"></div>
                    <div class="happy-clild-4" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/kids-img-4.png);"></div>
                </div>
            </div>
            <div class="steem-image" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/strip-2.png);"></div>
            <div class="hand-image" style="background-image:url(<?php bloginfo('template_url')?>/assets/img/hand-image.png);"></div>
            <div class="mob-cup-img-last">
	            <img src="<?php bloginfo('template_url')?>/assets/img/cup-in-hand.png" alt="cup-in-hand" />
	        </div>
        </section>
    </section>
<?php wp_reset_postdata(); endif; ?>
<?php get_footer(); ?>