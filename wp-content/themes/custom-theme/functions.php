<?php
function custom_theme_enqueue_styles()
{
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'custom_theme_enqueue_styles');
