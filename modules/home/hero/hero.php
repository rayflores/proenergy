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
        <div class="row g-0 align-items-end h-100">
            <div class="hero-headline container ps-5 pb-5">
                <div class="hero-headline-text col-8 pb-4">
                    <?php echo $hero_headline; ?>
                </div>
            </div>   
        </div>
</section>
