<?php
/**
 * Module Name: PowerFLX Bullet Image Left
 * 
 * Proenergy PowerFLX Bullet Image Left Template
 */
$bil_image_id = get_sub_field('powerflx_bil_image') !== '' ? get_sub_field('powerflx_bil_image') : '';
$bil_image_srcset = get_image_srcset($bil_image_id);
$bil_top_text = get_sub_field('powerflx_bil_top_text') !== '' ? get_sub_field('powerflx_bil_top_text') : '';
$bil_header = get_sub_field('powerflx_bil_header') !== '' ? get_sub_field('powerflx_bil_header') : '';
$bil_paragraph = get_sub_field('powerflx_bil_paragraph') !== '' ? get_sub_field('powerflx_bil_paragraph') : '';
$bil_bullet_percentage = get_sub_field('powerflx_bil_percentage') !== '' ? get_sub_field('powerflx_bil_percentage') : '';
$bil_bullet_text = get_sub_field('powerflx_bil_text') !== '' ? get_sub_field('powerflx_bil_text') : '';
$bil_link = get_sub_field('powerflx_bil_link') !== '' ? get_sub_field('powerflx_bil_link') : '';
?>
<style>
    .pflx-bil-top-text {
        line-height: 1em;
        position: relative;
        outline: 0;
        border: 0;
        color: #A3A8AA;
        text-align: left;
        height: 1.5em;
    }
    .pflx-bil-top-text::before{
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 5%;
        height: 1px;
        background: #A3A8AA;
        z-index: 1;
    }
    .pflx-bil-top-text::after{
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
    .pflx-bil-headline {
        color: #53565A;
        font-family: 'Eurostile-Bold';
        font-size: 2.25em;
        letter-spacing: 0;
        margin-bottom: 0.5em;
        padding-left: 80px;
    }
    .pflx-bil-paragraph {
        font-family: 'MyriadPro-Regular';
        font-size: 1.125em;
        padding-left: 80px;
    }
    .pflx-bil-bullet-container {
        padding-left: 80px;
    }
    .pflx-bil-bullet-percentage {
        font-family : "Eurostile-Bold";
        font-size : 45px;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .pflx-bil-bullet-text {
        font-family : Eurostile;
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .pflx-bil-link-container {
        padding-left: 80px;
    }
    .pflx-bil-link-container a {
        font-family : "MyriadPro-Italic";
        font-size : 18px;
        line-height : 25px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .pflx-bil-link-container a::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-red.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
</style>
<section id="section_pflx-bil-wrapper" class="pt-5 pb-5 my-5">
    <div class="row g-0">
        <div class="col-5 pflx-bil-image-container p-0 reveal">
            <div class="pflx-bil-image-mask"></div>
            <img class="img-fluid h-100 object-fit-cover" src="<?php echo esc_url(wp_get_attachment_url($bil_image_id)); ?>" srcset="<?php echo $bil_image_srcset; ?>" alt="PowerFLX Bullet Image Left">
        </div>
        <div class="col-7 pflx-bil-text-container p-0 pt-5 mt-3">
            <div class="pflx-bil-top-text col-12" data-content="<?php echo $bil_top_text !== '' ? $bil_top_text : ''; ?>"></div>
            <div class="pflx-bil-headline pt-4">
                <?php echo $bil_header; ?>
            </div>
            <div class="pflx-bil-paragraph col-10">
                <?php echo $bil_paragraph; ?>
            </div>
            <div class="pflx-bil-bullet-container col-7">
                <div class="pflx-bil-bullet-percentage pt-5">
                    <?php echo $bil_bullet_percentage; ?>
                </div>
                <div class="pflx-bil-bullet-text">
                    <?php echo $bil_bullet_text; ?>
                </div>
            </div>
            <div class="pflx-bil-link-container">
                <a href="<?php echo $bil_link['url']; ?>" target="<?php echo $bil_link['target']; ?>"><?php echo $bil_link['title']; ?></a>
            </div>
        </div>
    </div>
</section>