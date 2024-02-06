<?php
/*
Plugin Name: My Snow Storm
Plugin URI: https://dekpo.com
Description: This is a wonderfull plugin that enable you to make a snow storm within your website
Author: It's me !
Version: 1.0
*/

function let_it_snow()
{
    if (is_front_page()) {
        wp_enqueue_script('my_snow_storm_js', plugin_dir_url(__FILE__) . 'snowstorm.js');
    }
}
add_action('wp_enqueue_scripts', 'let_it_snow', 10);

function my_snow_storm_front_settings_script()
{
?>
    <script>
        snowStorm.snowColor = <?php echo get_option('my_snowstorm_color','#FFFFFF')?>; // blue-ish snow!?
        snowStorm.flakesMaxActive = 400; // show more snow on screen at once
        snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
    </script>
<?php
}
add_action('wp_head', 'my_snow_storm_front_settings_script');

//Adding an options button to the options admin tab
function my_snowstorm_admin_options() {
    add_options_page( 
    'My Snowstorm Options',
    'Snowstorm Options',
    'manage_options',
    'my-snowstorm-options',
    'my_snowstorm_rendering_function'
    );
}
add_action('admin_menu','my_snowstorm_admin_options');

// Adding a rendering callback to handle my admin options
function my_snowstorm_rendering_function(){
    ?>
    <h2>
        My SnowStorm Options
    </h2>
    <form action="options.php" method="post">
        <?php 
        settings_fields('my-snowstorm-options');
        do_settings_sections('my-snowstorm-options');
        ?>
        <input type="submit" name="Save" value="Save" class="button button-primary">
    </form>
<?php
}

// Adding the settings options sections and fields
function my_snowstorm_register_settings_sections_and_fields(){
    register_setting(
        'my-snowstorm-options', 
        'my_snowstorm_color'
    );
    add_settings_section(
        'my_snowstorm_settings_section',
        'Snowstorm Settings Section',
        'my_snowstorm_first_section',
        'my-snowstorm-options'
    );
    add_settings_field(
        'my_snowstorm_color',
        'Snowstorm Color Hex',
        'my_snowstorm_color_html_input',
        'my-snowstorm-options',
        'my_snowstorm_settings_section'
    );
}
add_action('admin_init','my_snowstorm_register_settings_sections_and_fields');

function my_snowstorm_first_section() {
    ?>
    <p>
        This is our Snowstorm settings section
    </p>
    <?php
}

function my_snowstorm_color_html_input() {
    ?>
    <input type="text" 
    name="my_snowstorm_color" 
    id="my_snowstorm_color" 
    value="<?php echo get_option('my_snowstorm_color','#FFF') 
    ?>">
    
    <?php
}