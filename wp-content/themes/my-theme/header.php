<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>

    <header class="header">
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
        <h1><?php bloginfo('Hello les amis !') ?></h1>
    </header>

    <div class="row">
        <div class="col-3 col-s-3 menu">
            <?php wp_nav_menu(
                [
                    'container' => false,
                    'theme_location' => 'primary'
                ]
            ) ?>
        </div>