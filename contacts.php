<section id="contact1">
   <div class="row contact_us">
      <div class="contact-container column">
         <form id="contact" action="" method="post">
            <h3><?php the_field('form_head'); ?></h3>
            <?php the_content(); ?>    
            <?php echo do_shortcode(get_field('contact_form_shortcode')); ?>
         </form>
          </div>
         <div class="map column">
            <?php the_field('form_map'); ?>
         </div>
   </div>
</section>