<?php
/**
 * Ce fichier function.php minimal a été généré grâce au service http://underscores.me/.
 
 * Pour l'adapter à un nouveau projet, rechercher/remplacer "violonenchante" par le nom du dossier de votre theme.
 
 * Documentation https://developer.wordpress.org/themes/basics/theme-functions/
 */



if ( ! function_exists( 'violonenchante_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function violonenchante_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on violonenchante, use a find and replace
	 * to change 'violonenchante' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'violonenchante', get_template_directory() . '/languages' );

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

	// Ce theme utilise 2 menus (principal - pied de page)
	register_nav_menu( 'header', __( 'Menu principal', 'violonenchante' ) );
    register_nav_menu( 'footer', __( 'Menu pied de page', 'violonenchante' ) );


    
    
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

}
endif;
add_action( 'after_setup_theme', 'violonenchante_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function violonenchante_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'violonenchante_content_width', 1500 );
}
add_action( 'after_setup_theme', 'violonenchante_content_width', 0 );



/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function violonenchante_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Colonne', 'violonenchante' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Déposez vos widgets ici', 'violonenchante' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'violonenchante_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function violonenchante_scripts() {
	wp_enqueue_style( 'violonenchante-style', get_stylesheet_uri() );
    /* Ajouter feuille de style supplémentaire
    wp_enqueue_style( 'mobile', get_template_directory_uri() . '/css/mobile.css' );
    */
    wp_enqueue_script( 'jquery' );
    
    wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js','','',true );

    wp_enqueue_style( 'reset', get_template_directory_uri() . '/css/reset.css' );
    wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'violonenchante_scripts' );

/**
 * Taille du résumé de l'article
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 40;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

