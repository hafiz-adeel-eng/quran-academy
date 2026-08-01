<?php
/**
 * Plugin Name: QuranlyHub Core
 * Description: Registers Rank Math SEO meta fields for the REST API so QuranlyHub can set per-page SEO titles and descriptions programmatically.
 * Version: 1.0.0
 * Author: QuranlyHub
 * License: GPL-2.0-or-later
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
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
