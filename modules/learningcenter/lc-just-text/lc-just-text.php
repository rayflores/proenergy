<?php 
/**
 * Module Name: PowerFLX Just Text
 * Description: Template for PowerFLX Just Text Module.
 */
$lc_uuid = wp_unique_id( 'lc-just-text-' );
$lc_jt_background_color = '';
$lc_jt_background_color = get_sub_field( 'lc_jt_background_color' ) ? get_sub_field( 'lc_jt_background_color' ) : '';
$lc_jt_top_text = '';
$lc_jt_top_text = get_sub_field( 'lc_jt_top_text' ) ? get_sub_field( 'lc_jt_top_text' ) : '';
$lc_jt_header = '';
$lc_jt_header = get_sub_field( 'lc_jt_header' ) ? get_sub_field( 'lc_jt_header' ) : '';
$lc_jt_paragraph = '';
$lc_jt_paragraph = get_sub_field( 'lc_jt_paragraph' ) ? get_sub_field( 'lc_jt_paragraph' ) : '';
$lc_jt_link = get_sub_field( 'lc_jt_link' ) ? get_sub_field( 'lc_jt_link' ) : '';
$lc_jt_text_color = '';
$lc_jt_text_color = get_sub_field( 'lc_jt_text_color' ) ? get_sub_field( 'lc_jt_text_color' ) : '';
$content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow.png' . '");"';
if ( "rgb(255, 255, 255)" === $lc_jt_text_color ) {
    $content = 'url("' . get_stylesheet_directory_uri() . '/images/right-arrow-white.png' . '");';
}
?>
<section id="section_lc-just-text-wrapper" class="p-0 <?php echo $lc_uuid; ?>" style="background-color: <?php echo $lc_jt_background_color; ?>">
    <style>
        .<?php echo $lc_uuid; ?> .lc-just-text-top-text-container::before {
            background-color: <?php echo 'rgb(255, 255, 255)' === $lc_jt_text_color ? 'rgb(255, 255, 255)' : 'rgba(163, 168, 170, 0.5)'; ?>;
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            top: 50%;
            vertical-align: middle;
            width: 45px;
            z-index: 1;
        }
        .<?php echo $lc_uuid; ?> .lc-just-text-top-text-container::after {
            color: <?php echo $lc_jt_text_color; ?>;
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
        }
        .<?php echo $lc_uuid; ?> .lc-just-text-header-container h2 {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : <?php echo 'rgb(255, 255, 255)' === $lc_jt_text_color ? 'rgb(255, 255, 255)' : 'rgb(83,86,90)'; ?>;
        }
        .<?php echo $lc_uuid; ?> .lc-just-text-paragraph-container p {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 25px;
            color : <?php echo 'rgb(255, 255, 255)' === $lc_jt_text_color ? 'rgb(255, 255, 255)' : 'rgb(83,86,90)'; ?>;
            margin-top: 1.25em;
            margin-bottom: 3em;
            padding-right: 0;
        }
        .<?php echo $lc_uuid; ?> .lc-jt-link-container a {
            font-family: "MyriadPro-Italic";
            font-size: 18px;
            line-height: 25px;
            color: <?php echo 'rgb(255, 255, 255)' === $lc_jt_text_color ? 'rgb(255, 255, 255)' : 'rgba(163, 168, 170, 0.5)'; ?>;
            text-decoration: none;
        }

        .<?php echo $lc_uuid; ?> .lc-jt-link-container a::after {
            content: <?php echo $content; ?>;
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="lc-just-text-top-text-container pt-5" data-content="<?php echo $lc_jt_top_text; ?>"></div>
        <div class="p-4 ps-md-5 pe-md-5">
            <div class="row g-0">
                <div class="col-12">
                    <div class="lc-just-text-header-container pt-3 ps-3">
                        <h2><?php echo $lc_jt_header; ?></h2>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-12">
                    <div class="lc-just-text-paragraph-container pt-3 ps-3">
                        <p><?php echo $lc_jt_paragraph; ?></p>
                    </div>
                </div>
            </div>
            <?php 
            if ( '' !== get_sub_field( 'aa_just_text_link') ) : 
            $aa_just_text_link = get_sub_field( 'aa_just_text_link'); ?>
            <div class="row g-0">
                <div class="col-12">
                    <div class="lc-jt-link-container pb-5 ps-3">
                        <a class="lc-jt-link" href="<?php echo $lc_jt_link['url']; ?>" target="<?php echo $lc_jt_link['target']; ?>"><?php echo $lc_jt_link['title']; ?></a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>