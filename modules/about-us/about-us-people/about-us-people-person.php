<?php
/**
 * Module Name: About Us People
 * Description: Template for About Us People Module.
 */
$ab_uuid = wp_unique_id( 'about-us-person-' );
$ab_person_top_text = '';
$ab_person_top_text = get_sub_field( 'ab_person_top_text' ) ? get_sub_field( 'ab_person_top_text' ) : '';
$ab_person_name = '';
$ab_person_name = get_sub_field( 'ab_person_name' ) ? get_sub_field( 'ab_person_name' ) : '';
$ab_person_name_color = '';
$ab_person_name_color = get_sub_field( 'about_us_person_name_color' ) ? get_sub_field( 'about_us_person_name_color' ) : '';
$ab_person_title = '';
$ab_person_title = get_sub_field( 'ab_person_title' ) ? get_sub_field( 'ab_person_title' ) : '';
$ab_person_experience = '';
$ab_person_experience = get_sub_field( 'ab_person_experience' ) ? get_sub_field( 'ab_person_experience' ) : '';
$ab_person_paragraph = '';
$ab_person_paragraph = get_sub_field( 'ab_person_paragraph' ) ? get_sub_field( 'ab_person_paragraph' ) : '';
$ab_person_profile_image_id = '';
$ab_person_profile_image_id = get_sub_field( 'ab_person_profile_image' ) ? get_sub_field( 'ab_person_profile_image' ) : '';
$ab_person_profile_image_srcset = get_image_srcset( $ab_person_profile_image_id );
$ab_person_bg_color = '';
$ab_person_bg_color = get_sub_field( 'ab_person_bg_color' ) ? get_sub_field( 'ab_person_bg_color' ) : '';

?>
<section id="section_about-us-people-person" class="p-0 <?php echo $ab_uuid; ?> showcase-person" style="background-color: <?php echo $ab_person_bg_color; ?>;">
    <style>
        #section_about-us-people-person {

        }
        .<?php echo $ab_uuid; ?> .ab-person-top-text-container::before {
            background: linear-gradient(90deg, <?php echo $ab_person_bg_color; ?> 50%, transparent 50%);
            content: '';
            display: inline-block;
            height: 1px;
            padding-right: 40px;
            position: relative;
            vertical-align: middle;
        }
        .<?php echo $ab_uuid; ?> .ab-person-top-text-container {
            color: #a3a8aa;
            content: '';
            letter-spacing: 7.5px;
            position: relative;
            line-height: 25.7px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "Eurostile-Normal";
            font-size: 12px;
        }
        .<?php echo $ab_uuid; ?> .ab-person-name-container h2 {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : <?php echo $ab_person_name_color; ?>;
        }
        .<?php echo $ab_uuid; ?> .ab-person-title-container h3 {
            font-family : "MyriadPro-Regular";
            font-size : 20px;
            font-weight: bold;
            line-height : 30px;
            letter-spacing : 0.2px;
            color : #a3a8aa;
        }
        .<?php echo $ab_uuid; ?> .ab-person-experience-container {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            font-style: italic;
            line-height : 1px;
            letter-spacing : 0.18px;
            color : #a3a8aa;
        }
        .<?php echo $ab_uuid; ?> .ab-person-paragraph-container p {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 24px;
            letter-spacing : 0.18px;
            color : #a3a8aa;
        }
        .showcase-person .showcase-img {
            min-height: 30.75rem;
            background-size: cover;
        }
    </style>
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-9 showcase-text">
                <div class="ab-person-top-text-container pt-5">
                    <?php echo $ab_person_top_text; ?>
                </div>
                <div class="ab-person-name-container ms-5 mt-5">
                    <h2><?php echo $ab_person_name; ?></h2>
                </div>
                <div class="ab-person-title-container ms-5">
                    <h3><?php echo $ab_person_title; ?></h3>
                </div>
                <div class="ab-person-experience-container ms-5 mb-5">
                    <?php echo $ab_person_experience; ?>
                </div>
                <div class="ab-person-paragraph-container ms-5">
                    <p><?php echo $ab_person_paragraph; ?></p>
                </div>
            </div>
            <div class="col-3 showcase-img" style="background-image: url('<?php echo esc_url( wp_get_attachment_url( $ab_person_profile_image_id ) ); ?>');">
            </div>
        </div>
    </div>
</section>