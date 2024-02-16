<?php
/**
 * Module Name: PowerFLX Header Small
 * 
 * Proenergy PowerFLX Header Small Template for child pages of PowerFlx
 */
$header_image_id = get_sub_field( 'header_image' );
$header_srcset = get_image_srcset( $header_image_id);
global $post;
$child = false;
if ( is_page() && $post->post_parent ) {
    $child = true;
}
?>
<section id="section_pflx-header-wrapper" class="masthead <?php echo ( $child ) ? '' : 'parent'; ?>" style="background: url('<?php echo esc_url(wp_get_attachment_url($header_image_id)); ?>') no-repeat center center;background-size: cover;">
<style>
    .masthead {
        padding-top: 12rem;
        padding-bottom: 12rem;
        position: relative;
    }
    .masthead.parent {
        padding-top: 15rem;
        padding-bottom: 15rem;
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