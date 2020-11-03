<div class="blog_item clearfix">
    <?php $cats = get_the_category($post->ID); ?>
    <a href="<?php echo get_category_link( $category_id ); ?>" class="blog_cat_btn btn_<?php echo $cats[0]->slug; ?>"><?php echo $cats[0]->name; ?></a>
    <div class="imgbox">
        <img src="<?php the_post_thumbnail_url(array(1000, 374)); ?>" alt="<?php the_title(); ?>" class="img-responsive" >
    </div>
    <div class="blog_item_data clearfix">
        <h3><?php the_title(); ?></h3>
        <span class="ics_blog_meta clearfix"><?php echo get_the_date( 'F j, Y' ); ?> by <?php the_author(); ?></span>
        <p><?php excerpt_new(150); ?></p>
        <a href="<?php the_permalink(); ?>" class="btn moving_arr">Read more <span class="ex-arrow"></span></a>
    </div>
</div>