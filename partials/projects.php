<setcion id="projects" class="projects">
    <div class="projects-grid">
        <?php $args = [
            'post_type' => 'project',
        ]; ?>
        <?php $projects = new WP_Query($args); ?>
        <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post(); ?>
        <?php get_template_part( 'partials/project-card' ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</setcion>