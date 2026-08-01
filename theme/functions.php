<?php
/**
 * QuranlyHub Child Theme
 * Deployed via WP Pusher from the quran-academy GitHub repo (theme/ subdirectory).
 */

// Enqueue parent (Hello Elementor) stylesheet first.
add_action('wp_enqueue_scripts', 'quranlyhub_parent_styles', 15);
function quranlyhub_parent_styles() {
    wp_enqueue_style('quranlyhub-parent', get_template_directory_uri() . '/style.css');
}

// Brand fonts, CSS and JS.
add_action('wp_enqueue_scripts', 'quranlyhub_assets', 20);
function quranlyhub_assets() {
    wp_enqueue_style(
        'quranlyhub-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Inter:wght@400;600;700&family=Amiri:wght@400;700&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'quranlyhub-brand',
        get_stylesheet_directory_uri() . '/assets/css/quranlyhub.css',
        array('quranlyhub-parent'),
        '1.0.0'
    );
    wp_enqueue_script(
        'quranlyhub-main',
        get_stylesheet_directory_uri() . '/assets/js/quranlyhub.js',
        array(),
        '1.0.0',
        true
    );
}

// Preconnect to font providers (speed).
add_filter('wp_resource_hints', function ($urls, $relation_type) {
    if ('preconnect' === $relation_type) {
        $urls[] = array('href' => 'https://fonts.googleapis.com');
        $urls[] = array('href' => 'https://fonts.gstatic.com', 'crossorigin');
    }
    return $urls;
}, 10, 2);

// Navigation menus (used by the future Theme Builder header/footer).
register_nav_menus(array(
    'primary' => 'Primary Menu',
    'footer'  => 'Footer Menu',
));
