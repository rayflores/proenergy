<?php
/**
 * Module Name: Bulleted Image Right
 */
$section_bg = get_sub_field('bir_background_grey') !== '' ? get_sub_field('bir_background_grey') : 'transparent';
$image_video = get_sub_field('bir_image_video') !== '' ? get_sub_field('bir_image_video') : '';
$top_text = get_sub_field('bir_top_text') !== '' ? get_sub_field('bir_top_text') : '';
$headline = get_sub_field('bir_header_text') !== '' ? get_sub_field('bir_header_text') : '';
$paragraph = get_sub_field('bir_paragraph') !== '' ? get_sub_field('bir_paragraph') : '';
$bullet_color = get_sub_field('bir_bullet_color') !== '' ? get_sub_field('bir_bullet_color') : '';
?>
<section id="section_bulleted-image-right" class="pt-5 pb-5" style="background-color: <?php echo $section_bg; ?>">
    <style>
        /* :root {
            --percent: 55%;
        } */
        /* .container-fluid {
            padding: 0;
        }
        .bir-top-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: #A3A8AA;
            text-align: left;
            height: 1.5em;
        }
        .bir-top-text::before{
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 50px;
            height: 1px;
            background: #A3A8AA;
            z-index: 1;
        }
        .bir-top-text::after{
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
        a.bir-nb-link::after{
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
        .bir-headline {
            color: #53565A;
            font-family: 'Eurostile-Bold';
            font-size: 2.25em;
            letter-spacing: 0;
            margin-bottom: 0.5em;
            padding-left: 80px;
        }
        .bir-paragraph {
            font-family: 'MyriadPro-Regular';
            font-size: 1.125em;
            padding-left: 80px;
        }
        .bir-numbered-bullets{
            padding-left: 80px;
        }
        .bir-nb-percentage{
            color: <?php echo $bullet_color; ?>;
            font-family: 'Eurostile-Bold';
            font-size: 2.25em;
            letter-spacing: 0;
            line-height: 0.75em;
            text-transform: uppercase;
        }
        .bir-nb-percentage-header{
            color: <?php echo $bullet_color; ?>;
            font-family: 'Eurostile-Bold';
            font-size: 1.125em;
            letter-spacing: 0;
        }
        .bir-nb-link{
            color: #A3A8AA;
            font-family: 'MyriadPro-Italic';
            font-size: 1.125em;
            margin-top: 30px;
        }
        .bir-image-mask {
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
        .reveal.animating .bir-image-mask{
            transform: translateX(-100%);
        } */
    </style>
        <div class="pt-5">
            <div class="row g-0">
                <div class="col-12 bir-text-container">
                    <div class="bir-top-text col-6" data-content="<?php echo $top_text !== '' ? $top_text : ''; ?>">
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="col-6 bir-text-container">
                    <div class="bir-headline pt-4">
                        <?php echo $headline !== '' ? $headline : ''; ?>
                    </div>
                    <div class="bir-paragraph">
                        <?php echo $paragraph !== '' ? $paragraph : ''; ?>
                    </div>
                    <?php 
                    if (have_rows('bir_numbered_bullet') ): ?>
                    <div class="bir-numbered-bullets">    
                        <div class="bir-bullets">
                            <?php while (have_rows('bir_numbered_bullet') ) : the_row(); ?>
                            <div class="bir-bullet pt-5">
                                <div class="bir-nb-percentage" style="color:<?php echo $bullet_color; ?>">
                                    <?php echo get_sub_field('bir_nb_percentage') !== '' ? get_sub_field('bir_nb_percentage') : ''; ?>
                                </div>
                                <div class="bir-nb-percentage-header" style="color: <?php echo $bullet_color; ?>">
                                    <?php echo get_sub_field('bir_nb_percentage_header') !== '' ? get_sub_field('bir_nb_percentage_header') : ''; ?>
                                </div>
                                <?php
                                if ( get_sub_field('bir_nb_bullet_link') !== '' ) : ?>
                                    <div class="bir-nb-bullet-link pt-3">
                                        <?php $bullet_link = get_sub_field('bir_nb_bullet_link') !== '' ? get_sub_field('bir_nb_bullet_link') : ''; ?>
                                        <a class="bir-nb-link" href="<?php echo $bullet_link['url']; ?>" target="<?php echo $bullet_link['target']; ?>"><?php echo $bullet_link['title']; ?></a>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-1"></div>
                <div class="col-5 bir-image reveal">
                    <div class="bir-image-mask"></div>
                    <img src="<?php echo $image_video['url']; ?>" alt="<?php echo $image_video['alt']; ?>" class="img-fluid h-100 object-fit-cover image-bg" />
                </div>
            </div>
        </div>
</section>