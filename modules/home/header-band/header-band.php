<?php
/** Module Name: Header Band
 * Description: Header Band module for ProEnergy
 */
$section_bg = get_sub_field('hb_background_color') !== '' ? get_sub_field('hb_background_color') : '';
$headline = get_sub_field('hb_header_text') !== '' ? get_sub_field('hb_header_text') : '';
$headline_color = get_sub_field('hb_header_color') !== '' ? get_sub_field('hb_header_color') : '#FFFFFF';
$paragraph = get_sub_field('hb_paragraph') !== '' ? get_sub_field('hb_paragraph') : '';

?>
<section id="section_header-band" class="pt-5">
    <style>
        #section_header-band>.container-fluid{
            background-color: <?php echo $section_bg; ?>;
        }
        .container-fluid {
            padding: 0;
        }
        .hb-headline {
            color: <?php echo $headline_color; ?>;
            font-family: 'eurostile', sans-serif;
            font-size: 2.92em;
            font-weight: 800;
            line-height: 0.75em;
            text-align: left;
            padding-top: 2em;
            padding-left: 80px;
        }
        .hb-headline::after{
            content: url("<?php echo get_stylesheet_directory_uri(); ?>/images/border-underline-white.png");
            display: block;
            width: 100%;
        }
        .hb-paragraph {
            color: #53565A;
            font-family: 'eurostile', sans-serif;
            font-size: 1.25em;
            line-height: 1.5em;
            text-align: center;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .hb-paragraph a {
            color: #53565A;
            font-family: 'Eurostile';
            font-size: 1.25em;
            line-height: 1.5em;
            text-align: center;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .hb-paragraph a:hover {
            color: #53565A;
            font-family: 'Eurostile';
            font-size: 1.25em;
            line-height: 1.5em;
            text-align: center;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .hb-paragraph a:active {
            color: #53565A;
            font-family: 'Eurostile';
            font-size: 1.25em;
            line-height: 1.5em;
            text-align: center;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .hb-paragraph a:visited {
            color: #53565A;
            font-family: 'Eurostile';
            font-size: 1.25em;
            line-height: 1.5em;
            text-align: center;
            padding-top: 1em;
            padding-bottom: 2em;
        }
        .hb-paragraph a.bir-nb-link::after{
            content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
            display: inline-block;
            width: 40px;
            height: 0;
            margin-left: 1em;
        }
    </style>
    <div class="container-fluid">
        <div class="row g-0 align-items-center">
            <div class="col-12 pt-5 pb-5 mt-4 mb-4 ps-2">
                <h2 class="hb-headline pt-5 pb-5 mt-5 mb-5 ms-5 ps-4"><?php echo $headline; ?></h2>
                <?php if ( $paragraph !== '' ) : ?>
                <p class="hb-paragraph"><?php echo $paragraph; ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>