<?php 
/**
 * Module Name: PowerFLX Just Text
 * Description: Template for PowerFLX Just Text Module.
 */
$uuid = wp_unique_id( 'pflx-just-text-' );
$just_text_bg_color = '';
$just_text_bg_color = get_sub_field( 'just_text_bg_color' ) ? get_sub_field( 'just_text_bg_color' ) : '';
$just_text_top_text = '';
$just_text_top_text = get_sub_field( 'just_text_top_text' ) ? get_sub_field( 'just_text_top_text' ) : '';
$just_text_header = '';
$just_text_header = get_sub_field( 'just_text_header' ) ? get_sub_field( 'just_text_header' ) : '';
$just_text_paragraph = '';
$just_text_paragraph = get_sub_field( 'just_text_paragraph' ) ? get_sub_field( 'just_text_paragraph' ) : '';
$just_text_text_color = '';
$just_text_text_color = get_sub_field( 'just_text_text_color' ) ? get_sub_field( 'just_text_text_color' ) : '';
?>
<section id="section_pflx-just-text-wrapper" class="p-0 <?php echo $uuid; ?>" style="background-color: <?php echo $just_text_bg_color; ?>">
    <style>
        .<?php echo $uuid; ?> .pflx-just-text-top-text-container::before {
            background: <?php echo $just_text_text_color; ?>;
            content: '';
            display: inline-block;
            height: 1px;
            left: -15px;
            position: relative;
            top: 50%;
            width: 1.5%;
            z-index: 1;
        }
        .<?php echo $uuid; ?> .pflx-just-text-top-text-container::after {
            background-color: rgba(163, 168, 170, 0);
            color: #a3a8aa;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 7.5px;
            padding-left: 22px;
            position: relative;
            line-height: 25.7px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "Eurostile-Normal";
            font-size: 12px;
            color: <?php echo $just_text_text_color; ?>
        }
        .<?php echo $uuid; ?> .pflx-just-text-header-container h2 {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : <?php echo $just_text_text_color; ?>;
        }
        .<?php echo $uuid; ?> .pflx-just-text-paragraph-container p {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 25px;
            color : <?php echo $just_text_text_color; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
    </style>
    <div class="container-fluid">
        <div class="pflx-just-text-top-text-container pt-5" data-content="<?php echo $just_text_top_text; ?>"></div>
        <div class="p-4 ps-md-5 pe-md-5">
            <div class="row">
                <div class="col-12">
                    <div class="pflx-just-text-header-container pt-3">
                        <h2><?php echo $just_text_header; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="pflx-just-text-paragraph-container pt-3">
                        <p><?php echo $just_text_paragraph; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>