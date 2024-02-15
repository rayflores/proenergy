<?php
/**
 * Module Name: PowerFLX All Text
 * 
 * Proenergy PowerFLX All Text Template
 */
$all_text_header = get_sub_field( 'all_text_header' );
$all_text_paragraph = get_sub_field( 'all_text_paragraph' );
$all_text_link = get_sub_field( 'all_text_link' );
?>
<section id="section_pflx-all-text-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="pflx-all-text-header-container">
                    <?php echo $all_text_header; ?>
                </div>
                <div class="pflx-all-text-paragraph-container">
                    <?php echo $all_text_paragraph; ?>
                </div>
                <div class="pflx-all-text-link-container">
                    <a class="pflx-atl" href="<?php echo $all_text_link['url']; ?>" target="<?php echo $all_text_link['target']; ?>"><?php echo $all_text_link['title']; ?></a>
                </div>
            </div>
        </div>
    </div>