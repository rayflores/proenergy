<?php 
/**
 * Module Name: AeroAdvantage BIR Plain
 * Description: Template for AeroAdvantage BIR Plain Module.
 */
$aa_birp_uuid = wp_unique_id('aa-birp-');
$aa_birp_top_text = '';
$aa_birp_top_text = get_sub_field('aa_birp_top_text') !== '' ? get_sub_field('aa_birp_top_text') : '';
$aa_birp_header = '';
$aa_birp_header = get_sub_field('aa_birp_header') !== '' ? get_sub_field('aa_birp_header') : '';
$aa_birp_paragraph = '';
$aa_birp_paragraph = get_sub_field('aa_birp_paragraph') !== '' ? get_sub_field('aa_birp_paragraph') : '';
$aa_birp_link = '';
$aa_birp_link = get_sub_field('aa_birp_link') !== '' ? get_sub_field('aa_birp_link') : '';
$aa_birp_image_id = '';
$aa_birp_image_id = get_sub_field('aa_birp_image') !== '' ? get_sub_field('aa_birp_image') : '';
$aa_birp_image_srcset = '';
$aa_birp_image_srcset = get_image_srcset($aa_birp_image_id);
?>
<section id="section_aa-birp-wrapper" class="<?php echo $aa_birp_uuid; ?> showcase p-0">
<style>
    #section_aa-birp-wrapper.<?php echo $aa_birp_uuid; ?> {
        background-color: rgba(163,168,170,0.2);
    }
    .<?php echo $aa_birp_uuid; ?>.showcase .showcase-aa-birp-img {
        min-height: 40rem;
        background-position: center center;
        background-size: cover;
    }
    /* .aa-birp-image-mask {
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
    .reveal.animating .aa-birp-image-mask{
        transform: translateX(100%);
    } */
    .<?php echo $aa_birp_uuid; ?> .aa-birp-top-text-container::before {
        background: #a3a8aa;
        content: '';
        height: 1px;
        left: -25px;
        position: absolute;
        top: 50%;
        width: 52px;
        z-index: 1;
    }
    .<?php echo $aa_birp_uuid; ?> .aa-birp-top-text-container::after {
        color: #a3a8aa;
        content: attr(data-content);
        display: inline-block;
        font-family: 'eurostile', sans-serif;
        font-size: 18px;
        font-weight: 700;
        letter-spacing: 0.5em;
        padding-left: 8px;
        position: relative;
        line-height: 1.5em;
        text-transform: uppercase;
        z-index: 0;
    }
    .<?php echo $aa_birp_uuid; ?> .aa-birp-header-container h2 {
        font-family : "eurostile", sans-serif;
        font-size: clamp(1.75rem, 1.504rem + .995vw, 2.25rem);
        font-weight : 900;
        line-height: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
        letter-spacing : 0.35px;
        margin-top: 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .<?php echo $aa_birp_uuid; ?>.showcase .showcase-text.inside {
        margin-right: -6.5em;
        position: relative;
        min-height: 27.1875em;
        background : linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(253, 253, 253, 1) 24.65%, rgba(245, 244, 244, 1) 100%, rgba(231, 230, 230, 1) 50.46%, rgba(211, 210, 211, 1) 60.62%, rgba(186, 185, 185, 1) 69.85%, rgba(155, 153, 153, 1) 78.41%, rgba(117, 115, 116, 1) 86.44%, rgba(76, 72, 73, 1) 93.85%, rgba(35, 31, 32, 1) 100%);
    }
    .<?php echo $aa_birp_uuid; ?> .aa-birp-paragraph-container p {
        font-family : "myriad-pro", sans-serif;
        font-size: clamp(1rem, 0.911rem + 0.238vw, 1.125rem);
        line-height : clamp(1.125rem, 0.946rem + 0.476vw, 1.375rem);
        color : #53565A;
        color : rgb(83, 86, 90);
        padding-right: 7.5%;
    }
    .<?php echo $aa_birp_uuid; ?> .aa-birp-link {
        font-family : "myriad-pro", sans-serif;
        font-size : 18px;
        font-style: italic;
        line-height : 25px;
        color : #a3a8aa;
    }
    .<?php echo $aa_birp_uuid; ?> .aa-birp-link::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    @media screen and (max-width: 768px) {
        .<?php echo $aa_birp_uuid; ?>.showcase .showcase-aa-birp-img {
            min-height: 20rem;
        }
        .<?php echo $aa_birp_uuid; ?> .aa-birp-top-text-container::before {
            width: 20px;
        }
        .<?php echo $aa_birp_uuid; ?> .aa-birp-top-text-container::after {
            font-size: 14px;
            letter-spacing: 0.25em;
            padding-left: 16px;
        }
    }
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 col-lg-4 text-white order-lg-2 order-1 showcase-aa-birp-img reveal" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($aa_birp_image_id)); ?>');">
            </div>
            <div class="col-12 col-lg-8 order-lg-1 order-2 showcase-text my-auto py-5 py-lg-0">
                <?php 
                if ( !empty($aa_birp_top_text) ) : ?>
                <div class="aa-birp-top-text-container position-relative ps-lg-5 mx-4" data-content="<?php echo $aa_birp_top_text; ?>"></div>
                <?php endif; ?>
                <div class="aa-birp-header-container ps-lg-5 ms-4">
                    <h2 class="ps-3 ps-lg-2"><?php echo $aa_birp_header; ?></h2>
                </div>
                <div class="aa-birp-paragraph-container ps-lg-5 ms-4 pt-3">
                    <p class="col-12 col-lg-6 ps-3 ps-lg-2"><?php echo $aa_birp_paragraph; ?></p>
                </div>
                <?php 
                if ( !empty($aa_birp_link) ) : ?>
                <div class="aa-birp-link-container ps-lg-5 ms-4 py-4">
                    <a class="aa-birp-link ps-3 ps-lg-2" href="<?php echo $aa_birp_link['url']; ?>" target="<?php echo $aa_birp_link['target']; ?>"><?php echo $aa_birp_link['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>