<?php get_header(); ?>
	<section class="art-dtls-sec clearfix">
        <div class="art-dtls-block">
        	<?php if (have_posts()) : the_post(); ?>
            <div class="art-dtls-box clearfix">
                <div class="imgbox">
                    <?php if(has_post_thumbnail()){ the_post_thumbnail('full'); }else{ ?>
                        <img src="<?php bloginfo('template_url')?>/assets/img/blog-img-2.jpg" alt="<?php the_title(); ?>" class="img-responsive">
                    <?php } ?>
                </div>
                <div class="art-dtls-head">
                    <h3><?php the_title(); ?></h3>
                    <p>By <?php the_author(); ?> , <?php echo get_the_time('j F Y'); ?></p>
                </div>
                <div class="txt-content">
                    <?php the_content(); ?>
                </div>
                <div class="share-links">
                    <a href="#" class="fb-icon"></a>
                    <a href="#" class="tw-icon"></a>
                    <a href="#" class="insta-icon"></a>
                </div>
            </div>
            <?php endif; wp_reset_query(); ?>
        </div>
    </section>
    <section class="other-blog-sec clearfix">
        <h2>Other Blogs</h2>
        <div class="other-blog-wrap">
            <div class="row">
                <div class="hm-blog-slider">
                    <?php include(locate_template('component/art-card.php')); ?>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>