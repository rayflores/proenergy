<?php

/**
 * Template Name: Page Locations
 * Description: Page template with no Sidebar.
 *
 */

get_header();

the_post();
$featured_image_id = get_post_thumbnail_id();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>

    <section id="section_loc-header-small-wrapper" class="small masthead" style="background: url('<?php echo esc_url(wp_get_attachment_url($featured_image_id)); ?>') no-repeat center center;background-size: cover;">
        <style>
            .masthead.small {
                padding-top: 12rem;
                padding-bottom: 12rem;
                position: relative;
            }

            .masthead .overlay {
                position: absolute;
                background-color: #212529;
                height: 100%;
                width: 100%;
                top: 0;
                left: 0;
                opacity: .3;
            }
        </style>
        <div class="overlay"></div>
    </section>

    <section id="section_breadcrumbs" class="pt-5 ps-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 ">
                    <?php get_the_breadcrumbs(); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="section_loc_all-text">
        <style>
            .loc_container h2 {
                font-family: "Eurostile-Bold";
                font-size: 35px;
                line-height: 36px;
                letter-spacing: 0.35px;
                color: #53565A;
                color: rgb(83, 86, 90);
            }

            .loc_at-link {
                color: #53565A;
                font-family: "Eurostile-Bold";
                font-size: 18px;
                line-height: 28px;
                letter-spacing: 0.18px;
            }

            .loc_paragraph-container p {
                font-family: "MyriadPro-Regular";
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                color: rgb(83, 86, 90);
                margin-top: 1.25em;
                padding-right: 0;
            }
            .loc-link {
                font-family: "MyriadPro-Italic";
                font-size: 18px;
                line-height: 25px;
                color: rgba(163, 168, 170, 0.75);
                text-decoration: none;
            }
            .loc-link::after {
                content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-grey.svg');
                display: inline-block;
                width: 40px;
                height: 0;
                margin-left: 1em;
            }
        </style>
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="loc_wrapper col-12 px-5 pt-3 pb-4">
                    <div class="loc_container col-12 pb-4 ps-3">
                        <h2 class="loc_header">Where to Find PROENERGY</h2>
                        <div class="loc_paragraph-container col-12">
                            <p>PROENERGY provides fast-start, dispatchable power solutions around the world. We support the <br /> global LM fleet through our strategic service facilities, listed below.</p>
                        </div>
                    </div>
                    <div class="loc-link-container ps-3">
                        <a class="loc-link" href="#" target=""> Visit the Infrastructure page to learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_loc-wrapper" class="p-0 loc-1" style="background-color: rgba(163,168,170,0.2)">
        <style>
            .loc-1 .loc-top-text-container::before {
                background: #53565A;
                content: '';
                display: inline-block;
                height: 1px;
                left: 0;
                position: relative;
                top: 50%;
                width: 45px;
                z-index: 1;
            }

            .loc-1 .loc-top-text-container::after {
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
                font-family: "Eurostile-Normal";
                font-size: 12px;
                color: #53565A
            }

            .loc-1 .loc-header-container h2 {
                font-family: "Eurostile-Bold";
                font-size: 35px;
                line-height: 36px;
                letter-spacing: 0.35px;
                color: #53565A;
            }

            .loc-1 .loc-paragraph-container p {
                font-family: "MyriadPro-Regular";
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                margin-top: 1.25em;
                margin-bottom: 3em;
                padding-right: 0;
            }

            .loc-1 .loc-bullet-point-heading-container,
            .loc-1 .loc-link-container a {
                color: #53565A;
            }

            .loc-1 .loc-bullet-point-heading-container h1 {
                font-family: "Eurostile-Bold";
                font-size: 45px;
                line-height: 54.85px;
                text-transform: uppercase;
                color: #53565A;
            }

            .loc-1 .loc-bullet-point-description {
                font-family: "Eurostile-Normal";
                font-size: 24px;
                line-height: 31.1px;
                letter-spacing: 0.24px;
                color: #53565A;
            }
        </style>
        <div class="container-fluid p-0">
            <div class="loc-top-text-container pt-5" data-content="united states"></div>
            <div class="pt-4 ps-5 pe-5 pb-5">
                <div class="row g-0">
                    <div class="col-6 ps-3">
                        <div class="loc-header-container pt-3">
                            <h2>Missouri</h2>
                        </div>
                        <div class="loc-paragraph-container pt-3">
                            <p><b>Corporate Office</b><br/>Level-IV Aero Depot, Manufacturing, and Package Fabrication</p>
                        </div>
                        <div class="loc-paragraph-container">
                            <p>2001 PROENERGY Boulevard<br/>Sedalia, Missouri 65301</p>
                        </div>
                        <div class="loc-paragraph-container contact-numbers">
                            <p><span>T</span> <a href="tel:660.829.5100">660.829.5100</a><br/><span>F</span> 660.829.1160</p>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="loc-header-container pt-3">
                            <h2>Texas</h2>
                        </div>
                        <div class="loc-paragraph-container pt-3">
                            <p><b>Satellite Office</b><br/>Level-II Aero Depot</p>
                        </div>
                        <div class="loc-paragraph-container">
                            <p>8310 McHard Road<br/>Houston, Texas 77053</p>
                        </div>
                        <div class="loc-paragraph-container contact-numbers">
                            <p><span>T</span> <a href="tel:660.829.5100">660.829.5100</a><br/><span>F</span> 660.829.1160</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_loc-wrapper" class="p-0 loc-2">
        <style>
            .loc-2 .loc-top-text-container::before {
                background: #53565A;
                content: '';
                display: inline-block;
                height: 1px;
                left: 0;
                position: relative;
                top: 50%;
                width: 45px;
                z-index: 1;
            }

            .loc-2 .loc-top-text-container::after {
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
                font-family: "Eurostile-Normal";
                font-size: 12px;
                color: #53565A
            }

            .loc-2 .loc-header-container h2 {
                font-family: "Eurostile-Bold";
                font-size: 35px;
                line-height: 36px;
                letter-spacing: 0.35px;
                color: #53565A;
            }

            .loc-2 .loc-paragraph-container p {
                font-family: "MyriadPro-Regular";
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                margin-top: 1.25em;
                margin-bottom: 3em;
                padding-right: 0;
            }

            .loc-2 .loc-bullet-point-heading-container,
            .loc-2 .loc-link-container a {
                color: #53565A;
            }

            .loc-2 .loc-bullet-point-heading-container h1 {
                font-family: "Eurostile-Bold";
                font-size: 45px;
                line-height: 54.85px;
                text-transform: uppercase;
                color: #53565A;
            }

            .loc-2 .loc-bullet-point-description {
                font-family: "Eurostile-Normal";
                font-size: 24px;
                line-height: 31.1px;
                letter-spacing: 0.24px;
                color: #53565A;
            }
        </style>
        <div class="container-fluid p-0">
            <div class="loc-top-text-container pt-5" data-content="argentina"></div>
            <div class="pt-4 ps-5 pe-5 pb-5">
                <div class="row g-0">
                    <div class="col-6 ps-3">
                        <div class="loc-header-container pt-3">
                            <h2>Buenos Aires</h2>
                        </div>
                        <div class="loc-paragraph-container pt-3">
                            <p><b>Level-II Field Services Shop</b><br/>PROENERGY Services de Argentina S.R.L</p>
                        </div>
                        <div class="loc-paragraph-container">
                            <p>PROENERGY Services de Argentina S.R.L.<br/>Ruta Panamericana Ramal Pilar Km. 43<br/>EDIFICIO SKYGLASS I, Ayres Vila Piso 2, Of. 313<br/>(1669) Del Viso, Pcia. de Buenos Aires Argentina</p>
                        </div>
                        <div class="loc-paragraph-container contact-numbers">
                            <p><span>O</span> <a href="tel:54.2320.65.9100">54.2320.65.9100</a><br/><span>F</span> 54.2320.65.9100 x110</p>
                        </div>
                        <div class="loc-paragraph-container contact-email">
                            <p><a href="mailto:argentina@proenergyservices.com">argentina@proenergyservices.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();
