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
        font-family : "eurostile", sans-serif;
        font-size: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
        font-style: 700;
        line-height: clamp(0.75rem, -1.163rem + 5.101vw, 3.428rem);
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .<?php echo $sus_uuid; ?> .sus-bullet-text {
        font-family : "eurostile", sans-serif;
        font-size: clamp(1rem, 0.643rem + 0.952vw, 1.5rem);
        line-height: clamp(1.25rem, 0.714rem + 1.429vw, 2rem);
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