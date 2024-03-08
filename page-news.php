<?php

/**
 * Template Name: Page News
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
				font-family: "MyriadPro-Regular";
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
						<h2 class="news_all-text-header">News</h2>
						<div class="news_all-text-paragraph-container col-12">
							<p>The PROENERGY News Archive includes all of our most recent announcements and press releases.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="section_news_timeline" style="background-color: rgba(163, 168, 170, 0.2);" ;>
		<style>
			.newstimeline ul {
				height: 29px;
				width: 100%;
				margin: 0;
				clear: both;
				text-align: justify;
				white-space: normal;
				z-index: 2;
			}
			.newstimeline ul::before {
				height: 1px;
				content: '';
				display: block;
				position: absolute;
				bottom: 6px;
				left: 14px;
				right: 14px;
				background: #a3a8aa;
			}
			.newstimeline ul li {
				cursor: pointer;
				display: inline-block;
				width: auto;
				position: relative;
				font-size: 14px;
				line-height: 14px;
				text-align: center;
				padding-bottom: 15px;
			}
			.newstimeline ul li.active-year,
			.newstimeline ul li:hover{
				color: #862633;
			}
			.newstimeline ul li.active-year::after,
			.newstimeline ul li:hover::after {
				border-color: #862633;
			}
			.newstimeline ul li::after {
				height: 12px;
				width: 12px;
				content: '';
				cursor: pointer;
				display: block;
				position: absolute;
				bottom: 0;
				left: 0;
				right: 0;
				margin: 0 auto;
				border: 1px solid #a3a8aa;
				border-radius: 50%;
				background: #fff;
			}
			.post-date {
				font-family : "Eurostile-Bold";
				font-size : 14px;
				line-height : 36px;
				letter-spacing : 7px;
				text-transform : uppercase;
				color : rgba(163, 168, 170, 0.75);
			}
			.card {
				min-height: 40rem;
			}
			.card-title {
				font-family : "Eurostile-Bold";
				font-size : 23px;
				line-height : 27px;
				letter-spacing : 0.23px;
				color : #53565A;
				color : rgb(83, 86, 90);
				min-height: 6.8rem;
			}
			.card-text {
				font-family : "MyriadPro-Regular";
				font-size : 18px;
				line-height : 22px;
				color : #53565A;
				color : rgb(83, 86, 90);
			}
			.card-footer a::after {
    			content: url('<?php echo get_stylesheet_directory_uri(); ?>/images/right-arrow-grey.svg');
				width: 40px;
				height: 0;
				margin-left: 1em;
			}
			.card-footer a {
				font-family : "MyriadPro-Italic";
				font-size : 18px;
				line-height : 25px;
				color : #A3A8AA;
			}
		</style>
		<div class="container-fluid p-0">
			<div class="row g-0">	
				<div class="newstimeline p-5">
					<ul class="d-flex flex-row justify-content-between position-relative list-unstyled">
						<li id="year-2023" class="active-year position-relative">2023</li>
						<li id="year-2022" class="">2022</li>
						<li id="year-2021">2021</li>
						<li id="year-2020">2020</li>
						<li id="year-2019">2019</li>
						<li id="year-2018">2018</li>
						<li id="year-2017">2017</li>
						<li id="year-2016">2016</li>
						<li id="year-2015">2015</li>
						<li id="year-2014">2014</li>
						<li id="year-2013">2013</li>
						<li id="year-2012">2012</li>
						<li id="year-2011">2011</li>
						<li id="year-2010">2010</li>
						<li id="year-2009">2009</li>
						<li id="year-2008">2008</li>
						<li id="year-2007">2007</li>
					</ul>
				</div>
			</div>
		</div>
		<script>
			const years = document.querySelectorAll('.newstimeline ul li');
			years.forEach(year => {
				year.addEventListener('click', () => {
					years.forEach(y => {
						y.classList.remove('active-year');
					});
					year.classList.add('active-year');
				});
			});
		</script>
	</section>

	<section id="section_archive_posts">
		<div class="container-fluid p-0">
			<div class="row g-0 pt-5 align-items-stretch">
				<?php
				// @TODO: Add the loop here
				?>
				<div class="col-6 p-5">
					<div class="card border-0 rounded-0">
						<img src="<?php echo esc_url(wp_get_attachment_url($featured_image_id)); ?>" class="card-img-none" alt="">
						<div class="card-body">
							<h6 class="card-subtitle my-3 post-date">November 21, 2023</h6>
							<h5 class="card-title mb-2">PROENERGY Unveils New<br/>48-MW PE6000 Turbine</h5>
							<p class="card-text mb-4">PROENERGY unveiled a new, 48-MW aeroderivative<br/>turbine that provides firm power generation for more<br/>than 40,000* American homes.</p>
							<div class="card-footer bg-transparent border-0 p-0">
								<a href="#" class="news_at-link card-link mb-4">Continue Reading</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="card border-0 rounded-0">
						<img src="<?php echo esc_url(wp_get_attachment_url($featured_image_id)); ?>" class="card-img-none" alt="">
						<div class="card-body">
							<h6 class="card-subtitle my-3 post-date">OCTOBER 12, 2023</h6>
							<h5 class="card-title mb-2">PROENERGY Awarded Total Care Service<br/>Agreement for Sharm El Sheikh and Port<br/>Said Power Plants in Egypt</h5>
							<p class="card-text mb-4">Egyptian Electricity Holding Company (EEHC) has<br/>awarded PROENERGY a total care service agreement<br/>(TCSA) for eight LM6000 gas turbines.</p>
							<div class="card-footer bg-transparent border-0 p-0">
								<a href="#" class="news_at-link card-link mb-4">Continue Reading</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="card border-0 rounded-0">
						<img src="<?php echo esc_url(wp_get_attachment_url($featured_image_id)); ?>" class="card-img-none" alt="">
						<div class="card-body">
							<h6 class="card-subtitle my-3 post-date">MAY 01, 2023</h6>
							<h5 class="card-title mb-2">WattBridge Now World&rquo;s Largest LM6000<br/>Fleet Owner as the 288-MW Brotman<br/>Facility Begins Commercial Operations</h5>
							<p class="card-text mb-4">PROENERGY Services announced today<br/>commissioning of the WattBridge Brotman<br/>Generating Station in Brazoria County, Texas.</p>
							<div class="card-footer bg-transparent border-0 p-0">
								<a href="#" class="news_at-link card-link mb-4">Continue Reading</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-6 p-5">
					<div class="card border-0 rounded-0">
						<img src="<?php echo esc_url(wp_get_attachment_url($featured_image_id)); ?>" class="card-img-none" alt="">
						<div class="card-body">
							<h6 class="card-subtitle my-3 post-date">FEBRUARY 08, 2023</h6>
							<h5 class="card-title mb-2">PROENERGY Commissions the 288-MW<br/>Mark One Facility, the Fourth WattBridge<br/>Generating Station in Texas</h5>
							<p class="card-text mb-4">PROENERGY Services announced today <br/>commissioning of the WattBridge Brotman Generating<br/>Station in Brazoria County, Texas.</p>
							<div class="card-footer bg-transparent border-0 p-0">
								<a href="#" class="news_at-link card-link mb-4">Continue Reading</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();
