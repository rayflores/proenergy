<?php
/**
 * Module Name: AeroAdvantage Just Text With List
 * Description: Template for AeroAdvantage Just Text With List Module.
 */
$aa_uuid = wp_unique_id( 'aa-just-text-list-' );
$aa_just_text_list_bg_color = '';
$aa_just_text_list_bg_color = get_sub_field( 'aa_just_text_list_bg_color' ) ? get_sub_field( 'aa_just_text_list_bg_color' ) : '';
$aa_just_text_list_top_text = '';
$aa_just_text_list_top_text = get_sub_field( 'aa_just_text_list_top_text' ) ? get_sub_field( 'aa_just_text_list_top_text' ) : '';
$aa_just_text_list_header = '';
$aa_just_text_list_header = get_sub_field( 'aa_just_text_list_header' ) ? get_sub_field( 'aa_just_text_list_header' ) : '';
$aa_just_text_list_paragraph = '';
$aa_just_text_list_paragraph = get_sub_field( 'aa_just_text_list_paragraph' ) ? get_sub_field( 'aa_just_text_list_paragraph' ) : '';
$aa_just_text_list_text_color = '';
$aa_just_text_list_text_color = get_sub_field( 'aa_just_text_list_text_color' ) ? get_sub_field( 'aa_just_text_list_text_color' ) : '';

$content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow.png' . '");"';
?>
<section id="section_aa-just-text-list-wrapper" class="p-0 <?php echo $aa_uuid; ?>" style="background-color: <?php echo $aa_just_text_list_bg_color; ?>">
    <style>
        .<?php echo $aa_uuid; ?> .aa-just-text-list-top-text-container::before {
            background: rgba(163, 168, 170, 0.5);
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            top: 50%;
            width: 52px;
            z-index: 1;
            vertical-align: middle;
        }
        .<?php echo $aa_uuid; ?> .aa-just-text-list-top-text-container::after {
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
            color: rgba(163, 168, 170, 1);
        }
        .<?php echo $aa_uuid; ?> .aa-just-text-list-header-container h2 {
            font-family : "eurostile", sans-serif;
            font-size: clamp(1.75rem, 0.902rem + 2.262vw, 2.938rem);
            font-weight: 800;
            letter-spacing: 0;
            line-height: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
            color : <?php echo $aa_just_text_list_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-just-text-list-paragraph-container p {
            font-family : "myriad-pro", sans-serif;
            font-size: clamp(1rem, 0.911rem + 0.238vw, 1.125rem);
            font-weight: 400;
            line-height: clamp(1.25rem, 1.071rem + 0.476vw, 1.5rem);
            color : <?php echo $aa_just_text_list_text_color; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
        .<?php echo $aa_uuid; ?> .aa-just-text-list-link-container a {
            color: <?php echo $aa_just_text_list_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-just-text-list-link-container a {
            font-family: "myriad-pro", sans-serif;
            font-size: 18px;
            font-style: italic;
            line-height: 25px;
            color: #A3A8AA;
            text-decoration: none;
        }

        .<?php echo $aa_uuid; ?> .aa-just-text-list-link-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
        .<?php echo $aa_uuid; ?> .aa-just-text-list-items-container {
            background: rgba(163, 168, 170, 0.2);
        }
        @media screen and (max-width: 768px) {
            .<?php echo $aa_uuid; ?> .aa-just-text-list-top-text-container::before {
                width: 20px;
            }
            .<?php echo $aa_uuid; ?> .aa-just-text-list-top-text-container::after {
                padding-left: 20px;
            }
            .<?php echo $aa_uuid; ?> .aa-just-text-list-header-container h2,
            .<?php echo $aa_uuid; ?> .aa-just-text-list-paragraph-container p {
                padding-left: 40px;
            }
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 col-md-7">
                <div class="aa-just-text-list-top-text-container pt-5" data-content="<?php echo $aa_just_text_list_top_text; ?>"></div>
                <div class="aa-just-text-list-header-container pt-3 ms-lg-4 ps-lg-5">
                    <h2 class="ps-lg-2"><?php echo $aa_just_text_list_header; ?></h2>
                </div>
                <div class="aa-just-text-list-paragraph-container pt-3 ms-lg-4 ps-lg-5">
                    <p class="ps-lg-2"><?php echo $aa_just_text_list_paragraph; ?></p>
                </div>
                <?php
                if ( '' !== get_sub_field( 'aa_just_text_list_link') ) : 
                $aa_just_text_list_link = get_sub_field( 'aa_just_text_list_link'); ?>
                <div class="aa-just-text-list-link-container py-5 ps-5 ms-lg-4">
                    <a class="aa-just-text-list-link ps-lg-2" href="<?php echo $aa_just_text_list_link['url']; ?>" target="<?php echo $aa_just_text_list_link['target']; ?>"><?php echo $aa_just_text_list_link['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
            <div class="col-12 col-md-5 aa-just-text-list-items-container p-5">
                <?php 
                if ( have_rows('aa_just_text_list_items') ) :
                    while( have_rows('aa_just_text_list_items') ) : the_row();
                    $aa_just_text_list_item_title = get_sub_field('aa_just_text_list_item_title') ? get_sub_field('aa_just_text_list_item_title') : '';
                    $aa_just_text_list_item_desc = get_sub_field('aa_just_text_list_item_desc') ? get_sub_field('aa_just_text_list_item_desc') : '';
                    ?>
                    <p class="aa-just-text-list-item">
                        <div class="aa-just-text-list-item-title">
                            <b><?php echo $aa_just_text_list_item_title; ?></b>
                        </div>
                        <div class="aa-just-text-list-item-desc">
                            <i><?php echo $aa_just_text_list_item_desc; ?></i>
                        </div>
                    </p>
                    <?php
                    endwhile;
                endif; ?>
            </div>
        </div>
    </div>
</section>