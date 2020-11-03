<?php
/**
Template Name: Why Invest
 */
get_header();
?>
    <section class="cas-banner-sec clearfix">
        <div class="cas-banner-slider">
            <?php if( have_rows('homepage_slideshow', 35) ): while( have_rows('homepage_slideshow', 35) ): the_row(); ?>
                <div class="cas-banner-block">
                    <div class="imgbox">
                        <img src="<?php the_sub_field('slide_background_image'); ?>" alt="<?php the_sub_field('slide_title'); ?>" class="img-responsive">
                    </div>
                    <div class="cas-banner-overlay-wrap">
                        <div class="cas-banner-overlay text-center">
                            <div class="cas-img">
                                <img src="<?php bloginfo('template_url')?>/images/casagrand-royale-phase-1-logo.jpg" alt="" class="img-responsive">
                            </div>
                            <h2>LAUNCHING Phase II</h2>
                            <P>Unbeatable price on OMR at Sholinganallur</P>
                        </div>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="enquiry-form-block" id="enqform">
            <div class="enquiry-form-title">
                <h3>ENQUIRE NOW</h3>
                <span>Kindly fill your details below</span>
            </div>
            <div class="enquiry-form">
                <?php echo do_shortcode('[contact-form-7 id="8" title="Enquiry Now"]'); ?>
                <div class="callus-txt text-center">
                    <p>CALL US</p>
                    <span><?php the_field('contact_number', 'option'); ?></span>
                </div>
            </div>
        </div>
    </section>

    <section class="why-in-sec text-center">
        <div class="why-in-wrap">
            <?php the_content(); ?>
        </div>
    </section>

    <section class="faq-sec">
        <div class="faq-wrap">
            <h2>faqs</h2>
            <div class="faq-block">
            	<?php $cnt = 0; if( have_rows('faqs') ): while( have_rows('faqs') ): the_row(); $cnt++; ?>
	                <div class="faq-box">
	                    <div class="ques-box">
	                        <?php echo $cnt; ?>. <?php the_sub_field('faq_title'); ?>
	                    </div>
	                    <div class="answer-box">
	                        <?php the_sub_field('faq_description'); ?>
	                    </div>
	                </div>
                <?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>