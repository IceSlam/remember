<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Вспоминая_будущее
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<?php wp_head(); ?>
	</head>

	<body id="body" <?php body_class(); ?>>

		<?php wp_body_open(); ?>
		<header class="is-header">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light bg-light is-navbar">
					<div class="container-fluid">
						<a class="navbar-brand" href="<? echo get_home_url(); ?>">
							<img
								src="<? the_field('site_logo_desktop', 'option'); ?>"
								height="30"
								alt="Вспоминая будущее"
								loading="lazy"
							/>
						</a>
						<button
							id="navbar-toggler"
							class="navbar-toggler"
							type="button"
							onclick="showMenu()"
						>
							<i id="toggle-icon" class="fas fa-bars"></i>
						</button>
						<?
		              wp_nav_menu( array(
		                  'theme_location'  => '',
		                  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
		                  'container'       => 'div',
		                  'container_class' => 'collapse navbar-collapse',
		                  'container_id'    => 'remember-menu',
		                  'menu_class'      => 'navbar-nav is-menu mb-2 mb-lg-0',
		                  'menu_id'         => 'rememberMenuList',
		                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		                  'walker'          => new WP_Bootstrap_Navwalker(),
		              ) );
		            ?>

								<form class="d-flex input-group w-auto search-wish">
									<div class="dropdown">
										<button
											class="btn is-btn search"
											type="button"
											id="dropdownMenuButton"
											data-toggle="dropdown"
											aria-expanded="false"
										>
											<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 4.691 4.691 2 8 2C11.309 2 14 4.691 14 8C14 11.309 11.309 14 8 14C4.691 14 2 11.309 2 8ZM17.707 16.293L14.312 12.897C15.365 11.543 16 9.846 16 8C16 3.589 12.411 0 8 0C3.589 0 0 3.589 0 8C0 12.411 3.589 16 8 16C9.846 16 11.543 15.365 12.897 14.312L16.293 17.707C16.488 17.902 16.744 18 17 18C17.256 18 17.512 17.902 17.707 17.707C18.098 17.316 18.098 16.684 17.707 16.293Z" fill="#70C8D3"/>
											</svg>
										</button>
									  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									    <?php get_search_form(); ?>
									  </ul>
									</div>

									<a
										class="btn is-btn wish"
										href="<? echo get_category_link(3); ?>"
									>
										Осуществить желание
									</a>
								</form>
					</div>
				</nav>
				<nav id="navbar" class="navbar d-lg-none navbar-light bg-light is-navbar-mobile">
					<div class="wrapper">
						<button
							id="navbar-toggler"
							class="navbar-toggler"
							type="button"
							onclick="closeMenu()"
						>
							<i id="toggle-icon" class="fas fa-times"></i>
						</button>
						<a class="navbar-brand" href="<? echo get_home_url(); ?>">
							<img
								src="<? the_field('site_logo_mobile', 'option'); ?>"
								alt="Вспоминая будущее"
								loading="lazy"
							/>
						</a>
						<?
		              wp_nav_menu( array(
		                  'theme_location'  => '',
		                  'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
		                  'container'       => 'div',
		                  'container_class' => '',
		                  'container_id'    => '',
		                  'menu_class'      => 'navbar-nav is-menu mr-auto mb-2 mb-lg-0 mt-0',
		                  'menu_id'         => 'rememberMobileMenuList',
		                  'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		                  'walker'          => new WP_Bootstrap_Navwalker(),
		              ) );
		            ?>

								<form class="d-flex input-group w-auto">
									<button class="btn is-btn search" type="button" >
										<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" clip-rule="evenodd" d="M2 8C2 4.691 4.691 2 8 2C11.309 2 14 4.691 14 8C14 11.309 11.309 14 8 14C4.691 14 2 11.309 2 8ZM17.707 16.293L14.312 12.897C15.365 11.543 16 9.846 16 8C16 3.589 12.411 0 8 0C3.589 0 0 3.589 0 8C0 12.411 3.589 16 8 16C9.846 16 11.543 15.365 12.897 14.312L16.293 17.707C16.488 17.902 16.744 18 17 18C17.256 18 17.512 17.902 17.707 17.707C18.098 17.316 18.098 16.684 17.707 16.293Z" fill="#70C8D3"/>
										</svg>
									</button>
									<a
										class="btn is-btn wish mt-3"
										href="<? echo get_category_link(3); ?>"
									>
										Осуществить желание
									</a>
								</form>
					</div>
				</nav>
