<?php
/**
 * Block Name: Hero
 * 
 * Proenergy Hero Block Template
 */
$hero_image_or_video = get_sub_field( 'hero_image_or_video' );
$hero_video = get_sub_field( 'hero_video' );
$hero_image = get_sub_field( 'hero_image' );
$hero_headline = get_sub_field( 'hero_headline' );
if ( !$hero_image_or_video ) : ?>
<section id="section_hero-wrapper">
    <div class="hero-overlay"></div>
        <video autoplay muted loop plasinline id="hero-video">
            <source src="<?php echo $hero_video; ?>" type="video/webm">
        </video>
<?php else : 
    $hero_image_url = $hero_image['url']; 
?>
<section id="section_hero-wrapper" style="background-image: url('<?php echo $hero_image_url; ?>');">
<?php endif; ?>
        <div class="row">
            <div class="hero-container col-lg-12">
                <div class="hero-headline col-lg-12">
                    <div class="hero-headline-text col-lg-6">
                        <?php echo $hero_headline; ?>
                    </div>
                </div>   
            </div>
        </div>
</section>