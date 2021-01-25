<?php

$devMode = $_SERVER['SERVER_NAME'] === 'blog.thedevbuild.com';

if (!function_exists( 'thedevbuild_setup' )) {
  function thedevbuild_setup() {
    // Add default post and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Add theme support for title tag <title>
    add_theme_support( 'title-tag' );

    // Add theme support for post-formats
    add_theme_support(
      'post-formats',
      [
        'link',
        'aside',
        'gallery',
        'image',
        'quote',
        'status',
        'video',
        'audio',
        'chat',
      ]
    );

    // Add theme support for post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Add theme suport for core markup to output valid HTML5
    add_theme_support(
      'html5',
      [
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
        'navigation-widgets',
      ]
    );

    // Add support for core custom logo
    $logo_height = 40;
    $logo_width  = "auto";

    add_theme_support(
      'custom-logo',
      [
        'height' => $logo_height,
				'width' => $logo_width,
				'flex-width' => true,
				'flex-height' => true,
				'unlink-homepage-logo' => true,
      ]
    );

    // Add theme support for block styles
    add_theme_support( 'wp-block-styles' );

    // Add theme support for full and wide align images
    add_theme_support( 'align-wide' );

    // Add theme support for editor styles
    add_theme_support( 'editor-styles' );

    // Custom background color.
		add_theme_support(
			'custom-background',
			[
				'default-color' => 'd1e4dd',
      ]
    );
    
    // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );
  }
}

add_action( 'after_setup_theme', 'thedevbuild_setup' );

if ( ! function_exists( 'thedevbuild_scripts' ) ) {
  function thedevbuild_scripts() {
    // main style
    wp_enqueue_style( 
      'thedevbuild-main-style', 
      get_template_directory_uri() . ($devMode === false ? '/assets/css/main.css' : '/assets/css/main.min.css'), 
      [],
      wp_get_theme()->get( 'Version' )
    );

    // main script
    wp_enqueue_script( 
      'thedevbuild-main-script', 
      get_template_directory_uri() . ($devMode === false ? '/assets/js/main.js' : '/assets/js/main.min.js'), 
      [],
      wp_get_theme()->get( 'Version' ),
      true 
    );
  }
}

add_action( 'wp_enqueue_scripts', 'thedevbuild_scripts' );

// remove admin bar
add_filter('show_admin_bar', '__return_false');

if ( ! function_exists( 'thedevbuild_excerpt_limit' ) ) {
  function thedevbuild_excerpt_limit() {
    return 30;
  }
}

if ( ! function_exists( 'thedevbuild_post_excerpt_limit' ) ) {
  function thedevbuild_post_excerpt_limit($length) {
    return thedevbuild_excerpt_limit();
  }
}

add_filter( 'excerpt_length', 'thedevbuild_post_excerpt_limit', 999 );

if ( ! function_exists( 'thedevbuild' ) ) {
  function thedevbuild_excerpt_more( $more ) {
    return '...';
  }
}
add_filter( 'excerpt_more', 'thedevbuild_excerpt_more' );

// Custom template tags for the theme.
require get_template_directory() . '/inc/template-tags.php';

// Custom template functions for the theme.
require get_template_directory() . '/inc/template-functions.php';