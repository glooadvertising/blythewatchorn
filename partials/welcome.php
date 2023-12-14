<section id="welcome" class="welcome">
    <div class="col-left">
        <span class="text-group">
            <h2>Welcome</h2>
            <?php the_content(); ?>
        </span>
        <a href="/about-us" class="btn">About us</a>
        <?php get_template_part( 'partials/profile-card' ); ?>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="Welcome" class="col-right">

</section>