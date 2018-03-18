<?php
/**
 * jeffhelp_payspi functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package jeffhelp_payspi
 */

if ( ! function_exists( 'jeffhelp_payspi_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function jeffhelp_payspi_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on jeffhelp_payspi, use a find and replace
		 * to change 'jeffhelp_payspi' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'jeffhelp_payspi', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		add_theme_support('woocommerce');
		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'jeffhelp_payspi' ),
			'menu-2' => esc_html__( 'Footer', 'jeffhelp_payspi' ),
			'mobile' => esc_html__( 'Mobile', 'jeffhelp_payspi' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );



		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'jeffhelp_payspi_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function jeffhelp_payspi_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'jeffhelp_payspi_content_width', 640 );
}
add_action( 'after_setup_theme', 'jeffhelp_payspi_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function jeffhelp_payspi_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'jeffhelp_payspi' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'jeffhelp_payspi' ),
		'before_widget' => '<div id="%1$s" class="uk-panel widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h5>',
		'after_title'   => '</h5>',
	) );
}
add_action( 'widgets_init', 'jeffhelp_payspi_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function jeffhelp_payspi_styles() {
	wp_enqueue_style( 'app-style', get_template_directory_uri() .'/assets/css/app.css' );
	wp_enqueue_style( 'woocommerce', get_template_directory_uri() .'/assets/css/woocommerce.css' );

	wp_enqueue_script( 'uikit', get_template_directory_uri() .'/assets/vendor/uikit/js/uikit.min.js', array('jquery'), '', true );
	wp_enqueue_script( 'grid', get_template_directory_uri() .'/assets/vendor/uikit/js/components/grid.min.js', array(), '', true );
	wp_enqueue_script( 'lightbox', get_template_directory_uri() .'/assets/vendor/uikit/js/components/lightbox.min.js', array(), '', true );
	wp_enqueue_script( 'sticky', get_template_directory_uri() .'/assets/vendor/uikit/js/components/sticky.min.js', array(), '', true );
	wp_enqueue_script( 'slideset', get_template_directory_uri() .'/assets/vendor/uikit/js/components/slideset.min.js', array(), '', true );
	wp_enqueue_script( 'slideshow', get_template_directory_uri() .'/assets/vendor/uikit/js/components/slideshow.min.js', array(), '', true );

	// Register the script
	wp_register_script( 'app-style-js', get_template_directory_uri() .'/assets/js/theme.js', array(), '', true );

	// Localize the script with new data
	$translation_array = array(
		'siteurl' => get_bloginfo('url')
	);
	wp_localize_script( 'app-style-js', 'payspi_js', $translation_array );

	// Enqueued script with localized data.
	wp_enqueue_script( 'app-style-js' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'jeffhelp_payspi_styles' );


//Theme Option

if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title'  => 'Theme General Settings',
		'menu_title' => 'Theme Option',
		'menu_slug'  => 'theme-general-settings',
		'capability' => 'edit_posts',
		'redirect'  => false
	));
}


require_once 'inc/uikit-menu-walker.php';

require_once 'inc/woocommerce.php';


function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyCSihP7krAvBkIEd_p2Loih8quSAPJIPi4';
	return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');


function truncate($text, $length, $suffix = '&hellip;', $isHTML = true) {
	$i = 0;
	$simpleTags=array('br'=>true,'hr'=>true,'input'=>true,'image'=>true,'link'=>true,'meta'=>true);
	$tags = array();
	if($isHTML){
		preg_match_all('/<[^>]+>([^<]*)/', $text, $m, PREG_OFFSET_CAPTURE | PREG_SET_ORDER);
		foreach($m as $o){
			if($o[0][1] - $i >= $length)
				break;
			$t = substr(strtok($o[0][0], " \t\n\r\0\x0B>"), 1);
			// test if the tag is unpaired, then we mustn't save them
			if($t[0] != '/' && (!isset($simpleTags[$t])))
				$tags[] = $t;
			elseif(end($tags) == substr($t, 1))
				array_pop($tags);
			$i += $o[1][1] - $o[0][1];
		}
	}

	// output without closing tags
	$output = substr($text, 0, $length = min(strlen($text),  $length + $i));
	// closing tags
	$output2 = (count($tags = array_reverse($tags)) ? '</' . implode('></', $tags) . '>' : '');

	// Find last space or HTML tag (solving problem with last space in HTML tag eg. <span class="new">)
	$pos = (int)end(end(preg_split('/<.*>| /', $output, -1, PREG_SPLIT_OFFSET_CAPTURE)));
	// Append closing tags to output
	$output.=$output2;

	// Get everything until last space
	$one = substr($output, 0, $pos);
	// Get the rest
	$two = substr($output, $pos, (strlen($output) - $pos));
	// Extract all tags from the last bit
	preg_match_all('/<(.*?)>/s', $two, $tags);
	// Add suffix if needed
	if (strlen($text) > $length) { $one .= $suffix; }
	// Re-attach tags
	$output = $one . implode($tags[0]);

	//added to remove  unnecessary closure
	$output = str_replace('</!-->','',$output);

	return $output;
}
