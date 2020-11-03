<div class="art-blog-right">
    <?php if(!wp_is_mobile()){ ?>
        <div class="search-form">
            <form role="search" method="get" id="searchform" action="<?php echo home_url(); ?>">
                <input type="text" name="s" value="" id="ss" placeholder="Search" autocomplete="off" class="search-input"
                    required="">
                <input type="submit" value="" id="search-btn" class="search-btn">
            </form>
        </div>
    <?php } ?>
    <div class="blog-tab">
        <ul class="blog-tab-header clearfix">
            <li><a href="javascript:void(0)" data-ref="tab-1" class="active">Popular Posts</a></li>
            <li><a href="javascript:void(0)" data-ref="tab-2">Recent Posts</a></li>
        </ul>
        <div class="blog-tab-body">
            <div class="blog-tab-panel" id="tab-1" style="display:block;">
                <?php 
                    $popular_posts = get_field('popular_posts', 'option');
                    if( $popular_posts ): foreach( $popular_posts as $post): 
                        setup_postdata($post);
                ?>
                    <div class="pop-art-box">
                        <a href="#">
                            <div class="imgbox" style="background-image:url(<?php echo get_the_post_thumbnail_url($post->ID,'thumbnail'); ?>);"></div>
                            <div class="txt-content">
                                <h3><?php the_title(); ?></h3>
                                <span><?php echo get_the_time('j F Y'); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; wp_reset_postdata(); endif; ?>
            </div>
            <div class="blog-tab-panel" id="tab-2">
                <?php
                    $recent_posts = wp_get_recent_posts(array(
                        'numberposts' => 4,
                        'post_status' => 'publish'
                    ));
                    foreach($recent_posts as $post) : 
                ?>
                    <div class="pop-art-box">
                        <a href="<?php echo get_permalink($post['ID']) ?>">
                            <div class="imgbox" style="background-image:url(<?php echo get_the_post_thumbnail_url($post['ID'],'thumbnail'); ?>"></div>
                            <div class="txt-content">
                                <h3><?php echo $post['post_title'] ?></h3>
                                <span><?php echo get_the_time('j F Y', $post['ID']); ?></span>
                            </div>
                        </a>
                    </div>
                <?php endforeach; wp_reset_query(); ?>
            </div>
        </div>
    </div>
    <div class="top-cat-wrap">
        <h2>Categories</h2>
        <ul>
            <?php 
                $categories = get_categories(array(
                    'orderby' => 'name',
                    'order'   => 'ASC'
                ));
                foreach( $categories as $category ) {
                    echo '<li><a href="'.esc_url( get_category_link( $category->term_id ) ).'">'.$category->name.'</a></li>';
                }
            ?>
        </ul>
    </div>
</div>