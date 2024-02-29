<?php
/**
 * Module Name: Sustainability Three Bullets
 * Description: Template for Sustainability Three Bullets Module
 */
$sus_uuid = wp_unique_id( 'sus-three-bullets-' );
?>
<section id="section_sus-three-bullets" class="m-5 pb-5 <?php echo $sus_uuid; ?>">
<style>
    .<?php echo $sus_uuid; ?> .sus-bullet-percentage {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .<?php echo $sus_uuid; ?> .sus-bullet-text {
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
            if( have_rows('sust_three_bullets') ) : 
                while( have_rows('sust_three_bullets') ) : the_row();
                $sus_single_bullet_percentage = get_sub_field('sus_single_bullet_percentage') !== '' ? get_sub_field('sus_single_bullet_percentage') : '';
                $sus_single_bullet_text = get_sub_field('sus_single_bullet_text') !== '' ? get_sub_field('sus_single_bullet_text') : '';
                ?>
                    <div class="sus-bullet col-4">
                        <div class="sus-bullet-percentage"><?php echo $sus_single_bullet_percentage; ?></div>
                        <div class="sus-bullet-text"><?php echo $sus_single_bullet_text; ?></div>
                    </div>

                <?php 
                endwhile;
            endif; ?>
        </div>
    </div>
</section>