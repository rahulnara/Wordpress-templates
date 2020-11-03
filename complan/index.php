<?php get_header(); ?>
	<section class="art-blog-sec clearfix">
        <?php /*<div class="art-blog-banner-wrap" style="background-image:url(<?php if(get_field('blog_page_top_image', 'option')){ the_field('blog_page_top_image', 'option'); }else{ get_bloginfo('template_url').'/assets/img/blog-banner-img.png'; } ?>);"></div> */ ?>
        <div class="art-blog-block" id="single_blog_block">
        	<?php if (have_posts()) : ?>
	            <div class="art-blog-left">
	            	<?php while (have_posts()) : the_post(); ?>
		                <div class="art-card-box">
		                    <div class="art-card-head clearfix">
		                        <div class="art-card-head-right">
		                            <h3><?php the_title(); ?></h3>
		                            <p>By <?php the_author(); ?> , <?php echo get_the_time('j F Y'); ?></p>
		                        </div>
		                        <div class="publ-date">
		                            <span class="publ-day"><?php echo get_the_time('j'); ?></span>
		                            <span class="publ-month"><?php echo get_the_time('F'); ?></span>
		                        </div>
		                    </div>
		                    <div class="imgbox">
		                    	<?php if(has_post_thumbnail()){ the_post_thumbnail('full'); }else{ ?>
		                        	<img src="<?php bloginfo('template_url')?>/assets/img/blog-img-2.jpg" alt="<?php the_title(); ?>" class="img-responsive">
		                        <?php } ?>
		                    </div>
		                    <div class="txt-content">
		                        <?php the_excerpt(); ?>
		                        <a href="<?php the_permalink(); ?>" class="read-more-btn">Read More</a>
		                    </div>
		                </div>
		            <?php endwhile; ?>
		            <div class="clearfix"></div>
		            <div class="post_navigation clearfix">
		            	<?php wp_pagenavi(); ?>
		            </div>
	            </div>
	        <?php endif; ?>
           	<?php get_sidebar(); ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>
<?php get_footer(); ?>