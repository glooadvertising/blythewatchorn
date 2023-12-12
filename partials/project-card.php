<a href="<?php the_permalink(); ?>">
    <article class="project-card">
        <figure>
            <?php the_post_thumbnail(); ?>
            <div class="card-overlay">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/plus.svg" alt="See more" class="plus-icon">
                <h3><?php the_title(); ?></h3>
            </div>
        </figure>
    </article>
</a>