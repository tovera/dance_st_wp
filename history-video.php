<section id="about1" class="video hero-overlay">
   <div class="flex-container about-story">
      <div class="icon">
         <a target="_blank" href="<?php the_field('h_video')?>" class="youtube-media">
         <?php
            $image = get_field('video_icon');
               echo '<img src="'.$image['sizes']['medium'].'" alt="'.get_bloginfo('name').'">';
             ?>
         </a>
      </div>
      <h4><?php the_field('video_header')?></h4>
   </div>
</section>