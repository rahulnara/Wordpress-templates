<?php
/**
Template Name: Home-page
 */
get_header();
?>
<?php if (have_posts()) : the_post(); ?>
    <section class="vit-banner-sec clearfix">
        <div class="vit-banner-wrap">
            <div class="vit-banner-slider">
                <div class="vit-banner-block">
                    <div class="vit-banner-lft">
                        <img src="<?php bloginfo('template_url')?>/assets/img/banner-slider-01.png" alt="" class="img-responsive">
                    </div>
                    <div class="vit-banner-rht">
                        <img src="<?php bloginfo('template_url')?>/assets/img/banner-slider-1.png" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="vit-banner-block">
                    <div class="vit-banner-lft">
                        <img src="<?php bloginfo('template_url')?>/assets/img/banner-slider-01.png" alt="" class="img-responsive">
                    </div>
                    <div class="vit-banner-rht">
                        <img src="<?php bloginfo('template_url')?>/assets/img/banner-slider-1.png" alt="" class="img-responsive">
                    </div>
                </div>
            </div>
            <svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28"
                preserveAspectRatio="none" shape-rendering="auto">
                <defs>
                    <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                </defs>
                <g class="parallax">
                    <!-- <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7" /> -->
                    <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(242,211,146,0.7)" />
                    <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(242,211,146,0.5)" />
                    <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
                </g>
            </svg>
        </div>
    </section>
    <?php 
        $two_x_faster_section = get_field('two_x_faster_section');
        if($two_x_faster_section){ 
    ?>
        <section class="opt-devel-sec clearfix">
            <div class="opt-lft">
                <img src="<?php echo esc_url( $two_x_faster_section['section_image'] ); ?>" alt="<?php echo $two_x_faster_section['section_title']; ?>" class="img-responsive">
            </div>
            <div class="opt-rht">
                <div class="opt-devel-content clearfix">
                    <h2><?php echo $two_x_faster_section['section_title']; ?></h2>
                    <span><?php echo $two_x_faster_section['section_sub_title']; ?></span>
                    <?php echo $two_x_faster_section['section_description']; ?>
                    <div class="explore-btn">
                        <a href="<?php echo $two_x_faster_section['explore_link']; ?>">Explore</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php 
        $milk_protection_section = get_field('milk_protection_section');
        if($milk_protection_section){ 
    ?>
        <section class="frt-prot-sec clearfix">
            <div class="frt-prot-rht">
                <img src="<?php echo esc_url( $milk_protection_section['section_image'] ); ?>" alt="<?php echo $milk_protection_section['section_title']; ?>" class="img-responsive">
            </div>
            <div class="frt-prot-lft">
                <div class="opt-devel-content clearfix">
                    <h2><?php echo $milk_protection_section['section_title']; ?></h2>
                    <span><?php echo $milk_protection_section['section_sub_title']; ?></span>
                    <?php echo $milk_protection_section['section_description']; ?>
                    <div class="explore-btn">
                        <a href="<?php echo $milk_protection_section['explore_link']; ?>">Explore</a>
                    </div>
                </div>
            </div>
            
        </section>
    <?php } ?>

    <?php 
        $vital_nutrients = get_field('vital_nutrients');
        if($vital_nutrients){ 
    ?>
        <section class="vit-nutri-sec clearfix">
            <div class="vit-nutri-lft">
                <img src="<?php echo esc_url( $vital_nutrients['section_image'] ); ?>" alt="<?php echo $vital_nutrients['section_title']; ?>" class="img-responsive">
            </div>
            <div class="vit-nutri-rht">
                <div class="opt-devel-content clearfix">
                    <h2><?php echo $vital_nutrients['section_title']; ?></h2>
                    <span><?php echo $vital_nutrients['section_sub_title']; ?></span>
                    <?php echo $vital_nutrients['section_description']; ?>
                    <div class="explore-btn">
                        <a href="<?php echo $vital_nutrients['explore_link']; ?>">Explore</a>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php if(get_field('complan_video_mp4')){ ?>
        <section class="comp-bott-banner-sec">
            <video id="complan_video" muted controls>
                <source src="<?php the_field('complan_video_mp4'); ?>" type="video/mp4">
                <source src="<?php the_field('complan_video_ogg'); ?>" type="video/ogg">
                Your browser does not support the video tag.
            </video>
        </section>
    <?php } ?>

    <?php 
        $product_section = get_field('product_section');
        if($product_section){ 
    ?>
        <section class="prod-banner-sec">
            <div class="prod-banner-wrap">
                <div class="prod-banner-head text-center">
                    <h2><?php echo $product_section['section_title']; ?></h2>
                    <p><?php echo $product_section['section_sub_title']; ?></p>
                </div>
                <div class="prod-banner-slider">
                    <div class="prod-banner-block">
                        <?php masterslider($product_section['master_slider_id']); ?>
                    </div>
                </div>
                <div class="explore-btn">
                    <a href="<?php echo $product_section['explore_link']; ?>">Explore</a>
                </div>
            </div>
        </section>
    <?php } ?>

    <?php 
        $featured_blogs = get_field('featured_blogs');
        if( $featured_blogs ): 
    ?>
        <section class="hm-blog-sec">
            <h2>Blog</h2>
            <div class="hm-blog-wrap">
                <div class="row">
                    <div class="hm-blog-slider">
                        <?php foreach( $featured_blogs as $post): 
                            setup_postdata($post); 
                            if(has_post_thumbnail()){ 
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(),'full');
                            }else{
                                $thumbnail_url = '';
                            }
                        ?>
                        <?php include(locate_template('component/art-card.php')); ?>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="view-all-btn">
                    <a href="<?php echo get_option('home'); ?>/blog/">View All</a>
                </div>
            </div>
        </section>
    <?php wp_reset_postdata(); endif; ?>


<?php /*
    <section class="cas-banner-sec clearfix">
        <div class="cas-banner-slider">
            <?php if( have_rows('homepage_slideshow') ): while( have_rows('homepage_slideshow') ): the_row(); ?>
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
    <section class="superior-sec clearfix">
        <div class="superior-lft">
            <h2>SUPERIOR <br/><span>HOMES</span></h2>
            <p><?php the_field('superior_homes_sub_title'); ?></p>
        </div>
        <div class="superior-rht">
            <div class="superior-block">
                <div class="row">
                    <?php if( have_rows('iconic_section') ): while( have_rows('iconic_section') ): the_row(); ?>
                        <div class="superior-grid text-center">
                            <div class="sg_item">
                                <div class="sup-icon">
                                    <img src="<?php the_sub_field('icon_image'); ?>" alt="<?php the_sub_field('icon_title'); ?>" class="img-responsive">
                                </div>
                                <span><?php the_sub_field('icon_title'); ?></span>
                            </div>
                        </div>
                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </section>
*/ ?>
    
<?php endif; wp_reset_query(); ?>
<?php get_footer(); ?>