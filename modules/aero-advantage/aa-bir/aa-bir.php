<?php 
/**
 * Module Name: AeroAdvantage Bullet Image Right
 * Description: Template for AeroAdvantage Bullet Image Right Module.
 */
$aa_bir_uuid = wp_unique_id('aa-bir-');
$aa_bir_top_text = '';
$aa_bir_top_text = get_sub_field('aa_bir_top_text') !== '' ? get_sub_field('aa_bir_top_text') : '';
$aa_bir_header = '';
$aa_bir_header = get_sub_field('aa_bir_header') !== '' ? get_sub_field('aa_bir_header') : '';
$aa_bir_paragraph = '';
$aa_bir_paragraph = get_sub_field('aa_bir_paragraph') !== '' ? get_sub_field('aa_bir_paragraph') : '';
$aa_bir_percentage = '';
$aa_bir_percentage = get_sub_field('aa_bir_percentage') !== '' ? get_sub_field('aa_bir_percentage') : '';
$aa_bir_text = '';
$aa_bir_text = get_sub_field('aa_bir_text') !== '' ? get_sub_field('aa_bir_text') : '';
$aa_bir_link = '';
$aa_bir_link = get_sub_field('aa_bir_link') !== '' ? get_sub_field('aa_bir_link') : '';
$aa_bir_bullet_color = '';
$aa_bir_bullet_color = get_sub_field('aa_bir_bullet_color') !== '' ? get_sub_field('aa_bir_bullet_color') : '';
$aa_bir_image_id = '';
$aa_bir_image_id = get_sub_field('aa_bir_image') !== '' ? get_sub_field('aa_bir_image') : '';
$aa_bir_image_srcset = '';
$aa_bir_image_srcset = get_image_srcset($aa_bir_image_id);
?>
<section id="section_aa-bir-wrapper" class="<?php echo $aa_bir_uuid; ?> showcase my-5 pb-5">
<style>
    .<?php echo $aa_bir_uuid; ?>.showcase .showcase-aa-bir-img {
        min-height: 40rem;
        background-position: center;
        background-size: cover;
    }
    /* .aa-bir-image-mask {
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
    .reveal.animating .aa-bir-image-mask{
        transform: translateX(100%);
    } */
    .<?php echo $aa_bir_uuid; ?> .aa-bir-top-text-container {
        border: 0;
        color: #a3a8aa;
        height: 1.5em;
        line-height: 1em;
        margin-left: -48px;
        outline: 0;
        position: relative;
        text-align: left;
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-top-text-container::before {
        background: #a3a8aa;
        content: '';
        height: 1px;
        left: 0;
        position: absolute;
        top: 50%;
        width: 52px;
        z-index: 1;
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-top-text-container::after {
        color: #a3a8aa;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 0.5em;
        padding-left: 80px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family: "eurostile", sans-serif;
        font-size: 18px;
        font-weight: 700;
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-header-container h2 {
        font-family : "eurostile", sans-serif;
        font-size: clamp(1.75rem, 1.504rem + .995vw, 2.25rem);
        font-weight : 900;
        line-height : 45px;
        letter-spacing : 0.35px;
        margin-top: 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .<?php echo $aa_bir_uuid; ?>.showcase .showcase-text.inside {
        margin-right: -6.5em;
        position: relative;
        min-height: 27.1875em;
        background : linear-gradient(90deg, rgba(255, 255, 255, 1) 0%, rgba(253, 253, 253, 1) 24.65%, rgba(245, 244, 244, 1) 100%, rgba(231, 230, 230, 1) 50.46%, rgba(211, 210, 211, 1) 60.62%, rgba(186, 185, 185, 1) 69.85%, rgba(155, 153, 153, 1) 78.41%, rgba(117, 115, 116, 1) 86.44%, rgba(76, 72, 73, 1) 93.85%, rgba(35, 31, 32, 1) 100%);
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-paragraph-container p {
        font-family : "myriad-pro", sans-serif;
        font-size : 18px;
        line-height : 22px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-bullet-percentage{
        color: <?php echo $aa_bir_bullet_color; ?>;
        font-family : "eurostile", sans-serif;
        font-size : 45px;
        font-weight: 700;
        line-height : 54.85px;
        text-transform : uppercase;
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-bullet-text{
        color: <?php echo $aa_bir_bullet_color; ?>;
        font-family: 'eurostile', sans-serif;
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-link-container {
        background: linear-gradient(-60deg, #FFF 15%, #862633 15%);
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-link {
        font-family : "myriad-pro", sans-serif;
        font-size : 18px;
        font-style: italic;
        line-height : 25px;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-link::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-white.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    .<?php echo $aa_bir_uuid; ?> .aa-bir-link:hover::after{
        margin-left: 1.5em;
    }
    @media screen and (max-width: 768px) {

        .<?php echo $aa_bir_uuid; ?>.showcase .showcase-aa-bir-img {
            min-height: 20rem;
        }
        .<?php echo $aa_bir_uuid; ?>.showcase .showcase-text.inside {
            margin-right: 0;
        }
        .<?php echo $aa_bir_uuid; ?> .aa-bir-top-text-container::before {
            width: 20px;
        }
        .<?php echo $aa_bir_uuid; ?> .aa-bir-top-text-container::after {
            font-size: 14px;
            letter-spacing: 0.25em;
            padding-left: 40px;
        }
        .<?php echo $aa_bir_uuid; ?> .aa-bir-header-container h2 {
            line-height: 35px;
            margin-left: -8px;
        }
        .<?php echo $aa_bir_uuid; ?> .aa-bir-paragraph-container p,
        .<?php echo $aa_bir_uuid; ?> .aa-bir-bullet-container {
            margin-left: -8px;
        }
    }
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-5 text-white order-lg-2 showcase-aa-bir-img reveal" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($aa_bir_image_id)); ?>');">
            <div class="aa-bir-image-mask"></div>
            </div>
            <div class="col-lg-6 order-lg-1 showcase-text my-auto">
                <div class="showcase-text inside p-5">
                    <div class="inside-showcase-text col-9">
                        <div class="aa-bir-top-text-container" data-content="<?php echo $aa_bir_top_text; ?>">
                        </div>
                        <div class="aa-bir-header-container ps-0 ps-lg-4">
                            <h2 class="ps-0 ps-lg-2"><?php echo $aa_bir_header; ?></h2>
                        </div>
                        <div class="aa-bir-paragraph-container ps-lg-4 pt-3">
                            <p class="ps-lg-2"><?php echo $aa_bir_paragraph; ?></p>
                        </div>
                        <div class="aa-bir-bullet-container ps-lg-4 pt-5">
                            <div class="aa-bir-bullet-percentage ps-lg-2">
                                <?php echo $aa_bir_percentage; ?>
                            </div>
                            <div class="aa-bir-bullet-text ps-lg-2">
                                <?php echo $aa_bir_text; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="aa-bir-link-container ps-5 py-4">
                    <a class="aa-bir-link ms-4 ps-4 ps-lg-2" href="<?php echo $aa_bir_link['url']; ?>" target="<?php echo $aa_bir_link['target']; ?>"><?php echo $aa_bir_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>