<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?php wp_head(); ?>
</head>

<?php
	// $navbar_scheme   = get_theme_mod( 'navbar_scheme', 'navbar-light bg-light' ); // Get custom meta-value.
	$navbar_position = get_theme_mod( 'navbar_position', 'static' ); // Get custom meta-value.

	$search_enabled  = get_theme_mod( 'search_enabled', '1' ); // Get custom meta-value.
?>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<a href="#main" class="visually-hidden-focusable"><?php esc_html_e( 'Skip to main content', 'my-theme' ); ?></a>

<div id="wrapper">
	<header class="bg-light">
		<div class="menu-integration fixed-top">
			<div class="container-fluid">
				
				<a class="navbar-brand col-12 d-lg-none" href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					<?php
						$header_logo = get_theme_mod( 'header_logo' ); // Get custom meta-value.

						if ( ! empty( $header_logo ) ) :
					?>
						<img src="<?php echo esc_url( $header_logo ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
					<?php
						else :
							echo esc_attr( get_bloginfo( 'name', 'display' ) );
						endif;
					?>
				</a>

				<?php ubermenu( 'main' , array( 'theme_location' => 'main-menu' ) ); ?>
			</div>
		</div>

		<nav class="navbar second-navbar navbar-expand-md container-fluid navbar-light justify-content-end d-none d-lg-block">
			<div class="container position-relative h-100 pe-0 justify-content-end">
				<div class="col-6 top-small-menu-nav p-0">
						<?php
							// Loading WordPress Custom Menu (theme_location).
							wp_nav_menu(
								array(
									'menu_class'     => 'navbar-nav top-menu justify-content-end',
									'container'      => '',
									'fallback_cb'    => 'WP_Bootstrap_Navwalker::fallback',
									'walker'         => new WP_Bootstrap_Navwalker(),
									'theme_location' => 'top-menu',
								)
							);
						?>
					</div>
			</div>
		</nav>
	</header>
	<main id="main"<?php if ( isset( $navbar_position ) && 'fixed_top' === $navbar_position ) : echo ' style="padding-top: 100px;"'; elseif ( isset( $navbar_position ) && 'fixed_bottom' === $navbar_position ) : echo ' style="padding-bottom: 100px;"'; endif; ?>>
		
		<?php
			// If Single or Archive (Category, Tag, Author or a Date based page).
			if ( is_single() || is_archive() ) :
		?>
			<div class="row">
				<div class="col-md-8 col-sm-12">
		<?php
			endif;
		?>
