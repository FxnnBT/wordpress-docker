<?php
/**
 * Theme-setup: stylesheet, thema-ondersteuning, menu en het custom post type "project".
 */

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5', ['search-form', 'gallery', 'caption', 'style', 'script']);
    register_nav_menu('primary', 'Hoofdmenu');
});

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('portfolio', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));
});

add_action('init', function () {
    register_post_type('project', [
        'labels'       => ['name' => 'Projecten', 'singular_name' => 'Project', 'add_new_item' => 'Nieuw project'],
        'public'       => true,
        'has_archive'  => 'projecten',
        'rewrite'      => ['slug' => 'projecten'],
        'menu_icon'    => 'dashicons-portfolio',
        'supports'     => ['title', 'editor', 'excerpt', 'thumbnail'],
        'show_in_rest' => true,
    ]);
    register_taxonomy('technologie', 'project', [
        'labels'       => ['name' => 'Technologieën', 'singular_name' => 'Technologie'],
        'hierarchical' => false,
        'show_in_rest' => true,
    ]);
});
