<?php
/**
 * Theme-setup. Hier hoef je niets aan te passen.
 */

// Geeft de teksten uit content.php terug.
function portfolio_content(): array {
    return include get_theme_file_path('content.php');
}

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('portfolio', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
});

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');
});

// Bij activeren van het theme: maak de pagina's aan en zet nette URL's (/over-mij/).
add_action('after_switch_theme', function () {
    foreach (['over-mij' => 'Over mij', 'projecten' => 'Projecten'] as $slug => $title) {
        if (!get_page_by_path($slug)) {
            wp_insert_post(['post_type' => 'page', 'post_status' => 'publish', 'post_name' => $slug, 'post_title' => $title]);
        }
    }
    update_option('permalink_structure', '/%postname%/');
    flush_rewrite_rules();
});
