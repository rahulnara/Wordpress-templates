<?php
add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebars') )
register_sidebar(array('name'=>'Sidebar',
	'before_widget' => '<div id="%1$s" class="widgetbox clearfix">',
	'after_widget' => '</div>',
	'before_title' => '<h4 class="widget_title">',
	'after_title' => '</h4>'
));

function my_function_admin_bar(){
    return false;
}

add_filter( 'show_admin_bar' , 'my_function_admin_bar');

function my_widget_content_wrap($content) {
    $content = '<div class="widget_body">'.$content.'</div>';
    return $content;
}

add_filter('widget_text', 'my_widget_content_wrap');
add_filter('single_template', create_function('$t', 'foreach( (array) get_the_category() as $cat ) { if ( file_exists(TEMPLATEPATH . "/single-{$cat->term_id}.php") ) return TEMPLATEPATH . "/single-{$cat->term_id}.php"; } return $t;' )); 

! defined( 'ABSPATH' ) AND exit;

if (function_exists('st_makeEntries')) : add_shortcode('sharethis', 'st_makeEntries'); endif;

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );


if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
      'page_title'  => 'Theme Options',
      'menu_title'  => 'Theme Options',
      'menu_slug'   => 'theme-options',
      'capability'  => 'edit_posts',
      'redirect'    => false
    ));
    acf_add_options_sub_page(array(
      'page_title'  => 'Theme Header',
      'menu_title'  => 'Header',
      'parent_slug' => 'theme-options',
    ));
    
    acf_add_options_sub_page(array(
      'page_title'  => 'Theme Footer',
      'menu_title'  => 'Footer',
      'parent_slug' => 'theme-options',
    ));
}

function remove_img_attr ($html)
{
    return preg_replace('/(width|height)="\d+"\s/', "", $html);
}
 
add_filter( 'post_thumbnail_html', 'remove_img_attr' );

function meks_disable_srcset( $sources ) {
    return false;
}
 
add_filter( 'wp_calculate_image_srcset', 'meks_disable_srcset' );

remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);

function stripQuotes($text) {
	$unquoted = preg_replace('/^(\'(.*)\'|"(.*)")$/', '$2$3', $text);
	return $unquoted;
} 

function remove_head_scripts() { 
   remove_action('wp_head', 'wp_print_scripts'); 
   remove_action('wp_head', 'wp_print_head_scripts', 9); 
   remove_action('wp_head', 'wp_enqueue_scripts', 1);

   add_action('wp_footer', 'wp_print_scripts', 5);
   add_action('wp_footer', 'wp_enqueue_scripts', 5);
   add_action('wp_footer', 'wp_print_head_scripts', 5); 
} 
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );

function my_deregister_scripts(){
  wp_deregister_script( 'wp-embed' );
}
add_action( 'wp_footer', 'my_deregister_scripts' );

//remove migrate jquery
function isa_remove_jquery_migrate( &$scripts) {
    if(!is_admin()) {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.12.4' );
    }
}
add_filter( 'wp_default_scripts', 'isa_remove_jquery_migrate' );

add_image_size( 'medium', 500, 300, true );

/*
add_action('wpcf7_before_send_mail','wpcf7_form_submission',10,1);
function wpcf7_form_submission($contact_form){
    $wpcf7 = WPCF7_ContactForm::get_current();
    $submission = WPCF7_Submission::get_instance();
    //Below statement will return all data submitted by form.
    $sub_data = $submission->get_posted_data();
    //suppose you have a field which name is 'email' then you can access it by using following statement.
    $user_passed_email =  $sub_data['email'];
    //var_dump($sub_data); 
    $form_id = $sub_data['_wpcf7'];

    switch ($form_id) {
      case '47':
        $data = array(
          'sell_do[form][lead][name]' => $sub_data['fullname'],
          'sell_do[form][lead][email]' => $sub_data['email'],
          'sell_do[form][lead][phone]' => $sub_data['mobile'],
          'sell_do[form][note][content]' => $sub_data['message']
        );
        break;

      case '48':
        $data = array(
          'sell_do[form][lead][name]' => $sub_data['inq_name'],
          'sell_do[form][lead][email]' => $sub_data['inq_email'],
          'sell_do[form][lead][phone]' => $sub_data['inq_phone']
        );
        break;

      case '53':
        $data = array(
          'sell_do[form][lead][name]' => $sub_data['prc_name'],
          'sell_do[form][lead][email]' => $sub_data['prc_email'],
          'sell_do[form][lead][phone]' => $sub_data['prc_phone'],
          'sell_do[form][lead][config]' => $sub_data['config'],
          'sell_do[form][lead][area]' => $sub_data['area']
        );
        break;
      
      default:
        
        break;
    }

    $data['sell_do[campaign][srd]'] = $sub_data['srd'];
    $data['sell_do[form][lead][project_name]'] = $sub_data['project_name'];
    $data['sell_do[form][lead][project_id]'] = $sub_data['project_id'];
    $data['sell_do[form][lead][source_url]'] = $sub_data['source_url'];
    $data['api_key'] = '72638db6a64582abbd4e213d567ce963';

    $url = "https://app.sell.do/api/leads/create";
    $curl = curl_init();
    $url = sprintf("%s?%s", $url, http_build_query($data));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_HTTPGET, 1);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

    $result = curl_exec($curl);

    curl_close($curl);
}

function cleanmobile($string) {
   $string = str_replace(' ', '', $string);
   return preg_replace('/[^A-Za-z0-9\-]/', '', $string);
}*/

?>