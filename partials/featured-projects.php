<setcion id="featured-projects" class="featured-projects">
    <header>
        <div class="container">
            <h2>Featured Projects</h2>
            <a href="/projects" class="btn">view all</a>
        </div>
    </header>
    <div class="projects-grid">
        <?php $args = [
            'post_type' => 'project',
            'posts_per_page' => 3,
            'tag' => 'featured',
        ]; ?>
        <?php $projects = new WP_Query($args); ?>
        <?php if($projects->have_posts()) : while($projects->have_posts()) : $projects->the_post(); ?>
        <?php get_template_part( 'partials/project-card' ); ?>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</setcion>