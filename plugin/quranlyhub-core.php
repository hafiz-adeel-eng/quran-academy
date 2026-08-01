<?php
/**
 * Plugin Name: QuranlyHub Core
 * Description: Brands the whole site (blue/gold design, logo, header nav + Free Trial CTA, footer), registers Rank Math SEO meta for the REST API, and switches permalinks to Post name on activation.
 * Version: 2.0.0
 * Author: QuranlyHub
 * License: GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Brand assets: fonts, CSS and JS on the front end.
 */
add_action( 'wp_enqueue_scripts', 'qly_brand_assets' );
function qly_brand_assets() {
	wp_enqueue_style(
		'quranlyhub-fonts',
		'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;600;700&family=Amiri:wght@400;700&display=swap',
		array(),
		null
	);
	wp_enqueue_style(
		'quranlyhub-brand',
		plugins_url( 'assets/css/quranlyhub.css', __FILE__ ),
		array( 'quranlyhub-fonts' ),
		'2.0.0'
	);
	wp_enqueue_script(
		'quranlyhub-main',
		plugins_url( 'assets/js/quranlyhub.js', __FILE__ ),
		array(),
		'2.0.0',
		true
	);
}

/**
 * Create the Primary nav menu and assign it to the theme's header/footer
 * locations on activation (one-time setup).
 */
register_activation_hook( __FILE__, 'qly_setup_menu' );
function qly_setup_menu() {
	$locations = (array) get_theme_mod( 'nav_menu_locations' );

	if ( ! empty( $locations['menu-1'] ) && wp_get_nav_menu_object( $locations['menu-1'] ) ) {
		return;
	}

	$menu_id = wp_create_nav_menu( 'Primary' );
	if ( is_wp_error( $menu_id ) ) {
		return;
	}

	$items = array(
		array( 'Home', home_url( '/' ) ),
		array( 'Courses', home_url( '/courses/' ) ),
		array( 'Pricing', home_url( '/pricing/' ) ),
		array( 'Free Trial', home_url( '/free-trial/' ) ),
		array( 'Contact', home_url( '/contact/' ) ),
	);

	foreach ( $items as $item ) {
		wp_update_nav_menu_item(
			$menu_id,
			0,
			array(
				'menu-item-title'  => $item[0],
				'menu-item-url'    => $item[1],
				'menu-item-type'   => 'custom',
				'menu-item-status' => 'publish',
			)
		);
	}

	$locations['menu-1']       = $menu_id;
	$locations['footer-menu']  = $menu_id;
	set_theme_mod( 'nav_menu_locations', $locations );
}

register_activation_hook( __FILE__, 'qly_set_pretty_permalinks' );
function qly_set_pretty_permalinks() {
	if ( get_option( 'permalink_structure' ) === '' ) {
		update_option( 'permalink_structure', '/%postname%/' );
		flush_rewrite_rules();
	}
}

add_action( 'init', 'qly_register_seo_meta' );
function qly_register_seo_meta() {
	foreach ( array( 'post', 'page' ) as $object_type ) {
		register_post_meta(
			$object_type,
			'rank_math_title',
			array(
				'type'          => 'string',
				'single'        => true,
				'show_in_rest'  => true,
				'auth_callback' => function () {
					return current_user_can( 'edit_posts' );
				},
			)
		);
		register_post_meta(
			$object_type,
			'rank_math_description',
			array(
				'type'          => 'string',
				'single'        => true,
				'show_in_rest'  => true,
				'auth_callback' => function () {
					return current_user_can( 'edit_posts' );
				},
			)
		);
	}
}
