<?php
/**
 * Module Name: About Us Conference Session
 * Description: Template for About Us Conference Session Module.
 */
$ab_conf_session_header = get_sub_field( 'ab_conf_session_header' ) ? get_sub_field( 'ab_conf_session_header' ) : '';
$ab_conf_session_paragraph = get_sub_field( 'ab_conf_session_paragraph' ) ? get_sub_field( 'ab_conf_session_paragraph' ) : '';
?>
<section id="section_ab-conf-session" class="p-0" style="background-color: rgba(163,168,170, 0.2);">
    <style>
        .ab-conf-top-part-text-container::before {
            background: linear-gradient(90deg, rgba(163,168,170) 90%, transparent 90%);
            content: '';
            display: inline-block;
            height: 1px;
            padding-right: 55px;
            position: relative;
            vertical-align: middle;
        }
        .ab-conf-top-part-text-container {
            color: #a3a8aa;
            content: '';
            letter-spacing: 7.5px;
            position: relative;
            line-height: 36px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "Eurostile-Bold";
            font-size: 14px;
        }
        .ab-conf-session-header-container {
            font-family: "Eurostile-Bold";
            font-size: 35px;
            line-height: 36px;
            letter-spacing: 1px;
            color: #53565A;
        }
        .ab-conf-session-paragraph {
            font-family: "MyriadPro-Regular";
            font-size: 18px;
            line-height: 40px;
            color: #53565A;
        }
        .ab-conf-session-part-day-container {
            font-family: "Eurostile-Bold";
            font-size: 35px;
            line-height: 36px;
            letter-spacing: 1px;
            color: #862633;
        }
    </style>    
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 ps-5 pt-5 mt-5">
                <div class="ab-conf-session-header-container ms-5 ps-3">
                    <?php echo $ab_conf_session_header; ?>
                </div>
            </div>
            <div class="col-12 ps-5 pb-4 mb-4">
                <div class="ab-conf-session-paragraph ms-5 ps-3">
                    <?php echo $ab_conf_session_paragraph; ?>
                </div>
            </div>
        </div>
        <?php 
        if ( have_rows( 'ab_conf_session_parts' ) ) :
            while ( have_rows( 'ab_conf_session_parts' ) ) : the_row();
                $top_part_text = get_sub_field( 'top_part_text' ) ? get_sub_field( 'top_part_text' ) : '';
                $part_day = get_sub_field( 'part_day' ) ? get_sub_field( 'part_day' ) : '';
                ?>
                <div class="row g-0">
                    <div class="col-12 ps-5">
                        <div class="ab-conf-top-part-text-container mb-4">
                            <?php echo $top_part_text; ?>
                        </div>
                        <div class="ab-conf-session-part-day-container ms-5 ps-3">
                            <?php echo $part_day; ?>
                        </div>
                    </div>
                </div>
                    <?php 
                    if ( have_rows( 'part_day_itinerary' ) ) :
                        while( have_rows( 'part_day_itinerary' ) ) : the_row();
                        $day_itinerary_time = get_sub_field( 'day_itinerary_time' ) ? get_sub_field( 'day_itinerary_time' ) : '';
                        ?>
                        <div class="row g-0">
                            <div class="day-itinerary-details-container col-12 p-5 pt-3 ms-5 d-flex">
                               <div class="col-2 ps-3">
                                    <div class="ab-conf-session-day-itinerary-time-container">
                                        <?php echo $day_itinerary_time; ?>
                                    </div>
                                </div>
                                <div class="col-10 border-start border-2 ps-5">
                                    <div class="ab-conf-session-day-itinerary-details-container">
                                        <?php 
                                        $details_text = get_sub_field( 'day_itinerary_details' ) ? get_sub_field( 'day_itinerary_details' ) : '';
                                        if ( have_rows( 'day_itinerary_details' ) ) :
                                            $details_count = count( $details_text );
                                            while( have_rows( 'day_itinerary_details' ) ) : the_row(); 
                                            $index = get_row_index();
                                            $itinerary_details_text = get_sub_field( 'itinerary_details_text' ) ? get_sub_field( 'itinerary_details_text' ) : '';
                                            $padding_bottom = $index === $details_count ? 'pb-0' : 'pb-5';
                                            ?>
                                            <div class="row g-0">
                                                <div class="col-12 <?php echo $padding_bottom; ?>">
                                                    <div class="ab-conf-session-day-itinerary-details-text-container">
                                                        <?php echo $itinerary_details_text; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            endwhile;
                                        endif; ?>
                                    </div>
                                </div>                               
                            </div>
                        </div>
                        <?php
                        endwhile;
                    endif;
                endwhile;
            endif; ?>
        </div>
    </div>
</section>