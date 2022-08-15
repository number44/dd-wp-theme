<?php

// Main css
function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action("wp_enqueue_scripts", "custom_theme_assets");


// Admin Scripts

function dd_admin_assets()
{
    $script_dependencies = require_once(get_template_directory() . '/build/admin.asset.php');
    wp_enqueue_script('dd-admin-scripts', get_theme_file_uri('/build/admin.js'), $script_dependencies["dependencies"], $script_dependencies["version"], true);
    wp_enqueue_style('dd-admin-styles', get_theme_file_uri('/build/admin.css'));
}

add_action('admin_enqueue_scripts', 'dd_admin_assets');

function dd_front_assets()
{
    $script_dependencies = require_once(get_template_directory() . '/build/front.asset.php');
    wp_enqueue_script('dd-front-scripts', get_theme_file_uri('/build/front.js'), $script_dependencies["dependencies"], $script_dependencies["version"], true);
    wp_enqueue_style('dd-front-styles', get_theme_file_uri('/build/front.css'));
}

add_action('wp_enqueue_scripts', 'dd_front_assets');
