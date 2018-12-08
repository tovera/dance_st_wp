<section id="teachers" class="team">
         <div class="team-title">
            <h3>TRENERIAI</h3>
         </div>
            <div class="row">
            <?php
            if(have_rows('teachers')):
            while(have_rows('teachers')):
            the_row();
            ?>   
 <a href="" data-modal="#<?php the_sub_field('modal_id'); ?>" class="modal__trigger">
            <div  class="team-people column">
               <div class="team-border">
                  <div class="team-photo">
                     <img src="<?php the_sub_field('teacher_foto'); ?>" alt="<?php the_sub_field('teacher_name'); ?>">
               
                  <div class="teacher-name">
                    <?php the_sub_field('teacher'); ?>
                     <p><?php the_sub_field('teacher_name'); ?></p>
                  </div>
                  </div>
               </div>
            </div>
            </a>
            <div id="<?php the_sub_field('modal_id'); ?>" class="modal modal--align-top modal__bg" role="dialog" aria-hidden="true">
                     <div class="modal__dialog">
                        <div class="modal__content">
                           <h1><?php the_sub_field('teacher_name_popup'); ?></h1>
                           <p><?php the_sub_field('teacher_dosje'); ?></p>
                           
                           <!-- modal close button -->
                           <a href="" class="modal__close demo-close">
                              <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
                           </a>
                           
                        </div>
                     </div>
            </div>

               <?php
        endwhile;
        endif;
    ?>
         </div>
    </section>