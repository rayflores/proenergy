<?php
/**
 * Module Name: About Us Conference Itinerary
 * Description: Template for About Us Conference Itinerary Module.
 */
$ab_conf_itinerary_label = get_sub_field( 'ab_conf_itinerary_label' ) ? get_sub_field( 'ab_conf_itinerary_label' ) : '';
$ab_conf_itinerary_day = get_sub_field( 'ab_conf_itinerary_day' ) ? get_sub_field( 'ab_conf_itinerary_day' ) : '';
$ab_conf_itinerary_footnotes = get_sub_field( 'ab_conf_itinerary_footnotes' ) ? get_sub_field( 'ab_conf_itinerary_footnotes' ) : '';
?>
<section id="section_ab-conf-itinerary" class="p-0">
    <style>
        .ab-conf-itinerary-label-container::before {
        background: linear-gradient(90deg, rgba(163,168,170) 90%, transparent 90%);
        content: '';
        display: inline-block;
        height: 1px;
        padding-right: 55px;
        position: relative;
        vertical-align: middle;
    }
    .ab-conf-itinerary-label-container {
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
    .ab-conf-itinerary-day-container {
        color: #003A70;
        font-family: "Eurostile-Bold";
        font-size: 18px;
        line-height: 20px;
    }
    .ab-conf-itinerary-name-container {
        color: #53565A;
        font-family: "MyriadPro-Regular";
        font-size: 18px;
        line-height: 40px;
    }
    .ab-conf-itinerary-title-container {
        color: #53565A;
        font-family: "MyriadPro-Regular";
        font-size: 18px;
        line-height: 40px;
    }
    .ab-conf-itinerary-footnotes-container {
        color: #A3A8AA;
        font-family: "MyriadPro-Italic";
        font-size: 18px;
        line-height: 29px;
    }
    </style>    
    <div class="container-fluid p-0 pt-5">
        <div class="row g-0">
            <div class="col-12 ps-5">
                <div class="ab-conf-itinerary-label-container">
                    <?php echo $ab_conf_itinerary_label; ?>
                </div>
                <div class="ab-conf-itinerary-day-container ms-3 ps-5">
                    <?php echo $ab_conf_itinerary_day; ?>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-7 p-5 ms-5">
                <table class="table table-striped table-borderless ms-2">
                    <tbody>
                    <?php
                    if ( have_rows( 'ab_conf_itinerary_items' ) ) :
                        while ( have_rows( 'ab_conf_itinerary_items' ) ) : the_row();
                            $itinerary_item_name = get_sub_field( 'itinerary_item_name' ) ? get_sub_field( 'itinerary_item_name' ) : '';
                            $itinerary_item_time = get_sub_field( 'itinerary_item_time' ) ? get_sub_field( 'itinerary_item_time' ) : '';
                            ?>
                            <tr>
                                <td>
                                    <div class="ab-conf-itinerary-name-container">
                                        <?php echo $itinerary_item_name; ?>
                                    </div>
                                </td>
                                <td>
                                    <div class="ab-conf-itinerary-title-container">
                                        <?php echo $itinerary_item_time; ?>
                                    </div>
                                </td>
                            </tr>
                            <?php
                        endwhile;
                    endif; ?>
                    </tbody>
                </table>
                <?php
                if ( get_sub_field( 'ab_conf_itinerary_footnotes' ) ) : ?>
                    <div class="ab-conf-itinerary-footnotes-container py-5 ps-2">
                        <?php echo $ab_conf_itinerary_footnotes; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>