<?php
/**
 * Вспоминая будущее functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Вспоминая_будущее
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'remember_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function remember_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Вспоминая будущее, use a find and replace
		 * to change 'remember' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'remember', get_template_directory() . '/languages' );

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

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'headerDesktop' => esc_html__( 'Шапка Десктоп', 'remember' ),
				'headerMobile' => esc_html__( 'Шапка Мобильные' , 'remember' )
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);


		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'remember_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function remember_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'remember_content_width', 640 );
}
add_action( 'after_setup_theme', 'remember_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function remember_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'remember' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'remember' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'remember_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function remember_scripts() {
	wp_enqueue_style( 'remember-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'MDBootstrap-style', get_template_directory_uri() . '/assets/css/mdb.min.css', array(), 2.2 );
	wp_enqueue_style( 'Montserrat-font', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), _S_VERSION );
	wp_enqueue_style( 'FonAwesome-font', 'https://use.fontawesome.com/releases/v5.15.1/css/all.css', array(), 5.15 );
	wp_enqueue_style( 'FancyBox-style', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), 3.5 );
	wp_enqueue_style( 'Main-style', get_template_directory_uri() . '/assets/css/main.min.css', array(), _S_VERSION );
	wp_enqueue_style( 'Media-style', get_template_directory_uri() . '/assets/css/media.min.css', array(), _S_VERSION );
	wp_style_add_data( 'remember-style', 'rtl', 'replace' );

	wp_enqueue_script( 'remember-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'remember-wishes', get_template_directory_uri() . '/js/wishes.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'MDBootstrap', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), 2.2, true );
	wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery.3.5.1.min.js', array(), 3.5, true );
	wp_enqueue_script( 'FancyBox', 'https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js', array(), 3.5, true );
	wp_enqueue_script( 'App', get_template_directory_uri() . '/assets/js/app.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'remember_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function remember_custom_logo() {
echo '
	<style type="text/css">
	#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	display:inline-block;
	background-image: url(';
	echo get_field('site_icon_admin', 'option');
	echo ') !important;
	background-position: 0 0;
	width:20px !important;
	height: 20px !important;
	color:rgba(0, 0, 0, 0);
	-webkit-background-size: cover;
	background-size: cover;

	}
	#wpadminbar #wp-admin-bar-wp-logo.hover > .ab-item .ab-icon {
	background-position: center;
	}
	</style>
';
}
add_action('wp_before_admin_bar_render', 'remember_custom_logo');

function remove_footer_admin () {
	echo '<p>Тема ';
	echo wp_get_theme();
	echo ' разработана <a href="https://iceslam.ru" target="_blank">IceSlam</a> в компании <a href="https://alianscompany.ru" target="_blank">Альянс+</a>. Работает на WordPress</p>';
}
add_filter('admin_footer_text', 'remove_footer_admin');

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function wisher($kind){
	if($kind === 0) return '?desire=0';
	if($kind === 1) return '?desire=1';
}

function show_all(){
	if( isset($_GET['desire']) ) return '?desire='.$_GET['desire'].'&all=yes';
	if( ! isset($_GET['desire']) ) return '?all=yes';
}

if ( ! file_exists( get_template_directory() . '/class-wp-bootstrap-navwalker.php' ) ) {
// File does not exist... return an error.
return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

// add_filter('show_admin_bar', '__return_false');

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Пользовательские настройки темы',
		'menu_title'	=> 'Настройки темы',
		'menu_slug' 	=> 'contacts-settings',
		'parent_slug' => 'acf-options',
		'capability'	=> 'edit_posts',
		'redirect'		=> true
	));

}

$settings = array(

	/* (string) the options page title. Defaults to 'Options' */
	'title' => __('Настройки темы Вспоминая будущее', 'acf'),

	/* (string) the options page menu title. Defaults to 'Options' */
	'menu' => __('Настройки темы', 'acf'),

	/* (string) the options page url slug. Defaults to 'acf-options' */
	'slug' => 'acf-options',

	/* the capability needed to access this admin page. Defaults to 'edit_posts' */
	'capability' => 'edit_posts',

	/* an array of sub menu pages (strings or arrays). Defaults to an empty array */
	'pages' => array()
);

function my_acf_options_page_settings( $settings )
{
	$settings['title'] = 'Пользовательские настройки темы';

	return $settings;
}

add_filter('acf/options_page/settings', 'my_acf_options_page_settings');

add_action('admin_menu', 'remove_admin_menu');
function remove_admin_menu() {
	remove_menu_page('edit-comments.php'); // Комментарии
	remove_menu_page('tools.php');
	remove_menu_page('themes.php');
	remove_menu_page('plugins.php');
	remove_menu_page('users.php');
	remove_menu_page( 'options-general.php');
	remove_menu_page( 'duplicator' );
}

add_filter('acf/settings/show_admin', '__return_false');

function do_excerpt($string, $word_limit) {
  $words = explode(' ', $string, ($word_limit + 1));
  if (count($words) > $word_limit)
  array_pop($words);
  echo implode(' ', $words).' ...';
}
