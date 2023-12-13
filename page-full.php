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
	<h1 class="entry-title"><?php the_title(); ?></h1>
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
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'my-theme' ) . '">',
				'after'    => '</nav>',
				'pagelink' => esc_html__( 'Page %', 'my-theme' ),
			)
		);
		edit_post_link(
			esc_attr__( 'Edit', 'my-theme' ),
			'<span class="edit-link">',
			'</span>'
		);
	?>
</div><!-- /#post-<?php the_ID(); ?> -->
<?php
	// If comments are open or we have at least one comment, load up the comment template.
	if ( comments_open() || get_comments_number() ) {
		comments_template();
	}

get_footer();
