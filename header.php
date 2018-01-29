<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

		<a class="skip-link screen-reader-text sr-only" href="#content"><?php esc_html_e( 'Skip to content',
		'understrap' ); ?></a>

		<!-- The WordPress Header Menu goes here -->
		<nav class="navbar navbar-expand-md navbar-fixed-top bg-info" role="navigation"> 
		<!--navbar-default can work also just replace navbar-expand-md -->

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown2" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Navigation">
					<i class="fa fa-bars" aria-hidden="true"></i> <!-- use font-awesome instead - styling default failed -->
				</button>

		 	<?php wp_nav_menu(
					array(
						'theme_location'  => 'header-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown2',
						'menu_class'      => 'navbar-nav',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						
					)
				); ?>
		
        </nav>
		<nav class="navbar navbar-expand-md navbar-light bg-light">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
							
						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						
						<?php endif; ?>
						
					
					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Primary Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->

			<?php endif; ?>

		</nav><!-- .site-navigation -->
		<nav class="navbar navbar-expand-md bg-secondary">

		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown3" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Navigation">
					<i class="fa fa-bars" aria-hidden="true"></i> <!-- use font-awesome instead - styling default failed -->
				</button>

			<?php wp_nav_menu(
					array(
						'theme_location'  => 'extra-menu',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown3',
						'menu_class'      => 'navbar-nav',
						'walker'          => new understrap_WP_Bootstrap_Navwalker(),
						
					)
				); ?>
        </nav>
	</div><!-- .wrapper-navbar end -->
