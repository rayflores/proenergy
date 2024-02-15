<?php
/**
 * Module Name: PowerFLX Header
 * 
 * Proenergy PowerFLX Header Template
 */
$header_image_id = get_sub_field( 'header_image' );
$header_srcset = get_image_srcset( $header_image_id);
?>
<section id="section_pflx-header-wrapper">
    <div class="row g-0">
        <div class="pflx-header-container col-lg-12">
                <img src="<?php echo esc_url(wp_get_attachment_url($header_image_id)); ?>" srcset="<?php echo $header_srcset; ?>" alt="PowerFLX Header Image">
        </div>
    </div>

