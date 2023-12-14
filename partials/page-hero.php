<section class="page-hero">
    <?php if(get_the_post_thumbnail()) {
        the_post_thumbnail();
    } else { ?>
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.jpg" alt="placeholder">
    <?php } ?>
    <div class="title-block">
        <h1><?php the_title();?></h1>  
    </div>
    <div class="container">
        
    </div>
</section>