<section id="welcome" class="welcome">
    <div class="col-left">
        <span class="text-group">
            <h2>Welcome</h2>
            <?php the_content(); ?>
            <a href="<?php echo get_site_url( ); ?>/about-us" class="btn">About us</a>
        </span>
        <?php get_template_part( 'partials/profile-card' ); ?>
    </div>
    <div class="col-right">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/LLG_0889.jpg" alt="Welcome">
    </div>

</section>