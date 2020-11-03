<?php
/**
Template Name: Home Page
 */
get_header(); ?>
<?php $d_exclude = array(); ?>
<section class="img_content_slider_main clearfix">
        <div class="img_content_slider clearfix">
            <?php 
                $query = new WP_Query( array( 
                    'category_name' => '',
                    'orderby' => 'rand',
                    'post_status' => 'publish',
                    'posts_per_page' => 3,
                    'post__not_in' => $d_exclude,
                ) );
                if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $d_exclude[] = $post->ID;
            ?>
            <div class="img_content_slide">
                <div class="ics_img" style="background-image: url(<?php the_post_thumbnail_url(array(350, 192)); ?>);"></div>
                <div class="ics_content">
                    <div class="ics_content_in">
                        <h3><?php the_title(); ?></h3>
                        <span class="ics_blog_meta clearfix"><?php echo get_the_date( 'F j, Y' ); ?> by <?php the_author(); ?></span>
                        <p><?php excerpt_new(150); ?></p>
                        <a href="<?php the_permalink(); ?>" class="btn moving_arr">Read more <span class="ex-arrow"></span></a>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <div class="ret-slide-arrow img_content_slider_nav">
            <button type="button" data-role="none" id="prvarrow5" aria-label="Previous" role="button" style="display: block;" class="slick-arrow slick-disabled" aria-disabled="true"></button>
            <button type="button" data-role="none" id="nxtarrow5" aria-label="Next" role="button" style="display: block;" class="slick-arrow" aria-disabled="false"></button>
            <div class="pagingInfo text-center" id="pagingInfo6"></div>
        </div>
    </section>
    <section class="blog_listing_main clearfix">
        <div class="blog_list_filters clearfix">
            <ul class="desk_blog_filter">
                <li><a href="#">All</a></li>
                <li><a href="/commercial">Commercial</a></li>
                <li><a href="/living">Living</a></li>
                <li><a href="/corporate">Corporate</a></li>
            </ul>
            <div class="mob_blog_filter">
                <select name="mob_blog_category" id="mob_blog_category">
                    <option value="all">All</option>
                    <option value="commercial">Commercial</option>
                    <option value="living">Living</option>
                    <option value="corporate">Corporate</option>
                </select>
            </div>
        </div>
        <div class="blog_items_list clearfix">
            <?php rst_loadmore_ajax_handler(); ?>
            <?php
                global $wp_query;
                if (  $wp_query->max_num_pages > 1 )
                    echo '<div class="load_more_blog_wrap">
                <a href="javascript:void(0)" class="btn">Load more</a>
            </div>'; ?>
        </div>
    </section>
<?php get_footer(); ?>