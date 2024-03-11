<?php
/**
 * Module Name: AeroAdvantage Top Benefits
 * Description: Template for AeroAdvantage Top Benefits Module.
 */
$aa_tb_banner_text = get_sub_field('aa_tb_banner_text') ? get_sub_field('aa_tb_banner_text') : '';
?>
<section id="section_areoadvantage_tb" class="p-0 showcase">
    <style>
        .aa-tb-banner {
            background: linear-gradient(-60deg, #FFF 15%, #862633 15%);
        }
        .aa-tb-banner h2 {
            font-family: 'eurstile', sans-serif;
            font-size: 2.88em;
            font-weight: 700;
            letter-spacing: 0;
            line-height: 1.5em;
        }
        #section_areoadvantage_tb ul {
            padding-left: 1rem;
        }
        #section_areoadvantage_tb ul li {
            font-family: 'myriad-pro', sans-serif;
            font-size: 1.125em;
            line-height: 1.5em;
            color: #53565A;
            padding-left: 10px;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 col-md-5 ps-5 aa-tb-banner">
                <div class="aa-tb-text-container ms-3">
                    <h2 class="text-white ps-3">
                        <?php echo $aa_tb_banner_text; ?>
                    </h2>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 pt-5 ps-5 ms-4">
                <ul class="ps-4">
                <?php
                if ( have_rows('aa_tb_list_items') ) :
                    while( have_rows('aa_tb_list_items') ) : the_row();
                        $aa_tb_list_item = get_sub_field('aa_tb_li_item') ? get_sub_field('aa_tb_li_item') : '';
                        ?>
                        <li class=""><?php echo $aa_tb_list_item; ?></li>
                        <?php 
                    endwhile;
                endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>