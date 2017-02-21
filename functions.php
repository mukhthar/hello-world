<?php
/**
 * GenieTheme functions and definitions
 *
 * @package GenieTheme
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'genietheme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function genietheme_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on GenieTheme, use a find and replace
	 * to change 'genietheme' to the name of your theme in all the template files
	 */
	load_theme_textdomain( 'genietheme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	//add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'genietheme' ),
		'stash-menu' => __( 'Category  List(all)', 'genietheme' ),
		'loc-menu' => __( 'Location  List(all)', 'genietheme' ),
		'stash-menu-wid' => __( 'Category  List(widget area)', 'genietheme' ),
		'loc-menu-wid' => __( 'Location  List(widget area)', 'genietheme' ),
		'stash-menu-hom' => __( 'Category  List(Home page)', 'genietheme' ),
		'loc-menu-hom' => __( 'Location  List(Home page)', 'genietheme' ),

	) );

	function my_secondary_menu_classes( $classes, $item, $args ) {
    // Only affect the menu placed in the 'stash-menu' wp_nav_bar() theme location
    if (( 'stash-menu' === $args->theme_location )||( 'loc-menu' === $args->theme_location )||( 'stash-menu-hom' === $args->theme_location )||( 'loc-menu-hom' === $args->theme_location )) {
        // Make these items 3-columns wide in Bootstrap
        $classes[] = 'col-md-3 col-sm-3 col-xs-6 stash-box';
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'my_secondary_menu_classes', 10, 3 ); 
function my_secondary_menu_classes_widget( $classes, $item, $args ) {
    // Only affect the menu placed in the 'stash-menu' wp_nav_bar() theme location
    if (( 'stash-menu-wid' === $args->theme_location )||( 'loc-menu-wid' === $args->theme_location )) {
        // Make these items 3-columns wide in Bootstrap
        $classes[] = 'col-md-6 col-sm-6 col-xs-6 stash-box stash-wid';
    }

    return $classes;
}
add_filter( 'nav_menu_css_class', 'my_secondary_menu_classes_widget', 10, 3 ); 


	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	
        
}
endif; // genietheme_setup
add_action( 'after_setup_theme', 'genietheme_setup' );

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function genietheme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'genietheme' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'genietheme_widgets_init' );

function genietheme_widgets_init_footer() {
	register_sidebar( array(
		'name'          => __( 'Footerbox1', 'genietheme' ),
		'id'            => 'footer1',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s footer_wid col-md-3 col-sm-3 col-xs-12">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'genietheme_widgets_init_footer' );

function genietheme_widgets_init_footer2() {
	register_sidebar( array(
		'name'          => __( 'Footerbox2', 'genietheme' ),
		'id'            => 'footer2',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s footer_wid col-md-3 col-sm-3 col-xs-12">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'genietheme_widgets_init_footer2' );


function genietheme_widgets_init_footer3() {
	register_sidebar( array(
		'name'          => __( 'Footerbox3', 'genietheme' ),
		'id'            => 'footer3',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s footer_wid col-md-3 col-sm-3 col-xs-12">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'genietheme_widgets_init_footer3' );
function genietheme_widgets_init_footer4() {
	register_sidebar( array(
		'name'          => __( 'Footerbox4', 'genietheme' ),
		'id'            => 'footer4',
		'description'   => '',
		'before_widget' => '<aside id="%1$s" class="widget %2$s footer_wid col-md-3 col-sm-3 col-xs-12">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after_title'   => '</h1>',
	) );
}
add_action( 'widgets_init', 'genietheme_widgets_init_footer4' );

/**
 * Enqueue scripts and styles.
 */
function genietheme_scripts() {
	
	wp_enqueue_style( 'genietheme-style-boot', get_template_directory_uri().'/bootstrap/bootstrap.min.css');
	wp_enqueue_style( 'genietheme-style-boottheme', get_template_directory_uri().'/bootstrap/bootstrap-theme.min.css');
	wp_enqueue_script( 'genietheme-script', get_template_directory_uri().'/bootstrap/bootstrap.min.js');
	wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/owlcarousel/owl.carousel.min.js', array( 'jquery' ), false, true );
	wp_enqueue_style( 'owlcarousel-style', get_template_directory_uri() . '/owlcarousel/owl.carousel.css' );
	wp_enqueue_style( 'owlcarousel-theme', get_template_directory_uri() . '/owlcarousel/owl.theme.css' );
	wp_enqueue_style( 'owlcarousel-transitions', get_template_directory_uri() . '/owlcarousel/owl.transitions.css' );
	wp_enqueue_script( 'genietheme-script-site', get_template_directory_uri().'/js/site.js');
	wp_enqueue_style( 'genietheme-style', get_stylesheet_uri() );
	wp_enqueue_style( 'genietheme-style-mobile', get_template_directory_uri().'/mobile.css');
	wp_enqueue_script( 'genietheme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20120206', true );
	wp_enqueue_script( 'genietheme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'jquery');
}
add_action( 'wp_enqueue_scripts', 'genietheme_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */

require get_template_directory() . '/inc/jetpack.php';

require_once( 'titan-framework/titan-framework-embedder.php' );
function my_post_type_jobs() {
    register_post_type( 'jobs',
                array( 
                'label' => __('Jobs'), 
                'singular_label' => __('Job Item', 'genietheme'),
                '_builtin' => false,
                'public' => true, 
                'show_ui' => true,
                'show_in_nav_menus' => true,
                'hierarchical' => true,
                'capability_type' => 'page',
                'menu_icon'   => 'dashicons-businessman',
                'rewrite' => array(
                    'slug' => 'job-view',
                    'with_front' => FALSE,
                ),
                'supports' => array(
                        'title',
                        'editor',
                        'thumbnail',
                        'excerpt',
                        'custom-fields',
                        'comments')
                    ) 
                );
    register_taxonomy('job-category', 'jobs', array('hierarchical' => true, 'label' => 'Job Categories', 'singular_name' => 'Category', "rewrite" => true, "query_var" => true));
    register_taxonomy('job-location', 'jobs', array('hierarchical' => true, 'label' => 'Job Locations', 'singular_name' => 'Location', "rewrite" => true, "query_var" => true));
}
add_action('init', 'my_post_type_jobs');
add_theme_support('post-thumbnails'); 




function wpbsearchform( $form ) {

    $form = '<form role="search" method="get" id="searchform" action="' . home_url( '/' ) . '" >
    <div><label class="screen-reader-text" for="s">' . __('Search for:') . '</label>
    <input type="text" placeholder="Enter Job title, skills, or Location"value="' . get_search_query() . '" name="s" id="s" class="search_input_field" />
    <input type="submit" id="searchsubmit" class="search_button" value="'. esc_attr__('') .'" />
    </div>
    </form>';

    return $form;
}

add_shortcode('wpbsearch', 'wpbsearchform');

function searchfilter($query) {

    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('products'));
    }

return $query;
}
function custom_excerpt_length( $length ) {
	return 15;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

add_filter('pre_get_posts','searchfilter');




// Check whether the Titan Framework plugin is activated, and notify if it isn't

require_once( 'admin_options.php' );
