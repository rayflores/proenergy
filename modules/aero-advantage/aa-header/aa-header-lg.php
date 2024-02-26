<?php
/**
 * Module Name: AeroAdvantage Header Large
 * Description: Template for AeroAdvantage Header Large Module.
 */
$aa_header_image_lg_id = get_sub_field('aa_header_image_lg');
$aa_header_image_lg_srcset = get_image_srcset($aa_header_image_lg_id);
?>
<section id="section_aa-header-large-wrapper" class="large masthead" style="background: url('<?php echo esc_url(wp_get_attachment_url($aa_header_image_lg_id)); ?>') no-repeat center center;background-size: cover;">
<style>
    .masthead.large {
        padding-top: 15rem;
        padding-bottom: 15rem;
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
