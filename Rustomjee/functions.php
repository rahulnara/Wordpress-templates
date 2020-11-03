<?php 



//Includes

include_once 'includes/remove-junk.php';

include_once 'includes/customize.php';

include_once 'includes/custom-admin-logo.php';



//Theme Support

if( function_exists('add_theme_support') ){

    add_theme_support('menus');

    add_theme_support('post-thumbnails');



//Add Image Sizes

  add_image_size( 'thumbnail-832x600', '832', '600', array( "1", ""), true);

  add_image_size( 'thumbnail-1000x374', '1000', '374', array( "1", ""), true);

  add_image_size( 'thumbnail-506x370', '506', '370', array( "1", ""), true);

  add_image_size( 'thumbnail-96x96', '96', '96', array( "1", ""), true);





//Allow Shortcode In Widget Area

    add_filter('widget_text','do_shortcode');

}



//Register Navigation Location

function register_theme_menus(){

	register_nav_menus( array(

		'header-menu'	=>	__('Header Menu'),

		'footer-menu'	=>	__('Footer Menu'),

		'about-menu'	=>	__('About Menu'),

		'residential-property-menu'	=>	__('Residential Property Menu'),

		'commercial-property-menu'	=>	__('Commercial Property Menu'),

		'all-property-menu'	=>	__('All Property Menu'),

		'nri-corner-menu'	=>	__('NRI Corner Menu'),

		'typology-menu'	=>	__('Typology Menu'),

		'blog-menu'	=>	__('Blog Menu'),

	) );

}

add_action( 'after_setup_theme', 'register_theme_menus' );



function favicon() {

	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_template_directory_uri().'/assets/img/favicon.ico" />';

}

add_action('wp_head', 'favicon');

add_action('login_head', 'favicon');

add_action('admin_head', 'favicon');



// Show the short Description



function excerpt_new($num){

  $excerpt = get_the_content();

  $excerpt = strip_shortcodes($excerpt);

  $excerpt = strip_tags($excerpt);

  $the_str = substr($excerpt, 0, $num);

  echo $the_str ."...";

}



function excerpt_new_meta($num){

  $excerpt = get_the_content();

  $excerpt = strip_shortcodes($excerpt);

  $excerpt = strip_tags($excerpt);

  $the_str = substr($excerpt, 0, $num);

  return trim($the_str);

}



// show the short title  



function title($num) {

    $limit = $num+1;

    $title = explode(' ', get_the_title(), $limit);

    array_pop($title);

    $title = implode(" ",$title)."...";

    echo $title;

}



// Frontend Admin Bar



show_admin_bar(false);



// Widget sidebars 



if ( function_exists('register_sidebars') )

    register_sidebar(array('name'=>'Sidebar Widget',

   'before_widget' => '<div id="%1$s" class="widget-box">',

   'after_widget' => '</div>',

   'before_title' => '<h4 class="widget-title">',

   'after_title' => '</h4>',

  ));



  function rst_my_load_more_scripts() {

     global $wp_query; 

    //wp_enqueue_script('jquery');

    wp_register_script( 'my_loadmore', get_stylesheet_directory_uri() . '/assets/js/myloadmore.js', array('jquery') );

    wp_localize_script( 'my_loadmore', 'rst_loadmore_params', array(

      'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php',

      'posts' => json_encode( $wp_query->query_vars ),

      'current_page' => get_query_var( 'paged' ) ? get_query_var('paged') : 1,

      'max_page' => $wp_query->max_num_pages

    ) );

        wp_enqueue_script( 'my_loadmore' );

  }

   add_action( 'wp_enqueue_scripts', 'rst_my_load_more_scripts' );



  function rst_loadmore_ajax_handler($car_args){
      if(isset($_POST['query'])){
          $args = json_decode( stripslashes( $_POST['query'] ), true );
          $args['paged'] = $_POST['page'] + 1;
          $args['post_status'] = 'publish';
      }else{
          $args = $car_args;
      }

      query_posts( $args );

      if( have_posts() ) :
          while( have_posts() ): the_post();
              $category = reset(get_the_category($post->ID));
              $category_id = $category->cat_ID;
              include(locate_template('components/art-card.php'));
          endwhile;
      endif;

      if(isset($_POST['recall']) && $_POST['recall'] == 1){
          exit;
      }
  }

add_action('wp_ajax_loadmore', 'rst_loadmore_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'rst_loadmore_ajax_handler');