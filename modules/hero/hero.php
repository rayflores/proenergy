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
    position: relative;
}
.hero-container img.img-fluid {
    max-height: 1040px;
    object-fit: none;
    object-position: 0 0; /* positioned top left of the content box */
}
.hero-container .hero-headline {
    bottom: 0;
    color: #ffffff;
    font-family: 'Eurostile-Normal';
    font-size: 6em;
    letter-spacing: 15px;
    line-height: 0.8;
    padding: 0.5em 1em;
    position: absolute;
    text-transform: uppercase;
    width: 50%;
}
.hero-container .hero-headline::before {
    position: absolute;
    background: linear-gradient(to right, #003A70 192px, #862633 50px);
    height: 20px;
    content: '';
    bottom: -10px;
    right: 0;
    left: 0;
}
.hero-container .hero-headline span {
    font-family: 'Eurostile-Bold';
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