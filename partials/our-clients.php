<setcion id="our-clients" class="our-clients">
    <header>
        <div class="container">
            <h2>Our Clients</h2>
        </div>
    </header>
    <div class="projects-grid">
        <div class="container">
            <?php $args = [
                'post_type' => 'testimonial',
                'posts_per_page' => 2,
                'order_by' => 'rand'
            ]; ?>
            <?php $projects = new WP_Query($args); ?>
            <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post(); ?>
            <?php get_template_part( 'partials/testimonial-card' ); ?>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </div>
</setcion>