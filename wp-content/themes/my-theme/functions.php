<?php
function loading_my_style_and_my_script()
{
    wp_enqueue_style('my_main_css', get_template_directory_uri() . '/style.css', '', '1.0');
    wp_enqueue_script('my_main_js', get_template_directory_uri() . '/script.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'loading_my_style_and_my_script', 10);

// Ajouter un menu
register_nav_menus(
    [
        'primary' => 'Menu Principal',
        'mobile' => 'Menu Mobile',
        'social' => 'Menu Social'
    ]
);

// Gérer la taille du logo
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

//Importer les médias et les articles
add_theme_support('post-thumbnails');

//Ajouter une side-bar
register_sidebar([
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
]);
