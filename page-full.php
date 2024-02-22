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
				if( get_row_layout() === 'coming_soon' ) :
					include 'modules/coming-soon/coming-soon.php';	
				endif;
			endwhile;
		endif; // end have_rows( 'proenergy_aboutus_modules' )
	// end !front_page()
	endif; 
	/*** end !front_page() ***/ 
	if ( have_rows( 'pe_home_flexible_content' ) ) :
		while( have_rows( 'pe_home_flexible_content' ) ) : the_row();
			if ( get_row_layout() == 'hero' ) :
				include 'modules/hero/hero.php';
			endif;
			if( get_row_layout() == 'all_text' ) :
				include 'modules/all-text/all-text.php';
			endif;
			if( get_row_layout() === 'bulleted_image_right' ) :
				include 'modules/bullet-right/bulleted-image-right.php';
			endif;
			if( get_row_layout() === 'bulleted_image_left' ) :
				include 'modules/bullet-left/bulleted-image-left.php';	
			endif;
			if( get_row_layout() === 'header_band' ) :
				include 'modules/header-band/header-band.php';	
			endif;
			if( get_row_layout() === 'tabbed_bulleted_image_left' ) :
				include 'modules/tabbed-bil/tabbed-bil.php';	
			endif;
			
		endwhile;
	endif;
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();
