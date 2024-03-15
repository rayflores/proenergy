<?php
/**
 * Module Name: PowerFLX Text Unordered List
 * Description: Template for PowerFLX Text Unordered List Module
 */
$ul_top_text = get_sub_field( 'ul_top_text' ) ? get_sub_field( 'ul_top_text' ) : '';
$ul_header_text = get_sub_field( 'ul_header_text' ) ? get_sub_field( 'ul_header_text' ) : '';
$ul_top_paragraph = get_sub_field( 'ul_top_paragraph' ) ? get_sub_field( 'ul_top_paragraph' ) : '';
$ul_list_header = get_sub_field( 'ul_list_header' ) ? get_sub_field( 'ul_list_header' ) : '';
?>
<section id="section_powerflx-ulist" class="mt-0">
<style>
    #section_powerflx-ulist {
        background: rgba(0,58,112,1);
    }
    .pflx-ulist-top-text::before {
        background: #fff;
        content: '';
        display: inline-block;
        height: 1px;
        left: -15px;
        position: relative;
        top: 50%;
        width: 1.75%;
    }
    .pflx-ulist-top-text::after {
        background-color: rgba(0, 58, 112, 1);
        color: #fff;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 7.5px;
        padding-left: 18px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family : "eurostile", sans-serif;
        font-size : 12px;
        color : rgb(255, 255, 255);
    }
    .pflx-ulist-header-text {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 46px;
        letter-spacing : 0.35px;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
    }
    .pflx-ulist-top-paragraph {
        font-family : Myriad Pro;
        font-size : 18px;
        line-height : 22px;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
    }
    .pflx-ulist-list-header h3 {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        font-weight: bold;
        line-height : 20px;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
    }
    .pflx-ulist-list ul {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        padding-left: 13px;
    }
    .pflx-ulist-list ul li {
        color: #fff;
    }
</style>
    <div class="container-fluid">
        <div class="row g-0">
            <div class="col-12">
                <div class="pflx-ulist-top-text pt-5 mt-5" data-content="<?php echo $ul_top_text; ?>"></div>
                <div class="pflx-ulist-header-text mt-4 ps-5"><?php echo $ul_header_text; ?></div>
                <div class="pflx-ulist-top-paragraph mt-5 ps-5 col-md-5 col-sm-10"><?php echo $ul_top_paragraph; ?></div>
            </div>
        </div>
        <div class="row g-0">    
            <div class="pflx-ulist-list-header pt-5 ps-5 mt-5 mb-1">
                <h3><?php echo $ul_list_header; ?></h3>
            </div>
            <div class="pflx-ulist-list col-md-8 col-sm-10 ps-5 mb-5">
                <ul>
                    <?php
                    if( have_rows('unordered_list_items') ) : 
                        $count = 0;
                        while( have_rows('unordered_list_items') ) : the_row();
                        $list_item = get_sub_field('list_item') !== '' ? get_sub_field('list_item') : '';
                        ?>
                        <li><?php echo $list_item; ?></li>
                        <?php 
                        $count++;
                        endwhile;
                    endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>