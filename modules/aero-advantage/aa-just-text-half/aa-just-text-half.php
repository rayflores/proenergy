<?php
/**
 * Module Name: AeroAdvantage Just Text Half and Half List
 * Description: Template for AeroAdvantage Just Text Half and Half List Module.
 */
$aa_uuid = wp_unique_id( 'aa-jt-half-' );
$aa_jt_half_bg_color = '';
$aa_jt_half_bg_color = get_sub_field( 'aa_jt_half_bg_color' ) ? get_sub_field( 'aa_jt_half_bg_color' ) : '';
$aa_jt_half_top_text = '';
$aa_jt_half_top_text = get_sub_field( 'aa_jt_half_top_text' ) ? get_sub_field( 'aa_jt_half_top_text' ) : '';
$aa_jt_half_header = '';
$aa_jt_half_header = get_sub_field( 'aa_jt_half_header' ) ? get_sub_field( 'aa_jt_half_header' ) : '';
$aa_jt_half_paragraph = '';
$aa_jt_half_paragraph = get_sub_field( 'aa_jt_half_paragraph' ) ? get_sub_field( 'aa_jt_half_paragraph' ) : '';
$aa_jt_half_text_color = '';
$aa_jt_half_text_color = get_sub_field( 'aa_jt_half_text_color' ) ? get_sub_field( 'aa_jt_half_text_color' ) : '';
$aa_jt_half_right_header = '';
$aa_jt_half_right_header = get_sub_field( 'aa_jt_half_right_header' ) ? get_sub_field( 'aa_jt_half_right_header' ) : '';

$content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow.png' . '");"';
?>
<section id="section_aa-jt-half-wrapper" class="p-0 <?php echo $aa_uuid; ?>" style="background-color: <?php echo $aa_jt_half_bg_color; ?>">
    <style>
        .<?php echo $aa_uuid; ?> .aa-jt-half-top-text-container::before {
            background: <?php echo $aa_jt_half_text_color; ?>;
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            width: 52px;
            z-index: 1;
            vertical-align: middle;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-top-text-container::after {
            color: #a3a8aa;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 0.5em;
            padding-left: 28px;
            position: relative;
            line-height: 1.5em;
            text-transform: uppercase;
            z-index: 0;
            font-family: "eurostile", sans-serif;
            font-size: clamp(0.875rem, 0.696rem + 0.476vw, 1.125rem);
            font-weight: 800;
            color: <?php echo $aa_jt_half_text_color; ?>
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-header-container h2 {
            font-family : "eurostile", sans-serif;
            font-size: clamp(1.75rem, 0.902rem + 2.262vw, 2.938rem);
            font-weight: 800;
            letter-spacing: 0;
            line-height: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
            color : <?php echo $aa_jt_half_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-paragraph-container p {
            font-family : "myriad-pro", sans-serif;
            font-size: clamp(1rem, 0.911rem + 0.238vw, 1.125rem);
            font-weight: 400;
            line-height: clamp(1.25rem, 1.071rem + 0.476vw, 1.5rem);
            color : <?php echo $aa_jt_half_text_color; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-bullet-point-heading-container, 
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-container a,
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-two-container a {
            color: <?php echo $aa_jt_half_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-bullet-point-heading-container h1 {
            font-family : "eurostile", sans-serif;
            font-size : 45px;
            font-weight: 900;
            line-height : 45px;
            text-transform : uppercase;
            color : <?php echo $aa_jt_half_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-bullet-point-description {
            font-family : "eurostile", sans-serif;
            font-size : 24px;
            line-height : 31.1px;
            letter-spacing : normal;
            color : <?php echo $aa_jt_half_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-container,
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-two-container {
            background-color: <?php echo $aa_jt_half_bg_color; ?>;
            min-height: 5rem;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-two-container.darker {
            background-color: rgba(163,168,170,0.5);
        }
         .<?php echo $aa_uuid; ?> .aa-jt-half-link-two-container.darker a {
            color: #53565A;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-container a,
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-two-container a {
            font-family: "MyriadPro-Italic";
            font-size: 18px;
            line-height: 25px;
            color: #A3A8AA;
            text-decoration: none;
        }

        .<?php echo $aa_uuid; ?> .aa-jt-half-link-container a::after,
        .<?php echo $aa_uuid; ?> .aa-jt-half-link-two-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-right-header {
            font-family: "myriad-pro", sans-serif;
            font-size: 18px;
            font-weight: 700;
            line-height: 25px;
            margin-top: 10px;
            color: <?php echo $aa_jt_half_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-list-container ul {
            padding-left: 1rem;
        }
        .<?php echo $aa_uuid; ?> .aa-jt-half-list-container ul li {
            font-family: "myriad-pro", sans-serif;
            font-size: 18px;
            line-height: 30px;
            padding-left: 15px;
            color: <?php echo $aa_jt_half_text_color; ?>;
        }
        .<?php echo $aa_uuid; ?> .row.overlay {
            background-color: rgba(0,0,0,0.2);
        }
        @media screen and (max-width: 768px) {
            .<?php echo $aa_uuid; ?> .aa-jt-half-top-text-container::before {
                width: 20px;
            }
            .<?php echo $aa_uuid; ?> .aa-jt-half-top-text-container::after {
                padding-left: 20px;
            }
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-6 col-12 p-0">
                <div class="row g-0">
                    <div class="col-12 p-0">
                    <div class="aa-jt-half-top-text-container pt-5" data-content="<?php echo $aa_jt_half_top_text; ?>"></div>
                        <div class="aa-jt-half-header-container pt-5 ps-2 ps-lg-5 ms-4">
                            <h2 class="ps-2"><?php echo $aa_jt_half_header; ?></h2>
                        </div>
                    </div>
                </div>
                <div class="row g-0">
                    <div class="col-12 p-0">
                        <div class="aa-jt-half-paragraph-container pt-3 ps-2 ps-lg-5 ms-4">
                            <p class="ps-2 pe-4"><?php echo $aa_jt_half_paragraph; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="row g-0 overlay h-100">
                    <div class="col-12 p-0">
                        <div class="aa-jt-half-list-container mt-5 pt-5 pb-5 ps-5">
                            <?php if ( have_rows( 'aa_jt_half_list_items' ) ) : ?>
                                <h5 class="aa-jt-half-right-header pt-4"><?php echo $aa_jt_half_right_header; ?></h5>
                                <ul>
                                    <?php while ( have_rows( 'aa_jt_half_list_items' ) ) : the_row(); 
                                        $index = get_row_index();
                                        $aa_jt_half_list_item = get_sub_field( 'aa_jt_half_list_item' ) ? get_sub_field( 'aa_jt_half_list_item') : ''; ?>

                                        <li class="aa-jt-half-list-item py-2 item-<?php echo $index; ?>">
                                            <?php echo $aa_jt_half_list_item; ?>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>