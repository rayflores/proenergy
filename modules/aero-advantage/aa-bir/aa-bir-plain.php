<?php 
/**
 * Module Name: AeroAdvantage BIR Plain
 * Description: Template for AeroAdvantage BIR Plain Module.
 */
$aa_birp_top_text = get_sub_field('aa_birp_top_text') !== '' ? get_sub_field('aa_birp_top_text') : '';
$aa_birp_header = get_sub_field('aa_birp_header') !== '' ? get_sub_field('aa_birp_header') : '';
$aa_birp_paragraph = get_sub_field('aa_birp_paragraph') !== '' ? get_sub_field('aa_birp_paragraph') : '';
$aa_birp_link = get_sub_field('aa_birp_link') !== '' ? get_sub_field('aa_birp_link') : '';
$aa_birp_image_id = get_sub_field('aa_birp_image') !== '' ? get_sub_field('aa_birp_image') : '';
$aa_birp_image_srcset = get_image_srcset($aa_birp_image_id);
?>
<style>
    #section_aa-birp-wrapper {
        background-color: rgba(163,168,170,0.2);
    }
    .showcase .showcase-aa-birp-img {
        min-height: 36rem;
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
    .aa-birp-top-text-container::before {
        background: linear-gradient(90deg, rgba(163,168,170,0.2) 50%, transparent 50%);
        content: '';
        display: inline-block;
        height: 1px;
        padding-right: 40px;
        position: relative;
        vertical-align: middle;
    }
    .aa-birp-top-text-container {
        color: #a3a8aa;
        content: '';
        letter-spacing: 7.5px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family: "Eurostile-Normal";
        font-size: 12px;
    }
    .aa-birp-header-container h2 {
        font-family : "Eurostile-Bold";
        font-size : 35px;
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
    .aa-birp-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 22px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .aa-birp-link {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #a3a8aa;
        color : rgb(83, 86, 90);
    }
    .aa-birp-link::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
</style>
<section id="section_aa-birp-wrapper" class="showcase p-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-4 text-white order-2 showcase-aa-birp-img reveal" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($aa_birp_image_id)); ?>');">
            </div>
            <div class="col-8 order-1 showcase-text my-auto">
                <?php 
                if ( !empty($aa_birp_top_text) ) : ?>
                <div class="aa-birp-top-text-container">
                    <?php echo $aa_birp_top_text; ?>
                </div>
                <?php endif; ?>
                <div class="aa-birp-header-container ps-5">
                    <h2><?php echo $aa_birp_header; ?></h2>
                </div>
                <div class="aa-birp-paragraph-container ps-5 pt-3">
                    <p><?php echo $aa_birp_paragraph; ?></p>
                </div>
                <?php 
                if ( !empty($aa_birp_link) ) : ?>
                <div class="aa-birp-link-container ps-5 py-4">
                    <a class="aa-birp-link" href="<?php echo $aa_birp_link['url']; ?>" target="<?php echo $aa_birp_link['target']; ?>"><?php echo $aa_birp_link['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>