<?php if(is_front_page()){ ?>
<div class="hm-blog-block">
    <a href="<?php the_permalink(); ?>">
        <div class="imgbox" style="<?php if($thumbnail_url != ''){ echo 'background-image: url('.$thumbnail_url.')'; } ?>"></div>
        <div class="txt-content">
            <h3><?php the_title(); ?></h3>
            <?php the_excerpt(); ?>
        </div>
    </a>
</div>
<?php } else { ?>
<div class="hm-blog-block">
    <a href="<?php the_permalink(); ?>">
        <div class="imgbox" style="<?php if($thumbnail_url != ''){ echo 'background-image: url('.$thumbnail_url.')'; } ?>"></div>
        <div class="txt-content">
            <h3><?php the_title(); ?></h3>
            <span class="post-author">By <?php the_author(); ?> , <?php echo get_the_time('j F Y'); ?></span>
            <?php the_excerpt(); ?>
            <span class="readmore-btn">Read more</span>
        </div>
    </a>
</div>
<?php } ?>