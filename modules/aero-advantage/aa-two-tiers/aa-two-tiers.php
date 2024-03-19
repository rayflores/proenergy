<?php
/**
 * Module Name: AeroAdvantage Two Tiers
 * Description: Template for AeroAdvantage Two Tiers Module.
 */
$aa_two_tiers_top_text = get_sub_field('aa_two_tiers_top_text') ? get_sub_field('aa_two_tiers_top_text') : '';
$aa_two_tiers_header = get_sub_field('aa_two_tiers_header') ? get_sub_field('aa_two_tiers_header') : '';
$aa_two_tiers_paragraph = get_sub_field('aa_two_tiers_paragraph') ? get_sub_field('aa_two_tiers_paragraph') : '';
?>
<section id="section_aa_all-text">
<style>
    .aa-tt-top-text-container::before {
            background: #a3a8aa;
            content: '';
            display: inline-block;
            height: 1px;
            left: 0;
            position: relative;
            vertical-align: middle;
            width: 52px;
            z-index: 1;
        }
        .aa-tt-top-text-container::after {
            color: #a3a8aa;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 0.5em;
            padding-left: 28px;
            position: relative;
            line-height: 1.5em;
            text-transform: uppercase;
            z-index: 0;
            font-family: "eurostile", sans-serif;
            font-size: clamp(0.875rem, 0.696rem + 0.476vw, 1.125rem);
            font-weight: 700;
        }
    .aa_two-tiers-container h2 {
        font-family : "eurostile", sans-serif;
        font-size: clamp(1.75rem, 0.902rem + 2.262vw, 2.938rem);
        font-weight: 800;
        letter-spacing: 0;
        line-height: clamp(1.75rem, 0.991rem + 2.024vw, 2.813rem);
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .aa_tt-link {
        color : #53565A;
        font-family : "eurostile", sans-serif;
        font-size : 18px;
        font-weight: 700;
        line-height : 28px;
        letter-spacing : 0.01em;
    }
    .aa_two-tiers-paragraph-container p {
        font-family : "myriad-pro", sans-serif;
        font-size: clamp(1rem, 0.911rem + 0.238vw, 1.125rem);
        font-weight: 400;
        line-height: clamp(1.25rem, 1.071rem + 0.476vw, 1.5rem);
        color : #53565A;
        margin-top: 1.25em;
        padding-right: 0;
    }
    .aa-two-tiers-link-container a {
        color : #aca8aa;
        font-family : "myriad-pro", sans-serif;
        font-size : 1.125em;
        font-style: italic;
        line-height : 28px;
        letter-spacing : 0.01em;
    }
    .aa-two-tiers-link-container a::after {
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
    th.text-grey {
        font-family: "eurostile", sans-serif;
        font-size: 18px;
        font-weight: 700;
        color: #A3A8AA;
        letter-spacing: 0.05em;
        padding-left: 60px!important;
    }
    @media screen and (max-width: 768px) {
        .aa-tt-top-text-container::before {
            width: 20px;
        }
        .aa-tt-top-text-container::after {
            padding-left: 20px;
        }
        th.text-dark.ps-lg-5 {
            vertical-align: top;
        }
        th.text-grey {
            padding-left: 20px !important;
        
        }
    }
</style>
    <div class="container-fluid p-0">
        <div class="row g-0">
        <div class="aa-tt-top-text-container pt-5" data-content="<?php echo $aa_two_tiers_top_text; ?>"></div>
            <div class="aa_two-tiers-wrapper col-12 px-2 px-lg-5 pt-5 pb-4">
                <div class="aa_two-tiers-container col-12 pb-5 ps-3">
                    <?php
                    if ( '' !== $aa_two_tiers_header ) : ?>
                    <h2 class="aa_two-tiers-header ps-3"><?php echo $aa_two_tiers_header; ?></h2>
                    <?php
                    endif;
                    if ( '' !== $aa_two_tiers_paragraph ) : ?>
                    <div class="aa_two-tiers-paragraph-container col-12 ps-3">
                        <p><?php echo $aa_two_tiers_paragraph; ?></p>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="row g-0">
            <div class="col-12 px-5">
                <div class="aa_two-tiers-table table-responsive">
                    <table class="table align-middle text-light table-bordered border-dark border-opacity-25">
                        <thead>
                            <tr>
                                <th rowspan="2" class="table-active align-middle text-center">
                                    Tier 01
                                </th>
                                <th class="table-active text-grey">
                                    TURBINE
                                </th>
                                <th class="table-active text-grey">
                                    PACKAGE
                                </th>
                            </tr>
                            <tr>
                                <th class="text-dark ps-lg-5">
                                    <ul>
                                        <li>Check valves</li>
                                        <li>Thermocouples ignition systems</li>
                                        <li>Accelerometers</li>
                                        <li>Actuators</li>
                                        <li>Cables</li>
                                        <li>Pumps</li>
                                    </ul>
                                </th>
                                <th class="text-dark ps-lg-5">
                                    <ul>
                                        <li>Vibration system parts</li>
                                        <li>Generator spares</li>
                                        <li>Off-engine cables</li>
                                        <li>Generator lube oil systems</li>
                                        <li>Fuel systems</li>
                                        <li>Turbine lube oil systems</li>
                                    </ul>
                                </th>
                            </tr>
                            <tr>
                                <th rowspan="2" class="table-active align-middle text-center text-dark" style="width: 25%">
                                    Tier 02
                                </th>
                                <th class="table-active text-grey">
                                    SPARES
                                </th>
                                <th class="table-active text-grey">
                                    CUSTOM
                                </th>
                            </tr>
                            <tr>
                                <th class="text-dark ps-lg-5">
                                    <ul>
                                        <li>Everything in Tier 1</li>
                                        <li>HPT Stage 1 blades and nozzles</li>
                                        <li>HPT Stage 2 blades and nozzles</li>
                                        <li>HPT Stage 1 and 2 shrouds</li>
                                        <li>LPT Stage 1 blades and nozzles</li>
                                    </ul>
                                </th>
                                <th class="text-dark ps-lg-5">
                                    <ul>
                                        <li>Controls</li>
                                        <li>Starter motors</li>
                                        <li>Valves</li>
                                        <li>Valve drivers</li>
                                        <li>Reduction gear boxes</li>
                                    </ul>
                                </th>
                            </tr>
                    </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>