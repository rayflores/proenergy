<?php
/**
 * Module Name: PowerFLX Slant Right
 * Description: Template for PowerFLX Slant Right Module.
 */
$rs_top_text = get_sub_field( 'rs_top_text' ) ? get_sub_field( 'rs_top_text' ) : '';
$rs_header_text = get_sub_field( 'rs_header_text' ) ? get_sub_field( 'rs_header_text' ) : '';
$rs_paragraph = get_sub_field( 'rs_paragraph' ) ? get_sub_field( 'rs_paragraph' ) : '';
$rs_bottom_link = get_sub_field( 'rs_bottom_link' ) ? get_sub_field( 'rs_bottom_link' ) : '';
$rs_image_id = get_sub_field( 'right_side_image' ) ? get_sub_field( 'right_side_image' ) : '';
$rs_image_srcset = get_image_srcset( $rs_image_id );
?>
<section id="powerflx_slant_right" class="p-0">
    <style>
        #powerflx_slant_right {
            position: relative;
            min-height: 35rem;
        }
        .showcase-img {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            max-height: 20rem;
        }
        .powerflx_slant_right_text_top::before{
            background: rgba(163, 168, 170, 0.5);
            content: '';
            display: inline-block;
            height: 1px;
            left: -12px;
            position: relative;
            top: 50%;
            width: 3%;
            z-index: 1;
        }
        .powerflx_slant_right_text_top::after {
            background-color: rgba(163, 168, 170, 0);
            color: #a3a8aa;
            content: attr(data-content);
            display: inline-block;
            letter-spacing: 7.5px;
            padding-left: 22px;
            position: relative;
            line-height: 25.7px;
            text-transform: uppercase;
            z-index: 0;
            font-family: "eurostile", sans-serif;
            font-size: 12px;
            color: rgb(163, 168, 170);
        }
        .powerflx_slant_right_text_header {
            font-family : "Eurostile-Bold";
            font-size : 35px;
            line-height : 36px;
            letter-spacing : 0.35px;
            color : #53565A;
            color : rgb(83, 86, 90);
        }
        .powerflx_slant_right_text_paragraph {
            font-family : "MyriadPro-Regular";
            font-size : 18px;
            line-height : 22px;
            color : #53565A;
            color : rgb(83, 86, 90);
        }
        .powerflx_slant_right_bottom_link {
            background: linear-gradient(-75deg, transparent 30%, #862633 25%);
            margin-left: -20px;
        }
        .bottom-link {
            font-family: "MyriadPro-Italic";
            font-size: 18px;
            line-height: 25px;
            color: #FFFFFF;
            color: rgb(255, 255, 255);
        }
        .bottom-link::after {
            content: url(<?php echo get_template_directory_uri() . '/images/right-arrow-white.png'; ?>);
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em 
        }
        .left-col {
            background: linear-gradient(-75deg, transparent 33%, #FFF 25%);
            padding: 0;
            position: absolute;
            left: 0;
            z-index: 1;
            min-height: 35rem;
        }
        .right-col {
            padding: 0;
            position: absolute;
            right: 0;
            z-index: 0;
            height: 20rem;
        }
        .right-col img {
           position: absolute;
           max-height: 35rem;
           right: 0;
        }
    </style>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10 left-col pt-5">
                <div class="powerflx_slant_right_text">
                    <div class="powerflx_slant_right_text_top" data-content="<?php echo $rs_top_text; ?>"></div>
                    <div class="powerflx_slant_right_text_header ps-5 pb-5 mt-5">
                        <?php echo $rs_header_text; ?>
                    </div>
                    <div class="powerflx_slant_right_text_paragraph ps-5 mb-5 pb-5 col-8 pe-4">
                        <?php echo $rs_paragraph; ?>
                    </div>
                    <div class="powerflx_slant_right_bottom_link ps-5 py-4">
                        <a href="<?php echo $rs_bottom_link['url']; ?>" class="bottom-link ps-3"><?php echo $rs_bottom_link['title']; ?></a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-10 right-col">
                <div class="powerflx_slant_right_image showcase-img">
                    <img src="<?php echo esc_url( wp_get_attachment_url($rs_image_id) ); ?>');" srcset=
                "<?php echo $rs_image_srcset; ?>" />
                </div>
            </div>
        </div>
    </div>
</section>