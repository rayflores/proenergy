<?php
/**
 * Module Name: About Us Bullet Image Left
 * Description: Template for About Us Bullet Image Left Module.
 */
$ab_bil_image_id = get_sub_field('ab_bil_image') ? get_sub_field('ab_bil_image') : '';
$ab_bil_image_srcset = get_image_srcset($ab_bil_image_id);
$ab_bil_top_text = get_sub_field('ab_bil_top_text') ? get_sub_field('ab_bil_top_text') : '';
$ab_bil_header = get_sub_field('ab_bil_header') ? get_sub_field('ab_bil_header') : '';
$ab_bil_paragraph = get_sub_field('ab_bil_paragraph') ? get_sub_field('ab_bil_paragraph') : '';
$ab_bil_percentage = get_sub_field('ab_bil_percentage') ? get_sub_field('ab_bil_percentage') : '';
$ab_bil_text = get_sub_field('ab_bil_text') ? get_sub_field('ab_bil_text') : '';
$ab_bil_link = get_sub_field('ab_bil_link') ? get_sub_field('ab_bil_link') : '';
?>
<section id="section_aboutus_bil" class="p-0 showcase">
<style>
#section_aboutus_bil {
        max-height: 655px;
    }
    .ab-bil-top-text {
        line-height: 1em;
        position: relative;
        outline: 0;
        border: 0;
        color: #A3A8AA;
        text-align: left;
        height: 1.5em;
    }
    .ab-bil-top-text::before{
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 5%;
        height: 1px;
        background: #A3A8AA;
        z-index: 1;
    }
    .ab-bil-top-text::after{
        background-color: #fcfcfa;
        color: #A3A8AA;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 0.3em;
        padding-left: 80px;
        position: relative;
        line-height: 1.5em;
        text-transform: uppercase;
        z-index: 0;
    }
    .ab-bil-headline {
        color: #53565A;
        font-family: 'Eurostile-Bold';
        font-size: 2.25em;
        letter-spacing: 0;
        margin-bottom: 0.5em;
        padding-left: 80px;
    }
    .ab-bil-paragraph {
        font-family: 'MyriadPro-Regular';
        font-size: 1.125em;
        padding-left: 80px;
    }
    .ab-bil-bullet-container {
        padding-left: 80px;
    }
    .ab-bil-bullet-percentage {
        font-family : "Eurostile-Bold";
        font-size : 45px;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .ab-bil-bullet-text {
        font-family : Eurostile;
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .ab-bil-link-container {
        padding-left: 80px;
    }
    .ab-bil-link-container a {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .ab-bil-link-container a::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-red.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    .showcase .showcase-img {
        min-height: 40rem;
        background-position: center;
        background-size: cover;
    }
    /* .ab-bil-image-mask {
        background: linear-gradient(117deg, rgba(255,255,255,0.8) 45%, rgba(255,255,255,0) 45%);
        position: absolute;
        z-index: 1;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        transform: translateX(0);
        -webkit-transtition: transform 5s ease-out;
        transition: transform 5s ease-out;
    }
    .reveal {
        position: relative;
        overflow: hidden;
    }
    .reveal.animating .ab-bil-image-mask{
        transform: translateX(-100%);
    } */
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-5 ab-bil-image-container p-0 reveal showcase-img" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($ab_bil_image_id)); ?>');">
                <div class="ab-bil-image-mask"></div>
            </div>
            <div class="col-7 ab-bil-text-container p-0 pt-5 mt-3">
                <div class="ab-bil-top-text col-12" data-content="<?php echo $ab_bil_top_text !== '' ? $ab_bil_top_text : ''; ?>"></div>
                <div class="ab-bil-headline pt-4">
                    <?php echo $ab_bil_header; ?>
                </div>
                <div class="ab-bil-paragraph col-10">
                    <?php echo $ab_bil_paragraph; ?>
                </div>
                <div class="ab-bil-bullet-container col-7">
                    <div class="ab-bil-bullet-percentage pt-5">
                        <?php echo $ab_bil_percentage; ?>
                    </div>
                    <div class="ab-bil-bullet-text">
                        <?php echo $ab_bil_text; ?>
                    </div>
                </div>
                <div class="ab-bil-link-container mt-5">
                    <a href="<?php echo $ab_bil_link['url']; ?>" target="<?php echo $ab_bil_link['target']; ?>"><?php echo $ab_bil_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
