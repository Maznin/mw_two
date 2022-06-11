<?php
/**
 * Set up theme defaults and registers support for various WordPress feaures.
 */
add_action( 'after_setup_theme', function() {
	load_theme_textdomain( 'mazniweb', get_theme_file_uri( 'languages' ) );

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );
	add_theme_support( 'post-formats', array(
		'aside',
		'image',
		'video',
		'quote',
		'link',
	) );
	add_theme_support( 'custom-background', apply_filters( 'mazniweb_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support( 'custom-logo', array(
		'height'      => 200,
		'width'       => 50,
		'flex-width'  => true,
		'flex-height' => true,
	) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'mazniweb' ),
	) );
} );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
add_action( 'after_setup_theme', function() {
	$GLOBALS['content_width'] = apply_filters( 'mazniweb_content_width', 960 );
}, 0 );

/**
 * Register widget area.
 */
add_action( 'widgets_init', function() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'mazniweb' ),
		'id'            => 'sidebar-1',
		'description'   => '',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
} );

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', function() {

	wp_enqueue_style( 'mazniweb-main', get_theme_file_uri( 'assets/css/main.css' ) );
	// wp_enqueue_style( 'tailwind', get_theme_file_uri( 'assets/css/tailwind.css' ) );


	wp_enqueue_script( 'mazniweb-bundle', get_theme_file_uri( 'assets/js/main.js' ), array(), null, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
} );


/**
 * Add backend styles for Gutenberg.
 */
// 
add_action('enqueue_block_editor_assets', 'gutenberg_editor_assets');

function gutenberg_editor_assets() {
  // Load the theme styles within Gutenberg.
  wp_enqueue_style('mw-gutenberg-editor-styles', get_theme_file_uri('assets/css/gutenberg-editor-styles.css'), FALSE);
}

/**
 * ACF Blocks
 */
add_action('acf/init', 'mazniweb_block_types');
function mazniweb_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero Section'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'template-parts/blocks/hero/hero-block.php',
            'category'          => 'widget',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'hero', 'header' ),
        ));

		 // register two columns (text and grid).
		 acf_register_block_type(array(
            'name'              => 'two-columns-grid',
            'title'             => __('Two columns (with grid)'),
            'description'       => __('A custom two columns block with text and grid'),
            'render_template'   => 'template-parts/blocks/hero/two-columns-grid-block.php',
            'category'          => 'widget',
            'icon'              => 'format-gallery',
            'keywords'          => array( 'two-columns', 'grid' ),
        ));
    }
}
