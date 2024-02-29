<?php
/**
 * Module Name: Sustainability All Text
 * Description: Template for Sustainability All Text Module.
 */
$sus_all_text_header = get_sub_field('sus_all_text_header') ? get_sub_field('sus_all_text_header') : '';
$sus_all_text_paragraph = get_sub_field('sus_all_text_paragraph') ? get_sub_field('sus_all_text_paragraph') : '';
$sus_all_text_link = get_sub_field('sus_all_text_link') ? get_sub_field('sus_all_text_link') : '';
?>
<section id="sus-all-text" class="">
<style>
    .sus-all-text-header-container h2 {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .sus-all-text-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
        margin-top: 1.25em;
        margin-bottom: 3em;
        padding-right: 0;
    }
</style>
    <div class="container-fluid">
        <div class="p-4 ps-md-5 pe-md-5 mb-4">
            <div class="col-lg-12 px-0">
                <div class="sus-all-text-header-container">
                    <h2><?php echo $sus_all_text_header; ?></h2>
                </div>
                <div class="sus-all-text-paragraph-container">
                    <p class="col-lg-8 col-md-12 col-sm-10"><?php echo $sus_all_text_paragraph; ?></p>
                </div>
            </div>
        </div>
    </div>
</section>
