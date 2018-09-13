<?php
/**
 * Bootstrap Basic theme
 *
 * @package bootstrap-basic
 */

if (!function_exists('bootstrapEnqueueScripts')) {
    /**
     * Enqueue scripts & styles
     */
    function bootstrapEnqueueScripts()
    {
        global $wp_scripts;

        wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '4.0.0');
        wp_enqueue_style('animate-css', get_template_directory_uri() . '/css/animate.css', array(), '3.6.0');
        wp_enqueue_style('foundation', get_template_directory_uri() . '/css/foundation.min.css', array(), '3.6.0');
        wp_enqueue_style('ionicons', get_template_directory_uri() . '/css/ionicons.css', array(), '3.6.0');
        wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/custom.css', array(), '1.0.0');
        wp_enqueue_script('jquery');
        wp_enqueue_script('bootstrap-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array(), '4.0.0');


    }// bootstrapBasicEnqueueScripts
}
add_action('wp_enqueue_scripts', 'bootstrapEnqueueScripts');

// Custom Functions
function auto_redirect_after_logout(){
    $_SESSION['alert'] = 'You have logged out successfully.';
    $_SESSION['alert_class'] = 'alert-warning';
  wp_redirect( home_url() );
  exit();
}
add_action('wp_logout','auto_redirect_after_logout');

function redirect_if_user_not_logged_in() {
    if ( is_user_logged_in() ) {
        // your code for logged in user
       } else {
         // your code for logged out user
    
         $_SESSION['alert'] = 'You must be logged in to view this page.';
         $_SESSION['alert_class'] = 'alert-danger';
         wp_redirect( home_url('/login') );
         exit();
       }
}
add_action('redirect_if_user_not_logged_in','redirect_if_user_not_logged_in');

function redirect_if_user_logged_in() {
    if ( is_user_logged_in() ) {
        // your code for logged in user

        $_SESSION['alert'] = 'You\'re already logged in!';
        $_SESSION['alert_class'] = 'alert-warning';
        wp_redirect( home_url('/videos') );
        exit();
       }
}
add_action('redirect_if_user_logged_in','redirect_if_user_logged_in');

function active_menu_item($active) {
    global $post;
    $post_slug=$post->post_name;
    if ($post_slug === $active) {
        print('active');
    }
}
add_action('active_menu_item','active_menu_item');

function redirect_login_page() {
    $login_page  = home_url( '/login/' );
    $page_viewed = basename($_SERVER['REQUEST_URI']);

    if( $page_viewed == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
      wp_redirect($login_page);
      exit;
    }
}
add_action('init','redirect_login_page');

function login_failed() {
    $login_page  = home_url( '/login/' );
    wp_redirect( $login_page . '?login=failed' );
    exit;
}
add_action( 'wp_login_failed', 'login_failed' );

function verify_username_password( $user, $username, $password ) {
    $login_page  = home_url( '/login/' );
      if( $username == "" || $password == "" ) {
          wp_redirect( $login_page . "?login=empty" );
          exit;
    }
}
add_filter( 'authenticate', 'verify_username_password', 1, 3);

function logout_page() {
    $login_page  = home_url( '/login/' );
    wp_redirect( $login_page . "?login=false" );
    exit;
}
add_action('wp_logout','logout_page');


//route to video page after login
function admin_default_page() {
    $_SESSION['alert'] = 'You\'ve successfully logged in!';
    $_SESSION['alert_class'] = 'alert-success';
    return '/videos';
}
add_filter('login_redirect', 'admin_default_page');


//block subscribers from accessing wp-admin page, only admins allowed
function blockusers_init() {
    if ( is_admin() && ! current_user_can( 'administrator' ) &&
       ! ( defined( 'DOING_AJAX' ) && DOING_AJAX ) ) {
        $_SESSION['alert'] = 'You\'re not allowed there! TEST';
        $_SESSION['alert_class'] = 'alert-danger';
        wp_redirect( home_url('/videos') );
        exit;
    }
}
add_action( 'init', 'blockusers_init' );


//hide admin bar for non admin
function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
        show_admin_bar(false);
    }
}
add_action('after_setup_theme', 'remove_admin_bar');
