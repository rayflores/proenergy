<?php
/**
 * Block Name: Hero
 * 
 * Proenergy Hero Block Template
 */
$hero_image = get_sub_field( 'hero_image_video' );
$hero_headline = get_sub_field( 'hero_headline' );
?>
<style>
.hero-container {
    max-height: 1040px;
}
.hero-container img.img-fluid {
    max-height: 1040px;
    object-fit: none;
    object-position: 0 0; /* positioned top left of the content box */
}    
</style>
<div class="hero-wrapper">
    <div class="hero-container">
        <?php echo wp_get_attachment_image( $hero_image['ID'], 'full', "", array( 'class' => 'img-fluid' ) ); ?>
        <div class="hero-headline">
            <?php echo $hero_headline; ?>
        </div>   
    </div>
</div>