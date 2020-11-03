<?php 
function my_login_logo() { ?>
<style type="text/css">
#login h1 a, .login h1 a {background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);height:78px;width:267px;background-repeat: no-repeat;background-size: 267px;}
</style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );