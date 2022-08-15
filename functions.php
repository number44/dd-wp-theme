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
    </div>
<?php
}
add_action('admin_menu', 'my_admin_menu');



function boilerplate_add_support()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'boilerplate_add_support');

include_once(get_template_directory() . '/inc/scripts-loader.php');
