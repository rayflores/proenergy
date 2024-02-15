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
					include 'modules/powerflx-header/powerflx-header.php';	
				endif;
				if ( !$run_once ) :
				?>
				<section id="section_breadcrumbs">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12">
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
					include 'modules/powerflx-all-text/powerflx-all-text.php';	
				endif;
				if( get_row_layout() === 'powerflx_bir' ) :
					include 'modules/powerflx-bir/powerflx-bir.php';	
				endif;
				if( get_row_layout() === 'powerflx_bil' ) :
					include 'modules/powerflx-bil/powerflx-bil.php';	
				endif;
				
			endwhile;
		endif;
	endif;
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
