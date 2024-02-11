<?php
/**
 * Doly Plus functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Doly Plus
 */

if ( ! defined( 'DOLY_PLUS_VERSION' ) ) {
	$doly_plus_theme = wp_get_theme();
	define( 'DOLY_PLUS_VERSION', $doly_plus_theme->get( 'Version' ) );
}

/**
 * Enqueue scripts and styles.
 */
function doly_plus_scripts() {
    wp_enqueue_style( 'doly-plus-parent-style', get_template_directory_uri() . '/style.css',array('bootstrap','slicknav','doly-default-block','doly-style'), '', 'all');
    wp_enqueue_style( 'doly-plus-main-style',get_stylesheet_directory_uri() . '/assets/css/main-style.css',array(), DOLY_PLUS_VERSION, 'all');
}
add_action( 'wp_enqueue_scripts', 'doly_plus_scripts' );

/**
 * Custom excerpt length.
 */
function doly_plus_excerpt_length( $length ) {
    if ( is_admin() ) return $length;
    return 19;
}
add_filter( 'excerpt_length', 'doly_plus_excerpt_length', 999 );

/**
 * Custom excerpt More.
 */
function doly_plus_excerpt_more( $more ) {
    if ( is_admin() ) return $more;
    return '.';
}
add_filter( 'excerpt_more', 'doly_plus_excerpt_more' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function doly_plus_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Footer Widgets', 'doly-plus' ),
            'id'            => 'footer',
            'description'   => esc_html__( 'Add footer widgets here.', 'doly-plus' ),
            'before_widget' => '<div class="col-lg-3"><div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div></div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action( 'widgets_init', 'doly_plus_widgets_init' );


/**
 * Load Doly Plus Tags files.
 */
require get_stylesheet_directory() . '/inc/template-tags.php';