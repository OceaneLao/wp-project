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

//Importer les médias et les articles
add_theme_support('post-thumbnails');

// Changer la couleur d'arrière plan
add_theme_support( 'custom-background' );
add_theme_support( 'custom-header');


//Ajouter une side-bar
register_sidebar([
    'name' => 'Footer',
    'id' => 'footer',
    'before_widget' => '<div>',
    'after_widget' => '</div>'
]);

// Pagination
function your_themes_pagination() {
	global $wp_query;
	echo paginate_links();
}