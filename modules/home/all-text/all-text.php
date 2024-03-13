<?php 
/**
 * Module Name: All Text
 */
$headline = get_sub_field('at_headline');
$description = get_sub_field('at_description');
$link = get_sub_field('at_link');
?>
<section id="section_all-text">
    <div class="pt-2">
        <div class="row g-0">
            <div class="all-text-wrapper col-lg-12">
                <div class="all-text-container col-lg-12 pt-5 pb-5">
                    <?php
                    if ( $headline ) : ?>
                    <h2 class="all-text-headline"><?php echo $headline; ?></h2>
                    <?php endif; ?>
                    <?php
                    if ( $description ) : ?>
                    <div class="all-text-description col-lg-7"><?php echo $description; ?></div>
                    <?php endif; ?>
                    <?php 
                    if ( $link ) : ?>
                    <a href="<?php echo $link['url']; ?>" class="at-link"><?php echo $link['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>