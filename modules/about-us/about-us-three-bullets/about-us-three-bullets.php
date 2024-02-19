<?php
/**
 * Module Name: About Us Three Bullets
 * Description: Template for About Us Three Bullets Module.
 */
?>
<section id="section_about-us-three-bullets" class="m-5 pb-5">
<style>
    .ab-single-bullet-percentage {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .ab-single-bullet-text {
        font-family : "Eurostile-Normal";
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
            if( have_rows('ab_three_bullets') ) : 
                while( have_rows('ab_three_bullets') ) : the_row();
                $ab_single_bullet_percentage = get_sub_field('ab_single_bullet_percentage') !== '' ? get_sub_field('ab_single_bullet_percentage') : '';
                $ab_single_bullet_text = get_sub_field('ab_single_bullet_text') !== '' ? get_sub_field('ab_single_bullet_text') : '';
                ?>
                    <div class="ab-single-bullet col-4">
                        <div class="ab-single-bullet-percentage"><?php echo $ab_single_bullet_percentage; ?></div>
                        <div class="ab-single-bullet-text"><?php echo $ab_single_bullet_text; ?></div>
                    </div>

                <?php 
                endwhile;
            endif; ?>
        </div>
    </div>
</section>