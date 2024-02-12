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
	if ( have_rows( 'pe_flexible_content' ) ) :
		while( have_rows( 'pe_flexible_content' ) ) : the_row();
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
