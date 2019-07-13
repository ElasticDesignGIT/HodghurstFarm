<?php

/**
 *
 * @package WordPress
 * @subpackage hodghurstv1
 * @since Hodhurst Version 1
 */


/**
 * Set the content width based on the theme's design and stylesheet.
 */
add_filter('protected_title_format', 'blank');
function blank($title) {
       return '%s';
}

function register_my_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'register_my_menu' );

/*Custom Featured photo sizes*/
add_theme_support( 'post-thumbnails' );
add_image_size( 'profile', 600, 400, true );

if (class_exists('MultiPostThumbnails')) {
  new MultiPostThumbnails(array(
  'label' => 'Secondary Featured Image',
  'id' => 'secondary-image',
  'post_type' => 'page'
   ) );
 }



// if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
// function my_jquery_enqueue() {
//    wp_deregister_script('jquery');
//    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://code.jquery.com/jquery-latest.min.js", false, null);
//    wp_enqueue_script('jquery');
// }

/**
 * Deregister WordPress default jQuery
 * Register and Enqueue Google CDN jQuery
 */
function pp_js () {
  wp_deregister_script( 'jquery' );
  wp_register_script( 'jquery', "https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null, true  );
  wp_enqueue_script( 'jquery' );
  //wp_enqueue_script('custom',get_template_directory_uri().'/assets/scripts/jquery.prettyPhoto.js',array('jquery'), '1.0', true);
  wp_enqueue_script('modernizr-2.8.3',get_template_directory_uri().'/assets/scripts/modernizr-2.8.3.min.js');
  wp_enqueue_script('custom',get_template_directory_uri().'/assets/scripts/custom.js',array('jquery'), '1.0', true);
}


add_action('wp_enqueue_scripts','pp_js');

function pp_setup () {
    remove_action('wp_head', 'wp_generator');                // #1
    remove_action('wp_head', 'wlwmanifest_link');            // #2
    remove_action('wp_head', 'rsd_link');                    // #3
    remove_action('wp_head', 'wp_shortlink_wp_head');        // #4

    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10);    // #5

    add_filter('the_generator', '__return_false');            // #6
   // add_filter('show_admin_bar','__return_false');            // #7

    remove_action( 'wp_head', 'print_emoji_detection_script', 7 );  // #8
    remove_action( 'wp_print_styles', 'print_emoji_styles' );
    
    //add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    remove_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action('after_setup_theme', 'pp_setup');



//remove migrate
function dequeue_jquery_migrate( &$scripts){
  if(!is_admin()){
  $scripts->remove( 'jquery');
  $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
  }
}


add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate');

add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );
//remove_action( 'woocommerce_after_shop_loop', 'woocommerce_pagination', 10 );


function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}
//remove_action( 'woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20 );


 ?>


