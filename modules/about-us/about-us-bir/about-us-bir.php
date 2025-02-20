<?php
/**
 * Module Name: About Us Bullet Image Right
 * Description: Template for About Us Bullet Image Right Module.
 */
$ab_bir_top_text = get_sub_field('ab_bir_top_text') !== '' ? get_sub_field('ab_bir_top_text') : '';
$ab_bir_header = get_sub_field('ab_bir_header') !== '' ? get_sub_field('ab_bir_header') : '';
$ab_bir_paragraph = get_sub_field('ab_bir_paragraph') !== '' ? get_sub_field('ab_bir_paragraph') : '';
$ab_bir_percentage = get_sub_field('ab_bir_percentage') !== '' ? get_sub_field('ab_bir_percentage') : '';
$ab_bir_text = get_sub_field('ab_bir_text') !== '' ? get_sub_field('ab_bir_text') : '';
$ab_bir_link = get_sub_field('ab_bir_link') !== '' ? get_sub_field('ab_bir_link') : '';
$ab_bir_bullet_color = get_sub_field('ab_bir_bullet_color') !== '' ? get_sub_field('ab_bir_bullet_color') : '';
$ab_bir_image_id = get_sub_field('ab_bir_image') !== '' ? get_sub_field('ab_bir_image') : '';
$ab_bir_image_srcset = get_image_srcset($ab_bir_image_id);
?>
<style>
    .showcase .showcase-ab-bir-img {
        min-height: 40rem;
        background-position: center;
        background-size: cover;
    }
    /* .ab-bir-image-mask {
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
    .reveal.animating .ab-bir-image-mask{
        transform: translateX(100%);
    } */
    .ab-bir-top-text-container {
        border: 0;
        color: #a3a8aa;
        height: 1.5em;
        line-height: 1em;
        margin-left: -80px;
        outline: 0;
        position: relative;
        text-align: left;
    }
    .ab-bir-top-text-container::before {
        background: #a3a8aa;
        content: '';
        height: 1px;
        left: 0;
        position: absolute;
        top: 50%;
        width: 8%;
        z-index: 1;
    }
    .ab-bir-top-text-container::after {
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
    .ab-bir-header-container h2 {
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
    .ab-bir-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 22px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .ab-bir-bullet-percentage{
        color: <?php echo $ab_bir_bullet_color; ?>;
        font-family : "Eurostile-Bold";
        font-size : 45px;
        line-height : 54.85px;
        text-transform : uppercase;
    }
    .ab-bir-bullet-text{
        color: <?php echo $ab_bir_bullet_color; ?>;
        font-family: 'Eurostile-Normal';
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
    }
    .ab-bir-link-container {
        background: linear-gradient(-60deg, #FFF 15%, #862633 15%);
    }
    .ab-bir-link {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
    }
    .ab-bir-link::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-white.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
</style>
<section id="section_ab-bir-wrapper" class="showcase my-5 pb-5">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-lg-5 text-white order-lg-2 showcase-ab-bir-img reveal" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($ab_bir_image_id)); ?>');">
            <div class="ab-bir-image-mask"></div>
            </div>
            <div class="col-lg-6 order-lg-1 showcase-text my-auto">
                <div class="showcase-text inside p-5">
                    <div class="inside-showcase-text col-9">
                        <div class="ab-bir-top-text-container" data-content="<?php echo $ab_bir_top_text; ?>">
                        </div>
                        <div class="ab-bir-header-container">
                            <h2><?php echo $ab_bir_header; ?></h2>
                        </div>
                        <div class="ab-bir-paragraph-container pt-3">
                            <p><?php echo $ab_bir_paragraph; ?></p>
                        </div>
                        <div class="ab-bir-bullet-container pt-5">
                            <div class="ab-bir-bullet-percentage">
                                <?php echo $ab_bir_percentage; ?>
                            </div>
                            <div class="ab-bir-bullet-text">
                                <?php echo $ab_bir_text; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ab-bir-link-container ps-5 py-4">
                    <a class="ab-bir-link" href="<?php echo $ab_bir_link['url']; ?>" target="<?php echo $ab_bir_link['target']; ?>"><?php echo $ab_bir_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>