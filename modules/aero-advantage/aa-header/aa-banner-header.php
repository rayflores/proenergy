<?php
/**
 * Module Name: AeroAdvantage Banner Header
 * Description: Template for AeroAdvantage Banner Header Module.
 */
// this gives us the ID of the page if we ever need it
$aa_bh_page_title = get_sub_field( 'aa_bh_page_title' ) ? get_sub_field( 'aa_bh_page_title' ) : '';
?>
<style>
    #menu-top-menu {
        display: none;
    }
    .aa-banner-header-text-container::before {
            background: #ffffff;
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            vertical-align: middle;
            width: 30px;
            z-index: 1;
    }
    .aa-banner-header-container {
        min-height: 75px;
    }
    .aa-banner-header-container span{
        font-family : "Eurostile-Bold";
        font-size : 14px;
        line-height : 36px;
        letter-spacing : 7px;
        text-transform : uppercase;
        color : #FFFFFF;
        padding-left: 25px;
    }
</style>
<section id="section_aa-banner-header-wrapper" class="" style="background-color: #862633;">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 p-0">
                <div class="aa-banner-header-container d-flex align-items-center">
                    <div class="aa-banner-header-text-container">
                        <?php the_title('<span>', '</span>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>