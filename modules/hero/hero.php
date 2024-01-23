<?php
/**
 * Block Name: Hero
 * 
 * Proenergy Hero Block Template
 */
$hero_image = get_sub_field( 'hero_image_video' );
$hero_image_url = $hero_image['url'];

$hero_headline = get_sub_field( 'hero_headline' );
?>
<section id="section_hero-wrapper" style="background-image: url('<?php echo $hero_image_url; ?>');">
    <div class="container-fluid">
        <div class="row">
            <div class="hero-container col-lg-12">
                <div class="hero-headline col-lg-12">
                    <div class="hero-headline-text col-lg-6">
                        <?php echo $hero_headline; ?>
                    </div>
                </div>   
            </div>
        </div>
    </div>
</section>