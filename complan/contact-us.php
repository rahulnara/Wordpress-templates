<?php
/**
Template Name: Contact Us Page
 */
get_header();
?>
<section class="comm-sec clearfix" id="contact-us-sec">
    <?php if(wp_is_mobile()){ ?>
        <div class="map">
            <img src="<?php echo bloginfo('template_url'); ?>/assets/img/map.jpg" alt="" class="img-responsive">
        </div>
    <?php } ?>
    <h2><?php the_title(); ?></h2>
    <div class="contact-us-wrap clearfix">
        <div class="contact-us-left">
            <div class="contact-form clearfix">
                <form action="" id="contact-form" method="POST">
                    <div class="form-group">
                        <input type="text" name="name1" id="name1" placeholder="Name" class="inputbox">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email1" id="email1" placeholder="E-mail" class="inputbox">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" cols="30" rows="6" placeholder="Details" class="inputbox"></textarea>
                    </div>
                    <div class="form-group-btn">
                        <input type="submit" value="Submit" id="sub-btn" class="sub-btn">
                    </div>
                </form>
            </div>
            <div class="contact-details">
                <h4>Address</h4>
                <p>69/A, S.J. Road, opp Rcity Mall, malad (w) Mumbai - 400034</p>
                <div class="share-links">
                    <h4>Follow Us</h4>
                    <a href="#" class="tw-icon"></a>
                    <a href="#" class="insta-icon"></a>
                    <a href="#" class="fb-icon"></a>
                </div>
            </div>
        </div>
        <div class="contact-us-right">
            <?php if(!wp_is_mobile()){ ?>
                <div class="map">
                    <img src="<?php echo bloginfo('template_url'); ?>/assets/img/map.jpg" alt="" class="img-responsive">
                </div>
            <?php } ?>
            <div class="contact-details">
                <h4>E-mail</h4>
                <a href="mailto:info@complan.com">info@complan.com</a>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>