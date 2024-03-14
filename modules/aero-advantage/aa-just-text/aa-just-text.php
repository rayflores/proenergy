<?php
/**
 * Module Name: AeroAdvantage Just Text
 * Description: Template for AeroAdvantage Just Text Module.
 */
$aa_jt_uuid = wp_unique_id( 'aa-just-text-' );
$aa_just_text_bg_color = '';
$aa_just_text_bg_color = get_sub_field( 'aa_just_text_bg_color' ) ? get_sub_field( 'aa_just_text_bg_color' ) : '';
$aa_just_text_top_text = '';
$aa_just_text_top_text = get_sub_field( 'aa_just_text_top_text' ) ? get_sub_field( 'aa_just_text_top_text' ) : '';
$aa_just_text_header = '';
$aa_just_text_header = get_sub_field( 'aa_just_text_header' ) ? get_sub_field( 'aa_just_text_header' ) : '';
$aa_just_text_paragraph = '';
$aa_just_text_paragraph = get_sub_field( 'aa_just_text_paragraph' ) ? get_sub_field( 'aa_just_text_paragraph' ) : '';
$aa_just_text_text_color = '';
$aa_just_text_text_color = get_sub_field( 'aa_just_text_text_color' ) ? get_sub_field( 'aa_just_text_text_color' ) : '';

$content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow.png' . '");"';
?>
<section id="section_aa-just-text-wrapper" class="p-0 <?php echo $aa_jt_uuid; ?>" style="background-color: <?php echo $aa_just_text_bg_color; ?>">
    <style>
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-top-text-container::before {
            background: <?php echo $aa_just_text_text_color; ?>;
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            width: 52px;
            height: 1px;
            z-index: 1;
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-top-text-container::after {
            content: attr(data-content);
            display: inline-block;
            font-family: "eurstile",sans-serif;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: .5em;
            padding-left: 80px;
            position: relative;
            line-height: 1.5em;
            text-transform: uppercase;
            z-index: 0;
            color: <?php echo $aa_just_text_text_color; ?>
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-header-container h2 {
            font-family : "eurostile", sans-serif;
            font-size : 2.92em;
            font-weight : 900;
            line-height : 45px;
            letter-spacing : 0.35px;
            color : <?php echo $aa_just_text_text_color; ?>;
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-paragraph-container p {
            font-family : "myriad-pro", sans-serif;
            font-size : 18px;
            line-height : 25px;
            color : <?php echo $aa_just_text_text_color; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-bullet-point-heading-container, 
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-link-container a {
            color: <?php echo $aa_just_text_text_color; ?>;
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-bullet-point-heading-container h1 {
            font-family : "eurostile", sans-serif;
            font-size : 45px;
            font-weight: 700;
            line-height : 54.85px;
            text-transform : uppercase;
            color : <?php echo $aa_just_text_text_color; ?>;
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-bullet-point-description {
            font-family : "eurostile", sans-serif;
            font-size : 24px;
            line-height : 31.1px;
            letter-spacing : 0.24px;
            color : <?php echo $aa_just_text_text_color; ?>;
        }
        .<?php echo $aa_jt_uuid; ?> .aa-just-text-link-container a {
            font-family: "myriad-pro", sans-serif;
            font-size: 18px;
            font-style: italic;
            line-height: 25px;
            color: #A3A8AA;
            text-decoration: none;
        }

        .<?php echo $aa_jt_uuid; ?> .aa-just-text-link-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
    </style>
    <div class="row g-0 pt-5">
        <div class="container-fluid p-0">
            <div class="aa-just-text-top-text-container position-relative" data-content="<?php echo $aa_just_text_top_text; ?>"></div>
            <div class="p-4 ps-lg-5 ms-3 pe-lg-5 pb-5">
                <div class="row g-0">
                    <div class="col-12">
                        <div class="aa-just-text-header-container ps-3 pt-3">
                            <h2 class="ps-4"><?php echo $aa_just_text_header; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <div class="aa-just-text-paragraph-container ps-3 pt-3">
                            <p class="ps-4"><?php echo $aa_just_text_paragraph; ?></p>
                        </div>
                    </div>
                </div>
                <?php
                if ( '' !== get_sub_field( 'aa_just_text_link') ) : 
                $aa_just_text_link = get_sub_field( 'aa_just_text_link'); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="aa-just-text-link-container ps-3 py-5">
                            <a class="aa-just-text-link" href="<?php echo $aa_just_text_link['url']; ?>" target="<?php echo $aa_just_text_link['target']; ?>"><?php echo $aa_just_text_link['title']; ?></a>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>