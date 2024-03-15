<?php
/**
 * Module Name: About Us By The Numbers
 * Description: Template for About Us By The Numbers Module.
 */
$ab_btn_top_text = get_sub_field('ab_btn_top_text') !== '' ? get_sub_field('ab_btn_top_text') : '';
$ab_btn_header = get_sub_field('ab_btn_header') !== '' ? get_sub_field('ab_btn_header') : '';
?>
<section id="section_ab-by-the-numbers" class="mb-5 mt-5">
    <style>
        .ab_btn-top-text-container::before {
        background: linear-gradient(90deg, rgba(163,168,170,1) 50%, transparent 50%);
        content: '';
        display: inline-block;
        height: 1px;
        padding-right: 40px;
        position: relative;
        vertical-align: middle;
        }
        .ab_btn-top-text-container {
            color: rgba(163,168,170);
            content: '';
            letter-spacing: 7.5px;
            position: relative;
            line-height: 25.7px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "eurostile", sans-serif;
            font-size: 14px;
        }
        .ab_btn-header {
            font-family: "Eurostile-Bold";
            font-size: 35px;
            line-height: 36px;
            color: #53565A;
        }
        .ab_btn-card-container {
            background-color: rgba(163,168,170,0.2);
            width: 100%;
          }
          .ab_btn-card-number-container {
            font-family: "Eurostile-Bold";
            font-size: 35px;
            line-height: 54px;
            color: #862633;
            color: rgb(134, 38, 51);
          }
          .ab_btn-card-text-container {
            font-family: "eurostile", sans-serif;
            font-size: 24px;
            line-height: 26px;
            color: #53565A;

          }
    </style>
    <div class="container-fluid p-0 pb-5">
        <div class="row g-0">
            <div class="ab_btn-wrapper col-12">
                <div class="ab_btn-top-text-container pt-5 pb-4">
                    <?php echo $ab_btn_top_text; ?>
                </div>
                <div class="ab_btn-header-container pb-5 ps-5">
                    <?php
                    if ( '' !== $ab_btn_header ) : ?>
                    <h2 class="ab_btn-header pt-3"><?php echo $ab_btn_header; ?></h2>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row g-0 justify-content-start">

            <?php 
            $counter = 0;
            $padding = '';
            if ( have_rows('ab_btn_cards') ) : 
                while ( have_rows('ab_btn_cards') ) : the_row();
                $counter++;
                if ( $counter == 3 ) {
                    $padding = 'pe-4';
                    $counter = 0;
                } else {
                    $padding = '';
                }
                $ab_btn_card_number = get_sub_field('ab_btn_card_number') !== '' ? get_sub_field('ab_btn_card_number') : '';
                $ab_btn_card_text = get_sub_field('ab_btn_card_text') !== '' ? get_sub_field('ab_btn_card_text') : '';
                ?>
                <div class="ab_btn-cards col-sm-4 col-xs-12 ps-4 pb-4 <?php echo $padding; ?>">
                    <div class="ab_btn-card-container p-5 h-100">
                        <div class="ab_btn-card-number-container">
                            <?php echo $ab_btn_card_number; ?>
                        </div>
                        <div class="ab_btn-card-text-container">
                            <?php echo $ab_btn_card_text; ?>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
            endif; ?>
        </div>
    </div>
</section>