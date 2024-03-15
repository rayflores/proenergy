<?php
/**
 * Template Name: Page Careers
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

	<section id="section_careers_all-text">
		<style>
			.careers_all-text-container h2 {
				font-family: "Eurostile-Bold";
				font-size: 35px;
				line-height: 36px;
				letter-spacing: 0.35px;
				color: #53565A;
				color: rgb(83, 86, 90);
			}

			.careers_at-link {
				color: #53565A;
				font-family: "Eurostile-Bold";
				font-size: 18px;
				line-height: 28px;
				letter-spacing: 0.18px;
			}

			.careers_all-text-paragraph-container p {
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
				<div class="careers_all-text-wrapper col-12 px-5 pt-3 pb-4">
					<div class="careers_all-text-container col-12 pb-5 ps-3">
						<h2 class="careers_all-text-header">Work With Us</h2>
						<div class="careers_all-text-paragraph-container col-12">
							<p>As a member of the PROENERGY team, you will be part of one of the industry's most respected companies, recognized for<br/>the quality of our work and expertise of our people. We strive to deliver excellence to our customers and make a difference<br/>in our local and global community. We build and nurture relationships with other members of our PROENERGY family, our<br/>suppliers and our customers. We work to grow professionally and personally in an environment of mutual support and<br/>challenge. At PROENERGY, you will embrace the kind of changes that makes anything and everything seem possible, and<br/>we will reward those that make it happen. Our passion is contagious.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <section id="section_job_board_iframe">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="content">
                    <script id="gnewtonjs" type="text/javascript" src="//newton.newtonsoftware.com/career/iframe.action?clientId=8a7883d06f38cb41016f7c0cf6bb1fd6"></script>
                    <iframe allowtransparency="true" src="https://recruitingbypaycor.com/career/CareerHome.action?clientId=8a7883d06f38cb41016f7c0cf6bb1fd6&parentUrl=https%3A%2F%2Fproenergyservices.com%2Fcareers%2F&gns=" id="gnewtonIframe" scrolling="no" frameborder="0" width="100%" height="1000" frameborder="0" style="overflow:hidden;height:2036px;"></iframe>
                </div>
            </div>
        </div>
    </section>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();