<?php
/**
 * Module Name: About Us Just Text
 * Description: Template for About Us Just Text Module.
 */
$ab_uuid = wp_unique_id( 'about-us-just-text-' );
$ab_just_text_bg_color = '';
$ab_just_text_bg_color = get_sub_field( 'ab_just_text_bg_color' ) ? get_sub_field( 'ab_just_text_bg_color' ) : '';
$ab_just_text_top_text = '';
$ab_just_text_top_text = get_sub_field( 'ab_just_text_top_text' ) ? get_sub_field( 'ab_just_text_top_text' ) : '';
$ab_just_text_header = '';
$ab_just_text_header = get_sub_field( 'ab_just_text_header' ) ? get_sub_field( 'ab_just_text_header' ) : '';
$ab_just_text_paragraph = '';
$ab_just_text_paragraph = get_sub_field( 'ab_just_text_paragraph' ) ? get_sub_field( 'ab_just_text_paragraph' ) : '';
$ab_just_text_text_color = '';
$ab_just_text_text_color = get_sub_field( 'ab_just_text_text_color' ) ? get_sub_field( 'ab_just_text_text_color' ) : '';

$content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow.png' . '");"';
if ( '#ffffff' === $ab_just_text_text_color ) :
    $content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow-white.png' . '");"';
endif; 
?>
<section id="section_about-us-just-text-wrapper" class="p-0 <?php echo $ab_uuid; ?>" style="background-color: <?php echo $ab_just_text_bg_color; ?>">
    <style>
        .<?php echo $ab_uuid; ?> .ab-just-text-top-text-container::before {
            background: <?php echo $ab_just_text_text_color; ?>;
            content: '';
            display: inline-block;
            height: 1px;
            left: -15px;
            position: relative;
            top: 50%;
            width: 1.5%;
            z-index: 1;
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-top-text-container::after {
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
            color: <?php echo $ab_just_text_text_color; ?>
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-header-container h2 {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : <?php echo $ab_just_text_text_color; ?>;
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-paragraph-container p {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 25px;
            color : <?php echo $ab_just_text_text_color; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-bullet-point-heading-container, 
        .<?php echo $ab_uuid; ?> .ab-just-text-link-container a {
            color: <?php echo $ab_just_text_text_color; ?>;
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-bullet-point-heading-container h1 {
            font-family : "Eurostile-Bold";
            font-size : 45px;
            line-height : 54.85px;
            text-transform : uppercase;
            color : <?php echo $ab_just_text_text_color; ?>;
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-bullet-point-description {
            font-family : "Eurostile-Normal";
            font-size : 24px;
            line-height : 31.1px;
            letter-spacing : 0.24px;
            color : <?php echo $ab_just_text_text_color; ?>;
        }
        .<?php echo $ab_uuid; ?> .ab-just-text-link-container a {
            font-family: "MyriadPro-Italic";
            font-size: 18px;
            line-height: 25px;
            color: <?php echo $ab_just_text_text_color; ?>;
            text-decoration: none;
        }

        .<?php echo $ab_uuid; ?> .ab-just-text-link-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
    </style>
    <div class="container-fluid">
        <div class="ab-just-text-top-text-container pt-5" data-content="<?php echo $ab_just_text_top_text; ?>"></div>
        <div class="p-4 ps-md-5 pe-md-5 pb-5">
            <div class="row">
                <div class="col-12">
                    <div class="ab-just-text-header-container pt-3">
                        <h2><?php echo $ab_just_text_header; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="ab-just-text-paragraph-container pt-3">
                        <p><?php echo $ab_just_text_paragraph; ?></p>
                    </div>
                </div>
            </div>
            <?php
            if ( true === get_sub_field( 'need_to_extra_text_columns' ) ) : 
                if ( have_rows( 'ab_just_text_two_columns' ) ) :
                    while( have_rows( 'ab_just_text_two_columns' ) ) : the_row();
                        $just_text_two_columns_left = get_sub_field( 'just_text_two_columns_left' ) ? get_sub_field( 'just_text_two_columns_left' ) : '';
                        $just_text_two_columns_right = get_sub_field( 'just_text_two_columns_right' ) ? get_sub_field( 'just_text_two_columns_right' ) : '';
                        ?>
                        <div class="row">
                            <div class="col-5">
                                <div class="ab-just-text-column-1-container">
                                    <p><?php echo $just_text_two_columns_left; ?></p>
                                </div>
                            </div>
                            <div class="col-3">
                                <div class="ab-just-text-column-2-container">
                                    <p><?php echo $just_text_two_columns_right; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
            endif; 
            if ( true === get_sub_field( 'need_a_bullet_point') ) : 
                if ( '' !== get_sub_field( 'just_text_bullet_point_heading' ) ) : ?>
                    <div class="row">
                        <div class="col-12">
                            <div class="ab-just-text-bullet-point-heading-container pt-3">
                                <h1><?php echo get_sub_field( 'just_text_bullet_point_heading' ); ?></h1>
                                <div class="ab-just-text-bullet-point-description"><?php echo get_sub_field( 'just_text_bullet_point_description' ); ?></div>
                            </div>
                        </div>
                    </div>
                    <?php
                endif;
            endif; 
            if ( true === get_sub_field( 'need_a_just_text_link' ) ) : 
                if ( '' !== get_sub_field( 'just_text_link') ) : 
                $ab_just_text_link = get_sub_field( 'just_text_link'); ?>
                <div class="row">
                    <div class="col-12">
                        <div class="ab-just-text-link-container py-5">
                            <a class="ab-just-text-link" href="<?php echo $ab_just_text_link['url']; ?>" target="<?php echo $ab_just_text_link['target']; ?>"><?php echo $ab_just_text_link['title']; ?></a>
                        </div>
                    </div>
                </div>
                <?php endif;
            endif; ?>
        </div>
    </div>
</section>