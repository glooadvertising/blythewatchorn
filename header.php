<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('title'); ?> | <?php bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <?php get_template_part( 'partials/mobile-menu' ); ?>
    <header id="header" class="main-header">
        <div class="container">
            <a href="<?php echo get_home_url(); ?>" class="main-logo">
                <span class="invisible-text"><?php bloginfo('title'); ?></span>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/main-logo.svg" alt="<?php bloginfo('title'); ?> logo">
            </a>
            <span class="menu-wrapper">
                <?php wp_nav_menu( ); ?>
                <?php get_template_part( 'partials/burger' ); ?>
            </span>
        </div>
    </header>
