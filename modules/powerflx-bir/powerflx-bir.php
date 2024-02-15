<?php
/**
 * Module Name: PowerFLX Bullet Image Right
 * 
 * Proenergy PowerFLX Bullet Image Right Template
 */
$top_text = get_sub_field('powerflx_top_text') !== '' ? get_sub_field('powerflx_top_text') : '';
$header = get_sub_field('powerflx_header') !== '' ? get_sub_field('powerflx_header') : '';
$paragraph = get_sub_field('powerflx_paragraph') !== '' ? get_sub_field('powerflx_paragraph') : '';
$bullet_percentage = get_sub_field('powerflx_bir_percentage') !== '' ? get_sub_field('powerflx_bir_percentage') : '';
$bullet_text = get_sub_field('powerflx_bir_text') !== '' ? get_sub_field('powerflx_bir_text') : '';
$link = get_sub_field('powerflx_bir_link') !== '' ? get_sub_field('powerflx_bir_link') : '';
$bir_image_id = get_sub_field('powerflx_bir_image') !== '' ? get_sub_field('powerflx_bir_image') : '';
$bir_image_srcset = get_image_srcset($bir_image_id);
?>
<section id="section_pflx-bir-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="pflx-bir-top-text-container">
                    <?php echo $top_text; ?>
                </div>
                <div class="pflx-bir-header-container">
                    <?php echo $header; ?>
                </div>
                <div class="pflx-bir-paragraph-container">
                    <?php echo $paragraph; ?>
                </div>
                <div class="pflx-bir-bullet-container">
                    <div class="pflx-bir-bullet-percentage">
                        <?php echo $bullet_percentage; ?>
                    </div>
                    <div class="pflx-bir-bullet-text">
                        <?php echo $bullet_text; ?>
                    </div>
                </div>
                <div class="pflx-bir-link-container">
                    <a class="pflx-bir-link" href="<?php echo $link['url']; ?>" target="<?php echo $link['target']; ?>"><?php echo $link['title']; ?></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="pflx-bir-image-container">
                    <img class="img-fluid h-100 object-fit-cover" src="<?php echo esc_url(wp_get_attachment_url($bir_image_id)); ?>" srcset="<?php echo $bir_image_srcset; ?>" alt="PowerFLX Bullet Image Right">
                </div>
            </div>
        </div>
    </div>
</section>