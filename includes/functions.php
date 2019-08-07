<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: wpex
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function total_child_enqueue_parent_theme_style() {

	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'Total' );
	$version = $theme->get( 'Version' );

	// Load the stylesheet
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css', array(), $version );
	wp_enqueue_script('api-requests', get_stylesheet_directory_uri() . '/js/api-requests.js', array( 'jquery' ));
	
}
add_action( 'wp_enqueue_scripts', 'total_child_enqueue_parent_theme_style' );

function my_datepicker_function(){
?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" id="jquery-ui-css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />


<?php
}
add_action('wp_head', 'my_datepicker_function');

/*----------------------------------------------*/
/* - Includes 
/*--------------------------------------------**/
include_once("includes/woo-funcs.php");
//include_once("includes/menu-class.php");
include_once("includes/sidebar-class.php");
include_once("includes/conditional-menus.php");
include_once("includes/product-specs.php");
include_once("includes/laptops-specs.php");
include_once("includes/tv-specs.php");
/*----------------------------------------------*/
/* - Register Menu Locations
/*--------------------------------------------**/
function register_store_menu_locations() {
register_nav_menu('the-main-menu',__( 'The Main Menu' ));
register_nav_menu('computers-cat-menu',__( 'Computers Category Menu' ));
register_nav_menu('laptop-cat-menu',__( 'Laptops Category Menu' ));
register_nav_menu('monitor-cat-menu',__( 'Monitors Category Menu' ));
register_nav_menu('desktops-cat-menu',__( 'Desktops Category Menu' ));
register_nav_menu('tablets-cat-menu',__( 'Tablets Category Menu' ));
register_nav_menu('computer-access-cat-menu',__( 'Computer Accessories Category Menu' ));
register_nav_menu('pc-comp-cat-menu',__( 'PC Components Category Menu' ));
register_nav_menu('pc-gaming-cat-menu',__( 'PC Gaming Category Menu' ));
}
add_action( 'init', 'register_store_menu_locations' );


function store_search(){
	echo get_search_form();
}
add_action('wpex_hook_header_inner','store_search');







