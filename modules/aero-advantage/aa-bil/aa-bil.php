<?php
/**
 * Module Name: AeroAdvantage Bullet Image Left
 * Description: Template for AeroAdvantage Bullet Image Left Module.
 */
$aa_bil_image_id = get_sub_field('aa_bil_image') ? get_sub_field('aa_bil_image') : '';
$aa_bil_image_srcset = get_image_srcset($aa_bil_image_id);
$aa_bil_top_text = get_sub_field('aa_bil_top_text') ? get_sub_field('aa_bil_top_text') : '';
$aa_bil_header = get_sub_field('aa_bil_header') ? get_sub_field('aa_bil_header') : '';
$aa_bil_paragraph = get_sub_field('aa_bil_paragraph') ? get_sub_field('aa_bil_paragraph') : '';
$aa_bil_percentage = get_sub_field('aa_bil_percentage') ? get_sub_field('aa_bil_percentage') : '';
$aa_bil_text = get_sub_field('aa_bil_text') ? get_sub_field('aa_bil_text') : '';
$aa_bil_link = get_sub_field('aa_bil_link') ? get_sub_field('aa_bil_link') : '';
?>
<section id="section_areoadvantage_bil" class="p-0 showcase">
<style>

    .aa-bil-top-text {
        line-height: 1em;
        position: relative;
        outline: 0;
        border: 0;
        color: #A3A8AA;
        text-align: left;
        height: 1.5em;
    }
    .aa-bil-top-text::before{
        content: '';
        position: absolute;
        top: 50%;
        left: 0;
        width: 52px;
        height: 1px;
        background: #A3A8AA;
        z-index: 1;
    }
    .aa-bil-top-text::after{
        color: #A3A8AA;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 0.5em;
        padding-left: 80px;
        position: relative;
        line-height: 1.5em;
        text-transform: uppercase;
        z-index: 0;
    }
    .aa-bil-headline {
        color: #53565A;
        font-family: 'eurostile', sans-serif;
        font-size: 2.25em;
        font-weight: 700;
        letter-spacing: 0;
        margin-bottom: 0.5em;
        padding-left: 80px;
    }
    .aa-bil-paragraph {
        font-family: 'myriad-pro', sans-serif;
        font-size: 1.125em;
        padding-left: 80px;
    }
    .aa-bil-bullet-container {
        padding-left: 80px;
    }
    .aa-bil-bullet-percentage {
        font-family : "eurostile", sans-serif;
        font-size : 45px;
        font-weight : 700;
        line-height : 54.85px;
        text-transform : uppercase;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .aa-bil-bullet-text {
        font-family : 'eurostile', sans-serif;
        font-size : 24px;
        line-height : 31.1px;
        letter-spacing : 0.24px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .aa-bil-link-container {
        padding-left: 80px;
    }
    .aa-bil-link-container a {
        font-family : "myriad-pro";
        font-size : 18px;
        font-style: italic;
        line-height : 25px;
        color : #862633;
        color : rgb(134, 38, 51);
    }
    .aa-bil-link-container a::after{
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
    /* .aa-bil-image-mask {
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
    .reveal.animating .aa-bil-image-mask{
        transform: translateX(-100%);
    } */
    @media screen and (max-width: 768px) {
        .aa-bil-top-text::before{
            width: 20px;
        }
        .aa-bil-top-text::after{
            font-size: 14px;
            letter-spacing: 0.25em;
            padding-left: 40px;
        }
        .aa-bil-headline {
            padding-left: 40px;
        }
        .aa-bil-paragraph {
            padding-left: 40px;
        }
        .aa-bil-bullet-container {
            padding-left: 40px;
        }
        .aa-bil-link-container {
            padding-left: 40px;
        }
        
    }
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 col-md-5 aa-bil-image-container p-0 reveal showcase-img" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($aa_bil_image_id)); ?>');">
                <div class="aa-bil-image-mask"></div>
            </div>
            <div class="col-12 col-md-7 aa-bil-text-container p-0 pt-5 mt-3">
                <div class="aa-bil-top-text col-12" data-content="<?php echo $aa_bil_top_text !== '' ? $aa_bil_top_text : ''; ?>"></div>
                <div class="aa-bil-headline pt-4">
                    <?php echo $aa_bil_header; ?>
                </div>
                <div class="aa-bil-paragraph col-10">
                    <?php echo $aa_bil_paragraph; ?>
                </div>
                <div class="aa-bil-bullet-container col-7">
                    <div class="aa-bil-bullet-percentage pt-5">
                        <?php echo $aa_bil_percentage; ?>
                    </div>
                    <div class="aa-bil-bullet-text">
                        <?php echo $aa_bil_text; ?>
                    </div>
                </div>
                <div class="aa-bil-link-container mt-5">
                    <a href="<?php echo $aa_bil_link['url']; ?>" target="<?php echo $aa_bil_link['target']; ?>"><?php echo $aa_bil_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>
</section>
