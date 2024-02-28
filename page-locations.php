<?php
/**
 * Template Name: Page Locations
 * Description: Page template with no Sidebar.
 *
 */

get_header();

the_post();
?>
<div id="post-<?php the_ID(); ?>" <?php post_class( 'content' ); ?>>

</div><!-- /#post-<?php the_ID(); ?> -->
<?php
get_footer();