<?php
/**
 * Module Name: AeroAdvantage Three Bullets
 * Description: Template for AeroAdvantage Three Bullets Module.
 */
?>
<section id="section_aa-three-bullets" class="mx-5 mb-5 pb-5">
<style>
    .aa-single-bullet-percentage {
        font-family : "eurostile", sans-serif; 
        font-size : 35px;
        font-weight : 700;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .aa-single-bullet-text {
        font-family : "Eurostile-Normal";
        font-size : 24px;
        line-height : 26px;
        letter-spacing : 0.24px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }

</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <?php            
            if( have_rows('aa_three_bullets') ) : 
                while( have_rows('aa_three_bullets') ) : the_row();
                $aa_single_bullet_percentage = get_sub_field('aa_single_bullet_percentage') !== '' ? get_sub_field('aa_single_bullet_percentage') : '';
                $aa_single_bullet_text = get_sub_field('aa_single_bullet_text') !== '' ? get_sub_field('aa_single_bullet_text') : '';
                ?>
                    <div class="aa-single-bullet col-12 col-md-4">
                        <div class="aa-single-bullet-percentage"><?php echo $aa_single_bullet_percentage; ?></div>
                        <div class="aa-single-bullet-text"><?php echo $aa_single_bullet_text; ?></div>
                    </div>

                <?php 
                endwhile;
            endif; ?>
        </div>
    </div>
</section>