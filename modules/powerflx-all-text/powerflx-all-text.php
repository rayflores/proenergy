<?php
/**
 * Module Name: PowerFLX All Text
 * 
 * Proenergy PowerFLX All Text Template
 */
$all_text_header = get_sub_field( 'all_text_header' );
$all_text_paragraph = get_sub_field( 'all_text_paragraph' );
$all_text_link = get_sub_field( 'all_text_link' ) ? get_sub_field( 'all_text_link' ) : '';
global $post;
$child = false;
if ( is_page() && $post->post_parent ) {
    $child = true;
}
?>
<style>
    .pflx-all-text-header-container h2 {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .pflx-atl {
        color : #53565A;
        font-family : "Eurostile-Bold";
        font-size : 18px;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .pflx-all-text-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
        margin-top: 1.25em;
        margin-bottom: 3em;
    }
    .pflx-all-text-link-container a {
        color : #aca8aa;
        font-family : "MyriadPro-Italic";
        font-size : 1.125em;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .pflx-all-text-link-container a::after {
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    <?php 
    if ( $child ) { ?>

    @media (min-width: 767.98px) { 
        .pflx-all-text-paragraph-container p {
            padding-right: 0;
        } 
    }
    @media (min-width: 991.98px) { 
        .pflx-all-text-paragraph-container p {
            padding-right: 1em;
        }
     }
    @media (min-width: 1199.98px) {  }

    @media (min-width: 1399.98px) { 
        .pflx-all-text-paragraph-container p {
            padding-right: 2em;
        }
     }
    @media (min-width: 1899.98px) { 
        .pflx-all-text-paragraph-container p {
            padding-right: 3em;
        }
    }
    <?php } ?>
</style>
<section id="section_pflx-all-text-wrapper">
    <div class="container-fluid">
        <div class="p-4 ps-md-5 pe-md-5 mb-4">
            <div class="col-lg-12 px-0">
                <div class="pflx-all-text-header-container">
                    <h2><?php echo $all_text_header; ?></h2>
                </div>
                <div class="pflx-all-text-paragraph-container">
                    <p class="col-lg-8 col-md-12 col-sm-10"><?php echo $all_text_paragraph; ?></p>
                </div>
                <?php if ( '' !== $all_text_link ) : ?>
                <div class="pflx-all-text-link-container">
                    <a class="pflx-atl" href="<?php echo $all_text_link['url']; ?>" target="<?php echo $all_text_link['target']; ?>"><?php echo $all_text_link['title']; ?></a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>