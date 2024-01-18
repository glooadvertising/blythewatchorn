<?php get_header(); ?>
    <?php get_template_part( 'partials/slideshow' );?>
    <section class="single-project-section">
        <div class="container">
            <h2><?php the_title(); ?></h2>
            <span>
                <div class="single-project-additional-info">
                    <?php if(get_field('designer')){ echo '<p>Designer: ' . get_field('designer') . '</p>'; } ?>
                    <?php if(get_field('joinery')){ echo '<p>Joinery: ' . get_field('joinery') . '</p>'; } ?>
                    <?php if(get_field('builder')){ echo '<p>Builder: ' . get_field('builder') . '</p>'; } ?>
                </div>
                <?php the_content();?>
            </span>
            <a href="<?php echo get_site_url( ); ?>/our-projects" class="btn">View all projects</a>
        </div>
    </section>

<?php get_footer(); ?>

