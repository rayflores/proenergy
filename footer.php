			<?php
				// If Single or Archive (Category, Tag, Author or a Date based page).
				if ( is_single() || is_archive() ) :
			?>
					</div><!-- /.col -->

					<?php
						get_sidebar();
					?>

				</div><!-- /.row -->
			<?php
				endif;
			?>
		</main><!-- /#main -->
		<?php
		$post = get_post( get_the_ID() );
		$mt = 'mt-5';
		if ( in_array( 
			$post->post_title, 
				[
					'Parts Inventory', 
					'Fuel Nozzles',
					'Parts Manufacturing',
					'Water Spray Injection Nozzles',
					'Technical Services',
					'Remote Monitoring & Diagnostics'
				] 
				) 
			)
		{
			$mt = 'mt-0';
		}
		?>
		<footer id="footer" class="<?php echo $mt; ?>">
			<div class="container-fluid px-5">
				<div class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 justify-content-md-center g-0">
				<?php if ( is_active_sidebar( 'third_widget_area' ) ) : ?>
						<div class="col-md-4 d-flex align-items-center widget1">
							<?php
								dynamic_sidebar( 'third_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
								<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge bg-secondary"><?php esc_html_e( 'Edit', 'my-theme' ); ?></a></span><!-- Show Edit Widget link -->
							<?php
								endif;
							?>
						</div>
					<?php
						endif;
					?>
					<div class="col-md-4 d-flex align-items-center widget2"></div>
					<?php
						if ( has_nav_menu( 'footer-menu' ) ) : // See function register_nav_menus() in functions.php
							/*
								Loading WordPress Custom Menu (theme_location) ... remove <div> <ul> containers and show only <li> items!!!
								Menu name taken from functions.php!!! ... register_nav_menu( 'footer-menu', 'Footer Menu' );
								!!! IMPORTANT: After adding all pages to the menu, don't forget to assign this menu to the Footer menu of "Theme locations" /wp-admin/nav-menus.php (on left side) ... Otherwise the themes will not know, which menu to use!!!
							*/
							wp_nav_menu(
								array(
									'container'       => 'nav',
									'container_class' => 'col-md-6',
									//'fallback_cb'     => 'WP_Bootstrap4_Navwalker_Footer::fallback',
									'walker'          => new WP_Bootstrap4_Navwalker_Footer(),
									'theme_location'  => 'footer-menu',
									'items_wrap'      => '<ul class="menu nav justify-content-end">%3$s</ul>',
								)
							);
						endif;

						if ( is_active_sidebar( 'right_widget_area' ) ) :
					?>
						<div class="col-md-4 widget3">
							<?php
								dynamic_sidebar( 'right_widget_area' );

								if ( current_user_can( 'manage_options' ) ) :
							?>
								<span class="edit-link"><a href="<?php echo esc_url( admin_url( 'widgets.php' ) ); ?>" class="badge bg-secondary"><?php esc_html_e( 'Edit', 'my-theme' ); ?></a></span><!-- Show Edit Widget link -->
							<?php
								endif;
							?>
						</div>
					<?php
						endif;
					?>
				</div><!-- /.row -->
			</div><!-- /.container -->
		</footer><!-- /#footer -->
	</div><!-- /#wrapper -->
	<?php
		wp_footer();
	?>
</body>
</html>
