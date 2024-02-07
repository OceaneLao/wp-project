<?php
/*
Plugin Name: Christmas Lights
Plugin URI: https://dekpo.com
Description: This is a Christmas Lights plugin test
Author: Me
Version: 1.0
*/

function christmas_lights()
{
    wp_enqueue_style('christmaslights_css', plugin_dir_url(__FILE__) . 'christmaslights.css');
    wp_enqueue_script('yahoo-animate-min_js', plugin_dir_url(__FILE__) . 'yahoo-animate-min.js');
    wp_enqueue_script('soundmanager_js', plugin_dir_url(__FILE__) . 'soundmanager.js');
    wp_enqueue_script('christmaslights_js', plugin_dir_url(__FILE__) . 'christmaslights.js');
    wp_enqueue_media('image', plugin_dir_url(__DIR__) . 'image');
    wp_enqueue_media('sound', plugin_dir_url(__DIR__) . 'sound');
}
add_action('wp_enqueue_scripts', 'christmas_lights', 10);

function christmas_lights_front_settings_script()
{
?>
    <script>
        // var urlBase = 'wp-content/plugins/christmas-lights/';
        // soundManager.url = 'wp-content/plugins/christmas-lights/sound';
        var urlBase = '<?php echo plugin_dir_url(__FILE__) ?>';
        soundManager.url = '<?php echo plugin_dir_url(__FILE__) . 'sound' ?>';
    </script>
<?php
}
add_action('wp_head', 'christmas_lights_front_settings_script');

function christmas_lights_display()
{
    $lights_switch = get_option('my_christmas_lights_switch', 'false');
    if ($lights_switch === 'true') {
    ?>
        <div id="lights">
            <!-- lights go here -->
        </div>
    <?php
    }
}
add_action('wp_body_open', 'christmas_lights_display');

// Adding an options button to the options admin tab
function christmas_lights_admin_options()
{
    add_options_page(
        'My Christmas Lights Options',
        'Christmas Lights Options',
        'manage_options',
        'my-christmas-lights-options',
        'my_christmas_lights_rendering_function'
    );
}
add_action('admin_menu', 'christmas_lights_admin_options');

// Adding a rendering callback to handle my admin options
function my_christmas_lights_rendering_function()
{
    ?>
    <h2>
        My Christmas Lights Options
    </h2>
    <form action="options.php" method="post">
        <?php
        settings_fields('my-christmas-lights-options');
        do_settings_sections('my-christmas-lights-options');
        ?>
        <input type="submit" name="Save" value="Save" class="button button-primary">
    </form>
<?php
}

// Adding the settings options sections and fields
function my_christmas_lights_register_settings_sections_and_fields()
{
    register_setting(
        'my-christmas-lights-options',
        'my_christmas_lights_switch'
    );
    add_settings_section(
        'my_christmas_lights_settings_section',
        'Christmas Settings Section',
        'my_christmas_lights_first_section',
        'my-christmas-lights-options'
    );
    add_settings_field(
        'my_christmas_lights_switch',
        'Christmas Lights Switch',
        'my_christmas_lights_html_input',
        'my-christmas-lights-options',
        'my_christmas_lights_settings_section'
    );
}
add_action('admin_init', 'my_christmas_lights_register_settings_sections_and_fields');

function my_christmas_lights_first_section()
{
?>
    <p>
        This is our ChristmasLights settings section
    </p>
<?php
}

function my_christmas_lights_html_input()
{
    $lights_switch = get_option('my_christmas_lights_switch', 'false');
    $checked = ((bool)$lights_switch === true) ? 'checked' : "";
?>
    <input name="my_christmas_lights_switch" type="checkbox" id="my_christmas_lights_switch" value="true" <?php echo $checked; ?>>
    Switch
<?php
}
