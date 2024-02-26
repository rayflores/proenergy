<?php
/**
 * Module Name: AeroAdvantage Header Small
 * Description: Template for AeroAdvantage Header Small Module.
 */
$aa_header_image_small_id = get_sub_field('aa_header_image_small');
$aa_header_image_small_srcset = get_image_srcset($aa_header_image_small_id);
?>
<section id="section_aa-header-small-wrapper" class="small masthead" style="background: url('<?php echo esc_url(wp_get_attachment_url($aa_header_image_small_id)); ?>') no-repeat center center;background-size: cover;">
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
