<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open() ?>
    <header class="header">
        <?php if (function_exists('the_custom_logo')) {
            the_custom_logo();
        } ?>
        <h1><?php bloginfo('Hello les amis !') ?></h1>
        <?php if (is_front_page()) : ?>
        <?php if (get_header_image()) : ?>
            <div id="site-header">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                    <img src="<?php header_image(); ?>" width="<?php echo absint(get_custom_header()->width); ?>" height="<?php echo absint(get_custom_header()->height); ?>" alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>">
                </a>
            </div>
            <?php endif; ?>
        <?php endif; ?>
        <?php get_search_form(); ?>
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