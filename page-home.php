<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Вспоминая_будущее
 */

get_header();
?>


		<a
			class="btn is-btn header-wish"
			data-toggle="modal"
			data-target="#makeWish"
		>
			<img src="<? echo get_template_directory_uri() . '/assets/img/header_wish_icon.svg';?>" alt="Осуществить желание">
			Осуществить желание
		</a>
		<button class="btn is-btn header-next">
			<img src="<? echo get_template_directory_uri() . '/assets/img/header_next_icon.svg';?>" alt="Листать вниз">
		</button>
	</div>
</header>

<main class="is-main">

	<section class="is-section contribution container mt-5">
		<div class="row mb-5">
			<div class="col-md-12">
				<h2>
					<? the_field('contribution_title'); ?>
				</h2>
			</div>
		</div>
		<div class="row content">
			<div class="offset-lg-1 col-lg-10">
				<p>
					<? the_field('contribution_description'); ?>
				</p>
				<p class="bold">
					<? the_field('contribution_subtitle'); ?>
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 d-flex justify-content-center mt-3 logos">
				<?php while ( have_rows('contribution_logos') ) : the_row(); ?>
					<img src="<? the_sub_field('logo'); ?>" alt="<? the_sub_field('title'); ?>" class="img-fluid ml-4 mr-4">
				<?php endwhile; ?>
			</div>
		</div>
	</section>

<?php
get_footer();
