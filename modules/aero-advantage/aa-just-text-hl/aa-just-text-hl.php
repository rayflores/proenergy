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
if ( 'rgb(134,38,51)' === $aa_jt_hl_background_color ) :
    $content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow-white.png' . '");"';
endif;
?>
<section id="section_aa-jt-hl-wrapper" class="p-0 <?php echo $aa_uuid; ?>" style="background-color: <?php echo $aa_jt_hl_background_color; ?>">
    <style>
        .<?php echo $aa_uuid; ?> .aa-jt-hl-top-text-container::before {
            background: <?php echo $aa_jt_hl_text_color; ?>;
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            vertical-align: middle;
            width: 52px;
            z-index: 1;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-top-text-container::after {
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 0.5em;
            padding-left: 28px;
            position: relative;
            line-height: 25.7px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "eurostile", sans-serif;
            font-size: clamp(0.875rem, 0.696rem + 0.476vw, 1.125rem);
            font-weight: 700;
            color: <?php echo $aa_jt_hl_text_color; ?>
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-header-container h2 {
            font-family : "eurostile", sans-serif;
            font-size: clamp(1.75rem, 1.504rem + .995vw, 2.25rem);
            font-weight : 900;
            line-height: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
            letter-spacing : 0.01em;
            color : <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-paragraph-container p {
            font-family : "myriad-pro", sans-serif;
            font-size: clamp(1rem, 0.911rem + 0.238vw, 1.125rem);
            line-height : clamp(1.125rem, 0.946rem + 0.476vw, 1.375rem);
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
            font-family : "eurostile", sans-serif;
            font-size: clamp(2rem, 0.75rem + 3.333vw, 3.75rem);
            font-weight: 800;
            line-height : 1em;
            text-transform : uppercase;
            color : <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-bullet-point-description {
            font-family : "eurostile", sans-serif;
            font-size: clamp(1.25rem, 0.714rem + 1.429vw, 2rem);
            line-height : 1.5em;
            letter-spacing : 0.01em;
            color : <?php echo $aa_jt_hl_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container {
            background-color: <?php echo $aa_jt_hl_background_color; ?>;
            min-height: 5rem;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container.darker,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container.darker {
            background-color: rgba(0,0,0,0.2);
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container.darker a,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container.darker a {
            color: #ffffff;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container a,
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container a {
            font-family: "myriad-pro", sans-serif;
            font-size: 18px;
            font-style: italic;
            line-height: 25px;
            color: #A3A8AA;
            text-decoration: none;
        }

        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
            transition: 0.3s;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-container a:hover::after {
            margin-left: 1.5em;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container a::after {
            content: url("<?php echo get_stylesheet_directory_uri();?>/images/right-arrow-white.png");
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
            transition: 0.3s;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-link-two-container a:hover::after {
            margin-left: 1.5em;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-hl-paragraph-container p.bullet-top {
            font-family : "eurostile", sans-serif;
            font-size : 24px;
            font-weight: 700;
            line-height : 27px;
            letter-spacing : normal;
            padding: 0;
            color : #862633;
        }
        @media screen and (max-width: 768px) {
            .<?php echo $aa_uuid; ?> .aa-jt-hl-top-text-container::before {
                width: 20px;
            }
            .<?php echo $aa_uuid; ?> .aa-jt-hl-top-text-container::after {
                letter-spacing: 0.25em;
                padding-left: 20px;
            }
        }
    </style>
    <div class="container-fluid p-0">
        <div class="aa-jt-hl-top-text-container pt-5" data-content="<?php echo $aa_jt_hl_top_text; ?>"></div>
        <div class="p-4 ps-lg-5 pe-lg-5 pb-5">
            <div class="row g-0">
                <div class="col-12 ps-3 ps-lg-4">
                    <div class="aa-jt-hl-header-container pt-3 ps-2">
                        <h2><?php echo $aa_jt_hl_header; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-8 ps-3 ps-lg-4">
                    <div class="aa-jt-hl-paragraph-container pt-3 ps-2">
                        <p><?php echo $aa_jt_hl_paragraph; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        if ( '' !== get_sub_field( 'aa_jt_hl_link') ) : 
        $aa_jt_hl_link = get_sub_field( 'aa_jt_hl_link'); ?>
        <div class="row g-0">
            <div class="col-8">
                <?php
                $add_class = '';
                if ( 'rgb(134,38,51)' === $aa_jt_hl_background_color ) : 
                    $add_class = 'darker'; 
                endif; ?>
                <div class="aa-jt-hl-link-container d-flex align-items-center ps-2 ps-lg-5 <?php echo $add_class; ?>">
                    <a class="aa-jt-hl-link ps-4 ms-2" href="<?php echo $aa_jt_hl_link['url']; ?>" target="<?php echo $aa_jt_hl_link['target']; ?>"><?php echo $aa_jt_hl_link['title']; ?></a>
                </div>
            </div>
        <?php 
        if ( '' !== get_sub_field( 'aa_jt_hl_link_two') ) : 
        $aa_jt_hl_link = get_sub_field( 'aa_jt_hl_link_two'); ?>
            <div class="col-6">
                <div class="aa-jt-hl-link-two-container d-flex align-items-center ps-5 darker">
                    <a class="aa-jt-hl-link-two ps-4 ms-2" href="<?php echo $aa_jt_hl_link_two['url']; ?>" target="<?php echo $aa_jt_hl_link_two['target']; ?>"><?php echo $aa_jt_hl_link_two['title']; ?></a>
                </div>
            </div>
        </div>
        <?php else: ?>
        </div>
        <?php endif; endif; ?>
    </div>
</section>