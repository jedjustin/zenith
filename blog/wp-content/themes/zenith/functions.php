<?php 
define("THEME_DIR", get_template_directory_uri());
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');

// ENQUEUE STYLES
	
function enqueue_styles() {
	
	/** REGISTER css/screen.css **/
	wp_register_style( 'screen-style', THEME_DIR . 'bootstrap/style/bootstrap.css', array(), '1', 'all' );
	wp_enqueue_style( 'screen-style' );
		
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles' );

// ENQUEUE SCRIPTS
	
function enqueue_scripts() {
	
	/** REGISTER HTML5 Shim **/
	wp_register_script( 'html5-shim', 'http://html5shim.googlecode.com/svn/trunk/html5.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'html5-shim' );
		
	/** REGISTER HTML5 OtherScript.js **/
	wp_register_script( 'custom-script', THEME_DIR . 'bootstrap/js/mootools-core-1.4.5-full-compat-yc.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'custom-script' );
		
	wp_register_script( 'custom-script', THEME_DIR . 'bootstrap/assets/js/application/application-blog-list.min.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'custom-script' );
	
	wp_register_script( 'custom-script', THEME_DIR . 'bootstrap/assets/js/application/application.min.js', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'custom-script' );	
	
	wp_register_script( 'custom-script', THEME_DIR . 'bootstrap/assets/js/jquery-1.10.2.min.js" type="text/javascript', array( 'jquery' ), '1', false );
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	wp_enqueue_script( 'custom-script' );
}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );
add_theme_support( 'post-thumbnails' ); 


if (function_exists('register_sidebar') )
	register_sidebar(array(
  'name' => __( 'Recent Posts' ),
  'id' => 'recent-posts',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h6>',
  'after_title' => '</h6>'
));	

function add_hello_controller($controllers) {
      $controllers[] = 'hello';
      return $controllers;
    }
    add_filter('json_api_controllers', 'add_hello_controller');
    
    function set_hello_controller_path() {
      return "/path/to/theme/hello.php";
    }
    add_filter('json_api_hello_controller_path', 'set_hello_controller_path');


	?>