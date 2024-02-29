<?php
/**
 * Module Name: Sustainability Header Small
 * Description: Template for Sustainability Header Small Module.
 */
$sus_header_image_small_id = get_sub_field('sus_header_image_small');
$sus_header_image_small_srcset = get_image_srcset($sus_header_image_small_id);
?>
<section id="section_sus-header-small-wrapper" class="small masthead" style="background: url('<?php echo esc_url(wp_get_attachment_url($sus_header_image_small_id)); ?>') no-repeat center center;background-size: cover;">
<style>
    .masthead.small {
        padding-top: 12rem;
        padding-bottom: 12rem;
        position: relative;
    }
    .masthead .overlay {
        position: absolute;
        background-color: #212529;
        height: 100%;
        width: 100%;
        top: 0;
        left: 0;
        opacity: .3;
    }
</style>
        <div class="overlay"></div>
</section>
