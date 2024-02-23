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
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="ab-conf-itinerary-label-container">
                    <?php echo $ab_conf_itinerary_label; ?>
                </div>
                <div class="ab-conf-itinerary-day-container">
                    <?php echo $ab_conf_itinerary_day; ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-borderless">
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
                <div class="ab-conf-itinerary-footnotes-container">
                    <?php echo $ab_conf_itinerary_footnotes; ?>
                </div>
            </div>
        </div>
    </div>
</section>