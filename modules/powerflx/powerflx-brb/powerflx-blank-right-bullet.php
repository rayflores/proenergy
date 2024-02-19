<?php
/**
 * Module Name: PowerFLX Blank Right Bullet
 * Description: Template for PowerFLX Blank Right Bullet Module.
 */
$brb_top_text = get_sub_field( 'brb_top_text' ) ? get_sub_field( 'brb_top_text' ) : '';
$brb_header_text = get_sub_field( 'brb_headline' ) ? get_sub_field( 'brb_headline' ) : '';
$brb_paragraph = get_sub_field( 'brb_paragraph' ) ? get_sub_field( 'brb_paragraph' ) : '';
$brb_link = get_sub_field( 'brb_link' ) ? get_sub_field( 'brb_link' ) : '';
$brb_percentage = get_sub_field( 'brb_percentage' ) ? get_sub_field( 'brb_percentage' ) : '';
$brb_percentage_description = get_sub_field( 'brb_percentage_description' ) ? get_sub_field( 'brb_percentage_description' ) : '';
?>
<section id="section_pflx_brb" class="p-0">
<style>
    #section_pflx_brb {
        position: relative;
        min-height: 35rem;
    }
    .pflx_brb_text_top::before{
        background: rgba(163, 168, 170, 0.5);
        content: '';
        display: inline-block;
        height: 1px;
        left: -12px;
        position: relative;
        top: 50%;
        width: 3%;
        z-index: 1;
    }
    .pflx_brb_text_top::after {
        background-color: rgba(163, 168, 170, 0);
        color: #a3a8aa;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 7.5px;
        padding-left: 15px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family: "Eurostile-Normal";
        font-size: 12px;
        color: rgb(163, 168, 170);
    }
    .pflx_brb_text_header {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .pflx_brb_text_paragraph {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
        margin-top: 1.25em;
        margin-bottom: 3em;
        padding-right: 0;
    }
    .pflx_brb_percentage {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .pflx_brb_percentage_description {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 25px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .pflx_brb_text_bottom_link a {
        color : #aca8aa;
        font-family : "MyriadPro-Italic";
        font-size : 1.125em;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .pflx_brb_text_bottom_link a::after {
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        padding-left: 1em;
    }
    .pflx_brb_text_bottom_link {
        background: linear-gradient(-90deg, transparent 30%, rgba(83,86,90,0.25) 25%);
    }
</style>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 p-0">
                <div class="pflx_brb_text_top pt-5" data-content="<?php echo $brb_top_text; ?>"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ps-4">
                <div class="pflx_brb_text_header pt-5 ps-5">
                    <h2><?php echo $brb_header_text; ?></h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ps-4">
                <div class="pflx_brb_text_paragraph pt-3 ps-5">
                    <p><?php echo $brb_paragraph; ?></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 ps-4">
                <div class="pflx_brb_bullet_point pt-3 ps-5">
                    <div class="pflx_brb_percentage"><?php echo $brb_percentage; ?></div>
                    <div class="pflx_brb_percentage_description"><?php echo $brb_percentage_description; ?></div>
                </div>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-12">
                <div class="pflx_brb_text_bottom_link pt-4 ps-5 pb-4">
                    <a class="ps-3" href="<?php echo $brb_link['url']; ?>" target="<?php echo $brb_link['target']; ?>"><?php echo $brb_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>