<section id="lessons" class="lessons">
    <a href="" data-modal="#modalSchedular" class="modal__trigger">
        <h4>TVARKARAŠTIS</h4>
    </a>
                <div id="modalSchedular" class="modal modal--align-top modal__bg" role="dialog" aria-hidden="true">
                <div class="modal__schedular">
                    <div class="modal__content">
                        <div class="divTable row" >
        
        <div class="column week">
            <div class="divCell head-row">PIRMADIENIS</div>
            <div class="divCell">ZUMBA KIDS 10 - 14 m. 16.00 - 17.00</div>
            <div class="divCell">SPORTINIAI ŠOKIAI 7-10 m. 17.00 - 17.45</div>
            <div class="divCell">SPORTINIAI ŠOKIAI 4-6 m. 18.00 - 18.45</div>
            <div class="divCell">SPORTINĖ KLASĖ VAIKAI 3 L. 18.00 - 19.20</div>
            <div class="divCell">ZUMBA SUAUGUSIEMS 19.30 - 20.30</div>
        </div>
        <div class="column week">
            <div class="divCell head-row">ANTRADIENIS</div>
            <div class="divCell">SPORTINIAI ŠOKIAI 5-10 m. 10.00 - 10.45</div>
            <div class="divCell">SOLO MERGAITĖS 16.15 - 17.00</div>
            <div class="divCell">VAIKAI 1-2 LYGIS (ANTRAMEČIAI) 17.00 - 18.00</div>
            <div class="divCell">SPORTINĖ KLASĖ VAIKAI 3 L. 18.00 - 19.20</div>
            <div class="divCell">ŠOKIŲ KURSAI POROMS 19.30 - 20.30</div>
        </div>
        <div class="column week">
            <div class="divCell head-row">TREČIADIENIS</div>
            <div class="divCell">ZUMBA KIDS 10-14 m. 16.00 - 17.00 </div>
            <div class="divCell">SPORTINIAI ŠOKIAI 7-10 m. 17.00 - 17.45</div>
            <div class="divCell">SPORTINIAI ŠOKIAI 4-6 m. 18.00 - 18.45</div>
            <div class="divCell">SPORTINĖ KLASĖ VAIKAI 3 L. 18.00 - 19.20</div>
            <div class="divCell"></div>
        </div>  
        <div class="column week">
            <div class="divCell head-row">KETVIRTADIENIS</div>
            <div class="divCell">SPORTINIAI ŠOKIAI 5-10 m. 10.00 - 10.45</div>
            <div class="divCell">SOLO MERGAITĖS 16.15 - 17.00</div>
            <div class="divCell">VAIKAI 1-2 LYGIS (ANTRAMEČIAI) 17.00 - 18.00</div>
            <div class="divCell">SPORTINĖ KLASĖ VAIKAI 3 L. 18.00 - 19.20</div>
            <div class="divCell">SOLO LATINO 19.30 - 20.30 </div>
        </div>
        <div class="column week">
            <div class="divCell head-row">PENKTADIENIS</div>
            <div class="divCell">VAIKAI 1-2 LYGIS (ANTRAMEČIAI) 17.00 - 18.00</div>
            <div class="divCell">PAPILDOMOS PAMOKOS PAPILDOMOS PAMOKOS</div>
            <div class="divCell">PAPILDOMOS PAMOKOS PAPILDOMOS PAMOKOS</div>
            <div class="divCell">PAPILDOMOS PAMOKOS PAPILDOMOS PAMOKOS</div>
            <div class="divCell">PAPILDOMOS PAMOKOS PAPILDOMOS PAMOKOS</div>
        </div>
    </div>
                        <!-- modal close button -->
                        <a href="" class="modal__close demo-close">
                              <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
                           </a>
                    </div>
                </div>
            </div>
   <?php
      if(have_rows('dance_row')):
      while(have_rows('dance_row')):
      the_row();
      ?>   
   <div class="row">
      <?php
         if(have_rows('l_dance_style_repeater')):
         while(have_rows('l_dance_style_repeater')):
         the_row();
         ?>
      <div class="exercise column">
         <div class="dance-icon">
            <img src="<?php the_sub_field('dance_icon'); ?>" alt="Alemanda">
         </div>
         <div class="dance-stile">
            <h3><?php the_sub_field('dance_header'); ?></h3>
            <p class="dance-stile-p"><?php the_sub_field('dance_description'); ?></p>
         </div>
      </div>
      <?php
         endwhile;
         endif;
         ?>
   </div>
   <?php
      endwhile;
      endif;
      ?>
</section>
<!-- lessons ends -->