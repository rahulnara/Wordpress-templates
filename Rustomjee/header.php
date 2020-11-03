<!DOCTYPE html>
<html>
<head>
	<title><?php bloginfo('name'); ?><?php wp_title('&raquo;', 'true', 'left'); ?></title>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link href="https://fonts.googleapis.com/css2?family=Martel+Sans:wght@200;300;400;600;700;900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300&family=Raleway:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/animation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/icomoon.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/responsive.css">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="header clearfix">
        <div class="logo">
			<?php
				if (function_exists('the_custom_logo')) {
				the_custom_logo(); } 
			?>
		</div>
        <a href="javascript:void(0)" class="mobilemenu-icon animated fadeInUp">
            <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
        </a>
        <div class="close-icon"></div>
        <div class="header-menu-block">
		<nav id="menu">
                <ul>
                    <li class="has_child">
                        <a href="https://digitalkinnect.in/rustomjee/about-us">About us</a>
                        <div class="hc_cta"></div>
                        <ul>
                            <li><a href="https://digitalkinnect.in/rustomjee/about-us">The Company</a></li>
                            <li><a href="#">Leadership</a></li>
                            <li><a href="https://digitalkinnect.in/rustomjee/home/wyrt">With You, Right Through</a></li>
                            <li><a href="https://digitalkinnect.in/rustomjee/home/itsthoughtful">It's Thoughtful, It's Rustomjee</a></li>
                            <li><a href="https://digitalkinnect.in/rustomjee/about-us/corporate-social-responsibility">Corporate Social Responsibility</a></li>
                            <li><a href="https://digitalkinnect.in/rustomjee/home/education">Education Initiatives</a></li>
                            <li><a href="#">Our Partners</a></li>
                            <li><a href="#">Awards</a></li>
                            <!-- <li><a href="#">Finance</a></li> -->
                            <li><a href="#">News &amp; Media</a></li>
                        </ul>
                    </li>
                    <li class="has_child">
                        <a href="https://digitalkinnect.in/rustomjee/residential-property">Residential Property</a>
                        <div class="hc_cta"></div>
                        <ul>      
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-seasons">Rustomjee Seasons</a></li>
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-paramount">Rustomjee Paramount</a></li>                                        
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-crown">Rustomjee Crown</a></li>                                        
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-summit">Rustomjee Summit</a></li>                                        
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-urbania">Rustomjee Urbania</a></li>                                        
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-elements">Rustomjee Elements</a></li>                         
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-property/rustomjee-global-city">Rustomjee Global City</a></li>                                  
                        </ul>
                    </li>
                    <li class="has_child">
                        <a href="https://digitalkinnect.in/rustomjee/commercial-property">Commercial Property</a>
                        <div class="hc_cta"></div>
                        <ul>
                            <li><a href="https://digitalkinnect.in/rustomjee/rustomjee-commercial-property/rustomjee-central-park">Rustomjee Central Park Business Spaces</a></li>                            
                        </ul>
                    </li>
                    <li class="has_child">
                        <a href="https://digitalkinnect.in/rustomjee/nri-corner/why-invest">NRI Corner</a>
                        <div class="hc_cta"></div>
                        <ul>
                            <li><a href="https://digitalkinnect.in/rustomjee/nri-corner/why-invest">Why Invest</a></li>
                            <li><a href="#">EMI Calculator</a></li>
                            <li><a href="#">SDR Calculator  </a></li>
                            <li><a href="#">FAQs </a></li>
                        </ul>
                   </li>
                   <li><a href="https://digitalkinnect.in/rustomjee/loyalty-program">Loyalty Program</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>
            </nav>
            <div class="search-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                    <path fill="#000000" d="M22.814 21.004l-5.69-5.696c2.862-3.724 2.575-9.102-.857-12.507C14.39.923 11.975 0 9.527 0 7.08 0 4.666.923 2.79 2.8c-3.719 3.724-3.719 9.77 0 13.494 1.876 1.878 4.291 2.8 6.739 2.8 2.034 0 4.069-.636 5.753-1.94l5.722 5.664c.254.255.572.382.921.382.318 0 .668-.127.922-.382.477-.477.477-1.305-.032-1.814zM9.56 16.517c-1.876 0-3.592-.732-4.927-2.037-2.702-2.705-2.702-7.129 0-9.865C5.936 3.31 7.684 2.578 9.56 2.578c1.875 0 3.592.732 4.927 2.037 1.335 1.304 2.034 3.055 2.034 4.932 0 1.878-.731 3.596-2.034 4.933-1.304 1.337-3.084 2.037-4.927 2.037z"></path>
                </svg>
            </div>
            <div class="contact-us-btn">
                <a href="#">Contact us</a>
            </div>
        </div>
        <div class="search-form">
            <form role="search" method="get" id="searchform" action="/">
                <input type="text" name="s" value="" id="search" placeholder="Search for the Property" autocomplete="off" class="search-input" required="">
                <input type="hidden" name="post_type" value="post" />
                <button type="submit" value="" id="search-btn" class="search-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <path fill="#000000" d="M22.814 21.004l-5.69-5.696c2.862-3.724 2.575-9.102-.857-12.507C14.39.923 11.975 0 9.527 0 7.08 0 4.666.923 2.79 2.8c-3.719 3.724-3.719 9.77 0 13.494 1.876 1.878 4.291 2.8 6.739 2.8 2.034 0 4.069-.636 5.753-1.94l5.722 5.664c.254.255.572.382.921.382.318 0 .668-.127.922-.382.477-.477.477-1.305-.032-1.814zM9.56 16.517c-1.876 0-3.592-.732-4.927-2.037-2.702-2.705-2.702-7.129 0-9.865C5.936 3.31 7.684 2.578 9.56 2.578c1.875 0 3.592.732 4.927 2.037 1.335 1.304 2.034 3.055 2.034 4.932 0 1.878-.731 3.596-2.034 4.933-1.304 1.337-3.084 2.037-4.927 2.037z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </header>