<?php get_header(); ?>
<section class="home-banner">
	<div class="hm-slider clearfix">
        <?php 
            $ct_cnt = 0;
			$query = new WP_Query( array( 
				'post_status' => 'publish',
				'posts_per_page' => 3,
			) );
            if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $ct_cnt++;
            if($ct_cnt < 3)
		?>
	    <div class="hmbox">
			<div class="imgbox">
				<img src="<?php the_post_thumbnail_url(array(1100, 450)); ?>" alt="<?php the_title(); ?>" class="img-responsive" >
			</div>
			<div class="hm-banner-overlay">
				<h2 class="title"><?php the_title(); ?></h2>
				<p><?php excerpt_new(75); ?></p>
				<a href="<?php the_permalink(); ?>" class="learn-more-btn">Read More</a>
			</div>
		</div>
	    <?php endwhile;	endif; wp_reset_postdata(); ?>
	</div>
</section>
<div class="cat-wrap">
	<div class="container">
		<div class="lft-sec">
			<div class="row">
		        <div class="col-xs-12">
		            <div class="heading">
		                <h2 class="title"><?php the_field('featured_article_title'); ?></h2>
		            </div>
		            <?php 
                        if ($query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); $ct_cnt++;
                        if($ct_cnt > 3)
					?>
		            <div class="featured-art-block">
		                <a href="<?php the_permalink(); ?>" class="clearfix">
		                    <div class="imgbox">
		                        <img src="<?php the_post_thumbnail_url(array(200, 150)); ?>" alt="<?php the_title(); ?>" class="img-responsive" >
		                    </div>
		                    <div class="txt-content">
		                        <h3 class="title"><?php the_title(); ?></h3>
		                        <p><?php excerpt_new(175); ?></p>
		                        <span class="readmore-1">Read More</span>
		                    </div>
		                </a>
		            </div>
                    <?php endwhile;	?>
                        <div class="clearfix"></div>
                        <div class="post_navigation clearfix">
                            <?php wp_pagenavi(); ?>
                        </div>
                    <?php endif; wp_reset_postdata(); ?>
		        </div>
		    </div>
		</div>
		<div class="rht-sec">
			<?php include(locate_template('sidebar.php')); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>