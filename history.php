<section id="about1" class="about">
    <div class="flex-container about-container">

            <div class="logo2">
                <?php
                $image = get_field('h_image');
                echo '<img src="'.$image['sizes']['medium'].'" alt="'.get_bloginfo('name').'">';
                ?>
            </div>
            <div class="about-hero ">
                <h3><?php the_field('h_history_header')?></h3>
                <p><?php the_field('h_history_text')?></p>
                <div class="home_btn">
                    <a href=""class="btn">DAUGIAU</a>
                </div>
            </div>       
    </div>

</section>