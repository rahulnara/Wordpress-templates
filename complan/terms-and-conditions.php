<?php
/**
Template Name: Terms and Conditions Page
 */
get_header();
?>
<section class="comm-sec clearfix">
    <h2><?php the_title(); ?></h2>
    <?php if (have_posts()) :  the_post(); ?>
        <div class="comm-content">
            <?php the_content(); ?>
        </div>
    <?php endif; ?>
</section>
<?php get_footer(); ?>