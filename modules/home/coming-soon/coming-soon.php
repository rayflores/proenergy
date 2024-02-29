<?php
/**
 * Module Name: Coming Soon
 * Description: Template for Coming Soon Module
 */
$cs_image_id = get_sub_field( 'coming_soon_image' ) ? get_sub_field( 'coming_soon_image' ) : '';
$cs_srcset = get_image_srcset( $cs_image_id );
?>
<section id="section_coming-soon" class="m-0 p-0">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12">
                <img src="<?php echo esc_url(wp_get_attachment_url($cs_image_id)); ?>" srcset="<?php echo $cs_srcset; ?>" alt="Coming Soon" class="img-fluid">
            </div>
        </div>
    </div>
</section>