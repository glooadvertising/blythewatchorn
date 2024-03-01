<section class="page-hero" style="background-image: url('<?php if(has_post_thumbnail()) {echo get_the_post_thumbnail_url();} else {echo get_template_directory_uri(  ) . '/assets/images/placeholder.jpg';}?>');">
    <div class="title-block">
        <h1><?php echo is_404() ? "Error 404" : the_title();?></h1>  
    </div>
</section>