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
          .container-fluid {
            padding: 0;
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
            top: 50%;
            left: 0;
            width: 5%;
            height: 1px;
            background: #A3A8AA;
            z-index: 1;
        }
        .bil-top-text::after{
            background-color: #fcfcfa;
            color: #A3A8AA;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 1em;
            padding-left: 80px;
            position: relative;
            line-height: 1.5em;
            text-transform: uppercase;
            z-index: 0;
        }
        a.bil-nb-link::after{
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
        .bil-headline {
            color: #53565A;
            font-family: 'Eurostile-Bold';
            font-size: 2.25em;
            letter-spacing: 0;
            margin-bottom: 0.5em;
            padding-left: 80px;
        }
        .bil-paragraph {
            font-family: 'MyriadPro-Regular';
            font-size: 1.125em;
            padding-left: 80px;
        }
        .bil-bullets{
            padding-left: 80px;
        }
        .bil-nb-percentage{
            color: <?php echo $bullet_color; ?>;
            font-family: 'Eurostile-Bold';
            font-size: 2.25em;
            letter-spacing: 0;
            line-height: 0.75em;
            text-transform: uppercase;
        }
        .bil-nb-percentage-header{
            color: <?php echo $bullet_color; ?>;
            font-family: 'Eurostile-Bold';
            font-size: 1.125em;
            letter-spacing: 0;
        }
        .bil-nb-link{
            color: #A3A8AA;
            font-family: 'MyriadPro-Italic';
            font-size: 1.125em;
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
    </style>
        <div class="container-fluid">
            <div class="row g-0">
                <div class="col-5 bil-image p-0 reveal">
                    <div class="bil-image-mask"></div>
                    <img src="<?php echo esc_url(wp_get_attachment_url($image_video_id)); ?>" srcset="<?php echo esc_attr($srcset); ?>" alt="<?php echo $alt_text; ?>" class="img-fluid h-100 object-fit-cover">
                </div>
                <div class="col-7 bil-text-container p-0">
                    <div class="bil-top-text col-12" data-content="<?php echo $top_text !== '' ? $top_text : ''; ?>"></div>
                    <div class="bil-headline pt-4">
                        <?php echo $headline !== '' ? $headline : ''; ?>
                    </div>
                    <div class="bil-paragraph col-10">
                        <?php echo $paragraph !== '' ? $paragraph : ''; ?>
                    </div>
                    <div class="bil-numbered-bullets col-7">
                        <?php 
                        if (have_rows('bil_numbered_bullet') ): ?>
                        <div class="bil-bullets">
                            <?php while (have_rows('bil_numbered_bullet') ) : the_row(); ?>
                            <div class="bil-bullet pt-5">
                                <div class="bil-nb-percentage">
                                    <?php echo get_sub_field('bil_nb_percentage') !== '' ? get_sub_field('bil_nb_percentage') : ''; ?>
                                </div>
                                <div class="bil-nb-percentage-header">
                                    <?php echo get_sub_field('bil_nb_percentage_header') !== '' ? get_sub_field('bil_nb_percentage_header') : ''; ?>
                                </div>
                                <div class="bil-nb-bullet-link pt-3">
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