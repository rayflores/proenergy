<?php
/**
 * Module Name: AeroAdvantage Just Text with Highlight Links
 * Description: Template for AeroAdvantage Just Text Module.
 */
$aa_uuid = wp_unique_id( 'aa-jt-hl-' );
$aa_jt_hl_background_color = '';
$aa_jt_hl_background_color = get_sub_field( 'aa_jt_hl_background_color' ) ? get_sub_field( 'aa_jt_hl_background_color' ) : '';
$aa_jt_hl_top_text = '';
$aa_jt_hl_top_text = get_sub_field( 'aa_jt_hl_top_text' ) ? get_sub_field( 'aa_jt_hl_top_text' ) : '';
$aa_jt_hl_header = '';
$aa_jt_hl_header = get_sub_field( 'aa_jt_hl_header' ) ? get_sub_field( 'aa_jt_hl_header' ) : '';
$aa_jt_hl_paragraph = '';
$aa_jt_hl_paragraph = get_sub_field( 'aa_jt_hl_paragraph' ) ? get_sub_field( 'aa_jt_hl_paragraph' ) : '';
$aa_jt_hl_text_color = '';
$aa_jt_hl_text_color = get_sub_field( 'aa_jt_hl_text_color' ) ? get_sub_field( 'aa_jt_hl_text_color' ) : '';
$aa_jt_hl_link = '';
$aa_jt_hl_link = get_sub_field( 'aa_jt_hl_link' ) ? get_sub_field( 'aa_jt_hl_link' ) : '';
$aa_jt_hl_link_two = '';
$aa_jt_hl_link_two = get_sub_field( 'aa_jt_hl_link_two' ) ? get_sub_field( 'aa_jt_hl_link_two' ) : '';

$content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow.png' . '");"';
?>
<section id="section_aa-jt-hl-wrapper" class="p-0 <?php echo $aa_uuid; ?>" style="background-color: <?php echo $aa_jt_hl_background_color; ?>">
    <style>
        .<?php echo $aa_uuid; ?> .aa-jt-hl-top-text-container::before {
            background: <?php echo $aa_jt_hl_text_color; ?>;
            content: '';
            display: inline-block;
            height: 1px;
            left: -15px;
            position: relative;
            top: 50%;
            width: 1.5%;
            z-index: 1;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-top-text-container::after {
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
            color: <?php echo $aa_jt_hl_text_color; ?>
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-header-container h2 {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-paragraph-container p {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 25px;
            color : <?php echo $aa_jt_hl_text_color; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-bullet-point-heading-container, 
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container a,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container a {
            color: <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-bullet-point-heading-container h1 {
            font-family : "Eurostile-Bold";
            font-size : 45px;
            line-height : 54.85px;
            text-transform : uppercase;
            color : <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-bullet-point-description {
            font-family : "Eurostile-Normal";
            font-size : 24px;
            line-height : 31.1px;
            letter-spacing : 0.24px;
            color : <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container {
            background-color: <?php echo $aa_jt_hl_background_color; ?>;
            min-height: 5rem;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container.darker {
            background-color: rgba(163,168,170,0.5);
        }
         .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container.darker a {
            color: #53565A;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container a,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container a {
            font-family: "MyriadPro-Italic";
            font-size: 18px;
            line-height: 25px;
            color: #A3A8AA;
            text-decoration: none;
        }

        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container a::after,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="aa-jt-hl-top-text-container pt-5" data-content="<?php echo $aa_jt_hl_top_text; ?>"></div>
        <div class="p-4 ps-md-5 pe-md-5 pb-5">
            <div class="row">
                <div class="col-12">
                    <div class="aa-jt-hl-header-container pt-3">
                        <h2><?php echo $aa_jt_hl_header; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="aa-jt-hl-paragraph-container pt-3">
                        <p><?php echo $aa_jt_hl_paragraph; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ( '' !== get_sub_field( 'aa_jt_hl_link') ) : 
        $aa_jt_hl_link = get_sub_field( 'aa_jt_hl_link'); ?>
        <div class="row g-0">
            <div class="col-6">
                <div class="aa-jt-hl-link-container d-flex align-items-center ps-5">
                    <a class="aa-jt-hl-link" href="<?php echo $aa_jt_hl_link['url']; ?>" target="<?php echo $aa_jt_hl_link['target']; ?>"><?php echo $aa_jt_hl_link['title']; ?></a>
                </div>
            </div>
        <?php 
        if ( '' !== get_sub_field( 'aa_jt_hl_link_two') ) : 
        $aa_jt_hl_link = get_sub_field( 'aa_jt_hl_link_two'); ?>
            <div class="col-6">
                <div class="aa-jt-hl-link-two-container d-flex align-items-center ps-5 darker">
                    <a class="aa-jt-hl-link-two" href="<?php echo $aa_jt_hl_link_two['url']; ?>" target="<?php echo $aa_jt_hl_link_two['target']; ?>"><?php echo $aa_jt_hl_link_two['title']; ?></a>
                </div>
            </div>
        </div>
        <?php else: ?>
        </div>
        <?php endif; endif; ?>
    </div>
</section>