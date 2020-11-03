<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title><?php wp_title('&raquo;','true','right'); ?><?php bloginfo('name'); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_url')?>/images/favicon.png">
	<link rel="shortcut icon" href="<?php bloginfo('template_url')?>/images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php bloginfo('template_url')?>/images/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Exo:wght@300;400;500;600;700;800;900&family=Muli:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php bloginfo('template_url')?>/assets/css/animation.css">
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<script type="text/javascript">
		var themedir_url = "<?php bloginfo('template_directory'); ?>";
		var home_url = "<?php echo get_option('home'); ?>";
	</script>

	<?php wp_head(); ?>
</head>
<body id="complan_body" <?php body_class(); ?>>
    <header class="header">
        <h1 class="logo tran">
            <a href="<?php echo get_option('home'); ?>">
                <img src="<?php bloginfo('template_url')?>/assets/img/logo.png" alt="Complan" class="img-responsive">
            </a>
        </h1>
        <nav id="menu">
            <?php wp_nav_menu( array('menu' => 'Main menu' )); ?>
        </nav>
        <a href="javascript:void(0)" class="mobilemenu-icon tran">
            <span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span><span>&nbsp;</span>
        </a>
        <div class="buy-now-btn">
            <a href="#" class="tran">Buy Now</a>
        </div>
        <div id="white_overlay"></div>
    </header>