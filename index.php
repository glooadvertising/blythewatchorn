<?php get_header(); ?>
    <?php is_page('home') ? get_template_part( 'partials/home-hero' ) : get_template_part( 'partials/page-hero' ) ; ?>
    <?php is_page('home') ? get_template_part( 'partials/welcome' ) : null ; ?>
    <?php is_page('home') ? get_template_part( 'partials/featured-projects' ) : null ; ?>
    <?php is_page('home') ? get_template_part( 'partials/our-clients' ) : null ; ?>
    <?php is_page('about-us') ? get_template_part( 'partials/about' ) : null; ?>
    <?php is_page('our-process') ? get_template_part( 'partials/process' ) : null; ?>
    <?php is_page('our-projects') ? get_template_part( 'partials/projects' ) : null; ?>

<?php get_footer(); ?>

