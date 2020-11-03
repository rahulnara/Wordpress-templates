<?php get_header(); ?>
	<section class="error_container clearfix">
        <div class="error-wrap" id="error_container_in">
            <h2>Oops!</h2>
            <p>We can't find the page you're looking for</p>
            <a href="<?php echo get_option('home'); ?>">Click here to go to the home page</a>
        </div>
    </section>
<?php get_footer(); ?>