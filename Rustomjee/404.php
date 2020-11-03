<?php get_header(); ?>
<div class="404-wrapper">
    <div class="container">
        <div class="wrap-404 text-center">
            <h2 class="nf404-title-1 mb-10">Oops!</h2>
            <h3 class="nf404-title-2 mb-20">We can't find the page you're looking for <img src="<?php bloginfo('template_directory'); ?>/assets/img/bad-smile.png" /></h3>
            <div class="imgbox mb-20">
                <img src="<?php bloginfo('template_directory'); ?>/assets/img/404-error.png" />
            </div>
            <a href="<?php bloginfo('home'); ?>">Click here to go to the home page</a>
        </div>
    </div>
</div>
<?php get_footer(); ?>