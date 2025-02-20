<?php
/**
 * Module Name: About Us Bullet Image Right - Plain
 * Description: Template for About Us Bullet Image Right - Plain Module.
 */
$ab_birp_top_text = get_sub_field('ab_birp_top_text') !== '' ? get_sub_field('ab_birp_top_text') : '';
$ab_birp_header = get_sub_field('ab_birp_header') !== '' ? get_sub_field('ab_birp_header') : '';
$ab_birp_paragraph = get_sub_field('ab_birp_paragraph') !== '' ? get_sub_field('ab_birp_paragraph') : '';
$ab_birp_link = get_sub_field('ab_birp_link') !== '' ? get_sub_field('ab_birp_link') : '';
$ab_birp_image_id = get_sub_field('ab_birp_image') !== '' ? get_sub_field('ab_birp_image') : '';
$ab_birp_image_srcset = get_image_srcset($ab_birp_image_id);
?>
<style>
    #section_ab-birp-wrapper {
        background-color: rgba(163,168,170,0.2);
    }
    .showcase .showcase-ab-birp-img {
        min-height: 36rem;
        background-position: center center;
        background-size: cover;
    }
    /* .ab-birp-image-mask {
        background: linear-gradient(117deg, rgba(255,255,255,0.8) 45%, rgba(255,255,255,0) 45%);
        position: absolute;
        z-index: 1;
        height: 100%;
        width: 100%;
        top: 0;
        left: 50%;
        transform: translateX(0);
        -webkit-transtition: transform 5s ease-out;
        transition: transform 5s ease-out;
    }
    .reveal {
        position: relative;
        overflow: hidden;
    }
    .reveal.animating .ab-birp-image-mask{
        transform: translateX(100%);
    } */
    .ab-birp-top-text-container::before {
        background: linear-gradient(90deg, rgba(163,168,170,0.2) 50%, transparent 50%);
        content: '';
        display: inline-block;
        height: 1px;
        padding-right: 40px;
        position: relative;
        vertical-align: middle;
    }
    .ab-birp-top-text-container {
        color: #a3a8aa;
        content: '';
        letter-spacing: 7.5px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family: "eurostile", sans-serif;
        font-size: 12px;
    }
    .ab-birp-header-container h2 {
        font-family : "eurostile", sans-serif;
        font-size : 35px;
        font-weight: 900;
        line-height : 36px;
        letter-spacing : 0.35px;
        margin-top: 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .showcase .showcase-text.inside {
        margin-right: -6.5em;
        position: relative;
        min-height: 27.1875em;
        background : linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(253, 253, 253, 1) 24.65%, rgba(245, 244, 244, 1) 100%, rgba(231, 230, 230, 1) 50.46%, rgba(211, 210, 211, 1) 60.62%, rgba(186, 185, 185, 1) 69.85%, rgba(155, 153, 153, 1) 78.41%, rgba(117, 115, 116, 1) 86.44%, rgba(76, 72, 73, 1) 93.85%, rgba(35, 31, 32, 1) 100%);
    }
    .ab-birp-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 22px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .ab-birp-link {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .ab-birp-link::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
</style>
<section id="section_ab-birp-wrapper" class="showcase p-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-4 text-white order-2 showcase-ab-birp-img reveal" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($ab_birp_image_id)); ?>');">
            </div>
            <div class="col-8 order-1 showcase-text my-auto">
                <?php 
                if ( !empty($ab_birp_top_text) ) : ?>
                <div class="ab-birp-top-text-container">
                    <?php echo $ab_birp_top_text; ?>
                </div>
                <?php endif; ?>
                <div class="ab-birp-header-container ps-5">
                    <h2><?php echo $ab_birp_header; ?></h2>
                </div>
                <div class="ab-birp-paragraph-container ps-5 pt-3">
                    <p><?php echo $ab_birp_paragraph; ?></p>
                </div>
                <?php 
                if ( !empty($ab_birp_link) ) : ?>
                <div class="ab-birp-link-container ps-5 py-4">
                    <a class="ab-birp-link" href="<?php echo $ab_birp_link['url']; ?>" target="<?php echo $ab_birp_link['target']; ?>"><?php echo $ab_birp_link['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>