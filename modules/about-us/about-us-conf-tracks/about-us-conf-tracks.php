<?php 
/**
 * Module Name: About Us Conference Tracks
 * Description: Template for About Us Conference Tracks Module.
 */
$ab_conf_tracks_header = get_sub_field( 'ab_conf_tracks_header' ) ? get_sub_field( 'ab_conf_tracks_header' ) : '';
$ab_conf_tracks_paragraph = get_sub_field( 'ab_conf_tracks_paragraph' ) ? get_sub_field( 'ab_conf_tracks_paragraph' ) : '';
?>
<section id="section_ab-conf-tracks" class="p-0 mb-5">
    <style>
        .ab-conf-tracks-header-container {
            font-family: "Eurostile-Bold";
            font-size: 35px;
            line-height: 36px;
            letter-spacing: 1px;
            color: #53565A;
        }
        .ab-conf-tracks-paragraph {
            font-family: "MyriadPro-Regular";
            font-size: 18px;
            line-height: 40px;
            color: #53565A;
        }
        table.track-table thead tr td:nth-child(3), 
        table.track-table tbody tr td:nth-child(3) {
            background-color: rgba(163, 168, 170, 0.2);
        }
        table.track-table thead tr td.heading .track {
            font-family: "Eurostile-Bold";
            font-size: 14px;
            line-height: 36px;
            letter-spacing: 7px;
            text-transform: uppercase;
            color: #A3A8AA;
        }
        table.track-table thead tr td.heading .room {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 24px;
            color : #53565A;
        }
        table.track-table thead tr td.heading .class {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            font-weight: 600;
            line-height : 20px;
            color : #53565A;
        }
    </style>    
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-12 ps-5 pt-5 mt-5">
                <div class="ab-conf-tracks-header-container ms-5 ps-3">
                    <?php echo $ab_conf_tracks_header; ?>
                </div>
            </div>
            <div class="col-12 ps-5 pb-4 mb-4">
                <div class="ab-conf-tracks-paragraph ms-5 ps-3">
                    <?php echo $ab_conf_tracks_paragraph; ?>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 px-5">
                <table class="table border-2 table-bordered table-responsive track-table">
                    <thead>
                        <tr>
                            <td scope="col" class="heading" style="width:12%;">
                            </td>
                            <td scope="col" class="heading col-3">
                                <span class="track">Track 01</span><br/>
                                <span class="room">Mognolia 1 & 2</span><br/><br/>
                                <span class="class">ADAPTING<br/>in the Energy Transition</span>
                            </td>
                            <td scope="col" class="heading col-3">
                                <span class="track">Track 02</span><br/>
                                <span class="room">Mognolia 3</span><br/><br/>
                                <span class="class">OPERATING<br/>for Peak Performance</span>                                
                            </td>
                            <td scope="col" class="heading col-3">
                                <span class="track">Track 03</span><br/>
                                <span class="room">Mognolia 4</span><br/><br/>
                                <span class="class">MODERNIZING<br/>with High Technology</span>                                
                            </td>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if ( have_rows( 'ab_conf_track_row' ) ) :
                            while ( have_rows( 'ab_conf_track_row' ) ) : the_row();
                            $track_time = get_sub_field( 'track_time' ) ? get_sub_field( 'track_time' ) : '';
                            $track_1_text = get_sub_field( 'track_1_text' ) ? get_sub_field( 'track_1_text' ) : '';
                            $track_2_text = get_sub_field( 'track_2_text' ) ? get_sub_field( 'track_2_text' ) : '';
                            $track_3_text = get_sub_field( 'track_3_text' ) ? get_sub_field( 'track_3_text' ) : '';
                            ?>
                            <tr>
                                <td class="ps-3 pt-4 time"><?php echo $track_time; ?></td>
                                <td class="ps-3 pt-4"><?php echo $track_1_text; ?></td>
                                <td class="ps-3 pt-4"><?php echo $track_2_text; ?></td>
                                <td class="ps-3 pt-4"><?php echo $track_3_text; ?></td>
                            </tr>
                            <?php 
                            endwhile;
                        endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>