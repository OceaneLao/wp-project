<?php
/*
Plugin Name: Christmas Lights
Plugin URI: https://dekpo.com
Description: This is a Christmas Lights plugin test
Author: Me
Version: 0.1
*/

function christmas_lights()
{
    wp_enqueue_style('christmaslights_css',plugin_dir_url(__FILE__).'christmaslights.css');
    wp_enqueue_script('yahoo-animate-min_js',plugin_dir_url(__FILE__).'yahoo-animate-min.js');
    wp_enqueue_script('soundmanager_js',plugin_dir_url(__FILE__).'soundmanager.js');
    wp_enqueue_script('christmaslights_js',plugin_dir_url(__FILE__).'christmaslights.js');
    wp_enqueue_media('image',plugin_dir_url(__DIR__).'image');
    wp_enqueue_media('sound',plugin_dir_url(__DIR__).'sound');
}
add_action('wp_enqueue_scripts','christmas_lights',10);

function christmas_lights_front_settings_script()
{
?>
    <script>
        // var urlBase = 'wp-content/plugins/christmas-lights/';
        // soundManager.url = 'wp-content/plugins/christmas-lights/sound';
        var urlBase = '<?php echo plugin_dir_url(__FILE__)?>';
        soundManager.url = '<?php echo plugin_dir_url(__FILE__).'sound'?>';
    </script>
<?php
}
add_action('wp_head', 'christmas_lights_front_settings_script');

function christmas_lights_display()
{
?>
    <div id="lights">
        <!-- lights go here -->
    </div>
<?php
}
add_action('wp_body_open','christmas_lights_display');