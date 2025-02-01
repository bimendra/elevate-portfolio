<?php
/**
 * Elevate Portfolio functions and definitions
 * 
 * @package elevate_portfolio
 */

 if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ELEVATE_PORTFOLIO_VERSION', '1.0.0' );
}


function elevate_portfolio_setup() {
  /**
   * Elevate Portfolio is a translatable theme
   */
  load_theme_textdomain( 'elevate_portfolio', get_template_directory() . '/languages' );

  // Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

  // Enable support for post thumbnails
  add_theme_support( 'post-thumbnails' );

  // More theme support...
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

  // Custom background
  add_theme_support('custom-background');

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
add_action( 'after_setup_theme', 'elevate_portfolio_setup' );

function elevate_portfolio_scripts() {
	wp_enqueue_style( 'elevate-portfolio-style', get_stylesheet_uri(), array(), ELEVATE_PORTFOLIO_VERSION );
	
	// Enqueue Google Fonts: Inter (weights 700 and 400)
	wp_enqueue_style('elevate-portfolio-google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap', false);
}
add_action( 'wp_enqueue_scripts', 'elevate_portfolio_scripts' );
