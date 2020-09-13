<?php

// Add thumbnails support
function posts_thumbnails() {
    add_theme_support( 'post-thumbnails');
}
add_action('after_setup_theme', 'posts_thumbnails');

// Add custom product posts
function products_custom_post_type()
{
    register_post_type('project', [
        'rewrite' => ['slug' => 'projects'],
        'labels' => [
            'name' => 'Projects',
            'singlar_name' => 'Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project'
        ],
        'menu-icon' => 'dashicons-portfolio',
        'public' => true,
        'has_archive' => true,
        'supports' => [
            'title', 'thumbnail', 'editor', 'excerpt', 'category', 'custom-fields',
        ]
    ]);
}
add_action('init', 'products_custom_post_type');
