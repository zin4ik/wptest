<?php
/**
 * biznes functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package biznes
 */





if ( ! function_exists( 'biz_nes_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function biz_nes_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on biznes, use a find and replace
		 * to change 'biz-nes' to the name of your theme in all the template files.
		 */
		
		
		add_theme_support( 'title-tag' );

		
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'pimary' => esc_html__( 'Primary', 'biz-nes' ),
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
//========обрізання картинки під розмір 100px*100px + plugin Force Regenerate Thumbnails 
		add_image_size('service_img', 100, 100, true);
// ======= підключення нових типів записив custom_page ===
		include (get_template_directory().'/inc/custom_post_awards.php');
		include (get_template_directory().'/inc/custom_post_reviews.php');
		include (get_template_directory().'/inc/custom_post_servise.php');

	}

	// Функція reset пермалінків/ссилок на сторінки, скидання правил перезапису ЧПУ 
	/* Сбрасываем правила для произвольного типа записей. */
	add_action( 'after_switch_theme', 'biz_nes_reset_permalink' );
	function biz_nes_reset_permalink(){
		flush_rewrite_rules();
	}


endif;

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );
add_filter( 'ot_show_new_layout', '__return_false' ); 
add_filter( 'ot_show_pages', '__return_true' );
require( trailingslashit( get_template_directory() ) . 'functions/meta-boxes.php' );
require( trailingslashit( get_template_directory() ) . 'functions/theme-options.php' );

function theme_options_parent($parent){
	$parent='';
	return $parent;
}
add_filter( 'ot_theme_options_parent_slug','theme_options_parent',20);

/**
 * Required: include OptionTree.
 */

require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );





add_action( 'after_setup_theme', 'biz_nes_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function biz_nes_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'biz_nes_content_width', 640 );
}
add_action( 'after_setup_theme', 'biz_nes_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function biz_nes_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'biz-nes' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'biz-nes' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Підвал лівий', 'biz-nes' ),
		'id'            => 'footer_left',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Підвал центр', 'biz-nes' ),
		'id'            => 'footer_center',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Підвал правий', 'biz-nes' ),
		'id'            => 'footer_right',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget-title">',
		'after_title'   => '</div>',
	) );
}
add_action( 'widgets_init', 'biz_nes_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function biz_nes_scripts() {


	//====css====
	wp_enqueue_style( 'biz-nes-style', get_stylesheet_uri() );

	wp_enqueue_style('grid-biz-nes', get_template_directory_uri() .'/acess/css/grid.css' );
	wp_enqueue_style('style-biz-nes', get_template_directory_uri() .'/acess/css/style.css' );
	wp_enqueue_style('font-biz-nes', 'http://fonts.googleapis.com/css?family=Roboto:400,500,700' );
	wp_enqueue_style('font-awesome-biz-nes', 'http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );

	wp_enqueue_style('colorSchema-4-biz-nes', get_template_directory_uri() .'/acess/css/colorSchema-4.css' );
	wp_enqueue_style('camera-biz-nes', get_template_directory_uri() .'/acess/css/camera.css' );
	wp_enqueue_style('owl-carousel-biz-nes', get_template_directory_uri() .'/acess/css/owl-carousel.css' );



	wp_enqueue_style('animate-biz-nes', get_template_directory_uri() .'/acess/css/animate.css' );
	wp_enqueue_style('google-map-biz-nes', get_template_directory_uri() .'/acess/css/google-map.css' );
	wp_enqueue_style('mailform-biz-nes', get_template_directory_uri() .'/acess/css/mailform.css' );
	wp_enqueue_style('magnific-popup-biz-nes', get_template_directory_uri() .'/acess/css/magnific-popup.css' );

	//wp_enqueue_style('colorSchema-1-biz-nes', get_template_directory_uri() .'/acess/css/colorSchema-1.css' );
	//wp_enqueue_style('colorSchema-2-biz-nes', get_template_directory_uri() .'/acess/css/colorSchema-2.css' );
	//wp_enqueue_style('colorSchema-3-biz-nes', get_template_directory_uri() .'/acess/css/colorSchema-3.css' );



//=======js====== 
	wp_enqueue_script( 'biz-nes-device', get_template_directory_uri() . '/acess/js/device.min.js', array('jquery'), '', false);

	wp_enqueue_script( 'biz-nes-script', get_template_directory_uri() . '/acess/js/script.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-superfish', get_template_directory_uri() . '/acess/js/superfish.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-jquery-rd-navbar', get_template_directory_uri() . '/acess/js/jquery.rd-navbar.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-tmstickup', get_template_directory_uri() . '/acess/js/tmstickup.js', array('jquery'), '', true);

	if (is_page_template('home-page.php')){
		wp_enqueue_script( 'biz-nes-camera', get_template_directory_uri() . '/acess/js/camera.js', array('jquery'), '', true);
	}
	wp_enqueue_script( 'biz-nes-wow', get_template_directory_uri() . '/acess/js/wow.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-jquery-cookie', get_template_directory_uri() . '/acess/js/jquery.cookie.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-jquery-easing-1-3', get_template_directory_uri() . '/acess/js/jquery.easing.1.3.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-jquery-magnific-popup', get_template_directory_uri() . '/acess/js/jquery.magnific-popup.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-jquery.mobile.customized.min', get_template_directory_uri() . '/acess/js/jquery.mobile.customized.min.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-jquery.ui.totop', get_template_directory_uri() . '/acess/js/jquery.ui.totop.js', array('jquery'), '', true);
	wp_enqueue_script( 'biz-nes-my-magnific-popup', get_template_directory_uri() . '/acess/js/my-magnific-popup.js', array('jquery'), '', true);


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'biz_nes_scripts' );

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



/* добавляємо клас 'active' в li wp_nav_menu */
function My_atrb_nav_menu_css($classes){
	if (in_array('current-menu-item', $classes)){
	$classes[] = 'active';
	}
return $classes;
}
add_filter('nav_menu_css_class', 'My_atrb_nav_menu_css',10,4);

/**видалення класу з тегу body */
// function Atrb_remove_class($classes)
// {
// 	if($key=array_search('page',$classes)){
// 		unset($classes[$key]);
// 		return $classes;

// 	}
// }
// add_filter('body_class', 'Atrb_remove_class');