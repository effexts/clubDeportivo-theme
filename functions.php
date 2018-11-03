<?php 
/**
 * Club Deportivo UTA functions and definitions
 *
 * @package Club Deportivo UTA
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */

if ( ! function_exists( 'club_deportivo_setup' ) ) : 
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function club_deportivo_setup() {
	if ( ! isset( $content_width ) )
		$content_width = 640; /* pixels */

	load_theme_textdomain( 'club-deportivo', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support('woocommerce');
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-header' );
	add_theme_support( 'title-tag' );
	add_image_size( 'club-deportivo-logo', 350, 100 );
	add_theme_support( 'custom-logo', array( 'size' => 'club-deportivo-logo' ) );
	register_nav_menus( array(
		'primary' => __( 'Menu principal', 'club-deportivo' ),		
	) );
	add_theme_support( 'custom-background', array(
		'default-color' => 'ffffff'
	) );
} 
endif; // club_deportivo_setup
add_action( 'after_setup_theme', 'club_deportivo_setup' );


function club_deportivo_widgets_init() { 	
	
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'club-deportivo' ),
		'description'   => __( 'Aparece en la barra lateral', 'club-deportivo' ),
		'id'            => 'sidebar-1',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3><aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Widget derecho de cabecera', 'club-deportivo' ),
		'description'   => __( 'Aparece en la parte superior', 'club-deportivo' ),
		'id'            => 'header-right-widget',
		'before_widget' => '',		
		'before_title'  => '<h3 class="widget-title" style="display:none">',
		'after_title'   => '</h3>',
		'after_widget'  => '',
	) );		
	
}
add_action( 'widgets_init', 'club_deportivo_widgets_init' );


function club_deportivo_font_url(){
		$font_url = '';		
		
		/* Translators: If there are any character that are not
		* supported by Roboto, trsnalate this to off, do not
		* translate into your own language.
		*/
		$roboto = _x('on','roboto:on or off','club-deportivo');		
		
		
		/* Translators: If there has any character that are not supported 
		*  by Scada, translate this to off, do not translate
		*  into your own language.
		*/
		$scada = _x('on','Scada:on or off','club-deportivo');	
		
		if('off' !== $roboto ){
			$font_family = array();
			
			if('off' !== $roboto){
				$font_family[] = 'Roboto:300,400,600,700,800,900';
			}
					
						
			$query_args = array(
				'family'	=> urlencode(implode('|',$font_family)),
			);
			
			$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
		}
		
	return $font_url;
	}


function club_deportivo_scripts() {
	wp_enqueue_style('club-deportivo-font', club_deportivo_font_url(), array());
	wp_enqueue_style( 'club-deportivo-basic-style', get_stylesheet_uri() );
	wp_enqueue_style( 'nivo-slider', get_template_directory_uri()."/css/nivo-slider.css" );
	wp_enqueue_style( 'club-deportivo-main-style', get_template_directory_uri()."/css/responsive.css" );		
	wp_enqueue_style( 'club-deportivo-base-style', get_template_directory_uri()."/css/style_base.css" );
	wp_enqueue_script( 'jquery-nivo', get_template_directory_uri() . '/js/jquery.nivo.slider.js', array('jquery') );
	wp_enqueue_script( 'club-deportivo-custom-js', get_template_directory_uri() . '/js/custom.js' );	
		

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'club_deportivo_scripts' );

function club_deportivo_new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'club_deportivo_new_excerpt_length', 999);

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template for about theme.
 */
//require get_template_directory() . '/inc/about-themes.php';

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

if ( ! function_exists( 'club_deportivo_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since  Club Deportivo UTA 1.0
 */
function club_deportivo_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

//require_once get_template_directory() . '/customize-pro/example-1/class-customize.php';