<?php
/**
 * QuranlyHub Child Theme
 * Deployed via WP Pusher from the quran-academy GitHub repo (theme/ subdirectory).
 *
 * Note: all brand styling (colors, cards, header/footer, JS) is loaded by the
 * QuranlyHub Core plugin, so it works even without this theme. This child theme
 * only ensures the parent styles and nav menu locations exist.
 */

// Enqueue parent (Hello Elementor) stylesheet + this child's style.css.
add_action('wp_enqueue_scripts', 'quranlyhub_styles', 15);
function quranlyhub_styles() {
    wp_enqueue_style('quranlyhub-parent', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('quranlyhub-child', get_stylesheet_uri(), array('quranlyhub-parent'), '1.0.0');
}

// Navigation menus (used by the Hello Elementor header/footer).
register_nav_menus(array(
    'menu-1'      => 'Primary Menu',
    'footer-menu' => 'Footer Menu',
));

// Custom logo support for the header.
add_theme_support('custom-logo', array(
    'height'      => 60,
    'width'       => 180,
    'flex-height' => true,
    'flex-width'  => true,
));
