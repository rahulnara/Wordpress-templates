<?php get_header(); ?>
<section class="blog_detail_main clearfix">
	<?php if (have_posts()) : the_post();
		 $category = reset(get_the_category($post->ID));
		 $category_id = $category->cat_ID;
	?>
        <div class="blog_detail_content">
            <div class="blog_title">
                <h1>IGNIS Launched at Rustomjee Elements</h1>
                <span class="ics_blog_meta clearfix ics-mt-dk">March 17, 2020 by Rustomjee Spaces</span>
                <a href="#" class="blog-share-icon"><i class="icon icon-share-alt"></i></a>
            </div>
            <div class="blog_content">
				<?php $cats = get_the_category($post->ID); ?>
                <a href="<?php echo get_category_link( $category_id ); ?>" class="blog_cat_btn btn_<?php echo $cats[0]->slug; ?>"><?php echo $cats[0]->name; ?></a>
                <div class="imgbox">
					<img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" class="img-responsive" >
                </div>
                <div class="post_content">
                    <span class="ics_blog_meta clearfix ics-mt-mb"><?php echo get_the_date( 'F j, Y' ); ?> by <?php the_author(); ?></span>
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="blog_share clearfix">
                <span>Share:</span>
                <a href="https://facebook.com/sharer/sharer.php?u=<?php echo the_permalink(); ?>&title=<?php the_title(); ?>" target="_blank" class="facebook"><i class="icon icon-facebook"></i></a>
                <a href="https://twitter.com/intent/tweet/?url=<?php echo the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="tweeter"><i class="icon icon-twitter"></i></a>
                <a href="#" target="_blank" class="instagram"><i class="icon icon-instagram"></i></a>
                <a href="https://pinterest.com/pin/create/button/?url=<?php echo the_permalink(); ?>&media=<?php the_post_thumbnail_url(array(150, 150)); ?>&description=<?php the_excerpt(); ?>" target="_blank" class="pinterest"><i class="icon icon-pinterest-p"></i></a>
            </div>
		</div>
	<?php endif; ?>

        <div class="sidebar">
            <div class="widgetbox clearfix category_widget">
                <h3 class="widget_title">Categories</h3>
                <div class="category_list clearfix">
                    <ul>
						<li><a href="#">All</a></li>
						<li><a href="/commercial">Commercial</a></li>
						<li><a href="/living">Living</a></li>
						<li><a href="/corporate">Corporate</a></li>
                    </ul>
                </div>
            </div>

            <div class="widgetbox clearfix">
                <h3 class="widget_title">Latest posts</h3>
                <div class="latest_posts clearfix">
                    <ul>
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
                        <li>
                            <a href="<?php the_permalink(); ?>">
								<img src="<?php the_post_thumbnail_url(array(96,96)); ?>" alt="<?php the_title(); ?>" class="img-responsive" >
                                <span><?php the_title(); ?></span>
                            </a>
						</li>
						<?php endwhile; endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog detail ends here -->

    <!-- Related Blogs starts here -->
    <section class="related_blogs clearfix">
        <div class="common_heading text-center">
            <h2>Related Blogs</h2>
        </div>
        <div class="clearfix"></div>
        <div class="related_blogs_wrap clearfix">
            <div class="rlts_blog_item_slider">
				<?php 
					$query = new WP_Query( array( 
						'category_name' => '',
						'orderby' => 'rand',
						'post_status' => 'publish',
						'posts_per_page' => 3,
						'post__not_in' => $d_exclude,
					) );
					if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $d_exclude[] = $post->ID;
					$category = reset(get_the_category($post->ID));
		 			$category_id = $category->cat_ID;
				?>
                <div class="related_blog_item">
                    <div class="related_blog_item_in">
						<?php $cats = get_the_category($post->ID); ?>
						<a href="<?php echo get_category_link( $category_id ); ?>" class="blog_cat_btn btn_<?php echo $cats[0]->slug; ?>"><?php echo $cats[0]->name; ?></a>
                        <div class="imgbox">
							<img src="<?php the_post_thumbnail_url(array(506,370)); ?>" alt="<?php the_title(); ?>" class="img-responsive" >
                        </div>
                        <div class="rbi_content">
                            <h3><?php the_title(); ?></h3>
                            <span class="rel_blog_meta"><?php echo get_the_date( 'F j, Y' ); ?> by <?php the_author(); ?></span>
                            <a href="<?php the_permalink(); ?>" class="btn moving_arr">Read more <span class="ex-arrow"></span></a>
                        </div>
                    </div>
				</div>
				<?php endwhile; endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>