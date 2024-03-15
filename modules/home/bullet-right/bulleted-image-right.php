<?php
/**
 * Module Name: Bulleted Image Right
 */
$section_bg = get_sub_field('bir_background_grey') !== '' ? get_sub_field('bir_background_grey') : 'transparent';
$image_video_id = get_sub_field('bir_image_video') !== '' ? get_sub_field('bir_image_video') : '';
$srcset = get_image_srcset($image_video_id);
$alt_text = get_image_alt_text($image_video_id);
$top_text = get_sub_field('bir_top_text') !== '' ? get_sub_field('bir_top_text') : '';
$headline = get_sub_field('bir_header_text') !== '' ? get_sub_field('bir_header_text') : '';
$paragraph = get_sub_field('bir_paragraph') !== '' ? get_sub_field('bir_paragraph') : '';
$bullet_color = get_sub_field('bir_bullet_color') !== '' ? get_sub_field('bir_bullet_color') : '';
?>
<section id="section_bulleted-image-right" class="" style="background-color: <?php echo $section_bg; ?>">
    </style>
        <div class="container-fluid px-0 pt-5">
            <!-- <div class="row g-0">
                <div class="col-12 bir-text-container">
                    <div class="bir-top-text col-6" data-content="<?php echo $top_text !== '' ? $top_text : ''; ?>">
                    </div>
                </div>
            </div> -->
            <div class="row g-0">
                <div class="col-12 col-md-6 order-1 order-sm-2 bir-text-container">
                    <div class="bir-top-text col-12 col-md-6" data-content="<?php echo $top_text !== '' ? $top_text : ''; ?>"></div>
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
                <div class="col-1 order-2 d-sm-none d-md-block"></div>
                <div class="col-12 col-md-5 order-sm-1 order-md-3 bir-image reveal">
                    <div class="bir-image-mask"></div>
                    <img src="<?php echo esc_url(wp_get_attachment_url($image_video_id)); ?>" srcset="<?php echo esc_attr($srcset); ?>" alt="<?php echo $alt_text; ?>" class="img-fluid h-100 object-fit-cover image-bg">
                </div>
            </div>
        </div>
</section>