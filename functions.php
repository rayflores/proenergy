<?php

add_action( 'wp_enqueue_scripts', 'ollie_child_enqueue_styles' );

/**
 * Enqueue Ollie styles.
 *
 * @return void
 */
function ollie_child_enqueue_styles(): void {
	wp_enqueue_style( 'proenergy-style', get_stylesheet_directory_uri() . '/build/style-style.css', array( 'ollie' ), wp_get_theme()->get( 'Version' ) );
	wp_enqueue_style( 'ollie-child-style', get_stylesheet_uri(), array( 'ollie' ), wp_get_theme()->get( 'Version' ) );
}