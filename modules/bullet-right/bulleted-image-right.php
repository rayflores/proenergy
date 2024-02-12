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
<section id="section_bulleted-image-right" class="" style="background-color: <?php echo $section_bg; ?>">
    </style>
        <div class="pt-2">
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