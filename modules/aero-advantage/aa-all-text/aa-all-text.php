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
        font-family : "eurostile", sans-serif;
        font-size: clamp(1.75rem, 1.504rem + .995vw, 2.25rem);
        font-weight: 900;
        line-height: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
        letter-spacing : 0.01em;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .aa_at-link {
        color : #53565A;
        font-family : "eurostile", sans-serif;
        font-size : 18px;
        font-weight: 700;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .aa_all-text-paragraph-container p {
        font-family : "myriad-pro", sans-serif;
        font-size: clamp(1rem, 0.911rem + 0.238vw, 1.125rem);
        line-height : clamp(1.125rem, 0.946rem + 0.476vw, 1.375rem);
        font-weight: 400;
        color : #53565A;
        color : rgb(83, 86, 90);
        margin-top: 1.25em;
        padding-right: 0;
    }
    .ab-all-text-link-container a {
        color : #aca8aa;
        font-family : "myriad-pro", sans-serif;
        font-size : 1.125em;
        font-style: italic;
        font-weight: 400;
        line-height : 28px;
    }
    .ab-all-text-link-container a::after {
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    .ab-all-text-link-container a:hover::after {
        margin-left: 1.5em;
    }
    
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="aa_all-text-wrapper col-12 px-2 px-md-5 pt-5 pb-4">
                <div class="aa_all-text-container col-12 pb-5 ps-4">
                    <?php
                    if ( '' !== $aa_all_text_header ) : ?>
                    <h2 class="aa_all-text-header ps-2"><?php echo $aa_all_text_header; ?></h2>
                    <?php
                    endif;
                    if ( '' !== $aa_all_text_paragraph ) : ?>
                    <div class="aa_all-text-paragraph-container col-12">
                        <p class="ps-2"><?php echo $aa_all_text_paragraph; ?></p>
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