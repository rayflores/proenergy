<?php
/**
 * Template Name: Page Contact
 * Description: Page template with no Sidebar.
 *
 */

get_header();

the_post();
$featured_image_id = get_post_thumbnail_id();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>

	<section id="section_aa-header-small-wrapper" class="small masthead" style="background: url('<?php echo esc_url(wp_get_attachment_url($featured_image_id)); ?>') no-repeat center center;background-size: cover;">
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

	<section id="section_news_all-text">
		<style>
			.news_all-text-container h2 {
				font-family: "Eurostile-Bold";
				font-size: 35px;
				line-height: 36px;
				letter-spacing: 0.35px;
				color: #53565A;
				color: rgb(83, 86, 90);
			}

			.news_at-link {
				color: #53565A;
				font-family: "Eurostile-Bold";
				font-size: 18px;
				line-height: 28px;
				letter-spacing: 0.18px;
			}

			.news_all-text-paragraph-container p {
				font-family: "myriad-pro", sans-serif;
				font-size: 18px;
				line-height: 25px;
				color: #53565A;
				color: rgb(83, 86, 90);
				margin-top: 1.25em;
				padding-right: 0;
			}
		</style>
		<div class="container-fluid p-0">
			<div class="row g-0">
				<div class="news_all-text-wrapper col-12 px-5 pt-3 pb-4">
					<div class="news_all-text-container col-12 pb-5 ps-3">
						<h2 class="news_all-text-header">How To Contact PROENERGY</h2>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section id="section_contact_all-text" class="contact-1" style="background-color: rgba(163, 168, 170, 0.2);">
        <style>
            .contact-1 .contact_at-link {
                color: #53565A;
                font-family: "Eurostile-Bold";
                font-size: 18px;
                line-height: 28px;
                letter-spacing: 0.18px;
            }
            .contact-1 .contact_paragraph-container p {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                color: rgb(83, 86, 90);
                margin-top: 1.25em;
                padding-right: 0;
            }
            .contact-1 .contact-link {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                font-style: italic;
                font-style: italic;
                line-height: 25px;
                color: rgba(163, 168, 170, 0.75);
                text-decoration: none;
            }
            .contact-1 .contact-link::after {
                content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-grey.svg');
                display: inline-block;
                width: 40px;
                height: 0;
                margin-left: 1em;
            }
            .contact-1 .contact-top-text-container::before {
                background: #53565A;
                content: '';
                display: inline-block;
                height: 1px;
                left: 0;
                position: relative;
                top: 50%;
                width: 45px;
                vertical-align: top;
                z-index: 1;
            }
            .contact-1 .contact-top-text-container::after {
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
                color: #53565A
            }
        </style>
        <div class="container-fluid p-0">
            <div class="row g-0">
            <div class="contact-top-text-container pt-5" data-content="GENERAL INFORMATION"></div>
                <div class="contact_wrapper col-12 px-5 pt-3 pb-4">
                    <div class="contact_container col-12 pb-4 ps-3">
                        <div class="contact_paragraph-container col-12">
                            <p>If you'd like to get in touch with our corporate, Level-IV depot, and Level-II depot locations:</p>
                        </div>
                    </div>
                    <div class="contact-link-container ps-3">
                        <a class="contact-link" href="/locations" target="">Visit the Locations page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_contact_all-text" class="contact-2">
        <style>
            .contact-2 .contact_at-link {
                color: #53565A;
                font-family: "Eurostile-Bold";
                font-size: 18px;
                line-height: 28px;
                letter-spacing: 0.18px;
            }
            .contact-2 .contact_paragraph-container p {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                color: rgb(83, 86, 90);
                margin-top: 1.25em;
                padding-right: 0;
            }
            .contact-2 .contact-link {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                font-style: italic;
                line-height: 25px;
                color: rgba(163, 168, 170, 0.75);
                text-decoration: none;
            }
            .contact-2 .contact-link::after {
                content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-grey.svg');
                display: inline-block;
                width: 40px;
                height: 0;
                margin-left: 1em;
            }
            .contact-2 .contact-top-text-container::before {
                background: #53565A;
                content: '';
                display: inline-block;
                height: 1px;
                left: 0;
                position: relative;
                top: 50%;
                width: 45px;
                vertical-align: top;
                z-index: 1;
            }
            .contact-2 .contact-top-text-container::after {
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
                color: #53565A
            }
        </style>
        <div class="container-fluid p-0">
            <div class="row g-0">
            <div class="contact-top-text-container pt-5" data-content="SALES INQUIRIES"></div>
                <div class="contact_wrapper col-12 px-5 pt-3 pb-4">
                    <div class="contact_container col-12 pb-4 ps-3">
                        <div class="contact_paragraph-container col-12">
                            <p>If you have questions about a product or service, please call (660) 829.5100 or email <a href="mailto:sales@proenergyservices.com">sales@proenergyservices.com</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_contact_all-text" class="contact-3" style="background-color: rgba(163, 168, 170, 0.2);">
        <style>
            .contact-3 .contact_at-link {
                color: #53565A;
                font-family: "Eurostile-Bold";
                font-size: 18px;
                line-height: 28px;
                letter-spacing: 0.18px;
            }
            .contact-3 .contact_paragraph-container p {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                color: rgb(83, 86, 90);
                margin-top: 1.25em;
                padding-right: 0;
            }
            .contact-3 .contact-link {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                font-style: italic;
                line-height: 25px;
                color: rgba(163, 168, 170, 0.75);
                text-decoration: none;
            }
            .contact-3 .contact-link::after {
                content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-grey.svg');
                display: inline-block;
                width: 40px;
                height: 0;
                margin-left: 1em;
            }
            .contact-3 .contact-top-text-container::before {
                background: #53565A;
                content: '';
                display: inline-block;
                height: 1px;
                left: 0;
                position: relative;
                top: 50%;
                width: 45px;
                vertical-align: top;
                z-index: 1;
            }
            .contact-3 .contact-top-text-container::after {
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
                color: #53565A
            }
        </style>
        <div class="container-fluid p-0">
            <div class="row g-0">
            <div class="contact-top-text-container pt-5" data-content="Career opportunities"></div>
                <div class="contact_wrapper col-12 px-5 pt-3 pb-4">
                    <div class="contact_container col-12 pb-4 ps-3">
                        <div class="contact_paragraph-container col-12">
                            <p>If you're interested in joining the PROENERGY community:</p>
                        </div>
                    </div>
                    <div class="contact-link-container ps-3">
                        <a class="contact-link" href="/careers" target="">Visit the Careers page</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="section_contact_all-text" class="contact-4">
        <style>
            .contact-4 .contact_at-link {
                color: #53565A;
                font-family: "Eurostile-Bold";
                font-size: 18px;
                line-height: 28px;
                letter-spacing: 0.18px;
            }
            .contact-4 .contact_paragraph-container p {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                line-height: 25px;
                color: #53565A;
                color: rgb(83, 86, 90);
                margin-top: 1.25em;
                padding-right: 0;
            }
            .contact-4 .contact-link {
                font-family: "myriad-pro", sans-serif;
                font-size: 18px;
                font-style: italic;
                font-style: italic;
                line-height: 25px;
                color: rgba(163, 168, 170, 0.75);
                text-decoration: none;
            }
            .contact-4 .contact-link::after {
                content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow.png');
                display: inline-block;
                width: 40px;
                height: 0;
                margin-left: 1em;
            }
            .contact-4 .contact-top-text-container::before {
                background: #53565A;
                content: '';
                display: inline-block;
                height: 1px;
                left: 0;
                position: relative;
                top: 50%;
                width: 45px;
                vertical-align: top;
                z-index: 1;
            }
            .contact-4 .contact-top-text-container::after {
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
                color: #53565A
            }
        </style>
        <div class="container-fluid p-0">
            <div class="row g-0">
            <div class="contact-top-text-container pt-5" data-content="Employment verification"></div>
                <div class="contact_wrapper col-12 px-5 pt-3 pb-4">
                    <div class="contact_container col-12 pb-4 ps-3">
                        <div class="contact_paragraph-container col-12">
                            <p>If you need to verify employment for current or former employees, please call (800) 367-5690 or<br/>visit <a href="https://theworknumber.com" target="_blank">here</a> and reference Employer Code 880410</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();