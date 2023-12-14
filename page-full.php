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
			elseif( get_row_layout() == 'all_text' ) :
				?>
				<div>All Text Block render here</div>
				<?php
			endif;
		endwhile;
	endif;
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php

get_footer();
