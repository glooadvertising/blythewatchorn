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
                <a href="https://www.facebook.com/people/Blythe-Watchorn-Builders/61561604164876/" target="_blank">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: 062752;transform: ;msFilter:;" class="facebook-icon"><path d="M12.001 2.002c-5.522 0-9.999 4.477-9.999 9.999 0 4.99 3.656 9.126 8.437 9.879v-6.988h-2.54v-2.891h2.54V9.798c0-2.508 1.493-3.891 3.776-3.891 1.094 0 2.24.195 2.24.195v2.459h-1.264c-1.24 0-1.628.772-1.628 1.563v1.875h2.771l-.443 2.891h-2.328v6.988C18.344 21.129 22 16.992 22 12.001c0-5.522-4.477-9.999-9.999-9.999z"></path></svg>
                </a>

                <?php get_template_part( 'partials/burger' ); ?>
            </span>
        </div>
    </header>
