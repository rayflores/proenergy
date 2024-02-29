<?php
/**
 * Module Name: Sustainability Bullet Image Left
 * 
 * Description: Template for Sustainability Bullet Image Left Module.
 */
$sus_bil_image_id = get_sub_field('sus_bil_image') !== '' ? get_sub_field('sus_bil_image') : '';
$bil_image_srcset = get_image_srcset($sus_bil_image_id);
$sus_bil_top_text = get_sub_field('sus_bil_top_text') !== '' ? get_sub_field('sus_bil_top_text') : '';
$sus_bil_header = get_sub_field('sus_bil_header') !== '' ? get_sub_field('sus_bil_header') : '';
$sus_bil_paragraph = get_sub_field('sus_bil_paragraph') !== '' ? get_sub_field('sus_bil_paragraph') : '';
$sus_bil_link = get_sub_field('sus_bil_link') !== '' ? get_sub_field('sus_bil_link') : '';
?>
<style>
    #section_sus-bil-wrapper {
        max-height: 655px;
    }
    .sus-bil-top-text {
        line-height: 1em;
        position: relative;
        outline: 0;
        border: 0;
        color: #A3A8AA;
        text-align: left;
        height: 1.5em;
    }
    .sus-bil-top-text::before{
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 5%;
        height: 1px;
        background: #A3A8AA;
        z-index: 1;
    }
    .sus-bil-top-text::after{
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
    .sus-bil-headline {
        color: #53565A;
        font-family: 'Eurostile-Bold';
        font-size: 2.25em;
        letter-spacing: 0;
        margin-bottom: 0.5em;
        padding-left: 80px;
    }
    .sus-bil-paragraph {
        font-family: 'MyriadPro-Regular';
        font-size: 1.125em;
        padding-left: 80px;
    }
    .sus-bil-bullet-container {
        padding-left: 80px;
    }
    .sus-bil-bullet-percentage {
        font-family : "Eurostile-Bold";
        font-size : 45px;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .sus-bil-bullet-text {
        font-family : Eurostile;
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .sus-bil-link-container {
        padding-left: 80px;
    }
    .sus-bil-link-container a {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .sus-bil-link-container a::after{
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
    /* .sus-bil-image-mask {
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
    .reveal.animating .sus-bil-image-mask{
        transform: translateX(-100%);
    } */
</style>
<section id="section_sus-bil-wrapper" class="mt-5 showcase">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-5 sus-bil-image-container p-0 reveal showcase-img" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($sus_bil_image_id)); ?>');">
                <div class="sus-bil-image-mask"></div>
            </div>
            <div class="col-7 sus-bil-text-container p-0 pt-5 mt-3">
                <div class="sus-bil-top-text col-12" data-content="<?php echo $sus_bil_top_text; ?>"></div>
                <div class="sus-bil-headline pt-4">
                    <?php echo $sus_bil_header; ?>
                </div>
                <div class="sus-bil-paragraph col-10">
                    <?php echo $sus_bil_paragraph; ?>
                </div>
                <div class="sus-bil-link-container mt-5">
                    <a href="<?php echo $sus_bil_link['url']; ?>" target="<?php echo $sus_bil_link['target']; ?>"><?php echo $sus_bil_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>