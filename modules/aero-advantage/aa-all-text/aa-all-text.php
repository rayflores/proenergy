<?php 
/**
 * Module Name: AeroAdvantage All Text
 * Description: Template for AeroAdvantage All Text Module.
 */
$aa_all_text_header = get_sub_field('aa_all_text_header') ? get_sub_field('aa_all_text_header') : '';
$aa_all_text_paragraph = get_sub_field('aa_all_text_paragraph') ? get_sub_field('aa_all_text_paragraph') : '';
$aa_all_text_link = get_sub_field('aa_all_text_link') ? get_sub_field('aa_all_text_link') : '';
?>
<section id="section_aa_all-text">
<style>
    .aa_all-text-container h2 {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .aa_at-link {
        color : #53565A;
        font-family : "Eurostile-Bold";
        font-size : 18px;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .aa_all-text-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
        margin-top: 1.25em;
        padding-right: 0;
    }
    .ab-all-text-link-container a {
        color : #aca8aa;
        font-family : "MyriadPro-Italic";
        font-size : 1.125em;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .ab-all-text-link-container a::after {
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="aa_all-text-wrapper col-12 px-5 pt-3 pb-4">
                <div class="aa_all-text-container col-12 pb-5 ps-3">
                    <?php
                    if ( '' !== $aa_all_text_header ) : ?>
                    <h2 class="aa_all-text-header"><?php echo $aa_all_text_header; ?></h2>
                    <?php
                    endif;
                    if ( '' !== $aa_all_text_paragraph ) : ?>
                    <div class="aa_all-text-paragraph-container col-12">
                        <p><?php echo $aa_all_text_paragraph; ?></p>
                    </div>
                    <?php endif; ?>
                    <?php 
                    if ( '' !== $aa_all_text_link ) : ?>
                    <div class="ab-all-text-link-container">
                        <a href="<?php echo $aa_all_text_link['url']; ?>" class="aa_at-link"><?php echo $aa_all_text_link['title']; ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>