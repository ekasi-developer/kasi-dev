<?php


// Add theme styles sheet
function load_style_sheets()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');
    wp_register_style('fontawesome', get_template_directory_uri() . '/assets/vendor/font-awesome/css/font-awesome.min.css', [], 1, 'all');
    wp_enqueue_style('fontawesome');
    wp_register_style('ionicons', get_template_directory_uri() . '/assets/vendor/ionicons/css/ionicons.min.css', [], 1, 'all');
    wp_enqueue_style('ionicons');
    wp_register_style('owl', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css', [], 1, 'all');
    wp_enqueue_style('owl');
    wp_register_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css', [], 1, 'all');
    wp_enqueue_style('venobox');
    wp_register_style('lightbox', get_template_directory_uri() . '/assets/vendor/lightbox/css/lightbox.min.css', [], 1, 'all');
    wp_enqueue_style('lightbox');
    wp_register_style('style', get_template_directory_uri() . '/assets/css/style.css', [], 1, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_style_sheets');



// Add theme javascript
function load_javascripts()
{
    wp_deregister_script('jquery');
    wp_register_script('jQuery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', [], 1, 'all');
    wp_enqueue_script('jQuery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', [], 1, 'all');
    wp_enqueue_script('bootstrap');
    wp_register_script('jQueryEasing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', [], 1, 'all');
    wp_enqueue_script('jQueryEasing');
    wp_register_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', [], 1, 'all');
    wp_enqueue_script('validate');
    wp_register_script('jQueryWaypoints', get_template_directory_uri() . '/assets/vendor/waypoints/jquery.waypoints.min.js', [], 1, 'all');
    wp_enqueue_script('jQueryWaypoints');
    wp_register_script('jQueryCounterup', get_template_directory_uri() . '/assets/vendor/counterup/jquery.counterup.min.js', [], 1, 'all');
    wp_enqueue_script('jQueryCounterup');
    wp_register_script('owl', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', [], 1, 'all');
    wp_enqueue_script('owl');
    wp_register_script('typed', get_template_directory_uri() . '/assets/vendor/typed.js/typed.min.js', [], 1, 'all');
    wp_enqueue_script('typed');
    wp_register_script('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', [], 1, 'all');
    wp_enqueue_script('venobox');
    wp_register_script('lightbox', get_template_directory_uri() . '/assets/vendor/lightbox/js/lightbox.min.js', [], 1, 'all');
    wp_enqueue_script('lightbox');
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', [], 1, 'all');
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'load_javascripts');


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
        'menu-icon' => 'dashicons dashicons-admin-tools',
        'public' => true,
        'has_archive' => true,
        'supports' => [
            'title', 'thumbnail', 'custom-fields'
        ]
    ]);
}
add_action('init', 'products_custom_post_type');

// Add custom testimonial posts
function testimonials_custom_post_type()
{
    register_post_type('testimonial', [
        'rewrite' => ['slug' => 'testimonials'],
        'labels' => [
            'name' => 'testimonials',
            'singlar_name' => 'Testimonial',
            'add_new_item' => 'Add New Testimonial',
            'edit_item' => 'Edit Testimonial'
        ],
        'menu-icon' => 'dashicons dashicons-format-qoute',
        'public' => true,
        'has_archive' => true,
        'supports' => [
            'title', 'thumbnail', 'editor'
        ]
    ]);
}
add_action('init', 'testimonials_custom_post_type');