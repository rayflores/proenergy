<?php 
/**
 * Module Name: About Us All Text with Locations Map
 * Description: Template for About Us All Text with Locations Map Module.
 */
$ab_text_loc_map_top_text = get_sub_field('ab_text_loc_map_top_text') ? get_sub_field('ab_text_loc_map_top_text') : '';
$ab_text_loc_map_header = get_sub_field('ab_text_loc_map_header') ? get_sub_field('ab_text_loc_map_header') : '';
$ab_text_loc_map_paragraph = get_sub_field('ab_text_loc_map_paragraph') ? get_sub_field('ab_text_loc_map_paragraph') : '';
$ab_text_loc_map_link = get_sub_field('ab_text_loc_map_link') ? get_sub_field('ab_text_loc_map_link') : '';
$ab_text_loc_map_image_id = get_sub_field('ab_text_loc_map_image') ? get_sub_field('ab_text_loc_map_image') : '';
$ab_text_loc_map_image_srcset = get_image_srcset($ab_text_loc_map_image_id);

?>
<section id="section_ab-text-loc-map" class="p-0">
<style>
    #section_ab-text-loc-map {
        background-color: #862633;
    }
    .ab-tlm-top-text-container::before {
        background: linear-gradient(90deg, rgba(255,255,255,1) 50%, transparent 50%);
        content: '';
        display: inline-block;
        height: 1px;
        padding-right: 40px;
        position: relative;
        vertical-align: middle;
    }
    .ab-tlm-top-text-container {
        color: #fff;
        content: '';
        letter-spacing: 7.5px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family: "Eurostile-Normal";
        font-size: 12px;
    }
    .ab_text-loc-map-container h2 {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #fff;
        color : rgb(255, 255, 255);
    }
    .ab_tlm-link {
        color : #53565A;
        font-family : "Eurostile-Bold";
        font-size : 18px;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .ab_text-loc-map-paragraph-container p {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 25px;
        color : #fff;
        color : rgb(255, 255, 255);
        margin-top: 1.25em;
        padding-right: 0;
    }
    .ab-text-loc-map-link-container a {
        color : #aca8aa;
        font-family : "MyriadPro-Italic";
        font-size : 1.125em;
        line-height : 28px;
        letter-spacing : 0.18px;
    }
    .ab-text-loc-map-link-container a::after {
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-white.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    #section_ab-text-loc-map .locations-img {
        background-repeat: no-repeat;
        background-size: contain;
        min-height: 31rem;
    }
    .locations-text {
        color: #fff;
    }
    .locations-footer {
        color: #fff;
    }
    .ab_text_loc_map_location_city_statecountry {
        font-family: 'MyriadPro-Regular';
        font-size: 18px;
        font-weight: bold;
    }
    .ab_text_loc_map_location_name {
        font-family: 'MyriadPro-Regular';
        font-size: 18px;
        font-style: italic;
    }
    .locations-footer {
        font-family: 'MyriadPro-Regular';
        font-size: 18px;
        font-style: italic;
    }
    .locations-footer::before {
        background-color: #fff;
        border-radius: 100%;
        content: '';
        display: inline-block;
        height: 12px;
        width: 12px;
        margin-right: 0.75em;
    }
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="ab_text-loc-map-wrapper col-12">
                <div class="ab-tlm-top-text-container pt-5 pb-4">
                    <?php echo $ab_text_loc_map_top_text; ?>
                </div>
                <div class="ab_text-loc-map-container pb-5 ps-5">
                    <?php
                    if ( '' !== $ab_text_loc_map_header ) : ?>
                    <h2 class="ab_text-loc-map-header pt-3"><?php echo $ab_text_loc_map_header; ?></h2>
                    <?php
                    endif;
                    if ( '' !== $ab_text_loc_map_paragraph ) : ?>
                    <div class="ab_text-loc-map-paragraph-container pt-2">
                        <p><?php echo $ab_text_loc_map_paragraph; ?></p>
                    </div>
                    <?php endif; ?>
                    <?php 
                    if ( '' !== $ab_text_loc_map_link ) : ?>
                    <div class="ab-text-loc-map-link-container">
                        <a href="<?php echo $ab_text_loc_map_link['url']; ?>" class="ab_tlm-link"><?php echo $ab_text_loc_map_link['title']; ?></a>
                    </div>
                    <?php endif; ?>
                </div>
            </div>            
        </div>
        <div class="row g-0">
            <div class="col-3 locations-wrapper locations-text-container my-auto p-5">
                <div class="locations-text">
                    <?php 
                    if ( have_rows('ab_text_loc_map_location') ) : 
                        while ( have_rows('ab_text_loc_map_location') ) : the_row();
                        $ab_text_loc_map_location_city = get_sub_field('location_city') ? get_sub_field('location_city') : '';
                        $ab_text_loc_map_location_statecountry = get_sub_field('location_statecountry') ? get_sub_field('location_statecountry') : '';
                        $ab_text_loc_map_location_name = get_sub_field('location_name') ? get_sub_field('location_name') : '';
                        ?>
                        <div class="location pb-3">
                            <div class="ab_text_loc_map_location_city_statecountry">
                                <?php echo $ab_text_loc_map_location_city; ?>, <?php echo $ab_text_loc_map_location_statecountry; ?>
                            </div>
                            <div class="ab_text_loc_map_location_name">
                                <?php echo $ab_text_loc_map_location_name; ?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                    endif; ?>
                </div>
            </div>
            <div class="col-9 locations-img" style="background-image: url('<?php echo esc_url(wp_get_attachment_url($ab_text_loc_map_image_id)); ?>');">
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 ps-5">
                <div class="locations-footer">
                    <span>PES</span> Locations
                </div>
            </div>
        </div>
    </div>
</section>