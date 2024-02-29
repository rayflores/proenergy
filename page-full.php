<?php
/**
 * Template Name: Page (Full width)
 * Description: Page template full width.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>
	<?php
	if ( ! is_front_page() ) : 
		// If not front page, display breadcrumbs
		if ( have_rows( 'proenergy_powerflx_modules' ) ) :
			$run_once = false;
			while( have_rows( 'proenergy_powerflx_modules' ) ) : the_row();
				if( get_row_layout() === 'powerflx_header' ) :
					include 'modules/powerflx/powerflx-header/powerflx-header.php';	
				endif;
				if( get_row_layout() === 'powerflx_header_small' ) :
					include 'modules/powerflx/powerflx-header/powerflx-header-small.php';	
				endif;
				if ( !$run_once ) :
				?>
				<section id="section_breadcrumbs" class="pt-5 ps-5">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 ">
								<?php 
								get_the_breadcrumbs(); 
								$run_once = true; ?>
							</div>
						</div>
					</div>
				</section>
				<?php
				endif;
				if( get_row_layout() === 'powerflx_all_text' ) :
					include 'modules/powerflx/powerflx-all-text/powerflx-all-text.php';	
				endif;
				if( get_row_layout() === 'powerflx_bir' ) :
					include 'modules/powerflx/powerflx-bir/powerflx-bir.php';	
				endif;
				if( get_row_layout() === 'powerflx_bil' ) :
					include 'modules/powerflx/powerflx-bil/powerflx-bil.php';	
				endif;
				if( get_row_layout() === 'powerflx_three_bullets' ) :
					include 'modules/powerflx/powerflx-three-bullets/powerflx-three-bullets.php';	
				endif;
				if( get_row_layout() === 'powerflx_text_with_table' ) :
					include 'modules/powerflx/powerflx-text-table/powerflx-text-table.php';	
				endif;
				if( get_row_layout() === 'coming_soon' ) :
					include 'modules/coming-soon/coming-soon.php';	
				endif;
				if( get_row_layout() === 'powerflx_text_unordered_list' ) :
					include 'modules/powerflx/powerflx-ulist/powerflx-ulist.php';	
				endif;
				if( get_row_layout() === 'powerflx_text_right_slant_image' ) :
					include 'modules/powerflx/powerflx-slant-right/powerflx-slant-right.php';	
				endif;
				if( get_row_layout() === 'powerflx_just_text' ) :
					include 'modules/powerflx/powerflx-just-text/powerflx-just-text.php';	
				endif;
				if( get_row_layout() === 'powerflx_blank_right_bullet' ) :
					include 'modules/powerflx/powerflx-brb/powerflx-blank-right-bullet.php';	
				endif;
			endwhile;
		endif; // end have_rows( 'proenergy_powerflx_modules' )
		if ( have_rows( 'proenergy_aboutus_modules' ) ) :
			$run_once = false;
			while( have_rows( 'proenergy_aboutus_modules' ) ) : the_row();
				if( get_row_layout() === 'aboutus_header_lg' ) :
					include 'modules/about-us/about-us-header/aboutus-header-lg.php';	
				endif;
				if( get_row_layout() === 'aboutus_header_small' ) :
					include 'modules/about-us/about-us-header/aboutus-header-small.php';	
				endif;
				if ( !$run_once ) :
				?>
				<section id="section_breadcrumbs" class="pt-5 ps-5">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 ">
								<?php 
								get_the_breadcrumbs(); 
								$run_once = true; ?>
							</div>
						</div>
					</div>
				</section>
				<?php
				endif;
				if( get_row_layout() === 'aboutus_all_text' ) :
					include 'modules/about-us/about-us-all-text/about-us-all-text.php';	
				endif;
				if( get_row_layout() === 'aboutus_quote' ) :
					include 'modules/about-us/about-us-quote/about-us-quote.php';	
				endif;
				if( get_row_layout() === 'aboutus_bil' ) :
					include 'modules/about-us/about-us-bil/about-us-bil.php';	
				endif;
				if( get_row_layout() === 'aboutus_bir' ) :
					include 'modules/about-us/about-us-bir/about-us-bir.php';	
				endif;
				if( get_row_layout() === 'aboutus_three_bullets' ) :
					include 'modules/about-us/about-us-three-bullets/about-us-three-bullets.php';	
				endif;
				if( get_row_layout() === 'aboutus_just_text' ) :
					include 'modules/about-us/about-us-just-text/about-us-just-text.php';	
				endif;
				if( get_row_layout() === 'aboutus_people' ) :
					include 'modules/about-us/about-us-people/about-us-people-person.php';	
				endif;
				if( get_row_layout() === 'aboutus_bir_plain' ) :
					include 'modules/about-us/about-us-bir/about-us-bir-plain.php';	
				endif;
				if( get_row_layout() === 'aboutus_text_location_map' ) :
					include 'modules/about-us/about-us-text-map/about-us-text-map.php';	
				endif;
				if( get_row_layout() === 'about_us_by_the_numbers' ) :
					include 'modules/about-us/about-us-by-numbers/about-us-by-numbers.php';	
				endif;
				if( get_row_layout() === 'about_us_conference_itinerary' ) :
					include 'modules/about-us/about-us-conf-itinerary/about-us-conf-itinerary.php';	
				endif;
				if( get_row_layout() === 'about_us_conference_session' ) :
					include 'modules/about-us/about-us-conf-session/about-us-conf-session.php';	
				endif;
				if( get_row_layout() === 'about_us_conference_tracks' ) :
					include 'modules/about-us/about-us-conf-tracks/about-us-conf-tracks.php';	
				endif;
				if( get_row_layout() === 'coming_soon' ) :
					include 'modules/coming-soon/coming-soon.php';	
				endif;
				if( get_row_layout() === 'about_us_registration_form' ) :
					include 'modules/about-us/about-us-reg-form/about-us-reg-form.php';	
				endif;
			endwhile;
		endif; // end have_rows( 'proenergy_aboutus_modules' )
		if ( have_rows( 'proenergy_aeroadvantage_modules' ) ) :
			$run_once = false;
			while( have_rows( 'proenergy_aeroadvantage_modules' ) ) : the_row();
				if( get_row_layout() === 'aeroadvantage_header_lg' ) :
					include 'modules/aero-advantage/aa-header/aa-header-lg.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_header_small' ) :
					include 'modules/aero-advantage/aa-header/aa-header-small.php';	
				endif;
				if ( !$run_once ) :
				?>
				<section id="section_breadcrumbs" class="pt-5 ps-5">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 ">
								<?php 
								get_the_breadcrumbs(); 
								$run_once = true; ?>
							</div>
						</div>
					</div>
				</section>
				<?php
				endif;
				if( get_row_layout() === 'aeroadvantage_all_text' ) :
					include 'modules/aero-advantage/aa-all-text/aa-all-text.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_bir' ) :
					include 'modules/aero-advantage/aa-bir/aa-bir.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_bil' ) :
					include 'modules/aero-advantage/aa-bil/aa-bil.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_bir_plain' ) :
					include 'modules/aero-advantage/aa-bir/aa-bir-plain.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_three_bullets' ) :
					include 'modules/aero-advantage/aa-three-bullets/aa-three-bullets.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_just_text' ) :
					include 'modules/aero-advantage/aa-just-text/aa-just-text.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_just_text_list' ) :
					include 'modules/aero-advantage/aa-just-text/aa-just-text-list.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_top_benefits' ) :
					include 'modules/aero-advantage/aa-top-benefits/aa-top-benefits.php';	
				endif;
				if( get_row_layout() === 'aeroadvantage_case_study' ) :
					include 'modules/aero-advantage/aa-case-study/aa-case-study.php';	
				endif;
			endwhile;
		endif; // end have_rows( 'proenergy_aeroadvantage_modules' )
		if ( have_rows( 'proenergy_learningcenter_modules' ) ) :
			$run_once = false;
			while( have_rows( 'proenergy_learningcenter_modules' ) ) : the_row();
				if( get_row_layout() === 'lc_header_lg' ) :
					include 'modules/learningcenter/lc-header/lc-header-lg.php';	
				endif;
				if( get_row_layout() === 'lc_header_small' ) :
					include 'modules/learningcenter/lc-header/lc-header-small.php';	
				endif;
				if ( !$run_once ) :
				?>
				<section id="section_breadcrumbs" class="pt-5 ps-5">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 ">
								<?php 
								get_the_breadcrumbs(); 
								$run_once = true; ?>
							</div>
						</div>
					</div>
				</section>
				<?php
				endif;
				if( get_row_layout() === 'lc_all_text' ) :
					include 'modules/learningcenter/lc-all-text/lc-all-text.php';	
				endif;
				if( get_row_layout() === 'lc_bir' ) :
					include 'modules/learningcenter/lc-bir/lc-bir.php';	
				endif;
				if( get_row_layout() === 'lc_bil' ) :
					include 'modules/learningcenter/lc-bil/lc-bil.php';	
				endif;
				if( get_row_layout() === 'lc_just_text' ) :
					include 'modules/learningcenter/lc-just-text/lc-just-text.php';	
				endif;
				if( get_row_layout() === 'lc_faq_module' ) :
					include 'modules/learningcenter/lc-faqs/lc-faqs.php';	
				endif;
			endwhile;
		endif; // end have_rows( 'proenergy_learningcenter_modules' )
		if ( have_rows( 'proenergy_sustainability_modules' ) ) :
			$run_once = false;
			while( have_rows( 'proenergy_sustainability_modules' ) ) : the_row();
				if( get_row_layout() === 'sus_header_lg' ) :
					include 'modules/sustainability/sus-header/sus-header-lg.php';	
				endif;
				if( get_row_layout() === 'sus_header_small' ) :
					include 'modules/sustainability/sus-header/sus-header-small.php';	
				endif;
				if ( !$run_once ) :
				?>
				<section id="section_breadcrumbs" class="pt-5 ps-5">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 ">
								<?php 
								get_the_breadcrumbs(); 
								$run_once = true; ?>
							</div>
						</div>
					</div>
				</section>
				<?php
				endif;
				if( get_row_layout() === 'sus_all_text' ) :
					include 'modules/sustainability/sus-all-text/sus-all-text.php';	
				endif;
				if( get_row_layout() === 'sus_bir' ) :
					include 'modules/sustainability/sus-bir/sus-bir.php';	
				endif;
				if( get_row_layout() === 'sus_bil' ) :
					include 'modules/sustainability/sus-bil/sus-bil.php';	
				endif;
				if( get_row_layout() === 'sus_just_text' ) :
					include 'modules/sustainability/sus-just-text/sus-just-text.php';	
				endif;
				if( get_row_layout() === 'sus_three_bullets' ) :
					include 'modules/sustainability/sus-three-bullets/sus-three-bullets.php';	
				endif;
			endwhile;
		endif; // end have_rows( 'proenergy_learningcenter_modules' )
	// end !front_page()
	endif; 
	/*** end !front_page() ***/ 
	if ( have_rows( 'pe_home_flexible_content' ) ) :
		while( have_rows( 'pe_home_flexible_content' ) ) : the_row();
			if ( get_row_layout() == 'hero' ) :
				include 'modules/home/hero/hero.php';
			endif;
			if( get_row_layout() == 'all_text' ) :
				include 'modules/home/all-text/all-text.php';
			endif;
			if( get_row_layout() === 'bulleted_image_right' ) :
				include 'modules/home/bullet-right/bulleted-image-right.php';
			endif;
			if( get_row_layout() === 'bulleted_image_left' ) :
				include 'modules/home/bullet-left/bulleted-image-left.php';	
			endif;
			if( get_row_layout() === 'header_band' ) :
				include 'modules/home/header-band/header-band.php';	
			endif;
			if( get_row_layout() === 'tabbed_bulleted_image_left' ) :
				include 'modules/home/tabbed-bil/tabbed-bil.php';	
			endif;
			
		endwhile;
	endif;
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();