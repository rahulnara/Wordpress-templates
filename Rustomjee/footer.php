<section class="sitemap-footer">
	<div class="sitemap-inn-wrap clearfix">
		<div class="sitemap-links">
			<ul>
				<li><a href="#">Site Map </a></li>
				<li><a href="#">Terms & Conditions</a></li>
				<li><a href="#">Privacy Policy</a></li>
			</ul>
		</div>
		<div class="social-media">
			<a href="#" class="youtub-icon"></a>
			<a href="#" class="in-icon"></a>
			<a href="#" class="insta-icon"></a>
			<a href="#" class="tw-icon"></a>
		</div>
	</div>
</section>
<footer class="footer clearfix">
<div class="footer-inn-wrap clearfix">
            <div class="more-btn text-center">
                <a href="javascript:void(0)">More</a>
            </div>
            <div class="footer-wrap">
                <div class="row">
                    <div class="col-md-2 col-sm-6 ft-grid">
                        <div class="footer-links-block">
                            <h2>About Us</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'about-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  ft-grid">
                        <div class="footer-links-block">
                            <h2>Residential Property</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'residential-property-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  ft-grid">
                        <div class="footer-links-block">
                            <h2>Commercial Property</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'commercial-property-menu' ) ); ?>
                            </div>
                            <div class="clear20"></div>
                            <h2>Typology</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'typology-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  ft-grid">
                        <div class="footer-links-block">
                            <h2>All Properties</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'all-property-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  ft-grid">
                        <div class="footer-links-block">
                            <h2>NRI Corner</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'nri-corner-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-6  ft-grid">
                        <div class="footer-links-block">
                            <h2>Blog</h2>
                            <div class="footer-links clearfix">
								<?php wp_nav_menu( array( 'theme_location'=>'blog-menu' ) ); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-menu">
					<?php wp_nav_menu( array( 'theme_location'=>'footer-menu' ) ); ?>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright text-center">
        <p>&copy; Copyright <?php echo date('Y'); ?>, <?php bloginfo('Name'); ?>. All Rights Reserved.</p>
    </div>
<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery-ui.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/slick.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
</body>
</html>