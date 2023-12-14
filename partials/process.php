<section id="process" class="process">
    <div class="container">
        <span class="the-content-wrapper">
            <?php the_content(); ?>
        </span>
        <?php if( get_field('process_steps') ): ?>
            <?php while( the_repeater_field('process_steps') ): ?>
                <div class="process-step">
                    <div class="vert-bar">
                        <div class="vert-bar-content" data-aos="slide-down" data-aos-easing="ease-in" data-aos-anchor-placement="center-center"></div>
                    </div>
                    <div class="square" data-aos="zoom-in" data-aos-anchor-placement="center-center"></div>
                    <div class="process-content">
                        <h2><?php the_sub_field('process_step_title'); ?></h2>
                        <?php the_sub_field('process_step_description'); ?>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>