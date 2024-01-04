<?php
/**
 * Module Name: Bulleted Image Right
 */
$image_video = get_sub_field('bir_image_video') !== '' ? get_sub_field('bir_image_video') : '';
$top_text = get_sub_field('bir_top_text') !== '' ? get_sub_field('bir_top_text') : '';
$headline = get_sub_field('bir_header_text') !== '' ? get_sub_field('bir_header_text') : '';
$paragraph = get_sub_field('bir_paragraph') !== '' ? get_sub_field('bir_paragraph') : '';
$bullet_color = get_sub_field('bir_bullet_color') !== '' ? get_sub_field('bir_bullet_color') : '';
?>
<section id="section_bulleted-image-right" class="pt-5">
    <style>
        #section_bulleted-image-right{
            height: 585px;
        }
        .container-fluid {
            padding: 0;
        }
        .bir-top-text {
            line-height: 1em;
            position: relative;
            outline: 0;
            border: 0;
            color: #A3A8AA;
            text-align: center;
            height: 1.5em;
        }
        .bir-top-text::before{
            content: '';
            position: absolute;
            top: 50%;
            left: 0;
            width: 35%;
            height: 1px;
            background: #A3A8AA;
        }
        .bir-top-text::after{
            background-color: #fcfcfa;
            color: #A3A8AA;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 1em;
            padding-left: 1.75em;
            position: relative;
            line-height: 1.5em;
            text-transform: uppercase;
        }
        a.bir-nb-link::after{
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.png');
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
        }
        .bir-paragraph {
            font-family: 'MyriadPro-Regular';
            font-size: 1.125em;
            padding-right: 2.25em;
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
        .bir-image{
            position: relative;
        }
        .bir-image-overlay{
            position: absolute;
            top: 0;
            z-index: 10;
            width: 250px;
            height: 100%;
            background: rgba(255,255,255,0.8);
            transform: skew(-195.25deg);
            left: -60px;
        }
    </style>
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-5 bir-text-container h-100">
                    <div class="bir-top-text col-3" data-content="<?php echo $top_text !== '' ? $top_text : ''; ?>"></div>
                    <div class="bir-headline pt-4 offset-1">
                        <?php echo $headline !== '' ? $headline : ''; ?>
                    </div>
                    <div class="bir-paragraph col-8 offset-1">
                        <?php echo $paragraph !== '' ? $paragraph : ''; ?>
                    </div>
                    <div class="bir-numbered-bullets col-8 offset-1">
                        <?php 
                        if (have_rows('bir_numbered_bullet') ): ?>
                        <div class="bir-bullets">
                            <?php while (have_rows('bir_numbered_bullet') ) : the_row(); ?>
                            <div class="bir-bullet pt-5">
                                <div class="bir-nb-percentage">
                                    <?php echo get_sub_field('bir_nb_percentage') !== '' ? get_sub_field('bir_nb_percentage') : ''; ?>
                                </div>
                                <div class="bir-nb-percentage-header">
                                    <?php echo get_sub_field('bir_nb_percentage_header') !== '' ? get_sub_field('bir_nb_percentage_header') : ''; ?>
                                </div>
                                <div class="bir-nb-bullet-link pt-3">
                                    <?php
                                    if ( get_sub_field('bir_nb_bullet_link') !== '' ) : ?>
                                        <?php $bullet_link = get_sub_field('bir_nb_bullet_link') !== '' ? get_sub_field('bir_nb_bullet_link') : ''; ?>
                                        <a class="bir-nb-link" href="<?php echo $bullet_link['url']; ?>" target="<?php echo $bullet_link['target']; ?>"><?php echo $bullet_link['title']; ?></a>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>    
                </div>  
                <div class="col-7 bir-image h-100">
                    <img src="<?php echo $image_video['url']; ?>" alt="<?php echo $image_video['alt']; ?>" class="img-fluid h-100 w-100" />
                <div class="bir-image-overlay"></div>
            </div>
        </div>
</section>