<?php
/**
 * Module Name: Bulleted Image Left
 */
$section_bg = get_sub_field('bil_background_grey') !== '' ? get_sub_field('bil_background_grey') : '';
$image_video_id = get_sub_field('bil_image_video') !== '' ? get_sub_field('bil_image_video') : '';
$srcset = get_image_srcset($image_video_id);
$alt_text = get_image_alt_text($image_video_id);
$top_text = get_sub_field('bil_top_text') !== '' ? get_sub_field('bil_top_text') : '';
$headline = get_sub_field('bil_header_text') !== '' ? get_sub_field('bil_header_text') : '';
$paragraph = get_sub_field('bil_paragraph') !== '' ? get_sub_field('bil_paragraph') : '';
$bullet_color = get_sub_field('bil_bullet_color') !== '' ? get_sub_field('bil_bullet_color') : '';
?>
<section id="section_bulleted-image-left" class="pt-5 pb-5">
    <style>
        .bil-text-container {
            background: linear-gradient(180deg, rgba(163,168,170,0.2) 0%, rgba(255,255,255,0) 100%);
        }
        .bil-top-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: #A3A8AA;
            text-align: left;
            height: 1.5em;
        }
        .bil-top-text::before{
            content: '';
            position: absolute;
            top: 12px;
            left: 0;
            width: 52px;
            height: 1px;
            background: #A3A8AA;
            z-index: 1;
        }
        .bil-top-text::after{
            color: #A3A8AA;
            content: attr(data-content);
            display: inline-block;
            font-family: "eurostile", sans-serif;
            font-size: 18px;
            font-weight: 700;
            letter-spacing: 0.5em;
            padding-left: 80px;
            position: relative;
            line-height: 22px;
            text-transform: uppercase;
            z-index: 0;
        }
        a.bil-nb-link::after{
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-gray.svg');
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
            transition: 0.3s;
        }
        a.bil-nb-link:hover::after{
            margin-left: 1.5em;
        }
        .bil-headline {
            color: #53565A;
            font-family: "eurostile", sans-serif;
            font-size: clamp(1.625rem, 1.009rem + 2.488vw, 2.875rem);
            font-weight: 800;
            letter-spacing: 0;
            margin-bottom: 0.5em;
            padding-left: 80px;
        }
        .bil-paragraph {
            font-family: 'myriad-pro', sans-serif;
            font-size: 1.5em;
            padding-left: 80px;
        }
        .bil-bullets{
            padding-left: 80px;
        }
        .bil-nb-percentage{
            color: <?php echo $bullet_color; ?>;
            font-family: "eurostile", sans-serif;
            font-size: 3.75em;
            font-weight: 800;
            letter-spacing: 0;
            line-height: 0.75em;
            text-transform: uppercase;
        }
        .bil-nb-percentage-header{
            color: <?php echo $bullet_color; ?>;
            font-family: 'eurostile', sans-serif;
            font-size: 2em;
            letter-spacing: 0;
        }
        .bil-nb-link{
            color: #A3A8AA;
            font-family: 'myriad-pro', sans-serif;
            font-size: 1.5em;
            font-style: italic;
            margin-top: 30px;
        }
        .bil-image{
            position: relative;
        }
        .bil-image-mask {
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
        .reveal.animating .bil-image-mask{
            transform: translateX(-100%);
        }
        .bil-top-text-spacer {
            height: 88px;
        }
        img.image-bg {
            min-height: 577px;
        }
        @media screen and (max-width: 768px) {
            .bil-top-text::before{
                width: 20px;
            }
            .bil-top-text::after{
                font-size: 14px;
                letter-spacing: 0.25em;
                padding-left: 40px;
            }
            .bil-headline {
                line-height: 26px;
                padding-left: 40px;
            }
            .bil-paragraph {
                font-size: 1.0em;
                line-height: 1.25em;
                padding-left: 40px;
            }
            .bil-bullets {
                padding-left: 40px;
            }
            .bil-nb-percentage {
                font-size: 1.75em;
                line-height: 0.75em;
            }
            .bil-nb-percentage-header {
                font-size: 1em;
                line-height: 1.25em;
            }
            .bil-nb-link {
                font-size: 1em;
            }
            .bil-top-text-spacer {
                height: 44px;
            }
            a.bil-nb-link::after{
                width: 20px;
            }
            img.image-bg {
                min-height: 288px;
            }
            
        }
    </style>
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-lg-5 col-md-12 bil-image p-0 reveal">
                    <div class="bil-image-mask"></div>
                    <img src="<?php echo esc_url(wp_get_attachment_url($image_video_id)); ?>" srcset="<?php echo esc_attr($srcset); ?>" alt="<?php echo $alt_text; ?>" class="img-fluid h-100 object-fit-cover image-bg">
                </div>
                <div class="col-lg-7 col-md-12 bil-text-container p-0">
                    <div class="bil-top-text-spacer col-12"></div>
                    <div class="bil-top-text col-12" data-content="<?php echo $top_text !== '' ? $top_text : ''; ?>"></div>
                    <div class="bil-headline pt-4">
                        <?php echo $headline !== '' ? $headline : ''; ?>
                    </div>
                    <div class="bil-paragraph col-10">
                        <?php echo $paragraph !== '' ? $paragraph : ''; ?>
                    </div>
                    <div class="bil-numbered-bullets col-12">
                        <?php 
                        if (have_rows('bil_numbered_bullet') ): ?>
                        <div class="bil-bullets">
                            <?php while (have_rows('bil_numbered_bullet') ) : the_row(); ?>
                            <div class="bil-bullet pt-4 pt-lg-5">
                                <div class="bil-nb-percentage">
                                    <?php echo get_sub_field('bil_nb_percentage') !== '' ? get_sub_field('bil_nb_percentage') : ''; ?>
                                </div>
                                <div class="bil-nb-percentage-header">
                                    <?php echo get_sub_field('bil_nb_percentage_header') !== '' ? get_sub_field('bil_nb_percentage_header') : ''; ?>
                                </div>
                                <div class="bil-nb-bullet-link pt-2 pt-lg-3">
                                    <?php
                                    if ( get_sub_field('bil_nb_bullet_link') !== '' ) : ?>
                                        <?php $bullet_link = get_sub_field('bil_nb_bullet_link') !== '' ? get_sub_field('bil_nb_bullet_link') : ''; ?>
                                        <a class="bil-nb-link" href="<?php echo $bullet_link['url']; ?>" target="<?php echo $bullet_link['target']; ?>"><?php echo $bullet_link['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>    
                </div>  
                
            </div>
        </div>
</section>