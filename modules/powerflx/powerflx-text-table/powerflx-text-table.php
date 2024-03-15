<?php
/**
 * Module Name: PowerFLX Text With Table
 * Description: Template for PowerFLX Text With Table Module
 */
$top_text = get_sub_field( 'top_text' ) ? get_sub_field( 'top_text' ) : '';
$header_text = get_sub_field( 'header_text' ) ? get_sub_field( 'header_text' ) : '';
$top_paragraph = get_sub_field( 'top_paragraph' ) ? get_sub_field( 'top_paragraph' ) : '';
$table_header_text = get_sub_field( 'table_header_text' ) ? get_sub_field( 'table_header_text' ) : '';
$footnotes = get_sub_field( 'footnotes' ) ? get_sub_field( 'footnotes' ) : '';
$bottom_link = get_sub_field( 'bottom_link' ) ? get_sub_field( 'bottom_link' ) : '';
?>
 
<section id="section_powerflx-text-table" class="mt-5">
<style>
    #section_powerflx-text-table {
        background: rgba(163, 168, 170, 0.2);
    }
    .pflx-text-table-top-text {
        border: 0;
        color: #a3a8aa;
        height: 1.5em;
        line-height: 1em;
        margin-left: -80px;
        outline: 0;
        position: relative;
        text-align: left;
    }
    .pflx-text-table-top-text::before {
        background: rgba(163, 168, 170, 0.5);
        content: '';
        height: 1px;
        left: 0;
        position: absolute;
        top: 50%;
        width: 3%;
        z-index: 1;
    }
    .pflx-text-table-top-text::after {
        background-color: rgba(163, 168, 170, 0);
        color: #a3a8aa;
        content: attr(data-content);
        display: inline-block;
        letter-spacing: 7.5px;
        padding-left: 80px;
        position: relative;
        line-height: 25.7px;
        text-transform: uppercase;
        z-index: 0;
        font-family : "eurostile", sans-serif;
        font-size : 12px;
        color : rgb(163, 168, 170);
    }
    .pflx-text-table-header-text {
        font-family : "Eurostile-Bold";
        font-size : 35px;
        line-height : 36px;
        letter-spacing : 0.35px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .pflx-text-table-top-paragraph {
        font-family : "MyriadPro-Regular";
        font-size : 18px;
        line-height : 22px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .pflx-text-table-table-header-text {
        font-family : "Eurostile-Bold";
        font-size: clamp(1.3125rem, -0.0337rem + 1.7949vw, 2.1875rem);
        line-height : 22px;
        letter-spacing : 0.35px;
        color : #003A70;
        color : rgb(0, 58, 112);
    }
    .pflx-text-table-table .table tr th {
        color: #fff;
        background: rgb(0, 58, 112);
        font-family : "MyriadPro-Regular";
        font-size: clamp(0.625rem, -0.1442rem + 1.0256vw, 1.125rem);
        font-weight: 600;
        letter-spacing: 1px;
        line-height : clamp(0.75rem, 0.438rem + 0.833vw, 1.188rem);
        padding: clamp(1rem, -0.982rem + 2.619vw, 1.375rem) clamp(1rem, -1.429rem + 3.81vw, 2rem) clamp(0rem, -0.357rem + 0.952vw, 0.5rem);
    }
    .pflx-text-table-table .table.table-two tr th.header-top {
        font-family : "eurostile", sans-serif;
        font-weight : bold;
        font-size: clamp(0.4375rem, -0.1394rem + 0.7692vw, 0.8125rem);
        line-height : clamp(0.75rem, 0.438rem + 0.833vw, 1.188rem);
        letter-spacing : clamp(0.063rem, -0.161rem + 0.595vw, 0.375rem);
        text-align: center;
        text-transform : uppercase;
        color : #FFFFFF;
        color : rgb(255, 255, 255);
        padding: clamp(0.563rem, 0.339rem + 0.595vw, 0.875rem) 0 0 0;
    }
    .pflx-text-table-table .table.table-two tr th {
        padding: clamp(0rem, -0.402rem + 1.071vw, 0.563rem) 0 clamp(0rem, -0.357rem + 0.952vw, 0.5rem) 2em;
    }
    .pflx-text-table-table .table tr td {
        background: rgba(163, 168, 170, 0.5);
        font-family : "MyriadPro-Regular";
        font-weight : bold;
        font-size: clamp(0.625rem, -0.1442rem + 1.0256vw, 1.125rem);
        line-height : clamp(0.75rem, 0.438rem + 0.833vw, 1.188rem);
        color : #53565A;
        color : rgb(83, 86, 90);
        padding: 0.5em clamp(1rem, -1.429rem + 3.81vw, 2rem);
        border: none;
    }
    .pflx-text-table-table .table tr,
    .pflx-text-table-table .table tr th {
        border: none;
    }
    .pflx-text-table-footnotes p {
        font-family : "MyriadPro-Italic";
        font-size : clamp(0.625rem, 0.268rem + 0.952vw, 1.125rem);
        line-height : 24px;
        color : #A3A8AA;
        color : rgb(163, 168, 170);
        padding: 0;
    }
    .pflx-text-table-bottom-link a { 
        font-family : "MyriadPro-Italic";
        font-size : clamp(0.625rem, 0.268rem + 0.952vw, 1.125rem);
        line-height : 25px;
        color : #53565A;
        color : rgb(83, 86, 90);
    }
    .pflx-text-table-bottom-link a::after{
        content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-dark.png');
        display: inline-block;
        width: 40px;
        height: 0;
        margin-left: 1em;
    }
</style> 
    <div class="container-fluid ">
        <div class="row g-0">
            <div class="col-12 p-5">
                <div class="pflx-text-table-top-text" data-content="<?php echo $top_text; ?>"></div>
                <div class="pflx-text-table-header-text mt-4"><?php echo $header_text; ?></div>
                <div class="pflx-text-table-top-paragraph mt-5"><?php echo $top_paragraph; ?></div>
                <div class="row">
                    <div class="pflx-text-table-table py-md-5 py-sm-0 col-md-5 col-sm-10">
                        <div class=" table-responsive">
                            <div class="pflx-text-table-table-header-text pt-sm-5"><?php echo $table_header_text; ?></div>
                            <table class="table table-bordered table-hover">
                                <thead class="thead-blue">
                                    <tr>
                                        <th scope="col">Model</th>
                                        <th scope="col">Net Output<br/>(kw)*</th>
                                        <th scope="col">Net Heat Rate<br/>(Btu/kWh, LHV)*</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>PC</td>
                                        <td>97,684</td>
                                        <td>8,760</td>
                                    </tr>
                                    <tr>
                                        <td>PD</td>
                                        <td>90,882</td>
                                        <td>8,425</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="pflx-text-table-table py-5 py-md-5 py-sm-0 col-md-3 col-sm-5">
                        <div class=" table-responsive">
                            <div class="pflx-text-table-table-header-text pt-md-5 pt-sm-0">&nbsp;</div>
                            <table class="table table-bordered table-hover table-two">
                                <thead class="thead-blue">
                                    <tr>
                                        <th colspan="3" class="header-top">Top of Stack Emissions</th>
                                    </tr>
                                    <tr>
                                        <th scope="col">NOx</th>
                                        <th scope="col">CO</th>
                                        <th scope="col">Ammonia Slip</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>2.5</td>
                                        <td>2.5</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>2.5</td>
                                        <td>2.5</td>
                                        <td>10</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="pflx-text-table-footnotes col-5"><p><?php echo $footnotes; ?></p></div>
                <div class="pflx-text-table-bottom-link">
                    <a class="pflx-bottom-link" href="<?php echo $bottom_link['url']; ?>" target="<?php echo $bottom_link['target']; ?>"><?php echo $bottom_link['title'];?></a>
                </div>
            </div>
        </div>
    </div>
</section>