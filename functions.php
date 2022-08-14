<?php

// funtions.php is empty so you can easily track what code is needed in order to Vite + Tailwind JIT run well


// Main switch to get fontend assets from a Vite dev server OR from production built folder
// it is recommeded to move it into wp-config.php



function my_admin_menu()
{

    add_menu_page(
        __('Sample page', 'my-textdomain'),
        __('Sample menu', 'my-textdomain'),
        'manage_options',
        'sample-page',
        'my_admin_page_contents',
        'dashicons-schedule',
        3
    );
}

add_action('admin_menu', 'my_admin_menu');


function my_admin_page_contents()
{
?>
    <div id="admin-root">
        ADMIN ROOT
    </div>
<?php
}
add_action('admin_menu', 'my_admin_menu');
function add_theme_scripts()
{

    $asset_file = include(get_template_directory_uri() . '/build/index.asset.php');


    wp_enqueue_style('style', get_stylesheet_uri());

    // wp_enqueue_style('slider', get_template_directory_uri() . '/css/slider.css', array(), '1.1', 'all');

    wp_enqueue_script('script', get_template_directory_uri() . '/build/index.js', $asset_file['dependencies'], $asset_file['version'], true);

    if (is_admin()) {
    }
}
function custom_theme_assets()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'custom_theme_assets');
