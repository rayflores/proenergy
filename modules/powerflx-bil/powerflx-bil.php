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
<section id="section_pflx-bil-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="pflx-bil-image-container">
                    <img class="img-fluid h-100 object-fit-cover" src="<?php echo esc_url(wp_get_attachment_url($bil_image_id)); ?>" srcset="<?php echo $bil_image_srcset; ?>" alt="PowerFLX Bullet Image Left">
                </div>
            </div>
            <div class="col-lg-8">
                <div class="pflx-bil-top-text-container">
                    <?php echo $bil_top_text; ?>
                </div>
                <div class="pflx-bil-header-container">
                    <?php echo $bil_header; ?>
                </div>
                <div class="pflx-bil-paragraph-container">
                    <?php echo $bil_paragraph; ?>
                </div>
                <div class="pflx-bil-bullet-container">
                    <div class="pflx-bil-bullet-percentage">
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
    </div>
</section>