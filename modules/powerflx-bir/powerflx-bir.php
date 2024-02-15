<?php
/**
 * Module Name: PowerFLX Bullet Image Right
 * 
 * Proenergy PowerFLX Bullet Image Right Template
 */
$top_text = get_sub_field('powerflx_top_text') !== '' ? get_sub_field('powerflx_top_text') : '';
$header = get_sub_field('powerflx_header') !== '' ? get_sub_field('powerflx_header') : '';
$paragraph = get_sub_field('powerflx_paragraph') !== '' ? get_sub_field('powerflx_paragraph') : '';
$bullet_percentage = get_sub_field('powerflx_bir_percentage') !== '' ? get_sub_field('powerflx_bir_percentage') : '';
$bullet_text = get_sub_field('powerflx_bir_text') !== '' ? get_sub_field('powerflx_bir_text') : '';
$link = get_sub_field('powerflx_bir_link') !== '' ? get_sub_field('powerflx_bir_link') : '';
$bir_image_id = get_sub_field('powerflx_bir_image') !== '' ? get_sub_field('powerflx_bir_image') : '';
$bir_image_srcset = get_image_srcset($bir_image_id);
$bullet_color = get_sub_field('powerflx_bir_bullet_color') !== '' ? get_sub_field('powerflx_bir_bullet_color') : '';
?>
<style>
    .showcase .showcase-img {
        min-height: 40rem;
        background-size: cover;
    }
    /* .pflx-bir-image-mask {
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
    .reveal.animating .pflx-bir-image-mask{
        transform: translateX(100%);
    } */
    .pflx-bir-top-text-container {
        border: 0;
        color: #a3a8aa;
        height: 1.5em;
        line-height: 1em;
        margin-left: -80px;
        outline: 0;
        position: relative;
        text-align: left;
    }
    .pflx-bir-top-text-container::before {
        background: #a3a8aa;
        content: '';
        height: 1px;
        left: 0;
        position: absolute;
        top: 50%;
        width: 8%;
        z-index: 1;
    }
    .pflx-bir-top-text-container::after {
        background-color: #fcfcfa;
        color: #a3a8aa;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 0.1em;
        padding-left: 80px;
        position: relative;
        line-height: 1.5em;
        text-transform: uppercase;
        z-index: 0;
    }
    .pflx-bir-header-container h2 {
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
    .pflx-bir-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 22px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .pflx-bir-bullet-percentage{
        color: <?php echo $bullet_color; ?>;
        font-family : "Eurostile-Bold";
        font-size : 45px;
        line-height : 54.85px;
        text-transform : uppercase;
    }
    .pflx-bir-bullet-text{
        color: <?php echo $bullet_color; ?>;
        font-family: 'Eurostile-Normal';
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
    }
    .pflx-bir-link-container {
        background: linear-gradient(-60deg, #FFF 15%, #862633 15%);
    }
    .pflx-bir-link {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
    }
    .pflx-bir-link::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
</style>
<section id="section_pflx-bir-wrapper" class="showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-5 text-white order-lg-2 showcase-img reveal" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($bir_image_id)); ?>');">
            <div class="pflx-bir-image-mask"></div>
            </div>
            <div class="col-lg-6 order-lg-1 showcase-text my-auto">
                <div class="showcase-text inside p-5">
                    <div class="inside-showcase-text col-9">
                        <div class="pflx-bir-top-text-container" data-content="<?php echo $top_text; ?>">
                        </div>
                        <div class="pflx-bir-header-container">
                            <h2><?php echo $header; ?></h2>
                        </div>
                        <div class="pflx-bir-paragraph-container pt-3">
                            <p><?php echo $paragraph; ?></p>
                        </div>
                        <div class="pflx-bir-bullet-container pt-5">
                            <div class="pflx-bir-bullet-percentage">
                                <?php echo $bullet_percentage; ?>
                            </div>
                            <div class="pflx-bir-bullet-text">
                                <?php echo $bullet_text; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pflx-bir-link-container ps-5 py-4">
                    <a class="pflx-bir-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>