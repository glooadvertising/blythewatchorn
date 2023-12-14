<div class="slideshow-container">

<?php if( get_field('gallery') ): ?>
    <?php while( the_repeater_field('gallery') ): ?>
        <div class="mySlides fade">
          <img src="<?php the_sub_field('gallery_item'); ?>" alt="<?php the_sub_field('alt'); ?>" style="width:100%">
        </div>
    <?php endwhile; ?>
 <?php endif; ?>

<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<!-- <div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
</div> -->
