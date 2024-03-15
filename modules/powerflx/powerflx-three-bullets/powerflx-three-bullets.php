<?php
/**
 * Module Name: PowerFLX Three Bullets
 * Description: Template for PowerFLX Three Bullets Module
 */
?>
<section id="section_powerflx-three-bullets" class="m-5 pb-5">
<style>
    .powerflx-bullet-percentage {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .powerflx-bullet-text {
        font-family : "eurostile", sans-serif;
        font-size : 24px;
        line-height : 26px;
        letter-spacing : 0.24px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }

</style>
    <div class="container-fluid">
        <div class="row g-0">
            <?php            
            if( have_rows('powerflx_bullets') ) : 
                while( have_rows('powerflx_bullets') ) : the_row();
                $percentage = get_sub_field('powerflx_bullet_percentage') !== '' ? get_sub_field('powerflx_bullet_percentage') : '';
                $text = get_sub_field('powerflx_bullet_text') !== '' ? get_sub_field('powerflx_bullet_text') : '';
                ?>
                    <div class="powerflx-bullet col-4">
                        <div class="powerflx-bullet-percentage"><?php echo $percentage; ?></div>
                        <div class="powerflx-bullet-text"><?php echo $text; ?></div>
                    </div>

                <?php 
                endwhile;
            endif; ?>
        </div>
    </div>
</section>