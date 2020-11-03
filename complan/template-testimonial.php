<?php
/**
Template Name: Testimonial Template
 */
get_header();
?>
<?php if (have_posts()) : the_post(); ?>
    <section class="testimonials-sec clearfix">
        <div class="heading">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </div>
        <div class="testimonials-wrap">
            <div class="testimonials-slider">
            	<?php if( have_rows('testimonials') ): while( have_rows('testimonials') ): the_row(); ?>
	                <div class="testimonials-block">
	                    <div class="imgbox" style="background-image: url(<?php the_sub_field('testimonial_image'); ?>);">
	                    	<?php 
		                    	if(get_sub_field('youtube_video_url')){ 
		                        	echo '<a href="'.get_sub_field('youtube_video_url').'" class="play-icon" rel="lightbox"></a>';
		                        }
	                        ?>
	                    </div>
	                    <div class="testimonials-content">
	                        <h3><?php the_sub_field('testimonial_author'); ?></h3>
	                        <span class="txt-1"><?php the_sub_field('author_job_title'); ?></span>
	                        <div class="testimonials-desc">
	                            <?php the_sub_field('testimonial_description'); ?>
	                        </div>
	                        <span class="testm-date"><?php the_sub_field('testimonial_date'); ?></span>
	                    </div>
	                </div>
	            <?php endwhile; endif; ?>
            </div>
            <div class="cm-arrow">
                <button type="button" data-role="none" id="prvarrow" aria-label="Previous" role="button" style="display: block;"></button>
                <button type="button" data-role="none" id="nxtarrow" aria-label="Next" role="button" style="display: block;"></button>
            </div>
        </div>
    </section>
<?php wp_reset_postdata(); endif; ?>
<?php get_footer(); ?>